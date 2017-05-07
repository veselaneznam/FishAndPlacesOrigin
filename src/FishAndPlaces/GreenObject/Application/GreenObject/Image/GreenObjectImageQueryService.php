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
     * @param  GreenObject $damId
     *
     * @return GreenObjectImageRepresentation[]
     */
    public function getDamImages($damId)
    {
        $damImages = $this->greenObjectImagesRepository->findByGreenObject($damId);

        return $this->convertToRepresentation($damImages);
    }

    /**
     * @param int $damImageId
     *
     * @return GreenObjectImageRepresentation
     */
    public function getDamImage($damImageId)
    {
        return new GreenObjectImageRepresentation($this->greenObjectImagesRepository->find($damImageId));
    }

    /**
     * @param GreenObjectImage[] $damImages
     *
     * @return GreenObjectImageRepresentation[]
     */
    private function convertToRepresentation($damImages)
    {
        if (null !== $damImages) {
            return array_map(
                function (GreenObjectImage $damImage) {
                    $damImageRepresentation = new GreenObjectImageRepresentation($damImage);
                    return $damImageRepresentation;
                }, $damImages
            );
        }
        return [];
    }
}
