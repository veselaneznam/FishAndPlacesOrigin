<?php

namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Dam\Domain\Model\FishImage;
use FishAndPlaces\Dam\Domain\Repository\FishImageRepository;

class DoctrineFishImageRepository extends DoctrineRepository implements FishImageRepository
{

    /**
     * @param FishImage $fishImage
     */
    public function update(FishImage $fishImage)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param FishImage $fishImage
     */
    public function remove(FishImage $fishImage)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param FishImage $fishImage
     */
    public function add(FishImage $fishImage)
    {
        // TODO: Implement add() method.
    }
}
