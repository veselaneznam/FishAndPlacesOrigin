<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class Cabin extends GreenObject implements Entity
{

    /**
     * @return int
     */
    public function getType()
    {
        return GreenObjectType::CABIN;
    }

    /**
     * @return Cabin
     */
    public function setType()
    {
        $this->type = GreenObjectType::CABIN;
        return $this;
    }
}
