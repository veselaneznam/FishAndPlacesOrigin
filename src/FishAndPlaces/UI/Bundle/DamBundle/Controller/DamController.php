<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Controller;

use FishAndPlaces\Dam\Application\Dam\DamQueryService;
use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\UI\Bundle\DamBundle\Form\DamSearchType;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;
use GuzzleHttp\Client;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Overlay\Animation;
use Ivory\GoogleMap\Overlay\Icon;
use Ivory\GoogleMap\Overlay\Marker;
use Ivory\GoogleMap\Overlay\MarkerShape;
use Ivory\GoogleMap\Overlay\MarkerShapeType;
use Ivory\GoogleMap\Overlay\Symbol;
use Ivory\GoogleMap\Overlay\SymbolPath;
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
            $locations = $this->extractLocations($damCollection);

            $map = $this->buildMap($locations);

            return $this->render('@Dam/dam/index.html.twig', array(
                'damCollection' => $damCollection,
                'title' => $this->get('translator')->trans("Dam List"),
                'searchForm' => $searchForm->createView(),
                'map' => $map
            ));
        }
        $location = $this->getUserLocatin();
        $nearbyDamCollection = $damQueryService->searchNearBy(new Location($location['latitude'], $location['longitude']));
        $map = $this->buildMap($this->extractLocations($nearbyDamCollection));
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
     * @param Location[]|null $locations
     *
     * @return Map
     */
    private function buildMap($locations = null)
    {
        $map = new Map();
        $map->setStaticOptions(['width' => 5000, 'height' => 5000]);
        $map->setMapOption('zoom', 13);

        /** @var Location $location */
        if (!empty($locations)) {
            $map->setAutoZoom(true);
            foreach ($locations as $location) {
                $map->getOverlayManager()->addMarker(
                    $this->createMarker($location)
                );
            }
        } else {
            $location = $this->getUserLocatin();
            $map->setAutoZoom(false);
            $map->setCenter(new Coordinate($location['latitude'], $location['longitude']));
        }
        return $map;
    }

    private function getUserLocatin()
    {
        $PublicIP = getenv('REMOTE_ADDR');
        $client = new Client(['base_uri' => 'https://freegeoip.net/']);
        $response = $client->request('GET', "json/$PublicIP");
        $json = json_decode($response->getBody()->getContents(), true);
        $location['latitude'] = $json['latitude'];
        $location['longitude'] = $json['longitude'];
        return $location;
    }

    /**
     * @param $damCollection
     *
     * @return array
     */
    private function extractLocations($damCollection)
    {
        $locations = array_map(function (DamRepresentation $dam) {
            return new Location($dam->getLocation()->getLat(), $dam->getLocation()->getLon());
        }, $damCollection
        );
        return $locations;
    }

    /**
     * @param $location
     *
     * @return Marker
     */
    private function createMarker(Location $location)
    {
        return new Marker(
            new Coordinate($location->getLat(), $location->getLon()),
            Animation::BOUNCE,
            new Icon(),
            new Symbol(SymbolPath::CIRCLE),
            new MarkerShape(MarkerShapeType::CIRCLE, [1.1, 2.1, 1.4]),
            ['clickable' => false]
        );
    }
}
