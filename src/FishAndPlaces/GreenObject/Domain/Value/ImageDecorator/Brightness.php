<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 2:16 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Value\ImageDecorator;

use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class Brightness
{
    /**
     * @var int
     */
    private $brightness;

    public function __construct(int $brightness)
    {
        if($brightness < -100 && $brightness > 100) {
            throw new InvalidInputExceptions("Brightness can not be bigger than 100 and smaller than -100");
        }

        $this->brightness = $brightness;
    }

    /**
     * @return int
     */
    public function getBrightness(): int
    {
        return $this->brightness;
    }
}