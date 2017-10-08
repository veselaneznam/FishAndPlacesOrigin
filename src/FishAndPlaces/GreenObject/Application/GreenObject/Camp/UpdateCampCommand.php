<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Camp;

use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class UpdateCampCommand extends UpdateGreenObjectCommand
{
    /** @var Camp */
    protected $greenObject;

    /**
     * @var GreenObjectImage
     */
    protected $greenObjectImage;

    /**
     * @param CampRepresentation $greenObjectRepresentation
     * @param string            $fileName
     */
    public function __construct(CampRepresentation $greenObjectRepresentation, $fileName = null)
    {
        parent::__construct($greenObjectRepresentation, new Camp(), $fileName);
    }
}
