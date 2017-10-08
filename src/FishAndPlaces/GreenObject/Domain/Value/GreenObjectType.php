<?php

namespace FishAndPlaces\GreenObject\Domain\Value;

class GreenObjectType
{
    const DAM = 1;
    const CAMP = 2;
    const VILLAGE_HOLIDAY = 3;
    const CABIN = 4;

    const ALL = [
        self::DAM,
        self::CAMP,
        self::VILLAGE_HOLIDAY,
        self::CABIN,
    ];
}
