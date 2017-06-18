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

        $data = $this->getEntityManager()->getReference("GoGreenBundle:Dam", $dam->getId());
        $data->setName($dam->getName());
        $data->setUpdatedAt($dam->getUpdatedAt());
        $data->setCreatedAt($dam->getCreatedAt());
        $data->setContact($dam->getContact());
        $data->setIsActive($dam->isActive());
        $data->setLatitude($dam->getLatitude());
        $data->setLongitude($dam->getLongitude());
        $data->setName($dam->getName());
        $data->setLocation($dam->getLocation());
        $data->setShowOnFirstPage($dam->isShowOnFirstPage());
        $data->setPriceProPerson($dam->getPriceProPerson());
        $data->setId($dam->getId());
        $data->setDescription($dam->getDescription());

        foreach ($dam->getFishCollection()->toArray() as $fish) {
            $data->addFish($fish);
        }
        $this->getEntityManager()->flush();
    }

    /**
     * @param GreenObject $villageHoliday
     *
     * @throws \Exception
     */
    public function remove(GreenObject $villageHoliday)
    {
        if(!$villageHoliday instanceof Dam) {
            throw new \Exception('Unexpected Entity');
        }
        parent::remove($villageHoliday);
    }

    /**
     * @param GreenObject $villageHoliday
     *
     * @throws \Exception
     */
    public function add(GreenObject $villageHoliday)
    {
        if(!$villageHoliday instanceof Dam) {
            throw new \Exception('Unexpected Entity');
        }
        parent::add($villageHoliday);
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
