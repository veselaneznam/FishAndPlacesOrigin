<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\User\Domain\Model\User;

class UpdateDamImagesCommand extends UpdateDamCommand
{
    /**
     * @param DamRepresentation $damRepresentation
     * @param User              $user
     * @param array             $damImagesCollection
     */
    public function __construct(DamRepresentation $damRepresentation, User $user, $damImagesCollection = array())
    {
        $damImages = [];

        foreach ($damImagesCollection as $image)
        {
            $damImages[] = new DamImage($damRepresentation->getDam(), $image, 0);
        }

        parent::__construct($damRepresentation, $user);

        $this->dam->setImageCollection($damImages);
    }
}
