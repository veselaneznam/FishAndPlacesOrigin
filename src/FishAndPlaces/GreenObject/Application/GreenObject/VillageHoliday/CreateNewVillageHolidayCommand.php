<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\CreateNewGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;

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
     * @param string $fileName
     * @internal param User $user
     */
    public function __construct(VillageHolidayRepresentation $villageHolidayRepresentation, $fileName = null)
    {
        parent::__construct($villageHolidayRepresentation, new VillageHoliday(), $fileName);
    }
}
