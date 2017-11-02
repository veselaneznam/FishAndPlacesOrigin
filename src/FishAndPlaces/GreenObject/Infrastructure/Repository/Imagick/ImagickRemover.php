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
use ImagickDraw;
use ImagickPixel;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImagickRemover implements RemoveExifFromImageRepository
{
    /**
     * @param $image
     * @return mixed
     */
    public function processImage(UploadedFile $image)
    {
        $img = new Imagick(realpath($image));
        $img->contrastImage(true);
        $img->setResolution(500, 400);
        $this->colorize($img,'green', 0.2 );
        $img->setImageBorderColor('green');
        $img->stripImage();
        $img->writeImage($image);
        $img->clear();
        $img->destroy();
        return $image;
    }

    /**
     * @param Imagick $imagick
     * @param string $color
     * @param int $alpha
     */
    public function colorize(Imagick $imagick, string $color, $alpha = 1)
    {
        $draw = new ImagickDraw();

        $draw->setFillColor(new ImagickPixel($color));

        if (is_float($alpha)) {
            $draw->setFillAlpha($alpha);
        }

        $geometry = $imagick->getImageGeometry();
        $width = $geometry['width'];
        $height = $geometry['height'];

        $draw->rectangle(0, 0, $width, $height);

        $imagick->drawImage($draw);

    }
}