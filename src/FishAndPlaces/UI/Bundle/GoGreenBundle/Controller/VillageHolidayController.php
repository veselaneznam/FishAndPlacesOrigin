<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VillageHolidayController extends Controller
{
    /**
     * @Route("/village_holiday/{id}", name="village_holiday_view", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function villageHolidayDetailView(Request $request)
    {
        $villageHolidayQueryService = $this->get('fish_and_places.village_holiday_query_service');
        $villageHoliday = $villageHolidayQueryService->find((int) $request->get('id'));

        return $this->render('@GoGreen/greenObject/detail_view.html.twig', [
            'greenObject' => $villageHoliday,
        ]);
    }
}
