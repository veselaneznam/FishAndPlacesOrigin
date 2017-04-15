<?php

namespace FishAndPlaces\Dam\Domain\Model;

class Geocoder implements Entity
{
    private $id;

    private $address;

    private $latitude;

    private $longitude;

    /**
     * @param $address
     * @param $latitude
     * @param $longitude
     */
    public function __construct($address, $latitude, $longitude)
    {
        $this->address = $address;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Geocoder
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return Geocoder
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     *
     * @return Geocoder
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     *
     * @return Geocoder
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
}
