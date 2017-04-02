<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Value\Location as DomainLocation;
use FishAndPlaces\Dam\Domain\Repository\DamRepository;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;

class DamQueryService
{
    /** @var DamRepository */
    private $damRepository;

    /**
     * @param DamRepository $damRepository
     */
    public function __construct(DamRepository $damRepository)
    {
        $this->damRepository = $damRepository;
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
        $searchResultByLocation = $this->damRepository->findByLocation($data);
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
                function ($dam) {
                    return new DamRepresentation($dam);
                }, $searchResultByLocation
            );
        }
    }
}
