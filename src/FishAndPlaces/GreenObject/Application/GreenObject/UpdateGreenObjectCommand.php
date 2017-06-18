<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;


use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\User\Domain\Model\User;

abstract class UpdateGreenObjectCommand
{
    /**
     * @var GreenObject
     */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param GreenObject               $greenObject
     * @param User                      $user
     * @param string                    $fileName
     */
    public function __construct(GreenObjectRepresentation $greenObjectRepresentation, GreenObject $greenObject ,User $user , $fileName = null)
    {
        $currentDate = new \DateTime();
        $greenObject->setUpdatedAt($currentDate);
        $greenObject->setCreatedAt($greenObjectRepresentation->getCreatedAt());
        $greenObject->setContact($greenObjectRepresentation->getContactInformation());
        $greenObject->setIsActive($greenObjectRepresentation->isActive());
        $greenObject->setLatitude($greenObjectRepresentation->getLat());
        $greenObject->setLongitude($greenObjectRepresentation->getLong());
        $greenObject->setName($greenObjectRepresentation->getName());
        $greenObject->setLocation($greenObjectRepresentation->getAddress());
        $greenObject->setShowOnFirstPage($greenObjectRepresentation->isShowOnFirstPage());
        $greenObject->setPriceProPerson($greenObjectRepresentation->getPriceProPerson());
        $greenObject->setId($greenObjectRepresentation->getId());
        $greenObject->setDescription($greenObjectRepresentation->getDescription());
        $greenObject->setLocation($greenObjectRepresentation->getAddress());
        if(null !== $fileName) {
            $this->greenObjectImage = new GreenObjectImage($greenObject, $fileName, 1);
        }

        $this->greenObject = $greenObject;
    }

    /**
     * @return GreenObject
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }

    /**
     * @return GreenObjectImage
     */
    public function getGreenObjectImage()
    {
        return $this->greenObjectImage;
    }
}
