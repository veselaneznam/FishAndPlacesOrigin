<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 15:28
 */

namespace FishAndPlaces\Core\Domain\Model;

use FishAndPlaces\Core\Domain\Value\Email;

class Contact
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $markAsRead;

    /**
     * @return bool
     */
    public function isMarkAsRead(): bool
    {
        return $this->markAsRead;
    }

    /**
     * @param bool $markAsRead
     * @return Contact
     */
    public function setMarkAsRead(bool $markAsRead): Contact
    {
        $this->markAsRead = $markAsRead;
        return $this;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Contact
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $email
     * @return Contact
     */
    public function setEmail(Email $email)
    {
        $this->email = $email->getEmail();
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Contact
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Contact
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
}