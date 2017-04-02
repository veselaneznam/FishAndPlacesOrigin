<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;

class ActivateDamCommand
{
    /**
     * @var Dam
     */
    private $dam;

    public function __construct(DamRepresentation $damRepresentation)
    {
        $this->dam = new Dam();
        $this->dam->setId($damRepresentation->getId());
    }
}
