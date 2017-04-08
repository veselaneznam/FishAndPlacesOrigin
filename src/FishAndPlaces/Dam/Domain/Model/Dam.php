<?php

namespace FishAndPlaces\Dam\Domain\Model;

use FishAndPlaces\Dam\Domain\Value\Contact;
use FishAndPlaces\Dam\Domain\Value\Location;
use FishAndPlaces\Dam\Domain\Value\Rating;
use Symfony\Component\Intl\Exception\MissingResourceException;

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
     * @var string
     */
    private $location;

    /**
     * @var float
     */
    private $priceProPerson;

    /**
     * @var Fish[]
     */
    private $fishCollection = [];

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

    /** @var float */
    private $longitude;

    /** @var float*/
    private $latitude;


    /** @var bool */
    private $showOnFirstPage;

    /**
     * @var DamImage[]
     */
    private $imageCollection = [];

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
     * @param string $location
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

    /**
     * @param mixed $longitude
     *
     * @return Dam
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param mixed $latitude
     *
     * @return Dam
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
     * @return Dam
     */
    public function setShowOnFirstPage($showOnFirstPage)
    {
        $this->showOnFirstPage = $showOnFirstPage;
        return $this;
    }

    /**
     * @return DamImage[]
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @param DamImage[] $imageCollection
     *
     * @return Dam
     */
    public function setImageCollection($imageCollection)
    {
        $this->imageCollection = $imageCollection;
        return $this;
    }

    /**
     * @return DamImage
     */
    public function getMainImage()
    {
        foreach ($this->imageCollection as $image) {
            if ($image->isMain()) {
                return $image;
            }
        }
       // throw new MissingResourceException('Main image is mandatory');
    }
}
