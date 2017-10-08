<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Rating;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\UpdateGreenObjectCommand;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\GreenObject\Domain\Model\Rating;

class UpdateGreenObjectRatingCommand extends UpdateGreenObjectCommand
{
    /**
     * @var GreenObject
     */
    protected $greenObject;

    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param GreenObjectRatingRepresentation[] $ratingRepresentation
     */
    public function __construct(GreenObjectRepresentation $greenObjectRepresentation, array $ratingRepresentation)
    {
        parent::__construct($greenObjectRepresentation, $greenObjectRepresentation->getGreenObject());

        foreach ($ratingRepresentation as $rating) {

            $this->greenObject->addRating(new Rating(
                    $rating->getGreenObject(),
                    $rating->getIp(),
                    $rating->getRating(),
                    $rating->getTime()
            ));
        }
    }
}
