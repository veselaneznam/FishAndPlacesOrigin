<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DamController extends Controller
{
    /**
     * @Route("/dam/{id}", name="dam_view", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function damDetailView(Request $request)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');
        $dam = $damQueryService->find((int) $request->get('id'));

        return $this->render('@GoGreen/dam/detail_view.html.twig', [
            'greenObject' => $dam,
        ]);
    }
}
