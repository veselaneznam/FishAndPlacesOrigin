<?php

namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Dam\Domain\Model\Geocoder;
use FishAndPlaces\Dam\Domain\Repository\GeocoderLocalRepository;
use FishAndPlaces\Dam\Domain\Value\Location;

class DoctrineGeocoderLocalRepository extends DoctrineRepository implements GeocoderLocalRepository
{
    /**
     * @inheritdoc
     */
    public function findOneByAddress($address)
    {
        return parent::findOneBy(['address' => $address]);
    }

    /**
     * @inheritdoc
     */
    public function findOneByLocation(Location $location)
    {
        return parent::findOneBy([
            'latitude' => $location->getLat(),
            'longitude' => $location->getLon(),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function save(Geocoder $geocoder)
    {
        parent::saveEntity($geocoder);
    }
}
