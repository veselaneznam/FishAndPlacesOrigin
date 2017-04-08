<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Application\Fish\FishRepresentation;
use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\User\Domain\Model\User;

class CreateNewDamCommand
{
    /** @var Dam */
    private $dam;

    /**
     * @param DamRepresentation $damRepresentation
     * @param User              $user
     */
    public function __construct(DamRepresentation $damRepresentation, User $user)
    {
        $dam = new Dam();
        $currentDate = new \DateTime();
        $dam->setCreatedAt($currentDate);
        $dam->setUpdatedAt($currentDate);
        $fishCollection = array_map(function (FishRepresentation $fish) {
            return $fish->getFish();
        }, $damRepresentation->getFishCollection()
        );
        $dam->setFishCollection($fishCollection);
        $dam->setContact($damRepresentation->getContactInformation());
        $dam->setIsActive($damRepresentation->isActive());
        $dam->setLatitude($damRepresentation->getLat());
        $dam->setLongitude($damRepresentation->getLong());
        $dam->setName($damRepresentation->getName());
        $dam->setLocation($damRepresentation->getAddress());
        $dam->setShowOnFirstPage($damRepresentation->isShowOnFirstPage());
        $dam->setPriceProPerson($damRepresentation->getPriceProPerson());
        $this->dam = $dam;
    }

    /**
     * @return Dam
     */
    public function getDam()
    {
        return $this->dam;
    }
}
