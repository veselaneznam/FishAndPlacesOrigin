<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\Camp;

class CampRepresentation extends GreenObjectRepresentation
{
    /**
     * @var Camp
     */
    protected $greenObject;

    /**
     * @param Camp|null $villageHoliday
     */
    public function __construct(Camp $villageHoliday = null)
    {
        parent::__construct($villageHoliday);

        if (null !== $villageHoliday) {
            $this->greenObject = $villageHoliday;
        }
    }

    /**
     * @return Camp
     */
    public function getGreenObject()
    {
        return $this->greenObject;
    }
}
