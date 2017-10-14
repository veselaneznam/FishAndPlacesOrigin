<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 2:16 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Value\ImageDecorator;

use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class Contrast
{
    /**
     * @var int
     */
    private $contrast;

    public function __construct(int $contrast)
    {
        if($contrast < -100 && $contrast > 100) {
            throw new InvalidInputExceptions("Contrast can not be bigger than 100 and smaller than -100");
        }

        $this->contrast = $contrast;
    }

    /**
     * @return int
     */
    public function getContrast(): int
    {
        return $this->contrast;
    }
}