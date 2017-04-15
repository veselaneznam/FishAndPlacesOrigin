<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\User\Domain\Model\User;

class UpdateDamCommand
{
    /** @var Dam */
    protected $dam;

    /**
     * @var DamImage
     */
    protected $damImage;

    /**
     * @param DamRepresentation $damRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(DamRepresentation $damRepresentation, User $user ,$fileName = null)
    {
        $dam = new Dam();
        $currentDate = new \DateTime();
        $dam->setUpdatedAt($currentDate);
        $dam->setCreatedAt($damRepresentation->getCreatedAt());
        $dam->setContact($damRepresentation->getContactInformation());
        $dam->setIsActive($damRepresentation->isActive());
        $dam->setLatitude($damRepresentation->getLat());
        $dam->setLongitude($damRepresentation->getLong());
        $dam->setName($damRepresentation->getName());
        $dam->setLocation($damRepresentation->getAddress());
        $dam->setShowOnFirstPage($damRepresentation->isShowOnFirstPage());
        $dam->setPriceProPerson($damRepresentation->getPriceProPerson());
        $dam->setId($damRepresentation->getId());
        $dam->setDescription($damRepresentation->getDescription());
        if(null !== $fileName) {
            $this->damImage = new DamImage($dam, $fileName, 1);
        }
        foreach ($damRepresentation->getFishCollection() as $fishRepresentation) {
            $dam->addFish($fishRepresentation->getFish());
        }

        $this->dam = $dam;
    }

    /**
     * @return Dam
     */
    public function getDam()
    {
        return $this->dam;
    }

    /**
     * @return DamImage
     */
    public function getDamImage()
    {
        return $this->damImage;
    }
}
