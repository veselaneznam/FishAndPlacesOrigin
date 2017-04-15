<?php

namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\Dam\Domain\Repository\FishRepository;

class DoctrineFishRepository extends DoctrineRepository implements FishRepository
{
    /**
     * @inheritdoc
     */
    public function update(Fish $fish)
    {
        $data = $this->getEntityManager()->getReference('DamBundle:Fish', $fish->getId());

        $data->setName($fish->getName());
        $data->setDescription($fish->getDescription());
        $data->setImage($fish->getImage());
        $data->setCreatedAt($fish->getCreatedAt());
        $data->setUpdatedAt($fish->getUpdatedAt());
        $data->setIsActive($fish->isActive());
        $this->getEntityManager()->flush();
    }

    /**
     * @inheritdoc
     */
    public function remove(Fish $fish)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @inheritdoc
     */
    public function add(Fish $fish)
    {
        $this->getEntityManager()->persist($fish);
        $this->getEntityManager()->flush();
    }

    /**
     * @inheritdoc
     */
    public function findByName($name)
    {
        return $this->findBy(['name' => $name]);
    }
}
