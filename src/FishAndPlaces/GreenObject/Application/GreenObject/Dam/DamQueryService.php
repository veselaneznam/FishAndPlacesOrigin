<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\Fish;
use FishAndPlaces\GreenObject\Domain\Repository\DamRepository;

class DamQueryService extends GreenObjectQueryService
{
    /**
     * @var DamRepository
     */
    protected $greenObjectRepository;

    /**
     * @return array
     */
    public function getDamCollection()
    {
        $damCollection = $this->greenObjectRepository->findAll();

        return array_map(
            function (Dam $dam) {
                return new DamRepresentation($dam);
            }, $damCollection
        );
    }

    /**
     * @param array $collection
     *
     * @return DamRepresentation[]
     */
    protected function convertToRepresentation(array $collection)
    {
        if (null !== $collection) {
            return array_map(
                function (Dam $dam) {
                    $damrepresentaiotn = new DamRepresentation($dam);
                    return $damrepresentaiotn;
                }, $collection
            );
        }
        return [];
    }

    /**
     * @param $id
     *
     * @return DamRepresentation
     */
    public function getDam($id)
    {
        return new DamRepresentation($this->greenObjectRepository->find($id));
    }

    /**
     * @param string $name
     *
     * @return DamRepresentation[]
     */
    public function getDamByName($name)
    {
        $damCollection = $this->greenObjectRepository->findByName($name);

        return $this->convertToRepresentation($damCollection);
    }

    /**
     * @param Fish $fish
     *
     * @return DamRepresentation[]
     */
    public function getDamByFish(Fish $fish)
    {
        $damCollection = $this->greenObjectRepository->findByFish($fish);
        return $this->convertToRepresentation($damCollection);
    }
}
