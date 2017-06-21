<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\ImportGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class ImportVillageHolidayCommand extends ImportGreenObjectCommand
{
    /**
     * @var VillageHoliday
     */
    protected $greenObject;

    /**
     * @param VillageHolidayRepresentation $villageHolidayRepresentation
     */
    public function __construct(VillageHolidayRepresentation $villageHolidayRepresentation)
    {
        parent::__construct($villageHolidayRepresentation, new VillageHoliday());
        $this->greenObject->setType(GreenObjectType::DAM);
    }

    /**
     * @return VillageHoliday
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
