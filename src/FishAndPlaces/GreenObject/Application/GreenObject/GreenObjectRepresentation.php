<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;

use FishAndPlaces\GreenObject\Application\GreenObject\Image\GreenObjectImageRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Value\Contact;
use FishAndPlaces\GreenObject\Domain\Value\Location;
use FishAndPlaces\GreenObject\Domain\Value\Rating;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use Symfony\Component\HttpFoundation\File\File;

class GreenObjectRepresentation
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
     * @var Location
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
    protected $contactInformation;

    /** @var GreenObject */
    protected $greenObject;

    /** @var float */
    protected $long;

    /** @var float */
    protected $lat;

    /**
     * @var GreenObjectImage
     */
    protected $mainImage;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var bool
     */
    protected $showOnFirstPage;

    /**
     * @var GreenObjectImageRepresentation[]
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
     * @param GreenObject|null $greenObject
     */
    public function __construct(GreenObject $greenObject = null)
    {
        if (null !== $greenObject) {
            $this->greenObject = $greenObject;
            $this->id = $greenObject->getId();
            $this->name = $greenObject->getName();
            $this->location = $greenObject->getLocation();
            $this->priceProPerson = $greenObject->getPriceProPerson();
            $this->rating = $greenObject->getRating();
            $this->createdAt = $greenObject->getCreatedAt();
            $this->updatedAt = $greenObject->getUpdatedAt();
            $this->isActive = $greenObject->isActive();
            $this->contactInformation = $greenObject->getContact();
            $this->location = new Location($greenObject->getLatitude(), $greenObject->getLongitude());
            $this->address = $greenObject->getLocation();
            $this->lat = $greenObject->getLatitude();
            $this->long = $greenObject->getLongitude();
            foreach ($greenObject->getImageCollection() as $greenObjectImage) {
                $this->imageCollection[] = new GreenObjectImageRepresentation($greenObjectImage);

            }
            $this->mainImage = new GreenObjectImageRepresentation($greenObject->getMainImage());
            $this->showOnFirstPage = $greenObject->isShowOnFirstPage();
            $this->description = $greenObject->getDescription();
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
     * @return GreenObject
     */
    public function getGreenObject()
    {
        return $this->greenObject;
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
     * @return GreenObjectImageRepresentation[]
     */
    public function getImageCollection()
    {
        return $this->imageCollection;
    }

    /**
     * @return GreenObjectImageRepresentation
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'rating' => $this->getRating(),
            'priceProPerson' => $this->getPriceProPerson(),
            'address' => $this->getAddress(),
            'mainImage' => $this->getMainImage()->getWebPath(),
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
     * @return GreenObjectRepresentation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     *
     * @return GreenObjectRepresentation
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Location $location
     *
     * @return GreenObjectRepresentation
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @param string $priceProPerson
     *
     * @return GreenObjectRepresentation
     */
    public function setPriceProPerson($priceProPerson)
    {
        $this->priceProPerson = $priceProPerson;
        return $this;
    }

    /**
     * @param Rating $rating
     *
     * @return GreenObjectRepresentation
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return GreenObjectRepresentation
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return GreenObjectRepresentation
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @param bool $isActive
     *
     * @return GreenObjectRepresentation
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @param Contact $contactInformation
     *
     * @return GreenObjectRepresentation
     */
    public function setContactInformation($contactInformation)
    {
        $this->contactInformation = $contactInformation;
        return $this;
    }

    /**
     * @param GreenObject $greenObject
     *
     * @return GreenObjectRepresentation
     */
    public function setGreenObject(GreenObject $greenObject)
    {
        $this->greenObject = $greenObject;
        return $this;
    }

    /**
     * @param float $long
     *
     * @return GreenObjectRepresentation
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @param float $lat
     *
     * @return GreenObjectRepresentation
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @param GreenObjectImageRepresentation[] $imageCollection
     *
     * @return GreenObjectRepresentation
     */
    public function setImageCollection($imageCollection)
    {
        $this->imageCollection = $imageCollection;
        return $this;
    }

    /**
     * @param File $mainImage
     *
     * @return GreenObjectRepresentation
     */
    public function setMainImage(File $mainImage = null)
    {
        if(null !==$mainImage) {
            $greenObjectImage = new GreenObjectImage($this->greenObject, $mainImage->getPath(),1);
            $this->mainImage = new GreenObjectImageRepresentation($greenObjectImage);
        }

        return $this;
    }

    /**
     * @param string $address
     *
     * @return GreenObjectRepresentation
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
     * @return GreenObjectRepresentation
     */
    public function setShowOnFirstPage($showOnFirstPage)
    {
        $this->showOnFirstPage = $showOnFirstPage;
        return $this;
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
     * @return GreenObjectRepresentation
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
