<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;

class VillageHolidayRepresentation extends GreenObjectRepresentation
{
    /**
     * @var VillageHoliday
     */
    protected $greenObject;

    /**
     * @param VillageHoliday|null $villageHoliday
     */
    public function __construct(VillageHoliday $villageHoliday = null)
    {
        parent::__construct($villageHoliday);

        if (null !== $villageHoliday) {
            $this->greenObject = $villageHoliday;
        }
    }

    /**
     * @return VillageHoliday
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
