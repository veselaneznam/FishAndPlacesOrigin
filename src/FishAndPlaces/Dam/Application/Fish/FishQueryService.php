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
     * @return FishRepresentation[]
     */
    public function getFishCollection()
    {
        return $this->convertToRepresentation($this->fishRepository->findAll());
    }

    /**
     * @param int $id
     *
     * @return FishRepresentation
     */
    public function getFish($id)
    {
        return new FishRepresentation($this->fishRepository->find($id));
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

    /**
     * @param $name
     *
     * @return FishRepresentation[]
     */
    public function getFishByName($name)
    {
        return $this->convertToRepresentation($this->fishRepository->findByName($name));
    }

    /**
     * @param Fish[] $result
     *
     * @return FishRepresentation[]
     */
    private function convertToRepresentation($result)
    {
        if (null !== $result) {
            return array_map(
                function (Fish $fish) {
                    $fishRepresentation = new FishRepresentation($fish);
                    return $fishRepresentation;
                }, $result
            );
        }
        return [];
    }

}
