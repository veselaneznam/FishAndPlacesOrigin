<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class CreateNewCabinCommand extends CreateNewGreenObjectCommand
{
    /** @var Cabin */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param CabinRepresentation $campRepresentation
     * @param User                $user
     * @param string              $fileName
     */
    public function __construct(CabinRepresentation $campRepresentation, User $user, $fileName = null)
    {
        parent::__construct($campRepresentation, new Cabin(), $user, $fileName);
    }
}
