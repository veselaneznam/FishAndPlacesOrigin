<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Repository\CabinRepository;

class CabinQueryService extends GreenObjectQueryService
{

    /**
     * @var CabinRepository
     */
    protected $greenObjectRepository;

    /**
     * @return array
     */
    public function getCollection()
    {
        $cabinCollection = $this->greenObjectRepository->findAll();

        return array_map(
            function (Cabin $cabin) {
                return new CabinRepresentation($cabin);
            }, $cabinCollection
        );
    }

    /**
     * @param array $collection
     *
     * @return CabinRepresentation[]
     */
    protected function convertToRepresentation(array $collection)
    {
        if (null !== $collection) {
            return array_map(
                function (Cabin $cabin) {
                    $cabinRepresentation = new CabinRepresentation($cabin);
                    return $cabinRepresentation;
                }, $collection
            );
        }
        return [];
    }

    /**
     * @param $id
     *
     * @return CabinRepresentation
     */
    public function find($id)
    {
        return new CabinRepresentation($this->greenObjectRepository->find($id));
    }

    /**
     * @param string $name
     *
     * @return CabinRepresentation[]
     */
    public function findByName($name)
    {
        $cabinCollection = $this->greenObjectRepository->findByName($name);

        return $this->convertToRepresentation($cabinCollection);
    }

}
