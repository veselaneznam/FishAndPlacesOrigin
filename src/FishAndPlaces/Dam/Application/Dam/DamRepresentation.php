<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\Dam\Domain\Value\Contact;
use FishAndPlaces\Dam\Domain\Value\Location;
use FishAndPlaces\Dam\Domain\Value\Rating;

class DamRepresentation
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

    /** @var Dam */
    private $dam;

    /** @var float */
    private $long;

    /** @var float */
    private $lat;
    /**
     * @var DamImage[]
     */
    private $imageCollection;

    /**
     * @var DamImage
     */
    private $mainImage;

    /**
     * @param Dam|null $dam
     */
    public function __construct(Dam $dam = null)
    {
        if (null !== $dam) {
            $this->dam = $dam;
            $this->id = $dam->getId();
            $this->name = $dam->getName();
            $this->location = $dam->getLocation();
            $this->priceProPerson = $dam->getPriceProPerson();
            $this->rating = $dam->getRating();
            $this->createdAt = $dam->getCreatedAt();
            $this->updatedAt = $dam->getUpdatedAt();
            $this->isActive = $dam->isActive();
            $this->contact = $dam->getContact();
            $this->fishCollection = $dam->getFishCollection();
            $this->location = new Location($dam->getLatitude(), $dam->getLongitude());
            $this->lat = $dam->getLatitude();
            $this->long = $dam->getLongitude();
            $this->imageCollection = $dam->getImageCollection();
            $this->mainImage = $dam->getMainImage();
        }
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return new Location($this->lat, $this->long);
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
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return Dam
     */
    public function getDam()
    {
        return $this->dam;
    }

    /**
     * @return float
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return DamImage[]
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @return DamImage
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'contactInformation' => $this->getContact(),
        ];
    }
}
