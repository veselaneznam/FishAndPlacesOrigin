<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\GreenObject\ImportGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class ImportDamCommand extends ImportGreenObjectCommand
{
    /**
     * @var Dam
     */
    protected $greenObject;

    /**
     * @param DamRepresentation $damRepresentation
     */
    public function __construct(DamRepresentation $damRepresentation)
    {
        parent::__construct($damRepresentation, new Dam());
        $this->greenObject->setType(GreenObjectType::DAM);
    }

    /**
     * @return Dam
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
