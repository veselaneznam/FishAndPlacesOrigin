<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Repository\DamRepository;

class DamService
{
    /** @var DamRepository */
    private $damRepository;

    /** @var GeoLocatorService */
    private $geoLocatorService;

    public function __construct(
        DamRepository $damRepository,
        GeoLocatorService $geoLocatorService
    ) {
        $this->damRepository = $damRepository;
        $this->geoLocatorService = $geoLocatorService;
    }

    public function create(CreateNewDamCommand $command)
    {
        $location = $this->geoLocatorService->getLocation($command->getDam()->getLocation());
        $dam = $command->getDam();
        $dam->setLongitude($location->getLongitude());
        $dam->setLatitude($location->getLatitude());
        $this->damRepository->add($dam);
    }

    public function update(UpdateDamCommand $command)
    {
        $location = $this->geoLocatorService->getLocation($command->getDam()->getLocation());
        $dam = $command->getDam();
        $dam->setLongitude($location->getLongitude());
        $dam->setLatitude($location->getLatitude());
        $this->damRepository->update($dam);
    }
}
