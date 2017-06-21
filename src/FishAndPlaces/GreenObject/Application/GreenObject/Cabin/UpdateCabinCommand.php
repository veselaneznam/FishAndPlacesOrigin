<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class UpdateCabinCommand extends UpdateGreenObjectCommand
{
    /** @var Cabin */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param CabinRepresentation $greenObjectRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(CabinRepresentation $greenObjectRepresentation, User $user , $fileName = null)
    {
        parent::__construct($greenObjectRepresentation, new Cabin(), $user, $fileName);
    }
}
