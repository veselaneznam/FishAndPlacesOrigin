<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Rating;

use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\GreenObject\Domain\Model\Rating;

class GreenObjectRatingRepresentation
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
    protected $ip;

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * @var float
     */
    protected $rating;

    /**
     * @var Rating
     */
    protected $greenObjectRating;


    /**
     * @param Rating|null $greenObjectRating
     */
    public function __construct(Rating $greenObjectRating = null)
    {
        if(null !== $greenObjectRating) {
            $this->id = $greenObjectRating->getId();
            $this->greenObject = $greenObjectRating->getGreenObject();
            $this->rating = $greenObjectRating->getRating();
            $this->ip = $greenObjectRating->getIp();
            $this->time = $greenObjectRating->getTime();
            $this->greenObjectRating = $greenObjectRating;
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return GreenObjectRatingRepresentation
     */
    public function setId(int $id): GreenObjectRatingRepresentation
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return GreenObject
     */
    public function getGreenObject(): GreenObject
    {
        return $this->greenObject;
    }

    /**
     * @param GreenObject $greenObject
     * @return GreenObjectRatingRepresentation
     */
    public function setGreenObject(GreenObject $greenObject): GreenObjectRatingRepresentation
    {
        $this->greenObject = $greenObject;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return GreenObjectRatingRepresentation
     */
    public function setIp(string $ip): GreenObjectRatingRepresentation
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param \DateTime $dateTime
     * @return GreenObjectRatingRepresentation
     */
    public function setTime(\DateTime $dateTime) : GreenObjectRatingRepresentation
    {
        $this->time = $dateTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    /**
     * @param float $rating
     * @return GreenObjectRatingRepresentation
     */
    public function setRating(float $rating): GreenObjectRatingRepresentation
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return Rating
     */
    public function getGreenObjectRating(): Rating
    {
        return $this->greenObjectRating;
    }

    /**
     * @param Rating $greenObjectRating
     * @return GreenObjectRatingRepresentation
     */
    public function setGreenObjectRating(Rating $greenObjectRating): GreenObjectRatingRepresentation
    {
        $this->greenObjectRating = $greenObjectRating;
        return $this;
    }
}
