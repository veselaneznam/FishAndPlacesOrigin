<?php
namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

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
 HAVING distance < 10 LIMIT 10;";
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
            ->setParameter('ids', $ids)
            ->getQuery()
            ->execute();
    }
}
