<?php

namespace  FishAndPlaces\Dam\Domain\Model\Geocoder;


interface GeocoderProxyInterface
{
    /**
     * @param string $address
     *
     * @return AddressProxy
     */
    public function geocode($address);

    /**
     * @param float $lat
     * @param float $lng
     *
     * @return AddressProxy
     *
     */
    public function reverse($lat, $lng);
}
