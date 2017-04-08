<?php

namespace FishAndPlaces\Dam\Domain\Repository;

use FishAndPlaces\Dam\Domain\Model\Geocoder;
use FishAndPlaces\Dam\Domain\Value\Location;

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
}
