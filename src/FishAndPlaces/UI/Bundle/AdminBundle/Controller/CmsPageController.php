<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use FishAndPlaces\Core\Application\CmsPage\CmsPageQueryService;
use FishAndPlaces\Core\Application\CmsPage\CmsPageRepresentation;
use FishAndPlaces\Core\Application\CmsPage\CreateCmsPageCommand;
use FishAndPlaces\Core\Application\CmsPage\UpdateCmsPageComand;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\CmsPageType;
use FishAndPlaces\UI\Bundle\AdminBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CmsPageController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/page", name="page_list")
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var CmsPageQueryService $cmsPageQueryService
         */
        $cmsPageQueryService = $this->get('fish_and_places.cms_page_query_service');

        $pageCollection = $cmsPageQueryService->getPageCollection();
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $pageCollection = $cmsPageQueryService->getPageByTitle($searchForm->get('search')->getData());
        }

        return $this->render('@Admin/cmsPage/list.html.twig', array(
            'pageCollection' => $pageCollection,
            'title' => "Pages List",
            'searchForm' => $searchForm->createView(),
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/page/add", name="create_cms_page")
     * @return Response
     */
    public function addAction(Request $request)
    {
        $fishForm = $this->createForm(CmsPageType::class,
            new CmsPageRepresentation()
        );
        $fishForm->handleRequest($request);

        if ($fishForm->isSubmitted() && $fishForm->isValid()) {
            /**
             * @var CmsPageRepresentation $cmsPageRepresentation
             */
            $cmsPageRepresentation = $fishForm->getData();
            $this->createPage($cmsPageRepresentation);

            return $this->redirectToRoute('page_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $fishForm->createView(),
            'title' => 'New Fish',
            'backUrl' => '/admin/page'
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/page/edit/{id}", name="edit_page")
     * @return Response
     */
    public function editAction(Request $request, $id)
    {
        $cmsPageQueryService = $this->get('fish_and_places.cms_page_query_service');

        $cmsPageRepresentation = $cmsPageQueryService->getPage($id);

        $pageForm = $this->createForm(CmsPageType::class,
            $cmsPageRepresentation
        );

        $pageForm->handleRequest($request);

        if ($pageForm->isSubmitted() && $pageForm->isValid()) {

            $cmsPageRepresentation = $pageForm->getData();
            $this->updatePage($cmsPageRepresentation);

            return $this->redirectToRoute('page_list');
        }

        return $this->render('@Admin/entity.html.twig', array(
            'form' => $pageForm->createView(),
            'title' => 'Edit Page',
            'backUrl' => '/admin/page'
        ));
    }



    /**
     * @param CmsPageRepresentation $cmsPageRepresentation
     */
    private function createPage(CmsPageRepresentation $cmsPageRepresentation)
    {
        $command = new CreateCmsPageCommand($cmsPageRepresentation, $this->getUser());
        $this->get('fish_and_places.cms_page_service')->create($command);
    }

    /**
     * @param CmsPageRepresentation $cmsPageRepresentation
     */
    private function updatePage(CmsPageRepresentation $cmsPageRepresentation)
    {
        $command = new UpdateCmsPageComand($cmsPageRepresentation, $this->getUser());
        $this->get('fish_and_places.cms_page_service')->update($command);
    }

}
