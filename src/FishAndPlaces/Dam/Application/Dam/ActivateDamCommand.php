<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\User\Domain\Model\User;

class ActivateDamCommand extends UpdateDamCommand
{
    /**
     * @var Dam
     */
    protected $dam;

    public function __construct(DamRepresentation $damRepresentation, User $user)
    {
        parent::__construct($damRepresentation, $user);
        $this->dam->setIsActive(1);
    }
}
