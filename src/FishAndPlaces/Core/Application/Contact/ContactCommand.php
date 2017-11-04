<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 10.07.17
 * Time: 11:16
 */

namespace FishAndPlaces\Core\Application\Contact;

use FishAndPlaces\Core\Domain\Model\Contact;
use FishAndPlaces\Core\Domain\Value\ContactType;
use FishAndPlaces\Core\Domain\Value\Email;

abstract class ContactCommand
{
    /**
     * @var Contact
     */
    protected $contact;

    /**
     * AddContactCommand constructor.
     * @param ContactRepresentation $contactRepresentation
     */
    public function __construct(ContactRepresentation $contactRepresentation)
    {
        $contact = new Contact();
        $contact->setId($contactRepresentation->getId());
        $contact->setMessage($contactRepresentation->getMessage());
        $contact->setEmail(new Email($contactRepresentation->getEmail()));
        $contact->setPhone($contactRepresentation->getPhone());
        $contact->setName($contactRepresentation->getName());
        $this->contact = $contact;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }
}