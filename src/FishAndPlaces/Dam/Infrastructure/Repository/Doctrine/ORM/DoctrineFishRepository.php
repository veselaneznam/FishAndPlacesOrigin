<?php

namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\Dam\Domain\Repository\FishRepository;

class DoctrineFishRepository extends DoctrineRepository implements FishRepository
{
    /**
     * @inheritdoc
     */
    public function update(Fish $fishImage)
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritdoc
     */
    public function remove(Fish $fishImage)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @inheritdoc
     */
    public function add(Fish $fishImage)
    {
        // TODO: Implement add() method.
    }
}
