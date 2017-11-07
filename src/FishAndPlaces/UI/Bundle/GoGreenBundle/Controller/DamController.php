<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Controller;

use Cmfcmf\OpenWeatherMap\Exception;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectServiceFactory;
use FishAndPlaces\GreenObject\Application\GreenObject\Rating\GreenObjectRatingRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\Rating\UpdateGreenObjectRatingCommand;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Form\DamRatingType;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Map\MapHelper;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Map\MarkerHelper;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Value\GreenObjecType;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Value\Location;
use GuzzleHttp\Client;
use Ivory\GoogleMap\Map;
use Psr\Cache\CacheItemInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Code\Exception\RuntimeException;

class DamController extends Controller
{
    /**
     * @var GreenObjectQueryService
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
            'greenObjects' => $this->getDamQueryService()->findByFirstPage(),
            'title' => $this->get('translator')->trans("Dam List"),
        ));
    }

    /**
     * @Route("/map/{location}/{radius}", defaults={"radius" = 100},  name="map_view")
     * @Method({"GET", "POST"})
     * @param Request $request
     *
     * @param string $location
     *
     * @param int| null $radius
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
            $radius = (int)$request->get('km');
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
        $damQueryService = $this->get('fish_and_places.green_object_query_service');
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
        $damQueryService = $this->get('fish_and_places.green_object_query_service');
        $dam = $damQueryService->getGreenObject((int)$request->get('id'));
        $dailyWeather = $this->get('fish_and_places.weather_service')->getDailyWeatherByLocation($dam->getLocation());
        $rating = $this->createForm(DamRatingType::class, ['rating' => $dam->getAvgRating()]);

        return $this->render('@GoGreen/dam/detail_view.html.twig', [
            'greenObject' => $dam,
            'rating' => $rating->createView(),
            'weatherImage' => $dailyWeather->weather->icon,
            'weather' => $dailyWeather->weather->description,
            'tempreture' => $dailyWeather->temperature->now->getValue(),
            'isDay' => strpos($dailyWeather->weather->icon, 'n'),
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
        $damQueryService = $this->get('fish_and_places.green_object_query_service');
        $dam = $damQueryService->getGreenObject((int)$request->get('id'));

        return $this->render('@GoGreen/dam/map_directions.html.twig', [
            'dam' => $dam,
            'apiId' => $this->container->getParameter('nokia_maps_app_id'),
            'apiCode' => $this->container->getParameter('nokia_maps_app_code'),
        ]);
    }

    /**
     * @return GreenObjectQueryService|object
     */
    private function getDamQueryService()
    {
        if (null === $this->damQueryService) {
            $this->damQueryService = $this->get('fish_and_places.green_object_query_service');
        }
        return $this->damQueryService;
    }

    /**
     * @Route("/dam/update_rating/{id}", name="update_rating", requirements={"id": "\d+"})
     * @Method({"GET", "POST"})
     * @param Request $request
     *
     * @return Response
     */
    public function updateRating(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $rating = (int) $request->getContent();
            $greenObjectId = $request->get('id');
            return $this->handleRatingUpdate($request, $rating, $greenObjectId);
        } else {
            return $this->redirectToRoute('dam_view', ['id' => (int)$request->get('id')]);
        }
    }
    /**
     * @param Request $request
     * @param string $location
     * @param int $radius
     *
     * @return Response
     */
    public function handleMapSearch(Request $request, $location, $radius = null)
    {
        try {
            $geocodedLocation = $this->getDamQueryService()->geocodeLocation($location);
            $damCollection = $this->getDamQueryService()->findByDataAndRadius($geocodedLocation, $radius);

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

        $twig = $this->container->get('twig');

        $mapMarkers = array_map(
            function (GreenObjectRepresentation $dam) use ($twig) {
                return MarkerHelper::build($dam, $twig);
            },
            $damCollection
        );

        return $this->render('@GoGreen/dam/google_map.html.twig', array(
            'userLocation' => $geocodedLocation,
            'greenObjects' => $damCollection,
            'mapMarkers' => $mapMarkers,
            'radius' => $radius,
            'title' => $this->get('translator')->trans("Search Result"),
            'apiId' => $this->container->getParameter('nokia_maps_app_id'),
            'apiCode' => $this->container->getParameter('nokia_maps_app_code'),
        ));
    }

    /**
     * @param Request $request
     * @param $rating
     * @param $greenObjectId
     * @return JsonResponse
     */
    private function handleRatingUpdate(Request $request, $rating, $greenObjectId)
    {
        if(!isset($rating) || $rating == ''){
            $this->error('No rating value provided.');
        }

        // Valid the rating amount that was entered.
        if(!preg_match("/[0-5](?:\.5)/", $rating) && $rating < 0 && $rating > 5){
            $this->error('Invalid rating provided.');
        }
        $ratingQueryService = $this->get('fish_and_places.rating_query_service');

        $greenObjectQueryService = $this->get('fish_and_places.green_object_query_service');


        try {
            /**
             * @var GreenObjectRepresentation $greenObject
             */
            $greenObject = $greenObjectQueryService->getGreenObject($greenObjectId);

            if (false !== $greenObject) {
                if($ratingQueryService->getAlreadyExisting($greenObject, $request->getClientIp())) {
                    return $this->error('That IP address has already voted, please try using another IP.', $greenObject->getAvgRating());
                }
            }

            $ratingRepresentation = new GreenObjectRatingRepresentation();
            $ratingRepresentation->setGreenObject($greenObject->getGreenObject());
            $ratingRepresentation->setRating($rating);
            $ratingRepresentation->setIp($request->server->get('REMOTE_ADDR'));
            $ratingRepresentation->setTime(new \DateTime('now'));

            $updateCommand = new UpdateGreenObjectRatingCommand($greenObject, [$ratingRepresentation]);
            $service  = $greenObjectService = GreenObjectServiceFactory::initService(
                $greenObject->getGreenObject(),
                $this->container
            );
            $service->update($updateCommand);

            $updatedGreenObject = $greenObjectQueryService->getGreenObject($greenObjectId);

            return new JsonResponse(
                [
                    'result' => 'success',
                    'rating' => $updatedGreenObject->getAvgRating()
                ],
                Response::HTTP_OK
            );
        } catch (\Exception $exception) {
            return $this->error($exception->getTraceAsString());
        }
    }

    /**
     * @param $message
     * @param null|float $oldRating
     * @return JsonResponse
     */
    private function error($message, $oldRating = null)
    {
        return new JsonResponse([
            'result' => 'error',
            'msg' => $message,
            'oldRating' => $oldRating
        ], Response::HTTP_BAD_REQUEST);

    }

    /**
     * @param $type
     * @return \FishAndPlaces\GreenObject\Application\GreenObject\Cabin\CabinService|\FishAndPlaces\GreenObject\Application\GreenObject\Camp\CampService|\FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamService|\FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\VillageHolidayService|object
     */
    private function decideService($type)
    {
        switch ($type) {
            case GreenObjecType::DAM : return $this->get('fish_and_places.dam_service');
            case GreenObjecType::CABIN : return $this->get('fish_and_places.cabin_service');
            case GreenObjecType::CAMP : return $this->get('fish_and_places.camp_service');
            case GreenObjecType::VILLAGE_HOLIDAY : return $this->get('fish_and_places.village_holiday_service');
            default : throw new RuntimeException('Unexpected type');
        }
    }
}
