<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;
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
     * @param string            $fileName
     */
    public function __construct(DamRepresentation $damRepresentation, $fileName = null)
    {

        parent::__construct($damRepresentation, new Dam(), $fileName);

        foreach ($damRepresentation->getFishCollection() as $fishRepresentation) {
            $this->greenObject->addFish($fishRepresentation->getFish());
        }
        $this->greenObject->setType(GreenObjectType::DAM);
    }
}
