<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 16:51
 */

namespace FishAndPlaces\Core\Application\Contact;

use FishAndPlaces\Core\Domain\Model\Contact;
use FishAndPlaces\Core\Domain\Value\ContactType;
use FishAndPlaces\Core\Domain\Value\Email;

class AddContactCommand extends ContactCommand
{

    /**
     * AddContactCommand constructor.
     * @param ContactRepresentation $contactRepresentation
     */
    public function __construct(ContactRepresentation $contactRepresentation)
    {
        parent::__construct($contactRepresentation);
        $this->contact->setMarkAsRead(0);
    }
}