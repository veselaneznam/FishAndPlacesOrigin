<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 03.09.17
 * Time: 13:47
 */

namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\GreenObject\Domain\Repository\RatingRepository;

class DoctrineRatingRepository extends DoctrineRepository implements RatingRepository
{
    /**
     * @param GreenObject $greenObject
     * @return array
     */
    public function findByDam(GreenObject $greenObject)
    {
        return $this->findBy(['greenObject' => $greenObject]);
    }

    /**
     * @param GreenObject $greenObject
     * @param string $ip
     * @return array
     */
    public function findByDamAndIp(GreenObject $greenObject, string $ip)
    {
        return $this->findBy([
            'greenObject' => $greenObject,
            'ip' => $ip
        ]);
    }
}