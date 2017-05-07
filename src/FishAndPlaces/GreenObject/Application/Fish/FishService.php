<?php

namespace FishAndPlaces\GreenObject\Application\Fish;

use FishAndPlaces\GreenObject\Domain\Repository\FishRepository;

class FishService
{
    /** @var FishRepository */
    private $fishRepository;

    /**
     * @param FishRepository $fishRepository
     */
    public function __construct(FishRepository $fishRepository)
    {
        $this->fishRepository = $fishRepository;
    }

    /**
     * @param CreateNewFishCommand $command
     */
    public function create(CreateNewFishCommand $command)
    {
        $this->fishRepository->add($command->getFish());
    }

    /**
     * @param UpdateFishCommand $command
     */
    public function update(UpdateFishCommand $command)
    {
        $this->fishRepository->update($command->getFish());
    }

    /**
     * @param ActivateFishCommand $command
     */
    public function activate(ActivateFishCommand $command)
    {
        $this->fishRepository->update($command->getFish());
    }

    /**
     * @param DeactivateFishCommand $command
     */
    public function deactivate(DeactivateFishCommand $command)
    {
        $this->fishRepository->update($command->getFish());
    }
}
