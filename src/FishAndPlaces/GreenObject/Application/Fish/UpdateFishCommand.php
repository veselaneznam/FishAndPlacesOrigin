<?php

namespace FishAndPlaces\GreenObject\Application\Fish;

use FishAndPlaces\GreenObject\Domain\Model\Fish;
use FishAndPlaces\User\Domain\Model\User;

class UpdateFishCommand
{
    protected $fish;

    /**
     * @param FishRepresentation $fishRepresentation
     * @param User               $user
     * @param string | null      $filename
     */
    public function __construct(FishRepresentation $fishRepresentation, User $user, $filename = null)
    {
        $fish = new Fish();
        $fish->setId($fishRepresentation->getId());
        $fish->setName($fishRepresentation->getName());
        $fish->setDescription($fishRepresentation->getDescription());
        if(null !== $filename) {
            $fish->setImage($filename);
        }
        $fish->setCreatedAt($fishRepresentation->getCreatedAt());
        $fish->setUpdatedAt(new \DateTime('now'));
        $fish->setIsActive($fishRepresentation->isActive());
        $this->fish = $fish;
    }

    /**
     * @return Fish
     */
    public function getFish()
    {
        return $this->fish;
    }
}
