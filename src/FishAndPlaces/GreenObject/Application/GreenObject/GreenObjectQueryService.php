<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location as DomainLocation;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Value\Location;

abstract class GreenObjectQueryService
{
    /** @var GreenObjectRepository */
    protected $greenObjectRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /**
     * @param GreenObjectRepository     $objectRepository
     * @param GeoLocatorService $geoLocatorService
     */
    public function __construct(
        GreenObjectRepository $objectRepository,
        GeoLocatorService $geoLocatorService
    ) {
        $this->greenObjectRepository = $objectRepository;
        $this->geoLocatorService = $geoLocatorService;
    }

    /**
     * @param array $collection
     *
     * @return GreenObjectRepresentation[]
     */
    abstract protected function convertToRepresentation(array $collection);

    /**
     * @return GreenObjectRepresentation[]
     */
    abstract public function getCollection();

    /**
     * @param int $id
     *
     * @return GreenObjectRepresentation
     */
    abstract public function find($id);

    /**
     * @param string $name
     *
     * @return GreenObjectRepresentation
     */
    abstract public function findByName($name);

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

    /**
     * @return GreenObjectRepresentation[]
     */
    public function getFistPageList()
    {
        $greenObjects = $this->greenObjectRepository->findByFirstPage();

        return $this->convertToRepresentation($greenObjects);
    }
}
