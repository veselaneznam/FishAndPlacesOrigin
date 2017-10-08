<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 10.07.17
 * Time: 10:24
 */

namespace FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Domain\Model\Contact;
use FishAndPlaces\Core\Domain\Repository\ContactRepository;

class DoctrineContactRepository extends DoctrineRepository implements ContactRepository
{

    /**
     * @param Contact $contact
     * @return mixed|void
     */
    public function add(Contact $contact)
    {
        $this->getEntityManager()->persist($contact);
        $this->getEntityManager()->flush();
    }

    /**
     * @param Contact $contact
     * @return mixed|void
     */
    public function update(Contact $contact)
    {
        $data = $this->getEntityManager()->getReference('FishAndPlaces\Core\Domain\Model\Contact', $contact->getId());

        $data->setId($contact->getId());
        $data->setType($contact->getType());
        $data->setEmail($contact->getEmail());
        $data->setMessage($contact->getMessage());
        $data->setMarkedAsRead($contact->isMarkAsRead());
        $this->getEntityManager()->flush();
    }
}