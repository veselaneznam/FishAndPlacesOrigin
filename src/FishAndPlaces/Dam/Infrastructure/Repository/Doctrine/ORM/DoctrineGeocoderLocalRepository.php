<?php

namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
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
        return $this->createQueryBuilder('g')
            ->andWhere('g.address LIKE :address')
            ->setParameter('address','%' . $address . '%')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
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
