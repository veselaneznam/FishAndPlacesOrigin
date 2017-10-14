<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/9/17
 * Time: 9:39 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Repository;

interface RemoveExifFromImageRepository
{
    /**
     * @param $image
     * @return mixed
     */
    public function processImage($image);
}