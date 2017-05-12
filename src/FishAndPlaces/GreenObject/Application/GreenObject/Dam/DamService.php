<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectService;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
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
     * @param DamRepository               $cabinRepository
     * @param GeoLocatorService           $geoLocatorService
     * @param GreenObjectImagesRepository $imagesRepository
     * @param FishRepository              $fishRepository
     */
    public function __construct(
        DamRepository $cabinRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $imagesRepository,
        FishRepository $fishRepository
    ) {
        parent::__construct($cabinRepository, $geoLocatorService, $imagesRepository);
        $this->fishRepository = $fishRepository;
    }

    /**
     * @param UpdateDamCommand $command
     *
     * @throws \Exception
     */
    public function update(UpdateDamCommand $command)
    {
        parent::update($command);

        $dam = $command->getGreenObject();
        if(!$dam instanceof Dam) {
            throw new \Exception('You are trying to save, something different from Dam');
        }

        foreach ($dam->getFishCollection() as $fish)
        {
            $this->fishRepository->update($fish);
        }

        $this->damRepository->update($dam);
    }
}
