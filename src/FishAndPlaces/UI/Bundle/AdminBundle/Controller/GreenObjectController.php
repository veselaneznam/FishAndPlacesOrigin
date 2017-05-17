<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GreenObjectController extends Controller
{
    /**
     * @Route("/green_object/{id}", name="green_object_view", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function greenObjectDetailView(Request $request)
    {
        $greenObjectQueryService = $this->get('fish_and_places.green_object_query_service');
        $greenObject = $greenObjectQueryService->find((int) $request->get('id'));
        return $this->render('@GoGreen/greenObject/detail_view.html.twig', [
            'greenObject' => $greenObject,
        ]);
    }
}
