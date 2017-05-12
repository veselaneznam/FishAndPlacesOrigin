<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\ActivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\User\Domain\Model\User;

class ActivateVillageHolidayCommand extends ActivateGreenObjectCommand
{
    /** @var VillageHoliday */
    protected $greenObject;

    /**
     * @param VillageHolidayRepresentation $villageHolidayRepresentation
     * @param User                         $user
     */
    public function __construct(VillageHolidayRepresentation $villageHolidayRepresentation, User $user)
    {
        parent::__construct($villageHolidayRepresentation, new VillageHoliday(), $user);
    }
}
