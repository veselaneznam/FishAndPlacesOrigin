<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\DeactivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\User\Domain\Model\User;

class DeactivateCabinCommand extends DeactivateGreenObjectCommand
{
    /**
     * @var Cabin
     */
    protected $greenObject;

    /**
     * @param CabinRepresentation $greenObjectRepresentation
     * @param User              $user
     */
    public function __construct(CabinRepresentation $greenObjectRepresentation, User $user)
    {
        parent::__construct($greenObjectRepresentation, new Cabin(), $user);
    }
}
