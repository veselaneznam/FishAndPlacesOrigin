<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
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

class GreenObjectController extends Controller
{
    /**
     * @var GreenObjectQueryService
     */
    private $greenObjectQueryService;

    /**
     * @param Request $request
     *
     * @Route("/", name="green_object")
     * @Method({"GET", "POST"})
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('@GoGreen/greenObject/index.html.twig', array(
            'greenObjectCollection' => $this->getGreenObjectQueryService()->getFistPageList(),
            'title' => $this->get('translator')->trans("Green Object List"),
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
     *
     * @param string  $location
     *
     * @param int|null  $radius
     *
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
        $greenObjectQueryService = $this->get('fish_and_places.green_object_query_service');
        $data = $request->get('data');
        $nearbyGreenObjectCollection = $greenObjectQueryService->search($data['location']);

        return new JsonResponse(['data' => $nearbyGreenObjectCollection]);
    }

    /**
     * @Route("/green_object/{id}", name="green_object_view", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function greenObjectDetailView(Request $request)
    {
        $greenObjectQueryService = $this->get('fish_and_places.green_object_query_service');
        $greenObject = $greenObjectQueryService->find((int) $request->get('id'));
       // $rating = $this->createForm(DamRatingType::class, ['rating' => $greenObject->getRating()]);
        return $this->render('@GoGreen/greenObject/detail_view.html.twig', [
            'greenObject' => $greenObject,
           // 'rating' => $rating->createView()
        ]);
    }

    /**
     * @Route("/green_object/map_direction/{id}", name="green_object_map_direction", requirements={"id": "\d+"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function loadMapDirections(Request $request)
    {
        $greenObjectQueryService = $this->get('fish_and_places.green_object_query_service');
        $greenObject = $greenObjectQueryService->find((int) $request->get('id'));
        return $this->render('@GoGreen/greenObject/map_directions.html.twig', [
            'greenObject' => $greenObject,
            'userLocation' => $this->getUserLocatiоn()
        ]);
    }

    /**
     * @return Location
     */
    private function getUserLocatiоn()
    {
        $client = new Client(['base_uri' => 'http://ip-api.com/']);
        $response = $client->request('GET', "json");
        $json = json_decode($response->getBody()->getContents(), true);
        return new Location($json['lat'], $json['lon']);
    }

    /**
     * @param Request             $request
     * @param GreenObjectRepresentation[] $greenObjectCollection
     *
     * @param                     $twig
     *
     * @return Map
     */
    private function getMap(Request $request, $greenObjectCollection, $twig)
    {
        $userLocation = $this->getUserLocatiоn();
        if (empty($greenObjectCollection)) {
            $greenObjectCollection = $this->getGreenObjectQueryService()->searchNearBy($userLocation);
        }

        return MapHelper::build($userLocation, $greenObjectCollection, $twig);
    }

    /**
     * @return GreenObjectQueryService|object
     */
    private function getGreenObjectQueryService()
    {
        if(null === $this->greenObjectQueryService) {
            $this->greenObjectQueryService = $this->get('fish_and_places.green_object_query_service');
        }
        return $this->greenObjectQueryService;
    }

    /**
     * @param Request $request
     * @param string  $location
     * @param int $radius
     *
     * @return Response
     */
    public function handleMapSearch(Request $request, $location, $radius = null)
    {
        try {
            $greenObjectCollection = $this->getGreenObjectQueryService()->search($location, $radius);
        } catch (\Exception $exception) {
            $this->get('logger')->log('error', $exception->getMessage(), [$location]);
            $this->addFlash('error', $this->get('translator')->trans("Something went wrong. Please check your search criteria"));
            return
                 $this->redirectToRoute('dam');
        }

        if (empty($greenObjectCollection)) {
            $this->addFlash('notice', $this->get('translator')->trans("No results found for") . $location);
            return $this->redirectToRoute('dam');
        }

        $map = $this->getMap($request, $greenObjectCollection, $this->container->get('twig'));

        return $this->render('@GoGreen/greenObject/google_map.html.twig', array(
            'map' => $map,
            'greenObjectCollection' => $greenObjectCollection,
            'title' => $this->get('translator')->trans("Search Result"),
        ));
    }
}
