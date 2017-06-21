<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Repository\CampRepository;

class CampService extends GreenObjectService
{
    /** @var CampRepository */
    protected $campRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /** @var GreenObjectImagesRepository */
    protected $campImagesRepository;


    /**
     * @param CampRepository               $campRepository
     * @param GeoLocatorService           $geoLocatorService
     * @param GreenObjectImagesRepository $campImagesRepository
     */
    public function __construct(
        CampRepository $campRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $campImagesRepository
    ) {
        parent::__construct($campRepository, $geoLocatorService, $campImagesRepository);
    }
}
