<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 03.09.17
 * Time: 13:47
 */

namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

interface RatingRepository
{
    /**
     * @param GreenObject $greenObject
     * @return mixed
     */
    public function findByDam(GreenObject $greenObject);

    /**
     * @param $damRatingId
     * @return mixed
     */
    public function find($damRatingId);

    /**
     * @param GreenObject $greenObject
     * @param string $ip
     * @return mixed
     */
    public function findByDamAndIp(GreenObject $greenObject, string $ip);
}