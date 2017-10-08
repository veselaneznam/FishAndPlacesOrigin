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
     * @param Cabin|null $cabin
     */
    public function __construct(Cabin $cabin = null)
    {
        parent::__construct($cabin);
    }
}
