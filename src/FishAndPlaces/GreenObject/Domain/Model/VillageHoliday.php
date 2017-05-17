<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class VillageHoliday extends GreenObject implements Entity
{
    /**
     * @return int
     */
    public function getType()
    {
        return GreenObjectType::VILLAGE_HOLIDAY;
    }
}
