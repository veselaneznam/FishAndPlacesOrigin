<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 2:16 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Value\ImageDecorator;


use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class Smoothness
{
    /**
     * @var int
     */
    private $smoothness;

    public function __construct(int $smoothness)
    {
        if($smoothness < -100 && $smoothness > 100) {
            throw new InvalidInputExceptions("Smoothness can not be bigger than 100 and smaller than -100");
        }

        $this->smoothness = $smoothness;
    }

    /**
     * @return int
     */
    public function getSmoothness(): int
    {
        return $this->smoothness;
    }
}