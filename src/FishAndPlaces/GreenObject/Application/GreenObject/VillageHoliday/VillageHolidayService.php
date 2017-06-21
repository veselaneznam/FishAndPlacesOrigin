<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Repository\VillageHolidayRepository;

class VillageHolidayService extends GreenObjectService
{
    /** @var VillageHolidayRepository */
    protected $villageHolidayRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /** @var GreenObjectImagesRepository */
    protected $villageHolidayImagesRepository;


    /**
     * @param VillageHolidayRepository               $villageHolidayRepository
     * @param GeoLocatorService           $geoLocatorService
     * @param GreenObjectImagesRepository $villageHolidayImagesRepository
     */
    public function __construct(
        VillageHolidayRepository $villageHolidayRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $villageHolidayImagesRepository
    ) {
        parent::__construct($villageHolidayRepository, $geoLocatorService, $villageHolidayImagesRepository);
    }
}
