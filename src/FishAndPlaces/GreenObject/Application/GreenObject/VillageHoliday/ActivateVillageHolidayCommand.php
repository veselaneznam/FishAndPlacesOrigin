<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\ActivateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;

class ActivateVillageHolidayCommand extends ActivateGreenObjectCommand
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
