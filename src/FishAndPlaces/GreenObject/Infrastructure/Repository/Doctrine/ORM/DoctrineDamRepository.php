<?php
namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\GreenObject\Domain\Model\Fish;
use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Repository\DamRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class DoctrineDamRepository extends DoctrineGreenObjectRepository implements DamRepository
{

    /**
     * @param GreenObject $dam
     *
     * @throws \Exception
     */
    public function update(GreenObject $dam)
    {
        if(!$dam instanceof Dam) {
            throw new \Exception('Unexpected Entity');
        }

        parent::update($dam);

        $data = $this->getEntityManager()->getReference('FishAndPlaces\GreenObject\Domain\Model\Dam', $dam->getId());
        foreach ($dam->getFishCollection()->toArray() as $fish) {
            $data->addFish($fish);
        }

        $this->getEntityManager()->flush();
    }

    /**
     * @param GreenObject $dam
     *
     * @throws \Exception
     */
    public function remove(GreenObject $dam)
    {
        if(!$dam instanceof Dam) {
            throw new \Exception('Unexpected Entity');
        }
        parent::remove($dam);
    }

    /**
     * @param GreenObject $dam
     *
     * @throws \Exception
     */
    public function add(GreenObject $dam)
    {
        if(!$dam instanceof Dam) {
            throw new \Exception('Unexpected Entity');
        }
        parent::add($dam);
    }

    /**
     * @param Fish $fish
     *
     * @return mixed
     */
    public function findByFish(Fish $fish)
    {
        return $this->createQueryBuilder('d')
            ->innerJoin('d.fishCollection', 's', 'WITH', 's.id = :fish')
            ->andWhere('d.isActive = :isActive')
            ->setParameter('fish', $fish->getId())
            ->setParameter('isActive', 1)
            ->getQuery()->getResult();
    }
}
