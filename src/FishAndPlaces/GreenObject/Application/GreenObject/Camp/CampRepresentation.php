<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\Value\GreenObjectType;
use FishAndPlaces\GreenObject\Domain\Model\Camp;

class CampRepresentation extends GreenObjectRepresentation
{
    /**
     * @var Camp
     */
    protected $greenObject;

    /**
     * @param Camp|null $camp
     */
    public function __construct(Camp $camp = null)
    {
        parent::__construct($camp);

        if (null !== $camp) {
            $this->greenObject = $camp;
        }
    }

    /**
     * @return Camp
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return GreenObjectType::CAMP;
    }
}
