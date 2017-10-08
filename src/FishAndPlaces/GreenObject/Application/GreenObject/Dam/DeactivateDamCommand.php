<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\GreenObject\DeactivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\User\Domain\Model\User;

class DeactivateDamCommand extends DeactivateGreenObjectCommand
{
    /**
     * @var Dam
     */
    protected $greenObject;

    /**
     * @param DamRepresentation $greenObjectRepresentation
     */
    public function __construct(DamRepresentation $greenObjectRepresentation)
    {
        parent::__construct($greenObjectRepresentation, new Dam());
    }
}
