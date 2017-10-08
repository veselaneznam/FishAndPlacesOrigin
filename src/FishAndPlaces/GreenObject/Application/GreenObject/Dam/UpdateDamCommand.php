<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;

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
     * @param string            $fileName
     */
    public function __construct(DamRepresentation $greenObjectRepresentation, $fileName = null)
    {
        parent::__construct($greenObjectRepresentation, new Dam(), $fileName);
        foreach ($greenObjectRepresentation->getFishCollection() as $fishRepresentation) {
            $this->greenObject->addFish($fishRepresentation->getFish());
        }
    }
}
