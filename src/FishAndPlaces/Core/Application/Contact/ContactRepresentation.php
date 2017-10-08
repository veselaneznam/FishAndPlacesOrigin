<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 16:52
 */

namespace FishAndPlaces\Core\Application\Contact;


use FishAndPlaces\Core\Domain\Model\Contact;

class ContactRepresentation
{
    /**
     * @var int|null
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
     * @var Contact|null
     */
    private $contact;

    /**
     * @param Contact|null $contact
     */
    public function __construct(Contact $contact = null)
    {
        if (null !== $contact) {
            $this->id = $contact->getId();
            $this->email = $contact->getEmail();
            $this->message = $contact->getMessage();
            $this->type = $contact->getType();
            $this->markAsRead = $contact->isMarkAsRead();
            $this->contact = $contact;
        }
    }

    /**
     * @return Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     * @return ContactRepresentation
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ContactRepresentation
     */
    public function setId(int $id): ContactRepresentation
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ContactRepresentation
     */
    public function setEmail(string $email): ContactRepresentation
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ContactRepresentation
     */
    public function setMessage(string $message): ContactRepresentation
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return ContactRepresentation
     */
    public function setType(int $type): ContactRepresentation
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMarkAsRead(): bool
    {
        return $this->markAsRead;
    }

    /**
     * @param bool $markAsRead
     * @return ContactRepresentation
     */
    public function setMarkAsRead(bool $markAsRead): ContactRepresentation
    {
        $this->markAsRead = $markAsRead;
        return $this;
    }
}