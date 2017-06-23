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
        $result = [];
        foreach ($collection as $entity) {
            if ($entity instanceof Dam) {
                $result[] = new DamRepresentation($entity);
            }

            if ($entity instanceof Cabin) {
                $result[] = new CabinRepresentation($entity);
            }

            if ($entity instanceof Camp) {
                $result[] = new CampRepresentation($entity);
            }

            if ($entity instanceof VillageHoliday) {
                $result[] = new VillageHolidayRepresentation($entity);
            }
        }
        return $result;
    }


    /**
     * @param string $data
     *
     * @param null|int   $radius
     *
     * @return GreenObjectRepresentation[]
     */
    public function findByDataAndRadius($data, $radius = null)
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
    public function findNearBy(Location $location)
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

        return $this->convertToRepresentation($greenObjects);
    }
}
