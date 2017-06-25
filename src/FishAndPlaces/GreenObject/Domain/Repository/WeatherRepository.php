<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 25.06.17
 * Time: 13:14
 */

namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Value\Location;

interface  WeatherRepository
{
    /**
     * @param Location $location
     * @return mixed
     */
    public function findDailyWeatherByLocation(Location $location);

    /**
     * @param Location $location
     * @return mixed
     */
    public function findWeeklyWeatherByLocation(Location $location);
}