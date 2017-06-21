<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\ImportGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class ImportCabinCommand extends ImportGreenObjectCommand
{
    /**
     * @var Cabin
     */
    protected $greenObject;

    /**
     * @param CabinRepresentation $cabinRepresentation
     */
    public function __construct(CabinRepresentation $cabinRepresentation)
    {
        parent::__construct($cabinRepresentation, new Cabin());
        $this->greenObject->setType(GreenObjectType::DAM);
    }

    /**
     * @return Cabin
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
