<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\ImportGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;

class ImportCampCommand extends ImportGreenObjectCommand
{
    /** @var Camp */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param CampRepresentation $villageHolidayRepresentation
     */
    public function __construct(CampRepresentation $villageHolidayRepresentation)
    {
        parent::__construct($villageHolidayRepresentation, new Camp());
    }
}
