<?php
namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Dam\Domain\Repository\DamRepository;
use FishAndPlaces\Dam\Domain\Model\Dam;

class DoctrineDamRepository extends DoctrineRepository implements DamRepository
{

    /**
     * @param Dam $dam
     */
    public function update(Dam $dam)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param Dam $dam
     */
    public function remove(Dam $dam)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param Dam $dam
     */
    public function add(Dam $dam)
    {
        // TODO: Implement add() method.
    }

    /**
     * @param $data
     *
     * @return Dam[]
     */
    public function findByLocation($data)
    {

    }
}
