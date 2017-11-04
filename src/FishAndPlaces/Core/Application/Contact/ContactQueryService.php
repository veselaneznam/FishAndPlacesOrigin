<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 16:51
 */

namespace FishAndPlaces\Core\Application\Contact;

use FishAndPlaces\Core\Domain\Model\Contact;
use FishAndPlaces\Core\Domain\Repository\ContactRepository;

class ContactQueryService
{
    /** @var ContactRepository */
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @return ContactRepresentation[]
     */
    public function getContactCollection()
    {
        $contacts = $this->contactRepository->findAll();

        return $this->convertToRepresentation($contacts);
    }

    /**
     * @param $contacts
     * @return array
     */
    private function convertToRepresentation($contacts)
    {
        if (null !== $contacts) {
            return array_map(
                function (Contact $contacts) {
                    $contactRepresentation = new ContactRepresentation($contacts);
                    return $contactRepresentation;
                }, $contacts
            );
        }
        return [];
    }
}