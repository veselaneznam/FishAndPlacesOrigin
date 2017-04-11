<?php

namespace FishAndPlaces\Dam\Application\Dam;

use FishAndPlaces\Dam\Domain\Model\DamImage;
use FishAndPlaces\Dam\Domain\Repository\DamImagesRepository;

class DamImageQueryService
{
    /** @var DamImagesRepository */
    private $damImagesRepository;

    public function __construct(DamImagesRepository $damImagesRepository)
    {
        $this->damImagesRepository = $damImagesRepository;
    }

    /**
     * @param int $damId
     *
     * @return DamImageRepresentation[]
     */
    public function getDamImages($damId)
    {
        $damImages = $this->damImagesRepository->findByDam($damId);

        return $this->convertToRepresentation($damImages);
    }

    /**
     * @param int $damImageId
     *
     * @return DamImageRepresentation
     */
    public function getDamImage($damImageId)
    {
        return new DamImageRepresentation($this->damImagesRepository->find($damImageId));
    }

    /**
     * @param DamImage[] $damImages
     *
     * @return DamImageRepresentation[]
     */
    private function convertToRepresentation($damImages)
    {
        if (null !== $damImages) {
            return array_map(
                function (DamImage $damImage) {
                    $damImageRepresentation = new DamImageRepresentation($damImage);
                    return $damImageRepresentation;
                }, $damImages
            );
        }
        return [];
    }
}
