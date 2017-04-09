<?php

namespace FishAndPlaces\Dam\Domain\Model;

class DamImage extends Image
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
    protected $imageSrc;

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
     * @param Dam    $dam
     * @param string $imageSrc
     * @param bool   $isMain
     */
    public function __construct(Dam $dam = null, $imageSrc, $isMain)
    {
        $this->dam = $dam;

        $this->imageSrc = $imageSrc;

        $this->createdAt = new \DateTime();

        $this->updatedAt = new \DateTime();

        $this->isMain = $isMain;
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isMain()
    {
        return $this->isMain;
    }

    /**
     * @param bool $isMain
     *
     * @return DamImage
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;
        return $this;
    }

    /**
     * @param Dam $dam
     *
     * @return DamImage
     */
    public function setDam(Dam $dam)
    {
        $this->dam = $dam;
        return $this;
    }
}
