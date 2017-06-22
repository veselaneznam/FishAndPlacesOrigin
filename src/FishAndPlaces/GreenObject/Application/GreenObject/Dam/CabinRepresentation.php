<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\Fish\FishRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;

class CabinRepresentation extends GreenObjectRepresentation
{
    /**
     * @var FishRepresentation[]
     */
    private $fishCollection = [];

    /**
     * @var Cabin
     */
    protected $greenObject;

    /**
     * @return FishRepresentation[]
     */
    public function getFishCollection()
    {
        return $this->fishCollection;
    }

    /**
     * @return Cabin
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }

    /**
     * @param FishRepresentation[] $fishRepresentations
     */
    public function setFishCollection($fishRepresentations)
    {
        $this->fishCollection = $fishRepresentations;
    }

    /**
     * @return array
     */
    public function getFishSelect()
    {
        $list = [];
        /**
         * @var FishRepresentation $fish
         */
        foreach ($this->fishCollection as $fish) {
            $list[$fish->getName()] = $fish;
        }
        return $list;
    }
}
