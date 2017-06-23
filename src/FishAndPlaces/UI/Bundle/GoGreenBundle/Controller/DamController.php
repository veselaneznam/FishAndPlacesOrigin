<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Form\DamRatingType;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Map\MapHelper;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Value\Location;
use GuzzleHttp\Client;
use Ivory\GoogleMap\Map;
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
        return $this->render('@GoGreen/dam/index.html.twig', array(
            'damCollection' => $this->getDamQueryService()->findByFirstPage(),
            'title' => $this->get('translator')->trans("Dam List"),
        ));
    }

    /**
     * @Route("/map/{location}/{radius}", defaults={"radius" = 100},  name="map_view")
     * @Method({"GET", "POST"})
     * @param Request $request
     *
     * @param string  $location
     *
     * @param int| null  $radius
     *
     * @return Response
     */
    public function mapAction(Request $request, $location, $radius)
    {
        return $this->handleMapSearch($request, $location, $radius);
    }

    /**
     * @Route("/map/", name="post_map_view")
     * @Method({"GET", "POST"})
     * @param Request $request

     * @return Response
     */
    public function postMapAction(Request $request)
    {
       if ($request->getMethod() == 'POST') {
           $location = $request->get('search');
           $radius = (int) $request->get('km');
           return $this->handleMapSearch($request, $location, $radius);
       } else {
           return $this->redirectToRoute('dam');
       }
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
        $nearbyDamCollection = $damQueryService->findByDataAndRadius($data['location']);

        return new JsonResponse(['data' => $nearbyDamCollection]);
    }

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
        $dam = $damQueryService->getDam((int) $request->get('id'));
        $rating = $this->createForm(DamRatingType::class, ['rating' => $dam->getRating()]);
        return $this->render('@GoGreen/dam/detail_view.html.twig', [
            'dam' => $dam,
            'rating' => $rating->createView()
        ]);
    }

    /**
     * @Route("/dam/map_direction/{id}", name="dam_map_direction", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function loadMapDirections(Request $request)
    {
        $damQueryService = $this->get('fish_and_places.dam_query_service');
        $dam = $damQueryService->getDam((int) $request->get('id'));
        return $this->render('@GoGreen/dam/map_directions.html.twig', [
            'dam' => $dam,
            'userLocation' => $this->getUserLocatiоn($request)
        ]);
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
     * @param Request             $request
     * @param DamRepresentation[] $damCollection
     *
     * @param                     $twig
     *
     * @return Map
     */
    private function getMap(Request $request, $damCollection, $twig)
    {
        $userLocation = $this->getUserLocatiоn($request);
        if (empty($damCollection)) {
            $damCollection = $this->getDamQueryService()->findNearBy($userLocation);
        }

        return MapHelper::build($userLocation, $damCollection, $twig);
    }

    /**
     * @return GreenObjectQueryService|object
     */
    private function getDamQueryService()
    {
        if(null === $this->damQueryService) {
            $this->damQueryService = $this->get('fish_and_places.green_object_query_service');
        }
        return $this->damQueryService;
    }

    /**
     * @param Request $request
     * @param string $location
     * @param int    $radius
     *
     * @return Response
     */
    public function handleMapSearch(Request $request, $location, $radius = null)
    {
        try {
            $damCollection = $this->getDamQueryService()->findByDataAndRadius($location, $radius);
        } catch (\Exception $exception) {
            $this->get('logger')->log('error', $exception->getMessage(), [$location]);
            $this->addFlash('error', $this->get('translator')->trans("Something went wrong. Please check your search criteria"));
            return
                 $this->redirectToRoute('dam');
        }

        if (empty($damCollection)) {
            $this->addFlash('notice', $this->get('translator')->trans("No results found for") . ' ' . $location);
            return $this->redirectToRoute('dam');
        }
       // $map = $this->getMap($request, $damCollection, $this->container->get('twig'));

        return $this->render('@GoGreen/dam/google_map.html.twig', array(
            'userLocation' => $this->getUserLocatiоn($request),
            'greenObjects' => $damCollection,
            'title' => $this->get('translator')->trans("Search Result"),
        ));
    }
}
