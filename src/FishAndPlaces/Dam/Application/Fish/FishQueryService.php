<?php

namespace FishAndPlaces\Dam\Application\Fish;

use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\Dam\Domain\Repository\FishRepository;

class FishQueryService
{
    /** @var FishRepository */
    private $fishRepository;

    /**
     * @param FishRepository $fishRepository
     */
    public function __construct(FishRepository $fishRepository)
    {
        $this->fishRepository = $fishRepository;
    }

    /**
     * @return Fish[]
     */
    public function getFishCollection()
    {
        return $fishCollection = $this->fishRepository->findAll();
    }

    /**
     * @return array
     */
    public function getFishSelect()
    {
        $list = [];
        /**
         * @var FishRepresentation $fish
         */
        foreach ($this->getFishCollection() as $fish) {
            $list[$fish->getName()] = $fish;
        }
        return $list;
    }
}
