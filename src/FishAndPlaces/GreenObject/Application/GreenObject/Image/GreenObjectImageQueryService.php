<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Image;

use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class GreenObjectImageQueryService
{
    /** @var GreenObjectImagesRepository */
    private $greenObjectImagesRepository;

    public function __construct(GreenObjectImagesRepository $damImagesRepository)
    {
        $this->greenObjectImagesRepository = $damImagesRepository;
    }

    /**
     * @param  GreenObject $greenObjectId
     *
     * @return GreenObjectImageRepresentation[]
     */
    public function getImages($greenObjectId)
    {
        $greenObject = $this->greenObjectImagesRepository->findByGreenObject($greenObjectId);

        return $this->convertToRepresentation($greenObject);
    }

    /**
     * @param int $greenObjectImageId
     *
     * @return GreenObjectImageRepresentation
     */
    public function getImage($greenObjectImageId)
    {
        return new GreenObjectImageRepresentation($this->greenObjectImagesRepository->find($greenObjectImageId));
    }

    /**
     * @param GreenObjectImage[] $greenObjectImages
     *
     * @return GreenObjectImageRepresentation[]
     */
    private function convertToRepresentation($greenObjectImages)
    {
        if (null !== $greenObjectImages) {
            return array_map(
                function (GreenObjectImage $greenObjectImage) {
                    $greenObjectImageRepresentation = new GreenObjectImageRepresentation($greenObjectImage);
                    return $greenObjectImageRepresentation;
                }, $greenObjectImages
            );
        }
        return [];
    }
}
