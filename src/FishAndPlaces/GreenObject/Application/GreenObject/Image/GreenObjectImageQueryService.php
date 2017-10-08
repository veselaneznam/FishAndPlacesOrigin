<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject\Image;

use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class GreenObjectImageQueryService
{
    /** @var GreenObjectImagesRepository */
    private $greenObjectImagesRepository;

    public function __construct(GreenObjectImagesRepository $ImagesRepository)
    {
        $this->greenObjectImagesRepository = $ImagesRepository;
    }

    /**
     * @param  GreenObject $Id
     *
     * @return GreenObjectImageRepresentation[]
     */
    public function getImages($id)
    {
        $greenObjectImages = $this->greenObjectImagesRepository->findByGreenObject($id);

        return $this->convertToRepresentation($greenObjectImages);
    }

    /**
     * @param int $damImageId
     *
     * @return GreenObjectImageRepresentation
     */
    public function getImage($damImageId)
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
