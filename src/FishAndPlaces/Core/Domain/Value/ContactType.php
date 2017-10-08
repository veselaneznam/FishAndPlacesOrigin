<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 15:40
 */

namespace FishAndPlaces\Core\Domain\Value;

use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class ContactType
{
    const REGISTRATION_OF_OBJECT = 1;
    const ISSUE = 2;
    const RECOMMENDATION = 3;

    const All = [
        self::REGISTRATION_OF_OBJECT,
        self::ISSUE,
        self::RECOMMENDATION,
    ];

    private $id;

    public function __construct(int $type)
    {
        if (!in_array($type, self::All)) {
            throw new InvalidInputExceptions(sprintf(
                    'Type "%s" you have provided is invalid, valid types are %s',
                    $type,
                    implode(',', self::All)
                )
            );
        }
        $this->id = $type;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}