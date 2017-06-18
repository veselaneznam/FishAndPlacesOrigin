<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;

use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

abstract class ImportGreenObjectCommand
{
    /**
     * @var GreenObject
     */
    protected $greenObject;

    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param GreenObject               $greenObject
     */
    public function __construct(GreenObjectRepresentation $greenObjectRepresentation, GreenObject $greenObject)
    {
        $currentDate = new \DateTime();
        $greenObject->setCreatedAt($currentDate);
        $greenObject->setUpdatedAt($currentDate);
        $greenObject->setIsActive($greenObjectRepresentation->isActive());
        $greenObject->setLatitude($greenObjectRepresentation->getLat());
        $greenObject->setLongitude($greenObjectRepresentation->getLong());
        $greenObject->setName($greenObjectRepresentation->getName());
        $greenObject->setLocation($greenObjectRepresentation->getAddress());
        $greenObject->setShowOnFirstPage(0);
        $this->greenObject = $greenObject;
    }

    /**
     * @return GreenObject
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
