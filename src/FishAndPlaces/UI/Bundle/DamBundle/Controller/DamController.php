<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Controller;

use FishAndPlaces\Dam\Application\Dam\DamQueryService;
use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\UI\Bundle\DamBundle\Form\DamSearchType;
use FishAndPlaces\UI\Bundle\DamBundle\Map\Marker;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;
use GuzzleHttp\Client;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Map;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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

            return $this->render('@Dam/dam/index.html.twig', array(
                'damCollection' => $damCollection,
                'title' => $this->get('translator')->trans("Dam List"),
                'searchForm' => $searchForm->createView(),
                'map' => null
            ));
        }
        $userLocation = $this->getUserLocatin($request);
        $nearbyDamCollection = $damQueryService->searchNearBy($userLocation);
        $map = $this->buildMap($userLocation, $nearbyDamCollection);

        return $this->render('@Dam/dam/index.html.twig', array(
            'damCollection' => null,
            'title' => $this->get('translator')->trans("Dam List"),
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
     * @param Location                 $userLocation
     * @param DamRepresentation[]|null $damRepresentations
     *
     * @return Map
     */
    private function buildMap(Location $userLocation, $damRepresentations = null)
    {
        $map = new Map();
        $map->setStaticOptions(['width' => 5000, 'height' => 5000]);
        $map->setMapOption('zoom', 13);

        /** @var Location $location */
        if (!empty($damRepresentations)) {
            $map->setAutoZoom(true);
            try {
                foreach ($damRepresentations as $damRepresentation) {
                    $map->getOverlayManager()->addMarker(
                        $this->createMarker($damRepresentation)
                    );
                }
            } catch (Exception $e) {
                $map->setAutoZoom(false);
                $map->setCenter(new Coordinate($userLocation->getLat(), $location->getLon()));
            }

        }
        return $map;
    }

    /**
     * @param Request $request
     *
     * @return Location
     */
    private function getUserLocatin(Request $request)
    {
        $client = new Client(['base_uri' => 'https://freegeoip.net/']);
        $response = $client->request('GET', "json/{$request->getClientIp()}");
        $json = json_decode($response->getBody()->getContents(), true);

        return new Location($json['latitude'], $json['longitude']);
    }

    /**
     * @param DamRepresentation $damRepresentation
     *
     * @return Marker
     */
    private function createMarker(DamRepresentation $damRepresentation)
    {
        $twig = $this->container->get('twig');

        return Marker::build($damRepresentation, $twig);
    }
}
