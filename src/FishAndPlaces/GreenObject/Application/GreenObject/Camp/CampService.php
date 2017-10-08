<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Repository\CampRepository;
use FishAndPlaces\GreenObject\Domain\Repository\RatingRepository;

class CampService extends GreenObjectService
{
    /** @var CampRepository */
    protected $campRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /** @var GreenObjectImagesRepository */
    protected $campImagesRepository;

    /**
     * @var RatingRepository
     */
    protected $ratingRepository;


    /**
     * @param CampRepository $campRepository
     * @param GeoLocatorService $geoLocatorService
     * @param GreenObjectImagesRepository $campImagesRepository
     * @param RatingRepository $ratingRepository
     */
    public function __construct(
        CampRepository $campRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $campImagesRepository,
        RatingRepository $ratingRepository
    ) {
        parent::__construct($campRepository, $geoLocatorService, $campImagesRepository, $ratingRepository);
    }
}
