<?php

namespace FishAndPlaces\Dam\Application\Fish;

use FishAndPlaces\Dam\Domain\Model\Fish;
use FishAndPlaces\Dam\Domain\Model\Image;

class FishRepresentation
{
    /** @var string */
    private $name;

    /** @var Fish */
    private $fish;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /** @var Image */
    private $image;

    /** @var bool */
    private $isActive;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @param Fish|null $fish
     */
    public function __construct(Fish $fish = null)
    {
        if(null !== $fish) {
            $this->fish = $fish;
            $this->id = $fish->getId();
            $this->name = $fish->getName();
            $this->description = $fish->getDescription();
            $this->image = $fish->getImage();
            $this->isActive = $fish->isActive();
            $this->createdAt = $fish->getCreatedAt();
            $this->updatedAt = $fish->getUpdatedAt();
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return FishRepresentation
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     *
     * @return FishRepresentation
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return FishRepresentation
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return FishRepresentation
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @param string $name
     *
     * @return FishRepresentation
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Fish $fish
     *
     * @return FishRepresentation
     */
    public function setFish($fish)
    {
        $this->fish = $fish;
        return $this;
    }

    /**
     * @param int $id
     *
     * @return FishRepresentation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $description
     *
     * @return FishRepresentation
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
