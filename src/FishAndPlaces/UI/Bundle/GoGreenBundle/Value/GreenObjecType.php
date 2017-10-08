<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 03.09.17
 * Time: 15:59
 */

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Value;


class GreenObjecType
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