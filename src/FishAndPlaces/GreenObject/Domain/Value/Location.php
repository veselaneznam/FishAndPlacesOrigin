<?php

namespace FishAndPlaces\GreenObject\Domain\Value;

class Location
{
    /** @var float */
    private $lat;

    /** @var float */
    private $lon;

    /**
     * @param float $lat
     * @param float $long
     */
    public function __construct($lat, $long)
    {
        $this->lat = $lat;
        $this->lon = $long;
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
