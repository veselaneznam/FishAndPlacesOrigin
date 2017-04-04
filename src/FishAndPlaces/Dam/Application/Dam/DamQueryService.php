<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Repository\DamRepository;
use FishAndPlaces\Dam\Domain\Value\Location;
use FishAndPlaces\Geocoder\GeocoderProxyInterface;

class DamQueryService
{
    /** @var DamRepository */
    private $damRepository;

    /** @var GeocoderProxyInterface */
    private $geocoderProxy;

    /**
     * @param DamRepository          $damRepository
     * @param GeocoderProxyInterface $geocoderProxy
     */
    public function __construct(DamRepository $damRepository, GeocoderProxyInterface $geocoderProxy)
    {
        $this->damRepository = $damRepository;
        $this->geocoderProxy = $geocoderProxy;
    }

    /**
     * @return array
     */
    public function getDamCollection()
    {
        $damCollection = $this->damRepository->findAll();

        return array_map(
            function (Dam $dam) {
                return new DamRepresentation($dam);
            }, $damCollection
        );
    }

    /**
     * @param string $data
     *
     * @return DamRepresentation[]
     */
    public function search($data)
    {
        $address = $this->geocoderProxy->geocode($data)->first();
        $searchResultByLocation = $this->damRepository->findByLocation(
            new Location($address->getLatitude(), $address->getLongitude()
            )
        );
        return $this->convertToRepresentation($searchResultByLocation);
    }

    /**
     * @param Location $location
     *
     * @return DamRepresentation[]
     */
    public function searchNearBy(Location $location)
    {
        $searchResultByLocation = $this->damRepository->findByNearByLocation(
            new Location($location->getLat(), $location->getLon())
        );
        return $this->convertToRepresentation($searchResultByLocation);
    }

    /**
     * @param Dam[] $searchResultByLocation
     *
     * @return DamRepresentation[]
     */
    private function convertToRepresentation($searchResultByLocation)
    {
        if (null !== $searchResultByLocation) {
            return array_map(
                function ($dam) {
                    return new DamRepresentation($dam);
                }, $searchResultByLocation
            );
        }
    }
}
