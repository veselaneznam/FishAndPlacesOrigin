<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 16.07.17
 * Time: 12:30
 */

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
     * @Route("/village_holiday", name="village_holiday_list")
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var VillageHolidayQueryService $villageHolidayQueryService
         */
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');

        $villageHolidayCollection = $villageHolidayQueryService->getAdminVillageHolidayCollection();
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $villageHolidayCollection = $villageHolidayQueryService->getVillageHolidayByName($searchForm->get('search')->getData());
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
     * @Route("/village_holiday/add", name="create_village_holiday")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $villageHolidayForm = $this->createForm(VillageHolidayType::class,
            new VillageHolidayRepresentation()
        );
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
            'title' => 'New GreenObject',
            'backUrl' => '/admin/village_holiday'
        ));
    }

    /**
     * @param Request $request
     *
     * @param int $id
     * @return Response
     * @Route("/village_holiday/edit/{id}", name="edit_village_holiday")
     */
    public function editAction(Request $request, int $id)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');

        $villageHolidayRepresentation = $villageHolidayQueryService->getVillageHoliday($id);

        if(null !== $villageHolidayRepresentation->getMainImage()->getImageSrc()) {
            $villageHolidayRepresentation->setMainImage(
                new File(
                    $this->getParameter('images_upload')
                    . '/'
                    . $villageHolidayRepresentation->getMainImage()->getImageSrc()
                )
            );
        }

        $villageHolidayForm = $this->createForm(VillageHolidayType::class,
            $villageHolidayRepresentation
        );

        $villageHolidayForm->handleRequest($request);

        if ($villageHolidayForm->isSubmitted() && $villageHolidayForm->isValid()) {

            $file = $villageHolidayForm->get('mainImage')->getData();

            $fileName = null;
            if (null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $villageHolidayRepresentation = $villageHolidayForm->getData();
            $this->updateVillageHoliday($villageHolidayRepresentation, $fileName);

            return $this->redirectToRoute('village_holiday_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $villageHolidayForm->createView(),
            'title' => 'Edit GreenObject',
            'backUrl' => '/admin/village_holiday'
        ));
    }

    /**
     * @param Request $request
     *
     * @param int $id
     *
     * @return JsonResponse|RedirectResponse
     * @Route("/village_holiday/deactivate/{id}", name="deactivate_village_holiday")
     * @Method({"GET", "DELETE"})
     *
     */
    public function deactivateAction(Request $request, $id)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');
        $villageHoliday = $villageHolidayQueryService->getVillageHoliday($id);


        $form = $this->createDeactivateForm($villageHoliday->getId());
        if ($request->getMethod() == 'DELETE') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $villageHolidayService = $this->get('fish_and_places.village_holiday_service');

                $villageHolidayService->deactivate(new DeactivateVillageHolidayCommand($villageHoliday));

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
            )
        );
    }

    /**
     * @param Request $request
     *
     * @param int $id
     * @return JsonResponse|RedirectResponse
     * @Route("/village_holiday/activate/{id}", name="activate_village_holiday")
     * @Method({"GET", "POST"})
     *
     */
    public function activateAction(Request $request, int $id)
    {
        $productQueryService = $this->get('fish_and_places.village_holiday_query_service');
        $villageHoliday = $productQueryService->getVillageHoliday($id);

        $form = $this->createActivateForm($villageHoliday->getId());
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $villageHolidayService = $this->get('fish_and_places.village_holiday_service');

                $villageHolidayService->activate(new ActivateVillageHolidayCommand($villageHoliday));

                $response['success'] = true;
                $response['message'] = 'Activated Successfully!';
            } else {
                $response['success'] = false;
                $response['message'] = 'Sorry GreenObject could not be activated!';
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
     * @param string |null           $fileName
     */
    private function createVillageHoliday(VillageHolidayRepresentation $villageHolidayRepresentation, $fileName = null)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_service');

        $productCreate = new CreateNewVillageHolidayCommand(
            $villageHolidayRepresentation,
            $fileName
        );

        $villageHolidayQueryService->create($productCreate);
    }

    /**
     * @param VillageHolidayRepresentation $villageHolidayRepresentation
     * @param string|null  $fileName
     */
    private function updateVillageHoliday(VillageHolidayRepresentation $villageHolidayRepresentation, $fileName = null)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_service');

        $productCreate = new UpdateVillageHolidayCommand(
            $villageHolidayRepresentation,
            $fileName
        );

        $villageHolidayQueryService->update($productCreate);
    }

    /**
     * @param $productId
     *
     * @return Form
     */
    private function createDeactivateForm($productId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deactivate_village_holiday', array('id' => $productId)))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    private function createActivateForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activate_village_holiday', array('id' => $id)))
            ->setMethod('POST')
            ->getForm();
    }
}