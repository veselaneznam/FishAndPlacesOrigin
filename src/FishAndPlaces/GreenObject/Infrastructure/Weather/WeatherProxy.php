<?php

namespace FishAndPlaces\GreenObject\Infrastructure\Weather;

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
     * @return mixed
     */
    public function findDailyWeatherByLocation(Location $location)
    {
        $url = sprintf(
            self::BASE_URL . '&product=observation&latitude=%s&longitude=%s',
            $this->container->getParameter('weather_app_id'),
            $this->container->getParameter('weather_app_code'),
            $location->getLat(),
            $location->getLon()
        );

        $response = $this->client->request('GET', $url);

        if ($response->getStatusCode() == Response::HTTP_OK) {
            $result = \GuzzleHttp\json_decode($response->getBody());
            var_dump($result);die;

        } else {
            throw new BadRequestHttpException($response->getReasonPhrase());
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