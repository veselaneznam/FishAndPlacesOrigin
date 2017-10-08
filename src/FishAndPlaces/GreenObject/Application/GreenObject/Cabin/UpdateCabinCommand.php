<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;

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
     * @param string            $fileName
     */
    public function __construct(CabinRepresentation $greenObjectRepresentation, $fileName = null)
    {
        parent::__construct($greenObjectRepresentation, new Cabin(), $fileName);
    }
}
