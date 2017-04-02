<?php

namespace FishAndPlaces\Dam\Domain\Model;

use FishAndPlaces\Dam\Domain\Value\Contact;
use FishAndPlaces\Dam\Domain\Value\Location;
use FishAndPlaces\Dam\Domain\Value\Rating;

class Dam
{
    /**
     * @var int
     */
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
     * @var float
     */
    private $priceProPerson;

    /**
     * @var Fish[]
     */
    private $fishCollection;

    /**
     * @var Rating
     */
    private $rating;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var bool
     */
    private $isActive;

    /** @var Contact */
    private $contact;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return float
     */
    public function getPriceProPerson()
    {
        return $this->priceProPerson;
    }

    /**
     * @return Fish[]
     */
    public function getFishCollection()
    {
        return $this->fishCollection;
    }

    /**
     * @return Rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return bool
     */
    public function isIsActive()
    {
        return $this->isActive;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Rating $rating
     */
    public function setRating(Rating $rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param int $id
     *
     * @return Dam
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     *
     * @return Dam
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Location $location
     *
     * @return Dam
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @param float $priceProPerson
     *
     * @return Dam
     */
    public function setPriceProPerson($priceProPerson)
    {
        $this->priceProPerson = $priceProPerson;
        return $this;
    }

    /**
     * @param Fish[] $fishCollection
     *
     * @return Dam
     */
    public function setFishCollection($fishCollection)
    {
        $this->fishCollection = $fishCollection;
        return $this;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return Dam
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return Dam
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @param bool $isActive
     *
     * @return Dam
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @param Contact $contact
     *
     * @return Dam
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }
}
