<?php

namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\Fish;
use FishAndPlaces\GreenObject\Domain\Repository\FishRepository;

class DoctrineFishRepository extends DoctrineRepository implements FishRepository
{
    /**
     * @inheritdoc
     */
    public function update(Fish $fish)
    {
        $data = $this->getEntityManager()->getReference('GoGreenBundle:Fish', $fish->getId());

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

    /**
     * @return Fish[]
     */
    public function findAll()
    {
        return parent::findAll();
    }

    /**
     * @param int $id
     *
     * @return Fish
     */
    public function find($id)
    {
        return parent::find($id);
    }
}
