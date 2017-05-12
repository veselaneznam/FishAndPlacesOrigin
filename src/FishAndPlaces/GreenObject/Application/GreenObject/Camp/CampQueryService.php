<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Repository\CampRepository;

class CampQueryService extends GreenObjectQueryService
{
    /**
     * @var CampRepository
     */
    protected $greenObjectRepository;

    /**
     * @param array $collection
     *
     * @return CampRepresentation[]
     */
    protected function convertToRepresentation(array $collection)
    {
        if (null !== $collection) {
            return array_map(
                function (Camp $cabin) {
                    $campRepresentation = new CampRepresentation($cabin);
                    return $campRepresentation;
                }, $collection
            );
        }
        return [];
    }

    /**
     * @return CampRepresentation[]
     */
    public function getCollection()
    {
        $campCollection = $this->greenObjectRepository->findAll();

        return array_map(
            function (Camp $camp) {
                return new CampRepresentation($camp);
            }, $campCollection
        );
    }

    /**
     * @param int $id
     *
     * @return CampRepresentation
     */
    public function find($id)
    {
        return new CampRepresentation($this->greenObjectRepository->find($id));
    }

    /**
     * @param string $name
     *
     * @return CampRepresentation[]
     */
    public function findByName($name)
    {
        $campCollection = $this->greenObjectRepository->findByName($name);

        return $this->convertToRepresentation($campCollection);
    }
}
