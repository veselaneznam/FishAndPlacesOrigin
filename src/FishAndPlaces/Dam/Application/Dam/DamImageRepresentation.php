<?php

namespace FishAndPlaces\Dam\Application\Dam;


use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\DamImage;

class DamImageRepresentation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Dam
     */
    private $dam;

    /**
     * @var string
     */
    private $imageSrc;

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
    private $isMain;

    /**
     * @param DamImage|null $damImage
     */
    public function __construct(DamImage $damImage = null)
    {
        if(null !== $damImage) {
            $this->id = $damImage->getId();
            $this->dam = $damImage->getDam();
            $this->isMain = $damImage->isMain();
            $this->imageSrc = $damImage->getImageSrc();
            $this->createdAt = $damImage->getCreatedAt();
            $this->updatedAt = $damImage->getUpdatedAt();
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
     * @return Dam
     */
    public function getDam()
    {
        return $this->dam;
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
}
