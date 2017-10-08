<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class Dam extends GreenObject implements Entity
{
    /**
     * @var Fish[]|Collection
     */
    private $fishCollection;

    /**
     * Dam constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->fishCollection = new ArrayCollection();
    }

    /**
     * @return Fish[]|Collection
     */
    public function getFishCollection()
    {
        return $this->fishCollection;
    }

    /**
     * @param Fish $fish
     *
     * @return Dam
     */
    public function addFish(Fish $fish)
    {
        if(!$this->fishCollection->contains($fish)) {
            $this->fishCollection->add($fish);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return GreenObjectType::DAM;
    }

    /**
     * @return Dam
     */
    public function setType()
    {
        $this->type = GreenObjectType::DAM;
        return $this;
    }
}
