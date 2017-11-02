<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/9/17
 * Time: 9:39 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Repository;

use Symfony\Component\HttpFoundation\File\UploadedFile;

interface RemoveExifFromImageRepository
{
    /**
     * @param $image
     * @return mixed
     */
    public function processImage(UploadedFile $image);
}