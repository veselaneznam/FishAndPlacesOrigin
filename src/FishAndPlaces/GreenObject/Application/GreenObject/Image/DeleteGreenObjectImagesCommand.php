<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Image;

use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class DeleteGreenObjectImagesCommand
{
    /** @var GreenObjectImage[] */
    private $greenObjectImages;

    /**
     * @param GreenObjectImageRepresentation[] $greenObjectImageRepresentations
     * @param User                             $user
     */
    public function __construct($greenObjectImageRepresentations, User $user)
    {
        foreach ($greenObjectImageRepresentations as $greenObjectImageRepresentation) {
            $Image = new GreenObjectImage(
                $greenObjectImageRepresentation->getGreenObject(),
                $greenObjectImageRepresentation->getImageSrc(),
                $greenObjectImageRepresentation->isMain()
            );
            $Image->setId($greenObjectImageRepresentation->getId());
            $this->greenObjectImages[] = $Image;
        }
    }

    /**
     * @return GreenObjectImage[]
     */
    public function getGreenObjectImages()
    {
        return $this->greenObjectImages;
    }
}
