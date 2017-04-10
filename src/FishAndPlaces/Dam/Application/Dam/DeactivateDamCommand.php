<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\User\Domain\Model\User;

class DeactivateDamCommand
{
    /**
     * @var Dam
     */
    private $dam;

    public function __construct(DamRepresentation $damRepresentation, User $user)
    {
        $updateDamCommand = new UpdateDamCommand($damRepresentation, $user);
        $this->dam = $updateDamCommand->getDam();
        $this->dam->setIsActive(0);
    }

    /**
     * @return Dam
     */
    public function getDam()
    {
        return $this->dam;
    }
}
