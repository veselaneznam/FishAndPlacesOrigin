<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Repository\DamRepository;
use FishAndPlaces\GreenObject\Domain\Repository\FishRepository;

class DamService extends GreenObjectService
{
    /** @var DamRepository */
    protected $damRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /** @var GreenObjectImagesRepository */
    protected $damImagesRepository;

    /** @var FishRepository */
    private $fishRepository;

    /**
     * @param DamRepository               $damRepository
     * @param GeoLocatorService           $geoLocatorService
     * @param GreenObjectImagesRepository $damImagesRepository
     * @param FishRepository              $fishRepository
     */
    public function __construct(
        DamRepository $damRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $damImagesRepository,
        FishRepository $fishRepository
    ) {
        parent::__construct($damRepository, $geoLocatorService, $damImagesRepository);
        $this->fishRepository = $fishRepository;
    }

//    /**
//     * @param UpdateDamCommand $command
//     *
//     * @throws \Exception
//     */
//    public function update(UpdateDamCommand $command)
//    {
//        parent::update($command);
//        $dam = $command->getGreenObject();
//        if(!$dam instanceof GreenObject) {
//            throw new \Exception('You are trying to save, something different from GreenObject');
//        }
//
//        foreach ($dam->getFishCollection() as $fish)
//        {
//            $this->fishRepository->update($fish);
//        }
//        $this->damRepository->update($dam);
//    }
}
