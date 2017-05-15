<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Dam extends GreenObject implements Entity
{
    /**
     * @var Fish[]|Collection
     */
    private $fishCollection;

    public function __construct()
    {
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
}
