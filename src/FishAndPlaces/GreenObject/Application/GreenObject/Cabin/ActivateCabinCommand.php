<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\ActivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;

class ActivateCabinCommand extends ActivateGreenObjectCommand
{
    /**
     * @var Cabin
     */
    protected $greenObject;


    /**
     * @param CabinRepresentation $greenObjectRepresentation
     * @internal param User $user
     */
    public function __construct(CabinRepresentation $greenObjectRepresentation)
    {
        parent::__construct($greenObjectRepresentation, new Cabin());
    }
}
