<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\ImportGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class ImportCampCommand extends ImportGreenObjectCommand
{
    /**
     * @var Camp
     */
    protected $greenObject;

    /**
     * @param CampRepresentation $campRepresentation
     */
    public function __construct(CampRepresentation $campRepresentation)
    {
        parent::__construct($campRepresentation, new Camp());
        $this->greenObject->setType(GreenObjectType::DAM);
    }

    /**
     * @return Camp
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
