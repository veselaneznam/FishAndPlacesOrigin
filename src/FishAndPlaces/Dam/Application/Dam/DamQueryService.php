<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Repository\DamRepository;
use FishAndPlaces\Dam\Domain\Value\Location as DomainLocation;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;

class DamQueryService
{
    /** @var DamRepository */
    private $damRepository;

    /** @var GeoLocatorService */
    private $geoLocatorService;

    /**
     * @param DamRepository     $damRepository
     * @param GeoLocatorService $geoLocatorService
     */
    public function __construct(
        DamRepository $damRepository,
        GeoLocatorService $geoLocatorService
    )
    {
        $this->damRepository = $damRepository;
        $this->geoLocatorService = $geoLocatorService;
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
        $searchResultByLocation = [];
        if (null !== $data) {
            $address = $this->geoLocatorService->getLocation($data);
            if (null !== $address) {
                $searchResultByLocation = $this->damRepository->findByLocation(
                    new DomainLocation($address->getLatitude(), $address->getLongitude()
                    )
                );
            }
        } else {
            $searchResultByLocation = $this->damRepository->findAll();
        }

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
            new DomainLocation($location->getLat(), $location->getLon())
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
                function (Dam $dam) {
                    $damrepresentaiotn = new DamRepresentation($dam);
                    return $damrepresentaiotn;
                }, $searchResultByLocation
            );
        }
        return [];
    }

    public function searchDam($data)
    {

    }

    /**
     * @return DamRepresentation[]
     */
    public function getFistPageList()
    {
        $damCollection = $this->damRepository->findByFirstPage();

        return $this->convertToRepresentation($damCollection);
    }

    /**
     * @param $id
     *
     * @return DamRepresentation
     */
    public function getDam($id)
    {
        return new DamRepresentation($this->damRepository->find($id));
    }
}
