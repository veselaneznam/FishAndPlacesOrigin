<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 12:36 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Value\ImageDecorator;

use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class Radius
{
    /**
     * @var int
     */
    private $radius;

    /**
     * ImageDecorationRadius constructor.
     * @param int $radius
     * @throws InvalidInputExceptions
     */
    public function __construct(int $radius)
    {
        if ($radius < 0) {
            throw new InvalidInputExceptions('Radius can not be negative number');
        }

        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }
}