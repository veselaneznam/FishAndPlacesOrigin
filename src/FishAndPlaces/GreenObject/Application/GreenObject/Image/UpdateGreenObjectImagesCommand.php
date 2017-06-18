<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Image;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class UpdateGreenObjectImagesCommand extends UpdateGreenObjectCommand
{
    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param User                      $user
     * @param array                     $greenObjectImagesCollection
     */
    public function __construct(GreenObjectRepresentation $greenObjectRepresentation, User $user, $greenObjectImagesCollection = array())
    {
        $damImages = [];

        foreach ($greenObjectImagesCollection as $image)
        {
            $damImages[] = new GreenObjectImage($greenObjectRepresentation->getGreenObject(), $image, 0);
        }

        parent::__construct($greenObjectRepresentation, $user);

        $this->greenObject->setImageCollection($damImages);
    }
}
