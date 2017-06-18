<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class UpdateDamCommand extends UpdateGreenObjectCommand
{
    /** @var Dam */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param DamRepresentation $greenObjectRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(DamRepresentation $greenObjectRepresentation, User $user , $fileName = null)
    {
        parent::__construct($greenObjectRepresentation, new Dam(), $user, $fileName);
        foreach ($greenObjectRepresentation->getFishCollection() as $fishRepresentation) {
            $this->greenObject->addFish($fishRepresentation->getFish());
        }
    }
}
