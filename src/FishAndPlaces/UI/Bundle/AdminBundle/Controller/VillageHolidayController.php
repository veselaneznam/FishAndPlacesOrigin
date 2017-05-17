<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\ActivateVillageHolidayCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\VillageHolidayQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\VillageHolidayRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\CreateNewVillageHolidayCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\DeactivateVillageHolidayCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\UpdateVillageHolidayCommand;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\VillageHolidayType;
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

class VillageHolidayController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/villageHoliday", name="village_holiday_list")
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var VillageHolidayQueryService $villageHolidayQueryService
         */
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');

        $villageHolidayCollection = $villageHolidayQueryService->getCollection();
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $villageHolidayCollection = $villageHolidayQueryService->findByName($searchForm->get('search')->getData());
        }

        return $this->render('@Admin/villageHoliday/list.html.twig', array(
            'villageHolidayCollection' => $villageHolidayCollection,
            'title' => "GreenObject List",
            'path' => $this->getParameter('images_upload'),
            'searchForm' => $searchForm->createView(),
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/village_holiday/add", name="create_villageHoliday")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $villageHolidayForm = $this->createForm(VillageHolidayType::class);
        $villageHolidayForm->handleRequest($request);

        if ($villageHolidayForm->isSubmitted() && $villageHolidayForm->isValid()) {
            /**
             * @var VillageHolidayRepresentation $villageHolidayRepresentation
             */
            $file = $villageHolidayForm->get('mainImage')->getData();
            $fileName = null;
            if(null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $villageHolidayRepresentation = $villageHolidayForm->getData();
            $this->createVillageHoliday($villageHolidayRepresentation, $fileName);

            return $this->redirectToRoute('village_holiday_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $villageHolidayForm->createView(),
            'title' => 'New VillageHoliday',
            'backUrl' => '/admin/villageHoliday'
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/villageHoliday/edit/{id}", name="edit_village_holiday")
     * @return Response
     */
    public function editAction(Request $request, $id)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');

        $villageHolidayRepresentation = $villageHolidayQueryService->find($id);

        if(null !== $villageHolidayRepresentation->getMainImage()->getImageSrc()) {
            $villageHolidayRepresentation->setMainImage(
                new File($this->getParameter('images_upload').'/'.$villageHolidayRepresentation->getMainImage()->getImageSrc()));
        }

        $villageHolidayForm = $this->createForm(VillageHolidayType::class);

        $villageHolidayForm->handleRequest($request);

        if ($villageHolidayForm->isSubmitted() && $villageHolidayForm->isValid()) {

            $file = $villageHolidayForm->get('mainImage')->getData();
            $fileName = null;
            if (null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $villageHolidayRepresentation = $villageHolidayForm->getData();
            $this->updateVillageHoliday($villageHolidayRepresentation, $fileName);

            return $this->redirectToRoute('cabin_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $villageHolidayForm->createView(),
            'title' => 'Edit VillageHoliday',
            'backUrl' => '/admin/villageHoliday'
        ));
    }

    /**
     * @param Request $request
     *
     * @param int $id
     *
     * @return JsonResponse|RedirectResponse
     * @Route("/deactivate/{id}", name="deactivate_village_holiday")
     * @Method({"GET", "DELETE"})
     *
     */
    public function deactivateAction(Request $request, $id)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');
        $villageHoliday = $villageHolidayQueryService->find($id);

        $form = $this->createDeactivateForm($villageHoliday->getId());
        if ($request->getMethod() == 'DELETE') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $villageHolidayService = $this->get('fish_and_places.village_holiday_service');

                $villageHolidayService->deactivate(new DeactivateVillageHolidayCommand($villageHoliday, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Deactivated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry villageHoliday could not be deactivated!';
            }

            $this->addFlash('notice', 'Deactivated Successfully!');
            return $this->redirectToRoute('village_holiday_list');
        }

        return $this->render('@Admin/villageHoliday/deactivate.html.twig', array(
            'deactivate_form' => $form->createView(),
            'villageHoliday' => $villageHoliday
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/activate/{id}", name="activate_village_holiday")
     * @Method({"GET", "POST"})
     *
     * @return JsonResponse|RedirectResponse
     */
    public function activateAction(Request $request, $id)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');
        $villageHoliday = $villageHolidayQueryService->find($id);

        $form = $this->createActivateForm($villageHoliday->getId());
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $villageHolidayService = $this->get('fish_and_places.village_holiday_service');

                $villageHolidayService->activate(new ActivateVillageHolidayCommand($villageHoliday, $this->getUser()));

                $response['success'] = true;
                $response['message'] = 'Activated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry VillageHoliday could not be activated!';
            }

            $this->addFlash('notice', 'Activate Successfully!');
            return $this->redirectToRoute('village_holiday_list');
        }

        return $this->render('@Admin/villageHoliday/activate.html.twig', array(
            'activate_form' => $form->createView(),
            'villageHoliday' => $villageHoliday
        ));
    }

    /**
     * @param VillageHolidayRepresentation $villageHolidayRepresentation
     * @param string |null       $fileName
     */
    private function createVillageHoliday(VillageHolidayRepresentation $villageHolidayRepresentation, $fileName = null)
    {
        $villageHolidayService = $this->get('fish_and_places.village_holiday_service');

        $productCreate = new CreateNewVillageHolidayCommand(
            $villageHolidayRepresentation,
            $this->getUser(),
            $fileName
        );

        $villageHolidayService->create($productCreate);
    }

    /**
     * @param VillageHolidayRepresentation $villageHolidayRepresentation
     * @param string|null        $fileName
     */
    private function updateVillageHoliday(VillageHolidayRepresentation $villageHolidayRepresentation, $fileName = null)
    {
        $villageHolidayService = $this->get('fish_and_places.village_holiday_service');

        $productCreate = new UpdateVillageHolidayCommand(
            $villageHolidayRepresentation,
            $this->getUser(),
            $fileName
        );

        $villageHolidayService->update($productCreate);
    }

    /**
     * @param $villageHolidayId
     *
     * @return Form
     */
    private function createDeactivateForm($villageHolidayId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deactivate_cabin', array('id' => $villageHolidayId)))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @param int $villageHolidayId
     *
     * @return mixed
     */
    private function createActivateForm($villageHolidayId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activate_cabin', array('id' => $villageHolidayId)))
            ->setMethod('POST')
            ->getForm();
    }
}
