<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

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
        $fishQueryService = $this->get('fish_and_places.fish_query_service');

        return $this->render('@Dam/fish/list.html.twig', array(
            'fishCollection' => $fishQueryService->getFishCollection()
        ));
    }

    /**
     * @param Request $request
     * @Route("/fish/{$id}", name="fish_view")
     *
     * @return Response
     */
    public function detailViewAction(Request $request)
    {
        $fishQueryService = $this->get('fish_and_places.fish_query_service');
        $fishRepresentation = $fishQueryService->getFish((int) $request->get('id'));
        $damCollection = $this->get('fish_and_places.dam_query_service')->getDamByFish($fishRepresentation->getFish());
        return $this->render('@Dam/fish/fish_view.html.twig', array(
            'fish' => $fishRepresentation,
            'damCollection' => $damCollection
        ));
    }
}
