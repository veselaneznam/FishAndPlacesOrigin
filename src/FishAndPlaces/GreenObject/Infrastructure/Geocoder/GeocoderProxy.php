<?php

namespace FishAndPlaces\GreenObject\Infrastructure\Geocoder;

use FishAndPlaces\GreenObject\Domain\Model\Geocoder\AddressProxy;
use FishAndPlaces\GreenObject\Domain\Model\Geocoder\GeocoderProxyInterface;

class GeocoderProxy implements GeocoderProxyInterface
{
    /**
     * @var \Geocoder\Provider\GoogleMaps
     */
    private $geocoder;

    public function __construct()
    {
        $curl = new \Ivory\HttpAdapter\CurlHttpAdapter();
        $this->geocoder = new \Geocoder\Provider\GoogleMaps($curl);
    }

    /**
     * @param string $address
     *
     * @return AddressProxy
     */
    public function geocode($address)
    {
        return $this->geocoder->geocode($address);
    }

    /**
     * @param float $lat
     * @param float $lng
     *
     * @return AddressProxy
     *
     */
    public function reverse($lat, $lng)
    {
        return $this->geocoder->reverse($lat, $lng);
    }
}
