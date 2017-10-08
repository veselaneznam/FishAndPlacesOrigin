<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\DeactivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;

class DeactivateVillageHolidayCommand extends DeactivateGreenObjectCommand
{
    /**
     * @var VillageHoliday
     */
    protected $greenObject;

    /**
     * @param VillageHolidayRepresentation $greenObjectRepresentation
     * @internal param User $user
     */
    public function __construct(VillageHolidayRepresentation $greenObjectRepresentation)
    {
        parent::__construct($greenObjectRepresentation, new VillageHoliday());
    }
}
