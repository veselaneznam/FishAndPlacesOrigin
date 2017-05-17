<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CampController extends Controller
{
    /**
     * @Route("/camp/{id}", name="camp_view", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function campDetailView(Request $request)
    {
        $campQueryService = $this->get('fish_and_places.camp_query_service');
        $campRepresentation = $campQueryService->find((int) $request->get('id'));

        return $this->render('@GoGreen/greenObject/detail_view.html.twig', [
            'greenObject' => $campRepresentation,
        ]);
    }
}
