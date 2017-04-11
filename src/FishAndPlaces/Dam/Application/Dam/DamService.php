<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Repository\DamImagesRepository;
use FishAndPlaces\Dam\Domain\Repository\DamRepository;

class DamService
{
    /** @var DamRepository */
    private $damRepository;

    /** @var GeoLocatorService */
    private $geoLocatorService;

    /** @var DamImagesRepository */
    private $damImagesRepository;

    /**
     * @param DamRepository       $damRepository
     * @param GeoLocatorService   $geoLocatorService
     * @param DamImagesRepository $damImagesRepository
     */
    public function __construct(
        DamRepository $damRepository,
        GeoLocatorService $geoLocatorService,
        DamImagesRepository $damImagesRepository
    ) {
        $this->damRepository = $damRepository;
        $this->geoLocatorService = $geoLocatorService;
        $this->damImagesRepository = $damImagesRepository;
    }

    /**
     * @param CreateNewDamCommand $command
     */
    public function create(CreateNewDamCommand $command)
    {
        $location = $this->geoLocatorService->getLocation($command->getDam()->getLocation());
        $dam = $command->getDam();
        $dam->setLongitude($location->getLongitude());
        $dam->setLatitude($location->getLatitude());
        $this->damRepository->add($dam);
        $damImage = $command->getDamImage();
        if(null !== $damImage) {
            $damImage->setDam($dam);
            $this->damImagesRepository->add($damImage);
        }
    }

    /**
     * @param UpdateDamCommand $command
     */
    public function update(UpdateDamCommand $command)
    {
        $location = $this->geoLocatorService->getLocation($command->getDam()->getLocation());
        $dam = $command->getDam();
        $dam->setLongitude($location->getLongitude());
        $dam->setLatitude($location->getLatitude());;
        $this->damRepository->update($dam);
        $damImage = $command->getDamImage();
        if (null !== $damImage) {
            $damImage->setDam($dam);
            $this->damImagesRepository->resetMain($dam);
            $this->damImagesRepository->update($damImage);
        }
    }

    /**
     * @param ActivateDamCommand $command
     */
    public function activate(ActivateDamCommand $command)
    {
        $this->damRepository->update($command->getDam());
    }

    public function deactivate(DeactivateDamCommand $command)
    {
        $this->damRepository->update($command->getDam());
    }

    public function updateImages(UpdateDamImagesCommand $command)
    {
        foreach ($command->getDam()->getImageCollection() as $damImage) {
            $this->damImagesRepository->update($damImage);
        }
    }

    /**
     * @param DeleteDamImagesCommand $command
     */
    public function deleteDamImages(DeleteDamImagesCommand $command)
    {
        foreach ($command->getDamImages() as $damImage) {
            $this->damImagesRepository->remove($damImage);
        }
    }
}
