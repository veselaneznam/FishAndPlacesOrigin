<?php
namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class DoctrineGreenObjectImageRepository extends DoctrineRepository implements GreenObjectImagesRepository
{
    /**
     * @param  GreenObject $greenObject
     *
     * @return GreenObjectImage[]
     */
    public function findByGreenObject(GreenObject $greenObject)
    {
        return parent::findBy(['greenObject' => $greenObject]);
    }

    public function update(GreenObjectImage $greenObjectImage)
    {
        $entity = $this->getEntityManager()->merge($greenObjectImage);
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    }

    /**
     * @param GreenObjectImage $greenObjectImage
     */
    public function remove(GreenObjectImage $greenObjectImage)
    {
        $entity = $this->getEntityManager()->merge($greenObjectImage);
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
    }

    /**
     * @param GreenObjectImage $greenObjectImage
     */
    public function add(GreenObjectImage $greenObjectImage)
    {
        $this->getEntityManager()->persist($greenObjectImage);
        $this->getEntityManager()->flush();
    }

    /**
     * @param GreenObject $dam
     *
     * @return void
     */
    public function resetMain(GreenObject $dam)
    {
       foreach ($this->findByGreenObject($dam) as $damImage) {
           if ($damImage->isMain()) {
               $damImage->setIsMain(0);
               $this->update($damImage);
           }
       }
    }

    /**
     * @return GreenObjectImage[]
     */
    public function findAll()
    {
        return parent::findAll();
    }

    /**
     * @param $id
     *
     * @return GreenObjectImage
     */
    public function find($id)
    {
        return parent::find($id);
    }
}
