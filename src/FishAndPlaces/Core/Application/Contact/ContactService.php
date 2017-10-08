<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 16:55
 */

namespace FishAndPlaces\Core\Application\Contact;

use FishAndPlaces\Core\Domain\Repository\ContactRepository;

class ContactService
{
    /** @var ContactRepository */
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }


    /**
     * @param AddContactCommand $command
     */
    public function create(AddContactCommand $command)
    {
        $this->contactRepository->add($command->getContact());
    }

    public function markAsRead(MarkAsReadCommand $command)
    {
        $this->contactRepository->update($command->getContact());
    }
}