<?php

namespace FishAndPlaces\Dam\Application\Fish;

use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;

class FishRepresentation
{
    /** @var string */
    private $name;

    /** @var Fish */
    private $fish;

    /** @var Location */
    private $location;

    /** @var DamRepresentation */
    private $dam;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @param Fish|null $fish
     */
    public function __construct(Fish $fish = null)
    {
        if(null !== $fish) {
            $this->fish = $fish;
            $this->id = $this->fish->getId();
            $this->name = $this->fish->getName();
            $this->location = new Location($this->fish->getLat(), $this->fish->getLong());
            $this->address = $this->fish->getLocation();
            $this->dam = new DamRepresentation($this->fish->getDam());
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Fish
     */
    public function getFish()
    {
        return $this->fish;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return DamRepresentation
     */
    public function getDam()
    {
        return $this->dam;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

}
