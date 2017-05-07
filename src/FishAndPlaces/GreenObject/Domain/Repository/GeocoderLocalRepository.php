<?php

namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Model\Geocoder;
use FishAndPlaces\GreenObject\Domain\Value\Location;

interface GeocoderLocalRepository
{
    /**
     * @param string $address
     *
     * @return Geocoder
     */
    public function findOneByAddress($address);

    /**
     * @param Location $location
     *
     * @return Geocoder
     */
    public function findOneByLocation(Location $location);

    /**
     * @param Geocoder $geocoder
     *
     * @return void
     */
    public function save(Geocoder $geocoder);

    /**
     * @param $name
     * @param $lat
     * @param $lng
     */
    public function onDuplicateInsert($name, $lat, $lng);
}
