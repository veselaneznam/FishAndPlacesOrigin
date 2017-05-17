<?php

namespace FishAndPlaces\GreenObject\Application\Value;

class GreenObjectType
{
    const DAM = 1;
    const CAMP = 2;
    const VILLAGE_HOLIDAY = 3;
    const CABIN = 4;

    const TYPE_TO_ROUTE_PREFIX = [
        self::DAM => 'dam',
        self::CAMP => 'camp',
        self::CABIN => 'cabin',
        self::VILLAGE_HOLIDAY => 'village_holiday',
    ];
}
