<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectQueryService;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\GreenObject\Domain\Repository\VillageHolidayRepository;

class VillageHolidayQueryService extends GreenObjectQueryService
{
    /**
     * @var VillageHolidayRepository
     */
    protected $greenObjectRepository;


    /**
     * @param array $collection
     *
     * @return VillageHolidayRepresentation[]
     */
    protected function convertToRepresentation(array $collection)
    {
        if (null !== $collection) {
            return array_map(
                function (VillageHoliday $villageHoliday) {
                    $villageHolidayRepresentation = new VillageHolidayRepresentation($villageHoliday);
                    return $villageHolidayRepresentation;
                }, $collection
            );
        }
        return [];
    }

    /**
     * @return VillageHolidayRepresentation[]
     */
    public function getCollection()
    {
        $villageHolidayCollection = $this->greenObjectRepository->findAll();

        return array_map(
            function (VillageHoliday $villageHoliday) {
                return new VillageHolidayRepresentation($villageHoliday);
            }, $villageHolidayCollection
        );
    }

    /**
     * @param int $id
     *
     * @return VillageHolidayRepresentation
     */
    public function find($id)
    {
        return new VillageHolidayRepresentation($this->greenObjectRepository->find($id));
    }

    /**
     * @param string $name
     *
     * @return VillageHolidayRepresentation[]
     */
    public function findByName($name)
    {
        $villageHolidayCollection = $this->greenObjectRepository->findByName($name);

        return $this->convertToRepresentation($villageHolidayCollection);
    }
}
