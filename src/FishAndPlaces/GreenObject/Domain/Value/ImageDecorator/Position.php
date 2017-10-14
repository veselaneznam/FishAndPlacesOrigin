<?php
/**
 * Created by PhpStorm.
 * User: vferdinandova
 * Date: 10/14/17
 * Time: 12:28 PM
 */

namespace FishAndPlaces\GreenObject\Domain\Value\ImageDecorator;

use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class Position
{
    const POSITION_LEFT = 'left';
    const POSITION_RIGHT = 'right';
    const POSITION_CENTER = 'center';

    const ALLOWED_POSITIONS = [
        self::POSITION_LEFT,
        self::POSITION_RIGHT,
        self::POSITION_CENTER,
    ];

    private $position;

    public function __construct(string $position)
    {
        if(!in_array($position, self::ALLOWED_POSITIONS)) {
            throw new InvalidInputExceptions(
                sprintf(
                    'Position you have provided is not valid, valid positions are %s',
                    implode(',', self::ALLOWED_POSITIONS)
                ));
        }

        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
}