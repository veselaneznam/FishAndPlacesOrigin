<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\Camp\ActivateCampCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Camp\CampQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\Camp\CampRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\Camp\CreateNewCampCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Camp\DeactivateCampCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Camp\UpdateCampCommand;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\CampType;
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

class CampController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/camp", name="camp_list")
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var CampQueryService $campQueryService
         */
        $campQueryService = $this->get('fish_and_places.camp_query_service');

        $campCollection = $campQueryService->getCollection();
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $campCollection = $campQueryService->findByName($searchForm->get('search')->getData());
        }

        return $this->render('@Admin/camp/list.html.twig', array(
            'campCollection' => $campCollection,
            'title' => "GreenObject List",
            'path' => $this->getParameter('images_upload'),
            'searchForm' => $searchForm->createView(),
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/camp/add", name="create_camp")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $campForm = $this->createForm(CampType::class);
        $campForm->handleRequest($request);

        if ($campForm->isSubmitted() && $campForm->isValid()) {
            /**
             * @var CampRepresentation $campRepresentation
             */
            $file = $campForm->get('mainImage')->getData();
            $fileName = null;
            if(null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $campRepresentation = $campForm->getData();
            $this->createCamp($campRepresentation, $fileName);

            return $this->redirectToRoute('camp_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $campForm->createView(),
            'title' => 'New Camp',
            'backUrl' => '/admin/camp'
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/camp/edit/{id}", name="edit_camp")
     * @return Response
     */
    public function editAction(Request $request, $id)
    {
        $campQueryService = $this->get('fish_and_places.camp_query_service');

        $campRepresentation = $campQueryService->find($id);

        if(null !== $campRepresentation->getMainImage()->getImageSrc()) {
            $campRepresentation->setMainImage(
                new File($this->getParameter('images_upload').'/'.$campRepresentation->getMainImage()->getImageSrc()));
        }

        $campForm = $this->createForm(CampType::class);

        $campForm->handleRequest($request);

        if ($campForm->isSubmitted() && $campForm->isValid()) {

            $file = $campForm->get('mainImage')->getData();
            $fileName = null;
            if (null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $campRepresentation = $campForm->getData();
            $this->updateCamp($campRepresentation, $fileName);

            return $this->redirectToRoute('camp_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $campForm->createView(),
            'title' => 'Edit Camp',
            'backUrl' => '/admin/camp'
        ));
    }

    /**
     * @param Request $request
     *
     * @param int $id
     *
     * @return JsonResponse|RedirectResponse
     * @Route("/deactivate/{id}", name="deactivate_camp")
     * @Method({"GET", "DELETE"})
     *
     */
    public function deactivateAction(Request $request, $id)
    {
        $campQueryService = $this->get('fish_and_places.camp_query_service');
        $camp = $campQueryService->find($id);

        $form = $this->createDeactivateForm($camp->getId());
        if ($request->getMethod() == 'DELETE') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $campService = $this->get('fish_and_places.camp_service');

                $campService->deactivate(new DeactivateCampCommand($camp, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Deactivated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry camp could not be deactivated!';
            }

            $this->addFlash('notice', 'Deactivated Successfully!');
            return $this->redirectToRoute('camp_list');
        }

        return $this->render('@Admin/camp/deactivate.html.twig', array(
            'deactivate_form' => $form->createView(),
            'camp' => $camp
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/activate/{id}", name="activate_camp")
     * @Method({"GET", "POST"})
     *
     * @return JsonResponse|RedirectResponse
     */
    public function activateAction(Request $request, $id)
    {
        $campQueryService = $this->get('fish_and_places.camp_query_service');
        $camp = $campQueryService->find($id);

        $form = $this->createActivateForm($camp->getId());
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $campService = $this->get('fish_and_places.camp_service');

                $campService->activate(new ActivateCampCommand($camp, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Activated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry Camp could not be activated!';
            }

            $this->addFlash('notice', 'Activate Successfully!');
            return $this->redirectToRoute('camp_list');
        }

        return $this->render('@Admin/camp/activate.html.twig', array(
            'activate_form' => $form->createView(),
            'camp' => $camp
        ));
    }

    /**
     * @param CampRepresentation $campRepresentation
     * @param string |null       $fileName
     */
    private function createCamp(CampRepresentation $campRepresentation, $fileName = null)
    {
        $campService = $this->get('fish_and_places.camp_service');

        $productCreate = new CreateNewCampCommand(
            $campRepresentation,
            $this->getUser(),
            $fileName
        );

        $campService->create($productCreate);
    }

    /**
     * @param CampRepresentation $campRepresentation
     * @param string|null        $fileName
     */
    private function updateCamp(CampRepresentation $campRepresentation, $fileName = null)
    {
        $damQueryService = $this->get('fish_and_places.camp_service');

        $productCreate = new UpdateCampCommand(
            $campRepresentation,
            $this->getUser(),
            $fileName
        );

        $damQueryService->update($productCreate);
    }

    /**
     * @param $campId
     *
     * @return Form
     */
    private function createDeactivateForm($campId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deactivate_camp', array('id' => $campId)))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @param int $campId
     *
     * @return mixed
     */
    private function createActivateForm($campId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activate_camp', array('id' => $campId)))
            ->setMethod('POST')
            ->getForm();
    }
}
