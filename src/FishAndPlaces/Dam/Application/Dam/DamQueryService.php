<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Repository\DamRepository;

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
     */
    public function search($data)
    {
        $searchResultByLocation = $this->damRepository->findByLocation($data);
        if (null !== $searchResultByLocation) {
            return $searchResultByLocation;
        }
    }
}
