<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;


use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Application\GreenObject\Image\DeleteGreenObjectImagesCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Image\UpdateGreenObjectImagesCommand;
use FishAndPlaces\GreenObject\Application\GreenObject\Rating\UpdateGreenObjectRatingCommand;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectImagesRepository;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectRepository;
use FishAndPlaces\GreenObject\Domain\Repository\RatingRepository;

abstract class GreenObjectService
{
    /** @var GreenObjectRepository */
    private $greenObjectRepository;

    /** @var GeoLocatorService */
    private $geoLocatorService;

    /** @var GreenObjectImagesRepository */
    private $greenObjectImagesRepository;

    /**
     * @var RatingRepository
     */
    private $ratingRepository;

    /**
     * @param GreenObjectRepository $greenObjectRepository
     * @param GeoLocatorService $geoLocatorService
     * @param GreenObjectImagesRepository $ImagesRepository
     * @param RatingRepository $ratingRepository
     */
    public function __construct(
        GreenObjectRepository $greenObjectRepository,
        GeoLocatorService $geoLocatorService,
        GreenObjectImagesRepository $ImagesRepository,
        RatingRepository $ratingRepository
    )
    {
        $this->greenObjectRepository = $greenObjectRepository;
        $this->geoLocatorService = $geoLocatorService;
        $this->greenObjectImagesRepository = $ImagesRepository;
        $this->ratingRepository = $ratingRepository;
    }

    /**
     * @param CreateNewGreenObjectCommand $command
     */
    public function create(CreateNewGreenObjectCommand $command)
    {
        $location = $this->geoLocatorService->getLocation($command->getGreenObject()->getLocation());

        $greenObject = $command->getGreenObject();
        $greenObject->setLongitude($location->getLon());
        $greenObject->setLatitude($location->getLat());

        $this->greenObjectRepository->add($greenObject);

        $greenObjectImage = $command->getGreenObjectImage();
        if (null !== $greenObjectImage) {
            $greenObjectImage->setGreenObject($greenObject);
            $this->greenObjectImagesRepository->add($greenObjectImage);
        }
    }

    /**
     * @param ImportGreenObjectCommand $command
     */
    public function import(ImportGreenObjectCommand $command)
    {
        $this->greenObjectRepository->add($command->getGreenObject());
    }

    /**
     * @param UpdateGreenObjectCommand $command
     *
     * @throws \Exception
     */
    public function update(UpdateGreenObjectCommand $command)
    {
        $greenObject = $command->getGreenObject();
        $location = $this->geoLocatorService->getLocation($command->getGreenObject()->getLocation());
        $greenObject->setLongitude($location->getLon());
        $greenObject->setLatitude($location->getLat());

        $this->greenObjectRepository->update($greenObject);

        $greenObjectImage = $command->getGreenObjectImage();
        if (null !== $greenObjectImage) {
            $greenObjectImage->setGreenObject($greenObject);
            $this->greenObjectImagesRepository->resetMain($greenObject);
            $this->greenObjectImagesRepository->update($greenObjectImage);
        }
    }

    /**
     * @param ActivateGreenObjectCommand $command
     */
    public function activate(ActivateGreenObjectCommand $command)
    {
        $this->greenObjectRepository->update($command->getGreenObject());
    }

    public function updateRating(UpdateGreenObjectRatingCommand $command)
    {
        $this->greenObjectRepository->update($command->getGreenObject());
    }

    /**
     * @param DeactivateGreenObjectCommand $command
     */
    public function deactivate(DeactivateGreenObjectCommand $command)
    {
        $this->greenObjectRepository->update($command->getGreenObject());
    }

    /**
     * @param UpdateGreenObjectImagesCommand $command
     */
    public function updateImages(UpdateGreenObjectImagesCommand $command)
    {
        foreach ($command->getGreenObject()->getImageCollection() as $Image) {
            $command->getGreenObject()->addImage($Image);
            $this->greenObjectImagesRepository->update($Image);
        }
        $this->greenObjectRepository->update($command->getGreenObject());
    }

    /**
     * @param DeleteGreenObjectImagesCommand $command
     */
    public function deleteImages(DeleteGreenObjectImagesCommand $command)
    {
        foreach ($command->getGreenObjectImages() as $Image) {
            $this->greenObjectImagesRepository->remove($Image);
        }
    }
}
