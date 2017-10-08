<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\DeactivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\User\Domain\Model\User;

class DeactivateCampCommand extends DeactivateGreenObjectCommand
{
    /**
     * @var Camp
     */
    protected $greenObject;

    /**
     * @param CampRepresentation $greenObjectRepresentation
     */
    public function __construct(CampRepresentation $greenObjectRepresentation)
    {
        parent::__construct($greenObjectRepresentation, new Camp());
    }
}
