<?php

namespace FishAndPlaces\GreenObject\Infrastructure\Weather;

use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\CurrentWeather;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
use FishAndPlaces\GreenObject\Domain\Repository\WeatherRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location;
use GuzzleHttp\Client;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 25.06.17
 * Time: 13:24
 */
class WeatherProxy implements WeatherRepository
{
    const BASE_URL = 'https://weather.cit.api.here.com/weather/1.0/report.json?app_id=%s&app_code=%s';

    /**
     * @var Client
     */
    private $client;
    /**
     * @var ContainerInterface
     */
    private $container;


    public function __construct(ContainerInterface $container)
    {
        $this->client = new Client();
        $this->container = $container;
    }

    /**
     * @param Location $location
     * @return CurrentWeather
     */
    public function findDailyWeatherByLocation(Location $location)
    {
        $lang = 'bg';
        $units = 'metric';

        $openWeatherMap = new OpenWeatherMap($this->container->getParameter('open_map_weather_api_key'));

        try {
            return $openWeatherMap->getWeather(['lat' => $location->getLat(), 'lon' => $location->getLon()], $units, $lang);
        } catch(OWMException $e) {
            $this->container->get('logger')->error('OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').');
        } catch(\Exception $e) {
            $this->container->get('logger')->error('General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').');
        }
    }

    /**
     * @param Location $location
     * @return mixed
     */
    public function findWeeklyWeatherByLocation(Location $location)
    {
        // TODO: Implement findWeeklyWeatherByLocation() method.
    }
}