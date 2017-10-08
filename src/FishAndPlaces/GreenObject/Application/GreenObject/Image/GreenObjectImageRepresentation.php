<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Image;

use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class GreenObjectImageRepresentation
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var GreenObject
     */
    protected $greenObject;

    /**
     * @var string
     */
    protected $imageSrc;

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
    protected $isMain;

    /**
     * @var GreenObjectImage|null
     */
    protected $greenObjectImage;

    /**
     * @var null|string
     */
    protected $webPath;

    /**
     * @param GreenObjectImage|null $greenObjectImage
     */
    public function __construct(GreenObjectImage $greenObjectImage = null)
    {
        if(null !== $greenObjectImage) {
            $this->id = $greenObjectImage->getId();
            $this->greenObject = $greenObjectImage->getGreenObject();
            $this->isMain = $greenObjectImage->isMain();
            $this->imageSrc = $greenObjectImage->getImageSrc();
            $this->createdAt = $greenObjectImage->getCreatedAt();
            $this->updatedAt = $greenObjectImage->getUpdatedAt();
            $this->greenObjectImage = $greenObjectImage;
            $this->webPath = $greenObjectImage->getWebPath();
        }
    }

    /**
     * @return GreenObjectImage|null
     */
    public function getGreenObjectImage()
    {
        return $this->greenObjectImage;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return GreenObject
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }

    /**
     * @return string
     */
    public function getImageSrc()
    {
        return $this->imageSrc;
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
    public function isMain()
    {
        return $this->isMain;
    }

    /**
     * @return null|string
     */
    public function getWebPath()
    {
        return $this->webPath;
    }
}
