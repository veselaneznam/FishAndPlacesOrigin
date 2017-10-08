<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 15:28
 */

namespace FishAndPlaces\Core\Domain\Model;

use FishAndPlaces\Core\Domain\Value\ContactType;
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
     * @var int
     */
    private $type;

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
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param ContactType $type
     * @return Contact
     */
    public function setType(ContactType $type)
    {
        $this->type = $type->getId();
        return $this;
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
}