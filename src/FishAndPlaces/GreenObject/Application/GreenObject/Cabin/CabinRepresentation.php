<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\Value\GreenObjectType;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;

class CabinRepresentation extends GreenObjectRepresentation
{
    /**
     * @var Cabin
     */
    protected $greenObject;

    /**
     * @param Cabin|null $cabin
     */
    public function __construct(Cabin $cabin = null)
    {
        parent::__construct($cabin);

        if (null !== $cabin) {
            $this->greenObject = $cabin;
        }
    }

    /**
     * @return Cabin
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
        return GreenObjectType::CABIN;
    }
}
