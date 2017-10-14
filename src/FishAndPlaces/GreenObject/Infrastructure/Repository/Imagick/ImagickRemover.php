<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/9/17
 * Time: 9:41 PM
 */

namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Imagick;

use FishAndPlaces\GreenObject\Domain\Repository\RemoveExifFromImageRepository;
use Imagick;
use ImagickPixel;

class ImagickRemover implements RemoveExifFromImageRepository
{
    /**
     * @param $image
     * @return mixed
     */
    public function processImage($image)
    {
        $img = new Imagick(realpath($image));
        $img->contrastImage(true);
        $img->stripImage();
        $img->writeImage($image);
        $img->clear();
        $img->destroy();

        return $image;
    }
}