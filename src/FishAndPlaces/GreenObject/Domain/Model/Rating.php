<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 03.09.17
 * Time: 12:54
 */

namespace FishAndPlaces\GreenObject\Domain\Model;

class Rating implements Entity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $rating;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var GreenObject
     */
    private $greenObject;

    /**
     * Rating constructor.
     * @param GreenObject $greenObject
     * @param string $ip
     * @param float $rating
     * @param \DateTime $time
     */
    public function __construct(GreenObject $greenObject, string $ip, float $rating, \DateTime $time)
    {
        $this->greenObject = $greenObject;
        $this->ip = $ip;
        $this->rating = $rating;
        $this->time = $time;
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
     * @return Rating
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     * @return Rating
     */
    public function setRating(float $rating)
    {
        $this->rating = $rating;
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
     * @param \DateTime $time
     * @return Rating
     */
    public function setTime(\DateTime $time) : Rating
    {
        $this->time = $time;
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
     * @return Rating
     */
    public function setIp(string $ip)
    {
        $this->ip = $ip;
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
     * @return Rating
     */
    public function setGreenObject(GreenObject $greenObject)
    {
        $this->greenObject = $greenObject;
        return $this;
    }
}