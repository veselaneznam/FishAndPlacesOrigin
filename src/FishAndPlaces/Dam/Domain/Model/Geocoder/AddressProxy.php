<?php

namespace  FishAndPlaces\Dam\Domain\Model\Geocoder;

use Geocoder\Model\AddressCollection;

class AddressProxy
{
    /**
     * @var AddressCollection
     */
    private $address;

    public function __construct()
    {
        $this->address = new AddressCollection();
    }

    /**
     * @return \Geocoder\Model\Address
     */
    public function first()
    {
       return $this->address->first();
    }

    /**
     * @return AddressCollection
     */
    public function getAddressCollection()
    {
        return $this->address;
    }
}
