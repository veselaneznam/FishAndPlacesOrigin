<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Controller;

use FishAndPlaces\Dam\Application\Dam\DamQueryService;
use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\UI\Bundle\DamBundle\Form\DamSearchType;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Overlay\Marker;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/")
 */
class DamController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("", name="homepage")
     * @Method({"GET", "POST"})
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var DamQueryService $damQueryService
         */
        $damQueryService = $this->get('fish_and_places.dam_query_service');


        $searchForm = $this->createSearchForm();
        if ($request->getMethod() == 'POST') {
            $searchForm->handleRequest($request);
            $damCollection = $damQueryService->search($searchForm->getData());
            $locations = array_map(function (DamRepresentation $dam) {
                return $dam->getLocation();
            }, $damCollection);

            $map = $this->buildMap($locations);

            return $this->render('@Dam/dam/list.html.twig', array(
                'damCollection' => $damCollection,
                'title' => "Product List",
                'searchForm' => $searchForm->createView(),
                'map' => $map
            ));
        }
        $map = $this->buildMap();
        return $this->render('@Dam/dam/list.html.twig', array(
            'damCollection' => null,
            'title' => "Product List",
            'searchForm' => $searchForm->createView(),
            'map' => $map
        ));
    }

    /**
     * @return Form
     */
    private function createSearchForm()
    {
        return $this->createForm(
            DamSearchType::class
        );
    }

    /**
     *
     * @param Location[]|null $locations
     *
     * @return Map
     */
    private function buildMap($locations = null)
    {
        $map = new Map();
        $map->setStaticOptions(['width' => 5000, 'height' => 5000]);
        /** @var Location $location */
        if(null !== $locations) {
            $map->setAutoZoom(true);
            foreach ($locations as $location) {
                $map->getOverlayManager()->addMarker(new Marker(new Coordinate(
                    $location->getLat(),
                    $location->getLon()
                )));
            }
        } else {
            $map->setAutoZoom(false);
            $map->setCenter(new Coordinate(42.81, 23.29));
        }
        $map->setMapOption('zoom', 13);
        return $map;
    }
}
