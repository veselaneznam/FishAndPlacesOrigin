<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 16:55
 */

namespace FishAndPlaces\Core\Application\Contact;


class MarkAsReadCommand extends ContactCommand
{

    /**
     * AddContactCommand constructor.
     * @param ContactRepresentation $contactRepresentation
     */
    public function __construct(ContactRepresentation $contactRepresentation)
    {
        parent::__construct($contactRepresentation);
        $this->contact->setMarkAsRead(1);
    }
}