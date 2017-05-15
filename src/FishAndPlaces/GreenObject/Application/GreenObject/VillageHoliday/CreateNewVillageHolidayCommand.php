<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
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
     * @param VillageHolidayRepresentation $campRepresentation
     * @param User               $user
     * @param string             $fileName
     */
    public function __construct(VillageHolidayRepresentation $campRepresentation, User $user, $fileName = null)
    {
        parent::__construct($campRepresentation, new VillageHoliday(), $user, $fileName);
    }
}