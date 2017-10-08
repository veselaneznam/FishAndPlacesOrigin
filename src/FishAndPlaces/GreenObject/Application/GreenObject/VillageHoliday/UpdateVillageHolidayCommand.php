<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\VillageHoliday;

use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;

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
     * @param string $fileName
     * @internal param User $user
     */
    public function __construct(VillageHolidayRepresentation $greenObjectRepresentation, $fileName = null)
    {
        parent::__construct($greenObjectRepresentation, new VillageHoliday(), $fileName);
    }
}
