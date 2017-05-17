<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CabinController extends Controller
{

    /**
     * @Route("/cabin/{id}", name="cabin_view", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function cabinDetailView(Request $request)
    {
        $cabinQueryService = $this->get('fish_and_places.cabin_query_service');
        $cabin = $cabinQueryService->find((int) $request->get('id'));

        return $this->render('@GoGreen/greenObject/detail_view.html.twig', [
            'greenObject' => $cabin,
        ]);
    }
}
