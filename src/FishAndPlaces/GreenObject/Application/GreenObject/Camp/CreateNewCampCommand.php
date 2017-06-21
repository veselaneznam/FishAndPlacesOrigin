<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class CreateNewCampCommand extends CreateNewGreenObjectCommand
{
    /** @var Camp */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param CampRepresentation $campRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(CampRepresentation $campRepresentation, User $user, $fileName = null)
    {
        parent::__construct($campRepresentation, new Camp(), $user, $fileName);
    }
}
