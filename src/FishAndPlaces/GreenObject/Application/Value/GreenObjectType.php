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

    const TYPE_TO_ICON = [
        self::DAM => '/images/FREE-map-parkers-png/free-map-marker-icon-blue-darker.png',
        self::CAMP => '/images/FREE-map-parkers-png/free-map-marker-icon-green-darker.png',
        self::CABIN => '/images/FREE-map-parkers-png/free-map-marker-icon-orange.png',
        self::VILLAGE_HOLIDAY => '/images/FREE-map-parkers-png/free-map-marker-icon-pink.png',
    ];
}
