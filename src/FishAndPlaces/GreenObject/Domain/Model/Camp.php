<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;

class Camp extends GreenObject implements Entity
{

    /**
     * @return int
     */
    public function getType()
    {
        return GreenObjectType::CAMP;
    }

    /**
     * @return Camp
     */
    public function setType()
    {
        $this->type = GreenObjectType::CAMP;
        return $this;
    }
}
