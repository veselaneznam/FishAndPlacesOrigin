<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\ImportGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;

class ImportVillageHolidayCommand extends ImportGreenObjectCommand
{
    /** @var VillageHoliday */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param VillageHolidayRepresentation $villageHolidayRepresentation
     */
    public function __construct(VillageHolidayRepresentation $villageHolidayRepresentation)
    {
        parent::__construct($villageHolidayRepresentation, new VillageHoliday());
    }
}
