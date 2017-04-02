<?php

namespace FishAndPlaces\Dam\Domain\Value;

class Location
{
    /** @var float */
    private $lat;

    /** @var float */
    private $lon;

    /**
     * @param string $address
     */
    public function __construct($address)
    {
        $adapter  = new \Http\Adapter\Guzzle6\Client();
        $geocoder = new \Geocoder\Provider\GoogleMaps($adapter);
        $coordinate = $geocoder->geocode($address)->first();

        $this->lat = $coordinate->getLatitude();
        $this->lon = $coordinate->getLongitude();
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLon()
    {
        return $this->lon;
    }
}
