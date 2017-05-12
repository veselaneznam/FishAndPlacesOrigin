<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class CreateNewDamCommand extends CreateNewGreenObjectCommand
{
    /** @var Dam */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param DamRepresentation $campRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(DamRepresentation $campRepresentation, User $user, $fileName = null)
    {

        parent::__construct($campRepresentation, new Dam(), $user, $fileName);

        foreach ($campRepresentation->getFishCollection() as $fishRepresentation) {
            $this->greenObject->addFish($fishRepresentation->getFish());
        }
    }
}
