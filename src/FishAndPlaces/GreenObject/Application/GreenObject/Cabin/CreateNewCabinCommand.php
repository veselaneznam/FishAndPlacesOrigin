<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;

class CreateNewCabinCommand extends CreateNewGreenObjectCommand
{
    /** @var Cabin */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param CabinRepresentation $cabinRepresentation
     * @param string $fileName
     * @internal param User $user
     */
    public function __construct(CabinRepresentation $cabinRepresentation, $fileName = null)
    {
        parent::__construct($cabinRepresentation, new Cabin(), $fileName);
    }
}
