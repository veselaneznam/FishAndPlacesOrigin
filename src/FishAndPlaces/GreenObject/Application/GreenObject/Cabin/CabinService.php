<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Repository\CabinRepository;

class CabinService extends GreenObjectService
{
    /** @var CabinRepository */
    protected $cabinRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /** @var GreenObjectImagesRepository */
    protected $cabinImagesRepository;


    /**
     * @param CabinRepository               $cabinRepository
     * @param GeoLocatorService           $geoLocatorService
     * @param GreenObjectImagesRepository $cabinImagesRepository
     */
    public function __construct(
        CabinRepository $cabinRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $cabinImagesRepository
    ) {
        parent::__construct($cabinRepository, $geoLocatorService, $cabinImagesRepository);
    }
}
