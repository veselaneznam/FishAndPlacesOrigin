<?php

namespace FishAndPlaces\Dam\Domain\Model;

class Fish
{
    private $id;
    /**
     * @var string
     */
    private $name;

    /**
     * @var Location
     */
    private $location;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @param          $name
     * @param Location $location
     * @param Dam      $dam
     */
    public function __construct($name, Location $location, Dam $dam)
    {

        $this->name = $name;
        $this->location = $location;
        $this->dam = $dam;
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
}
