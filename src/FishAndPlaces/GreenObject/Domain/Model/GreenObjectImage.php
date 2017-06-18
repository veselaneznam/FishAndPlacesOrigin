<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

class GreenObjectImage extends Image implements Entity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var GreenObject
     */
    private $greenObject;

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
     * @param GreenObject $greenObject
     * @param string $imageSrc
     * @param bool   $isMain
     */
    public function __construct(GreenObject $greenObject = null, $imageSrc, $isMain)
    {
        $this->greenObject = $greenObject;

        $this->imageSrc = $imageSrc;

        $this->createdAt = new \DateTime();

        $this->updatedAt = new \DateTime();

        $this->isMain = $isMain;
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return GreenObjectImage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @return GreenObjectImage
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;
        return $this;
    }

    /**
     * @param GreenObject $greenObject
     *
     * @return GreenObjectImage
     */
    public function setGreenObject(GreenObject $greenObject)
    {
        $this->greenObject = $greenObject;
        return $this;
    }
}
