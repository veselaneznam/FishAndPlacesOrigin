<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\Cabin\ActivateCabinCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Cabin\CabinQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\Cabin\CabinRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\Cabin\CreateNewCabinCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Cabin\DeactivateCabinCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Cabin\UpdateCabinCommand;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\CabinType;
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

class CabinController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/cabin", name="cabin_list")
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var CabinQueryService $cabinQueryService
         */
        $cabinQueryService = $this->get('fish_and_places.cabin_query_service');

        $cabinCollection = $cabinQueryService->getCollection();
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $cabinCollection = $cabinQueryService->findByName($searchForm->get('search')->getData());
        }

        return $this->render('@Admin/cabin/list.html.twig', array(
            'cabinCollection' => $cabinCollection,
            'title' => "GreenObject List",
            'path' => $this->getParameter('images_upload'),
            'searchForm' => $searchForm->createView(),
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/cabin/add", name="create_cabin")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $cabinForm = $this->createForm(CabinType::class);
        $cabinForm->handleRequest($request);

        if ($cabinForm->isSubmitted() && $cabinForm->isValid()) {
            /**
             * @var CabinRepresentation $cabinRepresentation
             */
            $file = $cabinForm->get('mainImage')->getData();
            $fileName = null;
            if(null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $cabinRepresentation = $cabinForm->getData();
            $this->createCabin($cabinRepresentation, $fileName);

            return $this->redirectToRoute('cabin_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $cabinForm->createView(),
            'title' => 'New Cabin',
            'backUrl' => '/admin/cabin'
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/cabin/edit/{id}", name="edit_cabin")
     * @return Response
     */
    public function editAction(Request $request, $id)
    {
        $cabinQueryService = $this->get('fish_and_places.cabin_query_service');

        $cabinRepresentation = $cabinQueryService->find($id);

        if(null !== $cabinRepresentation->getMainImage()->getImageSrc()) {
            $cabinRepresentation->setMainImage(
                new File($this->getParameter('images_upload').'/'.$cabinRepresentation->getMainImage()->getImageSrc()));
        }

        $cabinForm = $this->createForm(CabinType::class);

        $cabinForm->handleRequest($request);

        if ($cabinForm->isSubmitted() && $cabinForm->isValid()) {

            $file = $cabinForm->get('mainImage')->getData();
            $fileName = null;
            if (null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $cabinRepresentation = $cabinForm->getData();
            $this->updateCabin($cabinRepresentation, $fileName);

            return $this->redirectToRoute('cabin_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $cabinForm->createView(),
            'title' => 'Edit Cabin',
            'backUrl' => '/admin/cabin'
        ));
    }

    /**
     * @param Request $request
     *
     * @param int $id
     *
     * @return JsonResponse|RedirectResponse
     * @Route("/deactivate/{id}", name="deactivate_cabin")
     * @Method({"GET", "DELETE"})
     *
     */
    public function deactivateAction(Request $request, $id)
    {
        $cabinQueryService = $this->get('fish_and_places.cabin_query_service');
        $cabin = $cabinQueryService->find($id);

        $form = $this->createDeactivateForm($cabin->getId());
        if ($request->getMethod() == 'DELETE') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $cabinService = $this->get('fish_and_places.cabin_service');

                $cabinService->deactivate(new DeactivateCabinCommand($cabin, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Deactivated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry cabin could not be deactivated!';
            }

            $this->addFlash('notice', 'Deactivated Successfully!');
            return $this->redirectToRoute('cabin_list');
        }

        return $this->render('@Admin/cabin/deactivate.html.twig', array(
            'deactivate_form' => $form->createView(),
            'cabin' => $cabin
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/activate/{id}", name="activate_cabin")
     * @Method({"GET", "POST"})
     *
     * @return JsonResponse|RedirectResponse
     */
    public function activateAction(Request $request, $id)
    {
        $cabinQueryService = $this->get('fish_and_places.cabin_query_service');
        $cabin = $cabinQueryService->find($id);

        $form = $this->createActivateForm($cabin->getId());
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $cabinService = $this->get('fish_and_places.cabin_service');

                $cabinService->activate(new ActivateCabinCommand($cabin, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Activated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry Cabin could not be activated!';
            }

            $this->addFlash('notice', 'Activate Successfully!');
            return $this->redirectToRoute('cabin_list');
        }

        return $this->render('@Admin/cabin/activate.html.twig', array(
            'activate_form' => $form->createView(),
            'cabin' => $cabin
        ));
    }

    /**
     * @param CabinRepresentation $cabinRepresentation
     * @param string |null       $fileName
     */
    private function createCabin(CabinRepresentation $cabinRepresentation, $fileName = null)
    {
        $cabinService = $this->get('fish_and_places.cabin_service');

        $productCreate = new CreateNewCabinCommand(
            $cabinRepresentation,
            $this->getUser(),
            $fileName
        );

        $cabinService->create($productCreate);
    }

    /**
     * @param CabinRepresentation $cabinRepresentation
     * @param string|null        $fileName
     */
    private function updateCabin(CabinRepresentation $cabinRepresentation, $fileName = null)
    {
        $cabinService = $this->get('fish_and_places.cabin_service');

        $productCreate = new UpdateCabinCommand(
            $cabinRepresentation,
            $this->getUser(),
            $fileName
        );

        $cabinService->update($productCreate);
    }

    /**
     * @param $cabinId
     *
     * @return Form
     */
    private function createDeactivateForm($cabinId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deactivate_cabin', array('id' => $cabinId)))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @param int $cabinId
     *
     * @return mixed
     */
    private function createActivateForm($cabinId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activate_cabin', array('id' => $cabinId)))
            ->setMethod('POST')
            ->getForm();
    }
}
