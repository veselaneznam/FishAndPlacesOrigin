<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Controller;

use FishAndPlaces\Dam\Application\Dam\DamQueryService;
use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\UI\Bundle\DamBundle\Form\DamSearchType;
use FishAndPlaces\UI\Bundle\DamBundle\Map\MarkerHelper;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;
use GuzzleHttp\Client;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Control\ControlPosition;
use Ivory\GoogleMap\Control\FullscreenControl;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Overlay\Marker;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Valid;

class DamController extends Controller
{
    /**
     * @var DamQueryService
     */
    private $damQueryService;

    /**
     * @param Request $request
     *
     * @Route("/", name="dam")
     * @Method({"GET", "POST"})
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('@Dam/dam/index.html.twig', array(
            'damCollection' => $this->getDamQueryService()->getFistPageList(),
            'title' => $this->get('translator')->trans("Dam List"),
        ));
    }

    /**
     * @Route("/map/{location}", name="map_view")
     *
     * @param Request $request
     * @param string  $location
     *
     * @return Response
     */
    public function mapAction(Request $request, $location)
    {
        $damCollection = $this->getDamQueryService()->search($location);
        $map = $this->getMap($request, $damCollection);

        return $this->render('@Dam/dam/google_map.html.twig', array(
            'map' => $map,
            'damCollection' => $damCollection,
            'title' => $this->get('translator')->trans("Search Result"),
        ));
    }
    /**
     *
     * @Route("/searchNearBy", name="_searchNearBy")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function searchNearBy(Request $request)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');
        $data = $request->get('data');
        $nearbyDamCollection = $damQueryService->search($data['location']);

        return new JsonResponse(['data' => $nearbyDamCollection]);
    }

    /**
     * @Route("/dam/{id}", name="dam_view", requirements={"id": "\d+"})
     *
     * @param Request $request
     */
    public function damDetailView($id)
    {

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
        $map->addStylesheetOptions(['width' => '100%', 'height' => '500px']);
        $map->setMapOption('zoom', 10);
        $fullscreenControl = new FullscreenControl(ControlPosition::TOP_LEFT);
        $map->getControlManager()->setFullscreenControl($fullscreenControl);

        /** @var Location $location */
        if (!empty($damRepresentations)) {
            $map->setAutoZoom(true);
            $map->setCenter(new Coordinate($userLocation->getLat(), $userLocation->getLon()));
            try {
                foreach ($damRepresentations as $damRepresentation) {
                    $map->getOverlayManager()->addMarker(
                        $this->createMarker($damRepresentation)
                    );
                }
            } catch (Exception $e) {
                $map->setAutoZoom(false);
                $map->setCenter(new Coordinate($userLocation->getLat(), $userLocation->getLon()));
            }
        }
        return $map;
    }

    /**
     * @param Request $request
     *
     * @return Location
     */
    private function getUserLocatiоn(Request $request)
    {
        $client = new Client(['base_uri' => 'http://ip-api.com/']);
        $response = $client->request('GET', "json");
        $json = json_decode($response->getBody()->getContents(), true);
        return new Location($json['lat'], $json['lon']);
    }

    /**
     * @param DamRepresentation $damRepresentation
     *
     * @return Marker
     */
    private function createMarker(DamRepresentation $damRepresentation)
    {
        $twig = $this->container->get('twig');

        return MarkerHelper::build($damRepresentation, $twig);
    }

    /**
     * @param Request $request
     * @param DamRepresentation[] $damCollection
     *
     * @return Map
     */
    private function getMap(Request $request, $damCollection)
    {
        $userLocation = $this->getUserLocatiоn($request);
        if (!empty($damCollection)) {
            $map = $this->buildMap($userLocation, $damCollection);
        } else {

            $nearbyDamCollection = $this->getDamQueryService()->searchNearBy($userLocation);
            $map = $this->buildMap($userLocation, $nearbyDamCollection);
        }
        return $map;
    }

    /**
     * @return DamQueryService|object
     */
    private function getDamQueryService()
    {
        if(null === $this->damQueryService) {
            $this->damQueryService = $this->get('fish_and_places.dam_query_service');
        }
        return $this->damQueryService;
    }
}
