<?php

namespace FishAndPlaces\Dam\Applicaiton\Fish;

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
     * @return \Generator
     */
    public function getFishCollection()
    {
        $fishCollection = $this->fishRepository->findAll();
        foreach ($fishCollection as $fish) {
            yield new FishRepresentation($fish);
        }
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
            $list[$fish->getId()] = $fish->getName();
        }
        return $list;
    }
}
