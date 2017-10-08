<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\DeactivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;

class DeactivateCabinCommand extends DeactivateGreenObjectCommand
{
    /**
     * @var Cabin
     */
    protected $greenObject;

    /**
     * @param CabinRepresentation $greenObjectRepresentation
     */
    public function __construct(CabinRepresentation $greenObjectRepresentation)
    {
        parent::__construct($greenObjectRepresentation, new Cabin());
    }
}
