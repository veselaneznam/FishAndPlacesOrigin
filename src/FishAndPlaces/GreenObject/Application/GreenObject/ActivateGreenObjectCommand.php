<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;

use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\User\Domain\Model\User;

abstract class ActivateGreenObjectCommand extends UpdateGreenObjectCommand
{
    /**
     * @var GreenObject
     */
    protected $greenObject;

    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param GreenObject               $greenObject
     * @param User                      $user
     */
    public function __construct(GreenObjectRepresentation $greenObjectRepresentation, GreenObject $greenObject, User $user)
    {
        parent::__construct($greenObjectRepresentation, $greenObject, $user);
        $this->greenObject->setIsActive(1);
    }
}