<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    /**
     * @param Request $request
     * @Route("/page/{$slug}", name="page_view")
     *
     * @return Response
     */
    public function detailViewAction(Request $request)
    {
        $cmsPageQueryService = $this->get('fish_and_places.cms_page_query_service');
        $pageRepresentation = $cmsPageQueryService->getPageBySlug($request->get('slug'));

        return $this->render('@GoGreen/core/page.html.twig', array(
            'page' => $pageRepresentation
        ));
    }
}
