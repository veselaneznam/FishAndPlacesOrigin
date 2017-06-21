<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\Cabin\CabinRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\Camp\CampRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\VillageHolidayRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location as DomainLocation;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Value\Location;

class GreenObjectQueryService
{
    /** @var GreenObjectRepository */
    protected $greenObjectRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /**
     * @param GreenObjectRepository $objectRepository
     * @param GeoLocatorService $geoLocatorService
     */
    public function __construct(
        GreenObjectRepository $objectRepository,
        GeoLocatorService $geoLocatorService
    )
    {
        $this->greenObjectRepository = $objectRepository;
        $this->geoLocatorService = $geoLocatorService;
    }

    /**
     * @param array $collection
     *
     * @return GreenObjectRepresentation[]
     */
    protected function convertToRepresentation(array $collection)
    {
        $collection =  array_map(function ($entity) {

            if ($entity instanceof Dam) {
                return new DamRepresentation($entity);
            }

            if ($entity instanceof Cabin) {
                return new CabinRepresentation($entity);
            }

            if ($entity instanceof Camp) {
                return new CampRepresentation($entity);
            }

            if ($entity instanceof VillageHoliday) {
                return new VillageHolidayRepresentation($entity);
            }
            return null;
        },
            $collection
        );

        return array_filter($collection);
    }


    /**
     * @param string $data
     *
     * @param null|int   $radius
     *
     * @return GreenObjectRepresentation[]
     */
    public function search($data, $radius = null)
    {
        $searchResultByLocation = [];
        if (null !== $data) {
            $address = $this->geoLocatorService->getLocation($data);
            if (!empty($address)) {
                $searchResultByLocation = $this->greenObjectRepository->findByLocation($address, $radius);
            }
        }

        return $this->convertToRepresentation($searchResultByLocation);
    }

    /**
     * @param Location $location
     *
     * @return GreenObjectRepresentation[]
     */
    public function searchNearBy(Location $location)
    {
        $searchResultByLocation = $this->greenObjectRepository->findByNearByLocation(
            new DomainLocation($location->getLat(), $location->getLon())
        );
        return $this->convertToRepresentation($searchResultByLocation);
    }

    public function searchDam($data)
    {

    }

    /**
     * @return GreenObjectRepresentation[]
     */
    public function findByFirstPage()
    {
        $greenObjects = $this->greenObjectRepository->findByFirstPage();
        var_dump($greenObjects);die;

        return $this->convertToRepresentation($greenObjects);
    }
}
