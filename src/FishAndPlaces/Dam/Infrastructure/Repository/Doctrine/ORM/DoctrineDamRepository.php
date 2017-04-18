<?php
namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\Dam\Domain\Repository\DamRepository;
use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Value\Location;

class DoctrineDamRepository extends DoctrineRepository implements DamRepository
{

    /**
     * @param Dam $dam
     */
    public function update(Dam $dam)
    {
        $data = $this->getEntityManager()->getReference("DamBundle:Dam", $dam->getId());
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
     * @param Dam $dam
     */
    public function remove(Dam $dam)
    {
        $dam->setIsActive(0);
        $this->getEntityManager()->persist($dam);
        $this->getEntityManager()->flush($dam);
    }

    /**
     * @param Dam $dam
     */
    public function add(Dam $dam)
    {
        $this->getEntityManager()->persist($dam);
        $this->getEntityManager()->flush($dam);
    }

    /**
     * @param Location $location
     *
     * @return Dam[]
     *
     */
    public function findByLocation(Location $location)
    {
        $location = new Location($location->getLat(), $location->getLon());
        $ids = $this->getDamIdByNearByLocation($location);
        return $this->findByIds($ids);
    }

    /**
     * @param Location $location
     *
     * @return Dam[]
     */
    public function findByNearByLocation(Location $location)
    {
        $ids = $this->getDamIdByNearByLocation($location);
        return $this->findByIds($ids);
   }

    /**
     * @param Location $location
     *
     * @return array
     */
    private function getDamIdByNearByLocation(Location $location)
    {
        $fLat = $location->getLat();
        $fLon = $location->getLon();

        $SQL = "SELECT d.id,
 ( 6380 * acos( cos( radians($fLat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($fLon) ) + sin( radians($fLat) ) * sin( radians( latitude ) ) ) ) AS distance 
 FROM dam as d
 HAVING distance < 100 LIMIT 25;";
        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($SQL);
        $stmt->execute();

        return array_column($stmt->fetchAll(), 'id');
    }

    /**
     * @param array $ids
     *
     * @return Dam[]
     */
    public function findByIds(array $ids)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.id IN (:ids)')
            ->andWhere('d.isActive = :isActive')
            ->setParameter('ids', $ids)
            ->setParameter('isActive', 1)
            ->getQuery()
            ->execute();
    }

    /**
     * @return Dam[]
     */
    public function findByFirstPage()
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.showOnFirstPage = :showOnFirstPage')
            ->andWhere('d.isActive = :isActive')
            ->setParameters([
                'showOnFirstPage' => 1, 'isActive' => 1
            ])
            ->setMaxResults(8)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param string $name
     *
     * @return Dam[]
     */
    public function findByName($name)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.name LIKE :name')
            ->setParameter('name', $name . '%')
            ->getQuery()
            ->getResult();
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

    /**
     * @return Dam[]
     */
    public function findAll()
    {
        return $this->findBy(['isActive' => 1]);
    }

    /**
     * @param $id
     *
     * @return Dam
     */
    public function find($id)
    {
        return parent::find($id);
    }
}
