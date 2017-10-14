<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\GreenObject\Application\Fish\CreateNewFishCommand;
use FishAndPlaces\GreenObject\Application\Fish\FishQueryService;
use FishAndPlaces\GreenObject\Application\Fish\FishRepresentation;
use FishAndPlaces\GreenObject\Application\Fish\UpdateFishCommand;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\FishType;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FishController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/fish", name="fish_list")
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var FishQueryService $fishQueryService
         */
        $fishQueryService = $this->get('fish_and_places.fish_query_service');

        $fishCollection = $fishQueryService->getFishCollection();
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $fishCollection = $fishQueryService->getFishByName($searchForm->get('search')->getData());
        }

        return $this->render('@Admin/fish/list.html.twig', array(
            'fishCollection' => $fishCollection,
            'title' => "Fish List",
            'path' => $this->getParameter('images_upload'),
            'searchForm' => $searchForm->createView(),
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/fish/add", name="create_fish")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $fishForm = $this->createForm(FishType::class,
            new FishRepresentation()
        );
        $fishForm->handleRequest($request);

        if ($fishForm->isSubmitted() && $fishForm->isValid()) {
            /**
             * @var FishRepresentation $fishRepresentation
             */
            $file = $fishForm->get('image')->getData();
            $fileName = null;
            if(null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
            }
            $fishRepresentation = $fishForm->getData();
            $this->createFish($fishRepresentation, $fileName);

            return $this->redirectToRoute('fish_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $fishForm->createView(),
            'title' => 'New Fish',
            'backUrl' => '/admin/fish'
        ));
    }

    /**
     * @param Request $request
     *
     * @param int $id
     *
     * @return Response
     * @Route("/fish/edit/{id}", name="edit_fish")
     */
    public function editAction(Request $request, $id)
    {
        $fishQueryService = $this->get('fish_and_places.fish_query_service');

        $fishRepresentation = $fishQueryService->getFish($id);
        $image = $fishRepresentation->getImage()->getImageSrc();
        if(null !== $image) {
            $fishRepresentation->setImage($image);
        }

        $fishForm = $this->createForm(FishType::class,
            $fishRepresentation
        );

        $fishForm->handleRequest($request);

        if ($fishForm->isSubmitted() && $fishForm->isValid()) {

            $file = $fishForm->get('image')->getData();
            $fileName = null;
            if (null !== $file) {
                $fileName = $this->get('fish_and_places.images_uploader')->upload($file);
                if(null !== $fileName) {
                    $this->deleteOldImage($image);
                }
            }
            $fishRepresentation = $fishForm->getData();
            $this->updateFish($fishRepresentation, $fileName);

            return $this->redirectToRoute('fish_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $fishForm->createView(),
            'title' => 'Edit Fish',
            'backUrl' => '/admin/fish'
        ));
    }



    /**
     * @param FishRepresentation $fishRepresentation
     * @param string|null $fileName
     */
    private function createFish(FishRepresentation $fishRepresentation, $fileName = null)
    {
        $command = new CreateNewFishCommand($fishRepresentation, $this->getUser(), $fileName);
        $this->get('fish_and_places.fish_service')->create($command);
    }

    /**
     * @param FishRepresentation $fishRepresentation
     * @param null $fileName
     */
    private function updateFish(FishRepresentation $fishRepresentation, $fileName = null)
    {
        $command = new UpdateFishCommand($fishRepresentation, $this->getUser() ,$fileName);
        $this->get('fish_and_places.fish_service')->update($command);
    }

    /**
     * @param $image
     */
    private function deleteOldImage($image)
    {
        if(null !== $image) {
            $oldImage = $this->getParameter('images_upload') . $image;
            if(file_exists($oldImage)) {
                unlink($oldImage);
            }
        }
    }
}
