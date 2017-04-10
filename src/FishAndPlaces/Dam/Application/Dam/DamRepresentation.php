<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Application\Fish\FishRepresentation;
use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\Dam\Domain\Value\Contact;
use FishAndPlaces\Dam\Domain\Value\Location;
use FishAndPlaces\Dam\Domain\Value\Rating;
use Symfony\Component\HttpFoundation\File\File;

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
     * @var FishRepresentation[]
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
    private $contactInformation;

    /** @var Dam */
    private $dam;

    /** @var float */
    private $long;

    /** @var float */
    private $lat;

    /**
     * @var DamImage
     */
    private $mainImage;

    /**
     * @var string
     */
    private $address;

    /**
     * @var bool
     */
    private $showOnFirstPage;

    /**
     * @var DamImageRepresentation[]
     */
    private $imageCollection = [];

    private $description;

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
            $this->contactInformation = $dam->getContact();
            foreach ($dam->getFishCollection() as $fish) {
                $this->fishCollection[] = new FishRepresentation($fish);
            }
            $this->location = new Location($dam->getLatitude(), $dam->getLongitude());
            $this->address = $dam->getLocation();
            $this->lat = $dam->getLatitude();
            $this->long = $dam->getLongitude();
            foreach ($dam->getImageCollection() as $damImage) {
                $this->imageCollection[] = new DamImageRepresentation($damImage);

            }
            $this->mainImage = new DamImageRepresentation($dam->getMainImage());
            $this->showOnFirstPage = $dam->isShowOnFirstPage();
            $this->description = $dam->getDescription();
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
     * @return FishRepresentation[]
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
    public function getContactInformation()
    {
        return $this->contactInformation;
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
     * @return DamImageRepresentation[]
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @return DamImageRepresentation
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'contactInformation' => $this->getContactInformation(),
        ];
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param int $id
     *
     * @return DamRepresentation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     *
     * @return DamRepresentation
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Location $location
     *
     * @return DamRepresentation
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @param float $priceProPerson
     *
     * @return DamRepresentation
     */
    public function setPriceProPerson($priceProPerson)
    {
        $this->priceProPerson = $priceProPerson;
        return $this;
    }

    /**
     * @param FishRepresentation[] $fishCollection
     *
     * @return DamRepresentation
     */
    public function setFishCollection($fishCollection)
    {
        $this->fishCollection = $fishCollection;
        return $this;
    }

    /**
     * @param Rating $rating
     *
     * @return DamRepresentation
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return DamRepresentation
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return DamRepresentation
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @param bool $isActive
     *
     * @return DamRepresentation
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @param Contact $contactInformation
     *
     * @return DamRepresentation
     */
    public function setContactInformation($contactInformation)
    {
        $this->contactInformation = $contactInformation;
        return $this;
    }

    /**
     * @param Dam $dam
     *
     * @return DamRepresentation
     */
    public function setDam($dam)
    {
        $this->dam = $dam;
        return $this;
    }

    /**
     * @param float $long
     *
     * @return DamRepresentation
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @param float $lat
     *
     * @return DamRepresentation
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @param DamImageRepresentation[] $imageCollection
     *
     * @return DamRepresentation
     */
    public function setImageCollection($imageCollection)
    {
        $this->imageCollection = $imageCollection;
        return $this;
    }

    /**
     * @param File $mainImage
     *
     * @return DamRepresentation
     */
    public function setMainImage(File $mainImage = null)
    {
        if(null !==$mainImage) {
            $damImage = new DamImage($this->dam, $mainImage->getPath(),1);
            $this->mainImage = new DamImageRepresentation($damImage);
        }

        return $this;
    }

    /**
     * @param string $address
     *
     * @return DamRepresentation
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
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
     * @return DamRepresentation
     */
    public function setShowOnFirstPage($showOnFirstPage)
    {
        $this->showOnFirstPage = $showOnFirstPage;
        return $this;
    }

    public function getFishSelect()
    {
        $list = [];
        /**
         * @var FishRepresentation $fish
         */
        foreach ($this->fishCollection as $fish) {
            $list[$fish->getName()] = $fish;
        }
        return $list;
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
     * @return DamRepresentation
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
