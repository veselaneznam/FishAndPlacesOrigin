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
     * @param DamRepresentation $damRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(DamRepresentation $damRepresentation, User $user, $fileName = null)
    {

        parent::__construct($damRepresentation, new Dam(), $user, $fileName);

        foreach ($damRepresentation->getFishCollection() as $fishRepresentation) {
            $this->greenObject->addFish($fishRepresentation->getFish());
        }
    }
}
