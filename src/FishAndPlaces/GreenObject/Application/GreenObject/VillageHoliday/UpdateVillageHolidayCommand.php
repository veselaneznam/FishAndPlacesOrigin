<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday\VillageHolidayRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\User\Domain\Model\User;

class UpdateVillageHolidayCommand extends UpdateGreenObjectCommand
{
    /** @var VillageHoliday */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param VillageHolidayRepresentation $greenObjectRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(VillageHolidayRepresentation $greenObjectRepresentation, User $user , $fileName = null)
    {
        parent::__construct($greenObjectRepresentation, new VillageHoliday(), $user, $fileName);
    }
}
