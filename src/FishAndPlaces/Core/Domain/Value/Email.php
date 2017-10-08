<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 10.07.17
 * Time: 11:02
 */

namespace FishAndPlaces\Core\Domain\Value;


use FishAndPlaces\Core\Domain\Exceptions\InvalidInputExceptions;

class Email
{
    const REGEX_VALID_EMAIL = '/[a-zA-Z0-9_\-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/';

    /**
     * @var string
     */
    private $email;

    /**
     * Email constructor.
     * @param $email
     * @throws InvalidInputExceptions
     */
    public function __construct(string $email)
    {
        if (0 == preg_match(self::REGEX_VALID_EMAIL, $email)) {
            throw new InvalidInputExceptions(sprintf('Email "%s" address you provided is invalid', $this->email));
        }
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}