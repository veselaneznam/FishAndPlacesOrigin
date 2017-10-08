<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Image;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\User\Domain\Model\User;

class UpdateGreenObjectImagesCommand extends UpdateGreenObjectCommand
{
    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param array $greenObjectImagesCollection
     */
    public function __construct(
        GreenObjectRepresentation $greenObjectRepresentation,
        $greenObjectImagesCollection = array()
    ) {
        $damImages = [];

        foreach ($greenObjectImagesCollection as $image)
        {
            $damImages[] = new GreenObjectImage($greenObjectRepresentation->getGreenObject(), $image, 0);
        }

        parent::__construct($greenObjectRepresentation, $greenObjectRepresentation->getGreenObject());

        foreach ($damImages as $damImage) {
            $this->greenObject->addImage($damImage);
        }
    }
}
