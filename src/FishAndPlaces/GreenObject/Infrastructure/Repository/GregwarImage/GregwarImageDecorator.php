<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 12:03 PM
 */

namespace FishAndPlaces\GreenObject\Infrastructure\Repository\GregwarImage;

use FishAndPlaces\GreenObject\Domain\Repository\ImageDecorator;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Brightness;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Color;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Contrast;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Position;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Radius;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Smoothness;
use Gregwar\Image\Image;

class GregwarImageDecorator implements ImageDecorator
{
    /**
     * @var Image
     */
    private $image;

    public function __construct(Image $image)
    {
        $this->image = realpath($image);
    }

    /**
     * @param float|int $x1
     * @param float|int $y1
     * @param float|int $x2
     * @param float|int $y2
     * @param Color|string $color
     * @param bool $filled
     * @return mixed
     */
    public function addRectangle(
        int $x1,
        int $y1,
        int $x2,
        int $y2,
        Color $color,
        bool $filled = false
    )
    {
        return $this->image->rectangle($x1, $y1, $x2, $y2, $color, $filled);
    }

    /**
     * @param float|int $cx
     * @param float|int $cy
     * @param Radius $radius
     * @param Color $color
     * @param bool $filled
     * @return mixed
     */
    public function addCircle(
        int $cx,
        int $cy,
        Radius $radius,
        Color $color,
        $filled = false
    )
    {
        return $this->image->circle($cx, $cy, $radius->getRadius(), $color, $filled);
    }

    /**
     * @param int $with
     * @param int $height
     * @param Color $background
     * @return mixed
     */
    public function resize(int $with, int $height, Color $background)
    {
        return $this->image->resize($with, $height, $background);
    }

    /**
     * @param int $width
     * @param int $height
     * @param Color $background
     * @return mixed
     */
    public function cropResize(int $width, int $height, Color $background)
    {
        return $this->image->cropResize($width, $height, $background->getColor());
    }

    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @param Radius $radius
     * @param Color $color
     * @param bool $filled
     * @return mixed
     */
    public function roundedRectangle(
        int $x1,
        int $y1,
        int $x2,
        int $y2,
        Radius $radius,
        Color $color,
        $filled = false
    )
    {
        return $this->image->roundedRectangle($x1, $y1, $x2, $y2, $radius->getRadius(), $color->getColor(), $filled);
    }

    /**
     * @param int $cx
     * @param int $cy
     * @param int $width
     * @param int $height
     * @param Color $color
     * @param bool $filled
     * @return mixed
     */
    public function ellipse(
        int $cx,
        int $cy,
        int $width,
        int $height,
        Color $color,
        bool $filled = false
    )
    {
        return $this->image->ellipse($cx, $cy, $width, $height, $color, $filled);
    }

    /**
     * @param int $cx
     * @param int $cy
     * @param Radius $radius
     * @param Color $color
     * @param bool $filled
     * @return mixed
     */
    public function circle(
        int $cx,
        int $cy,
        Radius $radius,
        Color $color,
        bool $filled = false
    )
    {
        return $this->image->circle($cx, $cy, $radius->getRadius(), $color->getColor(), $filled);
    }

    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @param Color $color
     * @return mixed
     */
    public function line(
        int $x1,
        int $y1,
        int $x2,
        int $y2,
        Color $color
    )
    {
        return $this->image->line($x1, $y1, $x2, $y2, $color->getColor());
    }

    /**
     * @param Color $color
     * @param int $x
     * @param int $y
     * @return mixed
     */
    public function fillWithGivenColor(Color $color, int $x, int $y)
    {
        return $this->image->fill($color->getColor(), $x, $y);
    }

    /**
     * @param string $font
     * @param string $text
     * @param int $x
     * @param int $y
     * @param int $size
     * @param int $angle
     * @param Color $color
     * @param Position $position
     * @return void
     */
    public function writeTextToImage(
        string $font,
        string $text,
        int $x,
        int $y,
        int $size,
        int $angle,
        Color $color,
        Position $position
    ): void
    {
        $this->image->write(
            $font,
            $text,
            $x,
            $y,
            $size,
            $angle,
            $color->getColor(),
            $position->getPosition()
        );
    }

    /**
     * @param string $image
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return mixed
     */
    public function mergeTwoImages(
        string $image,
        int $x,
        int $y,
        int $width,
        int $height
    )
    {
        return $this->image->merge(new Image($image), $x, $y, $width, $height);
    }

    /**
     * @return mixed
     */
    public function ApplySepiaEffect()
    {
        return $this->image->sepia();
    }

    /**
     * @param Color $red
     * @param Color $green
     * @param Color $blue
     * @return mixed
     */
    public function colorize(
        Color $red,
        Color $green,
        Color $blue
    )
    {
        return $this->image->colorize($red->getColor(), $green->getColor(), $blue->getColor());
    }

    /**
     * @return mixed
     */
    public function ApplyEdgeEffect()
    {
        return $this->image->edge();
    }

    /**
     * @return mixed
     */
    public function ApplySharpEffect()
    {
        return $this->image->sharp();
    }

    /**
     * @param Smoothness $smoothness
     * @return mixed
     */
    public function smooth(Smoothness $smoothness)
    {
        return $this->image->smooth($smoothness->getSmoothness());
    }

    /**
     * @return mixed
     */
    public function emboss()
    {
        return $this->image->emboss();
    }

    /**
     * @return mixed
     */
    public function grayscale()
    {
        return $this->image->grayscale();
    }

    /**
     * @param Contrast $contrast
     * @return mixed
     */
    public function contrast(Contrast $contrast)
    {
        return $this->image->contrast($contrast->getContrast());
    }

    /**
     * @param Brightness $brightness
     * @return mixed
     */
    public function britness(Brightness $brightness)
    {
        return $this->image->brightness($brightness->getBrightness());
    }

    /**
     * @return mixed
     */
    public function negate()
    {
        return $this->image->negate();
    }

    /**
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return mixed
     */
    public function crop(int $x, int $y, int $width, int $height)
    {
        return $this->image->crop($x, $y, $width, $height);
    }
}