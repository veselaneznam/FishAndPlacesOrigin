<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Cabin;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\Cabin;

class CabinRepresentation extends GreenObjectRepresentation
{
    /**
     * @var Cabin
     */
    protected $greenObject;

    /**
     * @param Cabin|null $villageHoliday
     */
    public function __construct(Cabin $villageHoliday = null)
    {
        parent::__construct($villageHoliday);

        if (null !== $villageHoliday) {
            $this->greenObject = $villageHoliday;
        }
    }

    /**
     * @return Cabin
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
