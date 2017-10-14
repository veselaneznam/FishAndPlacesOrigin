<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 2:11 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Value\ImageDecorator;

use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class Color
{
    /**
     * @var int
     */
    private $color;

    /**
     * ImageDecoratorColor constructor.
     * @param int $color
     * @throws InvalidInputExceptions
     */
    public function __construct(int $color)
    {
        if ($color < -255 && $color > 255) {
            throw new InvalidInputExceptions('Color should be smaller than 255 and bigger than -255');
        }
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getColor(): int
    {
        return $this->color;
    }
}