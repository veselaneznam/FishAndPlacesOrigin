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
     * @return array
     */
    public function getCollection()
    {
        $campCollection = $this->greenObjectRepository->findAllActive();

        return array_map(
            function (Camp $camp) {
                return new CampRepresentation($camp);
            }, $campCollection
        );
    }

    /**
     * @return array
     */
    public function getAdminCampCollection()
    {
        $campCollection = $this->greenObjectRepository->findAll();

        return array_map(
            function (Camp $camp) {
                return new CampRepresentation($camp);
            }, $campCollection
        );
    }


    /**
     * @param array $collection
     *
     * @return CampRepresentation[]
     */
    protected function convertToRepresentation(array $collection)
    {
        if (null !== $collection) {
            return array_map(
                function (Camp $camp) {
                    $campRepresentation = new CampRepresentation($camp);
                    return $campRepresentation;
                }, $collection
            );
        }
        return [];
    }

    /**
     * @param int $id
     *
     * @return CampRepresentation
     */
    public function getCamp(int $id) : CampRepresentation
    {
        return new CampRepresentation($this->greenObjectRepository->find($id));
    }

    /**
     * @param string $name
     *
     * @return CampRepresentation[]
     */
    public function getCampByName($name)
    {
        $campCollection = $this->greenObjectRepository->findByName($name);

        return $this->convertToRepresentation($campCollection);
    }
}
