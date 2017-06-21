<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\DeactivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\User\Domain\Model\User;

class DeactivateVillageHolidayCommand extends DeactivateGreenObjectCommand
{
    /**
     * @var VillageHoliday
     */
    protected $greenObject;

    /**
     * @param VillageHolidayRepresentation $greenObjectRepresentation
     * @param User              $user
     */
    public function __construct(VillageHolidayRepresentation $greenObjectRepresentation, User $user)
    {
        parent::__construct($greenObjectRepresentation, new VillageHoliday(), $user);
    }
}
