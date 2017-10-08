<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 09.07.17
 * Time: 15:31
 */

namespace FishAndPlaces\Core\Domain\Repository;


use FishAndPlaces\Core\Domain\Model\Contact;

interface ContactRepository
{
    /**
     * @return Contact[]
     */
    public function findAll();

    /**
     * @param Contact $contact
     * @return mixed
     */
    public function add(Contact $contact);

    /**
     * @param $getContact
     * @return mixed
     */
    public function update(Contact $contact);
}