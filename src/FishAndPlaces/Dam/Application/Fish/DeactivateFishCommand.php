<?php

namespace FishAndPlaces\Dam\Application\Fish;

use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\User\Domain\Model\User;

class DeactivateFishCommand extends UpdateFishCommand
{
    /**
     * @var Fish
     */
    protected $fish;

    public function __construct(FishRepresentation $fishRepresentation, User $user)
    {
        parent::__construct($fishRepresentation, $user);
        $this->fish->setIsActive(0);
    }
}
