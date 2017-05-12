<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\DeactivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class DeactivateCampCommand extends DeactivateGreenObjectCommand
{
    /** @var Camp */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param CampRepresentation $campRepresentation
     * @param User               $user
     */
    public function __construct(CampRepresentation $campRepresentation, User $user)
    {
        parent::__construct($campRepresentation, new Camp(), $user);
    }
}
