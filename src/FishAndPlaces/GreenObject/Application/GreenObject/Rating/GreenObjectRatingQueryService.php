<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Rating;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\GreenObject\Domain\Model\Rating;
use FishAndPlaces\GreenObject\Domain\Repository\RatingRepository;

class GreenObjectRatingQueryService
{
    /** @var RatingRepository */
    private $ratingRepository;

    public function __construct(RatingRepository $ratingRepository)
    {
        $this->ratingRepository = $ratingRepository;
    }


    /**
     * @param int $damRatingId
     *
     * @return GreenObjectRatingRepresentation
     */
    public function getRating($damRatingId)
    {
        return new GreenObjectRatingRepresentation($this->ratingRepository->find($damRatingId));
    }

    /**
     * @param GreenObject $greenObject
     * @return GreenObjectRatingRepresentation[]
     */
    public function getRatings(GreenObject $greenObject)
    {
        $greenObjectCollection = $this->ratingRepository->findByDam($greenObject);

        return $this->convertToRepresentation($greenObjectCollection);
    }

    /**
     * @param GreenObjectRepresentation $greenObject
     * @param string $ip
     * @return bool
     */
    public function getAlreadyExisting(GreenObjectRepresentation $greenObject, string $ip) : bool
    {
        $rating = $this->ratingRepository->findByDamAndIp($greenObject->getGreenObject(), $ip);

        return empty($rating) ? false : true;
    }

    /**
     * @param Rating[] $greenObjectRatings
     *
     * @return GreenObjectRatingRepresentation[]
     */
    private function convertToRepresentation($greenObjectRatings)
    {
        if (null !== $greenObjectRatings) {
            return array_map(
                function (Rating $rating) {
                    $damImageRepresentation = new GreenObjectRatingRepresentation($rating);
                    return $damImageRepresentation;
                }, $greenObjectRatings
            );
        }
        return [];
    }
}
