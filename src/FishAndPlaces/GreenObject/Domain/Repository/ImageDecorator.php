<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 12:04 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Radius;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Color;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Contrast;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Position;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Smoothness;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Brightness;

interface ImageDecorator
{
    /**
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @param Color $color
     * @param bool $filled
     * @return mixed
     */
    public function addRectangle(
        int $x1,
        int $y1,
        int $x2,
        int $y2,
        Color $color,
        bool $filled=false
    );

    /**
     * @param int $cx
     * @param int $cy
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
        $filled=false
    );

    /**
     * @param int $with
     * @param int $height
     * @param Color $background
     * @return mixed
     */
    public function resize(int $with, int $height, Color $background);

    /**
     * @param int $width
     * @param int $height
     * @param Color $background
     * @return mixed
     */
    public function cropResize(int $width, int $height, Color $background);

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
        $filled=false
    );

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
        bool $filled=false
    );

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
        bool $filled=false
    );

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
    );

    /**
     * @param Color $color
     * @param int $x
     * @param int $y
     * @return mixed
     */
    public function fillWithGivenColor(Color $color, int $x, int $y);

    /**
     * @param string $font
     * @param string $text
     * @param int $x
     * @param int $y
     * @param int $size
     * @param int $angle
     * @param Color $color
     * @param Position $position
     * @return mixed
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
    );

    /**
     * @param string $image
     * @param float|int $x
     * @param float|int $y
     * @param int $width
     * @param int $height
     *
     * @return mixed
     */
    public function mergeTwoImages(
        string $image,
        int $x,
        int $y,
        int $width,
        int $height
    );

    /**
     * @return mixed
     */
    public function ApplySepiaEffect();

    /**
     * @param Color $red
     * @param Color $green
     * @param Color $blue
     *
     * @return mixed
     */
    public function colorize(
        Color $red,
        Color $green,
        Color $blue
    );

    /**
     * @return mixed
     */
    public function ApplyEdgeEffect();

    /**
     * @return mixed
     */
    public function ApplySharpEffect();

    /**
     * @param Smoothness $smoothness
     * @return mixed
     */
    public function smooth(Smoothness $smoothness);

    /**
     * @return mixed
     */
    public function emboss();

    /**
     * @return mixed
     */
    public function grayscale();

    /**
     * @param Contrast $contrast
     * @return mixed
     */
    public function contrast(Contrast $contrast);

    /**
     * @param Brightness $brightness
     * @return mixed
     */
    public function britness(Brightness $brightness);

    /**
     * @return mixed
     */
    public function negate();

    /**
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return mixed
     */
    public function crop(int $x, int $y, int $width, int $height);
}