<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Dam;

use FishAndPlaces\GreenObject\Application\Fish\FishRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\Dam;

class DamRepresentation extends GreenObjectRepresentation
{
    /**
     * @var FishRepresentation[]
     */
    private $fishCollection = [];

    /**
     * @var Dam
     */
    protected $greenObject;

    /**
     * @param Dam|null $villageHoliday
     */
    public function __construct(Dam $villageHoliday = null)
    {
        parent::__construct($villageHoliday);
        if (null !== $villageHoliday) {
            foreach ($villageHoliday->getFishCollection()->toArray() as $fish) {
                $this->fishCollection[] = new FishRepresentation($fish);
            }
            $this->greenObject = $villageHoliday;
        }
    }

    /**
     * @return FishRepresentation[]
     */
    public function getFishCollection()
    {
        return $this->fishCollection;
    }

    /**
     * @return Dam
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
