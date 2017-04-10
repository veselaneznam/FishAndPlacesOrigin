<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Application\Fish\FishRepresentation;
use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\User\Domain\Model\User;

class CreateNewDamCommand
{
    /** @var Dam */
    private $dam;
    /**
     * @var DamImage
     */
    private $damImage;

    /**
     * @param DamRepresentation $damRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(DamRepresentation $damRepresentation, User $user, $fileName = null)
    {
        $dam = new Dam();
        $currentDate = new \DateTime();
        $dam->setCreatedAt($currentDate);
        $dam->setUpdatedAt($currentDate);
        $fishCollection = $damRepresentation->getFishCollection();
        $dam->setFishCollection($fishCollection);
        $dam->setContact($damRepresentation->getContactInformation());
        $dam->setIsActive($damRepresentation->isActive());
        $dam->setLatitude($damRepresentation->getLat());
        $dam->setLongitude($damRepresentation->getLong());
        $dam->setName($damRepresentation->getName());
        $dam->setLocation($damRepresentation->getAddress());
        $dam->setShowOnFirstPage($damRepresentation->isShowOnFirstPage());
        $dam->setPriceProPerson($damRepresentation->getPriceProPerson());
        $dam->setDescription($damRepresentation->getDescription());
        if(null !== $fileName) {
            $this->damImage = new DamImage($dam, $fileName, 1);
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
