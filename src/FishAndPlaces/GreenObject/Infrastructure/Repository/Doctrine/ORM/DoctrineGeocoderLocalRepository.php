<?php

namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\GreenObject\Domain\Model\Geocoder;
use FishAndPlaces\GreenObject\Domain\Repository\GeocoderLocalRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location;

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
     * @param $name
     * @param $lat
     * @param $lng
     */
    public function onDuplicateInsert($name, $lat, $lng)
    {
        $this->getEntityManager()->getConnection()->prepare("INSERT INTO geocoder SET 
    address = '{$name}', latitude = '{$lat}', longitude = '{$lng}'
    ON DUPLICATE KEY UPDATE
    latitude = '{$lat}', longitude = '{$lng}'
      ")->execute();
    }

    /**
     * @inheritdoc
     */
    public function save(Geocoder $geocoder)
    {
        parent::saveEntity($geocoder);
    }
}
