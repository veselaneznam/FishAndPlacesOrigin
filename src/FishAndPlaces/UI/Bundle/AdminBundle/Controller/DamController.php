<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\Dam\ActivateDamCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DeactivateDamCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\UpdateDamCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\CreateNewDamCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\DamType;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DamController extends Controller
{
    /**
     * @param Request $request
     * @Route("/dam", name="dam_list")
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var DamQueryService $damQueryService
         */
        $damQueryService = $this->get('fish_and_places.dam_query_service');

        $damCollection = $damQueryService->getDamCollection();
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $damCollection = $damQueryService->getDamByName($searchForm->get('search')->getData());
        }

        return $this->render('@Admin/dam/list.html.twig', array(
            'damCollection' => $damCollection,
            'title' => "GreenObject List",
            'path' => $this->getParameter('images_upload'),
            'searchForm' => $searchForm->createView(),
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/dam/add", name="create_dam")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $damForm = $this->createForm(DamType::class,
            new DamRepresentation(),
            [
                'fishQueryService' => $this->get('fish_and_places.fish_query_service'),
            ]
        );
        $damForm->handleRequest($request);

        if ($damForm->isSubmitted() && $damForm->isValid()) {
            /**
             * @var DamRepresentation $damRepresentation
             */
            $file = $damForm->get('mainImage')->getData();
            $fileName = null;
            if(null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $damRepresentation = $damForm->getData();
            $this->createDam($damRepresentation, $fileName);

            return $this->redirectToRoute('dam_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $damForm->createView(),
            'title' => 'New GreenObject',
            'backUrl' => '/admin/dam'
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/dam/edit/{id}", name="edit_dam")
     * @return Response
     */
    public function editAction(Request $request, $id)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');

        $damRepresentation = $damQueryService->getDam($id);

        if(null !== $damRepresentation->getMainImage()->getImageSrc()) {
            $damRepresentation->setMainImage(
                new File($this->getParameter('images_upload').'/'.$damRepresentation->getMainImage()->getImageSrc()));
        }

        $damForm = $this->createForm(DamType::class,
            $damRepresentation,
            [
                'fishQueryService' => $this->get('fish_and_places.fish_query_service'),
            ]
        );

        $damForm->handleRequest($request);

        if ($damForm->isSubmitted() && $damForm->isValid()) {

            $file = $damForm->get('mainImage')->getData();
            $fileName = null;
            if (null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $damRepresentation = $damForm->getData();
            $this->updateDam($damRepresentation, $fileName);

            return $this->redirectToRoute('dam_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $damForm->createView(),
            'currentFishCollection' => $damRepresentation->getFishCollection(),
            'title' => 'Edit GreenObject',
            'backUrl' => '/admin/dam'
        ));
    }

    /**
     * @param Request $request
     *
     * @param int $id
     *
     * @return JsonResponse|RedirectResponse
     * @Route("/deactivate/{id}", name="deactivate_dam")
     * @Method({"GET", "DELETE"})
     *
     */
    public function deactivateAction(Request $request, $id)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');
        $dam = $damQueryService->getDam($id);

        $form = $this->createDeactivateForm($dam->getId());
        if ($request->getMethod() == 'DELETE') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $damService = $this->get('fish_and_places.dam_service');

                $damService->deactivate(new DeactivateDamCommand($dam, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Deactivated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry dam could not be deactivated!';
            }

            $this->addFlash('notice', 'Deactivated Successfully!');
            return $this->redirectToRoute('dam_list');
        }

        return $this->render('@Admin/dam/deactivate.html.twig', array(
            'deactivate_form' => $form->createView(),
            'dam' => $dam
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/activate/{id}", name="activate_dam")
     * @Method({"GET", "POST"})
     *
     * @return JsonResponse|RedirectResponse
     */
    public function activateAction(Request $request, $id)
    {
        $productQueryService = $this->get('fish_and_places.dam_query_service');
        $dam = $productQueryService->getDam($id);

        $form = $this->createActivateForm($dam->getId());
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $damService = $this->get('fish_and_places.dam_service');

                $damService->activate(new ActivateDamCommand($dam, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Activated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry GreenObject could not be activated!';
            }

            $this->addFlash('notice', 'Activate Successfully!');
            return $this->redirectToRoute('dam_list');
        }

        return $this->render('@Admin/dam/activate.html.twig', array(
            'activate_form' => $form->createView(),
            'dam' => $dam
        ));
    }

    /**
     * @param DamRepresentation $damRepresentation
     * @param string |null           $fileName
     */
    private function createDam(DamRepresentation $damRepresentation, $fileName = null)
    {
        $damQueryService = $this->get('fish_and_places.dam_service');

        $productCreate = new CreateNewDamCommand(
            $damRepresentation,
            $this->getUser(),
            $fileName
        );

        $damQueryService->create($productCreate);
    }

    /**
     * @param DamRepresentation $damRepresentation
     * @param string|null  $fileName
     */
    private function updateDam(DamRepresentation $damRepresentation, $fileName = null)
    {
        $damQueryService = $this->get('fish_and_places.dam_service');

        $productCreate = new UpdateDamCommand(
            $damRepresentation,
            $this->getUser(),
            $fileName
        );

        $damQueryService->update($productCreate);
    }

    /**
     * @param $productId
     *
     * @return Form
     */
    private function createDeactivateForm($productId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deactivate_dam', array('id' => $productId)))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @param $getId
     *
     * @return mixed
     */
    private function createActivateForm($getId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activate_dam', array('id' => $getId)))
            ->setMethod('POST')
            ->getForm();
    }
}
