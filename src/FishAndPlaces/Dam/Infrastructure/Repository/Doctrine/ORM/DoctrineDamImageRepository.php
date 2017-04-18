<?php
namespace FishAndPlaces\Dam\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineRepository;
use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\Dam\Domain\Repository\DamImagesRepository;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class DoctrineDamImageRepository extends DoctrineRepository implements DamImagesRepository
{
    /**
     * @param  Dam $dam
     *
     * @return DamImage[]
     */
    public function findByDam(Dam $dam)
    {
        return parent::findBy(['dam' => $dam]);
    }

    /**
     * @param DamImage $damImageImage
     *
     * @internal param DamImage $dam
     */
    public function update(DamImage $damImageImage)
    {
        $this->getEntityManager()->merge($damImageImage);
        $this->getEntityManager()->flush();
    }

    /**
     * @param DamImage $damImage
     */
    public function remove(DamImage $damImage)
    {
        $entity = $this->getEntityManager()->merge($damImage);
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
    }

    /**
     * @param DamImage $damImage
     */
    public function add(DamImage $damImage)
    {
        $this->getEntityManager()->persist($damImage);
        $this->getEntityManager()->flush();
    }

    /**
     * @param Dam $dam
     *
     * @return void
     */
    public function resetMain(Dam $dam)
    {
       foreach ($this->findByDam($dam) as $damImage) {
           if ($damImage->isMain()) {
               $damImage->setIsMain(0);
               $this->update($damImage);
           }
       }
    }

    /**
     * @return DamImage[]
     */
    public function findAll()
    {
        return parent::findAll();
    }

    /**
     * @param $id
     *
     * @return DamImage
     */
    public function find($id)
    {
        return parent::find($id);
    }
}
