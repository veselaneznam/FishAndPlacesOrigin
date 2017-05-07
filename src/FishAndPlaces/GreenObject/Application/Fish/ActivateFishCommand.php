<?php

namespace FishAndPlaces\GreenObject\Application\Fish;

use FishAndPlaces\GreenObject\Domain\Model\Fish;
use FishAndPlaces\User\Domain\Model\User;

class ActivateFishCommand extends UpdateFishCommand
{
    /**
     * @var Fish
     */
    protected $fish;

    public function __construct(FishRepresentation $fishRepresentation, User $user)
    {
        parent::__construct($fishRepresentation, $user);
        $this->fish->setIsActive(1);
    }
}
