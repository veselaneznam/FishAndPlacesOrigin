<?php

namespace FishAndPlaces\GreenObject\Application\Weather;

use FishAndPlaces\GreenObject\Domain\Repository\WeatherRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location;

/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 25.06.17
 * Time: 13:11
 */
class WeatherService
{
    /**
     * @var WeatherRepository
     */
    private $weatherRepository;

    /**
     * WeatherService constructor.
     * @param WeatherRepository $weatherRepository
     */
    public function __construct(WeatherRepository $weatherRepository)
    {
        $this->weatherRepository = $weatherRepository;
    }

    /**
     * @param Location $location
     * @return mixed
     */
    public function getDailyWeatherByLocation(Location $location)
    {
        return $this->weatherRepository->findDailyWeatherByLocation($location);
    }

    /**
     * @param Location $location
     * @return mixed
     */
    public function getWeeklyWeatherByLocation(Location $location)
    {
        return $this->weatherRepository->findWeeklyWeatherByLocation($location);
    }
}