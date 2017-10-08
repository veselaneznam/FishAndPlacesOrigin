<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Repository\CabinRepository;
use FishAndPlaces\GreenObject\Domain\Repository\RatingRepository;

class CabinService extends GreenObjectService
{
    /** @var CabinRepository */
    protected $cabinRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /** @var GreenObjectImagesRepository */
    protected $cabinImagesRepository;

    /**
     * @var RatingRepository
     */
    protected $ratingRepository;


    /**
     * @param CabinRepository $cabinRepository
     * @param GeoLocatorService $geoLocatorService
     * @param GreenObjectImagesRepository $cabinImagesRepository
     * @param RatingRepository $ratingRepository
     */
    public function __construct(
        CabinRepository $cabinRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $cabinImagesRepository,
        RatingRepository $ratingRepository
    ) {
        parent::__construct($cabinRepository, $geoLocatorService, $cabinImagesRepository, $ratingRepository);
    }
}
