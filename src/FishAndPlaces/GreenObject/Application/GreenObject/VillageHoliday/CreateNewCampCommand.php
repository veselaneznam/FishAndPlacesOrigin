<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class CreateNewVillageHolidayCommand extends CreateNewGreenObjectCommand
{
    /** @var VillageHoliday */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param VillageHolidayRepresentation $villageHolidayRepresentation
     * @param User              $user
     * @param string            $fileName
     */
    public function __construct(VillageHolidayRepresentation $villageHolidayRepresentation, User $user, $fileName = null)
    {
        parent::__construct($villageHolidayRepresentation, new VillageHoliday(), $user, $fileName);
    }
}
