<?php

namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class DoctrineGreenObjectRepository extends DoctrineRepository implements GreenObjectRepository
{
    const OFFSET = 8;

    /**
     * @param GreenObject $greenObject
     */
    public function update(GreenObject $greenObject)
    {
        $data = $this->getEntityManager()->getReference("GoGreenBundle:GreenObject", $greenObject->getId());
        $data->setName($greenObject->getName());
        $data->setUpdatedAt($greenObject->getUpdatedAt());
        $data->setCreatedAt($greenObject->getCreatedAt());
        $data->setContact($greenObject->getContact());
        $data->setIsActive($greenObject->isActive());
        $data->setLatitude($greenObject->getLatitude());
        $data->setLongitude($greenObject->getLongitude());
        $data->setName($greenObject->getName());
        $data->setLocation($greenObject->getLocation());
        $data->setShowOnFirstPage($greenObject->isShowOnFirstPage());
        $data->setPriceProPerson($greenObject->getPriceProPerson());
        $data->setId($greenObject->getId());
        $data->setDescription($greenObject->getDescription());
        $images = $greenObject->getImageCollection();
        if (!empty($images)) {
            foreach ($images as $image) {
                $data->addImage($image);
                $image->setGreenObject($greenObject);
            }
        }

    }

    /**
     * @param GreenObject $greenObject
     */
    public function remove(GreenObject $greenObject)
    {
        $greenObject->setIsActive(0);
        $this->getEntityManager()->persist($greenObject);
        $this->getEntityManager()->flush($greenObject);
    }

    /**
     * @param GreenObject $greenObject
     */
    public function add(GreenObject $greenObject)
    {
        $this->getEntityManager()->persist($greenObject);
        $this->getEntityManager()->flush($greenObject);
    }

    /**
     * @param Location $location
     *
     * @param int| null     $radius
     *
     * @return GreenObject[]
     */
    public function findByLocation(Location $location, $radius = null)
    {
        $location = new Location($location->getLat(), $location->getLon());
        $ids = $this->getGreenObjectIdByNearByLocation($location, $radius);
        return $this->findByIds($ids);
    }

    /**
     * @param Location $location
     *
     * @return GreenObject[]
     */
    public function findByNearByLocation(Location $location)
    {
        $ids = $this->getGreenObjectIdByNearByLocation($location);
        return $this->findByIds($ids);
    }

    /**
     * @param Location $location
     *
     * @param int | null $radius

     * @return array
     */
    private function getGreenObjectIdByNearByLocation(Location $location, $radius = null)
    {
        $fLat = $location->getLat();
        $fLon = $location->getLon();
        if (empty($radius)) {
            $radius = 25;
        }
        $SQL = "SELECT d.id,
 ( 6380 * acos( cos( radians($fLat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($fLon) ) + sin( radians($fLat) ) * sin( radians( latitude ) ) ) ) AS distance 
 FROM green_object as d
 HAVING distance < $radius LIMIT 25;";
        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($SQL);
        $stmt->execute();

        return array_column($stmt->fetchAll(), 'id');
    }

    /**
     * @param array $ids
     *
     * @return GreenObject[]
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
     * @return GreenObject[]
     */
    public function findByFirstPage()
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.showOnFirstPage = :showOnFirstPage')
            ->andWhere('d.isActive = :isActive')
            ->setParameters([
                'showOnFirstPage' => 1, 'isActive' => 1
            ])
            ->setMaxResults(self::OFFSET)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param string $name
     *
     * @return GreenObject[]
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
     * @return GreenObject[]
     */
    public function findAllActive()
    {
        return $this->findBy(['isActive' => 1]);
    }

    /**
     * @param $id
     *
     * @return GreenObject
     */
    public function find($id)
    {
        return parent::find($id);
    }

}
