<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

use FishAndPlaces\GreenObject\Domain\Value\Contact;
use FishAndPlaces\GreenObject\Domain\Value\Rating;

abstract class GreenObject implements Entity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var string
     */
    protected $priceProPerson;

    /**
     * @var Rating
     */
    protected $rating;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $isActive;

    /** @var Contact */
    protected $contact;

    /** @var float */
    protected $longitude;

    /** @var float */
    protected $latitude;


    /** @var bool */
    protected $showOnFirstPage;

    /**
     * @var GreenObjectImage[]
     */
    protected $imageCollection = [];

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $type;

    /**
     * @return int
     */
    abstract public function getType();

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getPriceProPerson()
    {
        return $this->priceProPerson;
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
     * @return GreenObject
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     *
     * @return GreenObject
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $location
     *
     * @return GreenObject
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @param string $priceProPerson
     *
     * @return GreenObject
     */
    public function setPriceProPerson($priceProPerson)
    {
        $this->priceProPerson = $priceProPerson;
        return $this;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return GreenObject
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return GreenObject
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @param bool $isActive
     *
     * @return GreenObject
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @param Contact $contact
     *
     * @return GreenObject
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @param mixed $longitude
     *
     * @return GreenObject
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param mixed $latitude
     *
     * @return GreenObject
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return bool
     */
    public function isShowOnFirstPage()
    {
        return $this->showOnFirstPage;
    }

    /**
     * @param bool $showOnFirstPage
     *
     * @return GreenObject
     */
    public function setShowOnFirstPage($showOnFirstPage)
    {
        $this->showOnFirstPage = $showOnFirstPage;
        return $this;
    }

    /**
     * @return GreenObjectImage[]
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @param GreenObjectImage[] $imageCollection
     *
     * @return GreenObject
     */
    public function setImageCollection($imageCollection)
    {
        foreach ($imageCollection as $image) {
            $this->imageCollection[] = $image;
            $image->setGreenObject($this);
        }
        return $this;
    }

    /**
     * @return GreenObjectImage | null
     */
    public function getMainImage()
    {
        foreach ($this->imageCollection as $image) {
            if ($image->isMain()) {
                return $image;
            }
        }
        return  null;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return GreenObject
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param $type
     *
     * @return bool
     */
    public function isTypeOf($type)
    {
        return $this->type === $type;
    }
}
