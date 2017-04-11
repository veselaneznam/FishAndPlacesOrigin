<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\User\Domain\Model\User;

class DeleteDamImagesCommand
{
    /** @var DamImage[] */
    private $damImages;

    /**
     * @param DamImageRepresentation[] $damImagesRepresentation
     * @param User $user
     */
    public function __construct($damImagesRepresentation, User $user)
    {
        foreach ($damImagesRepresentation as $damImageRepresentation) {
            $damImage = new DamImage(
                $damImageRepresentation->getDam(),
                $damImageRepresentation->getImageSrc(),
                $damImageRepresentation->isMain()
            );
            $damImage->setId($damImageRepresentation->getId());
            $this->damImages[] = $damImage;
        }
    }

    /**
     * @return DamImage[]
     */
    public function getDamImages()
    {
        return $this->damImages;
    }
}
