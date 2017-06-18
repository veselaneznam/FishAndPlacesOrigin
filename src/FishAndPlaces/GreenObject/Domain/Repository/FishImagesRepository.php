<?php

namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\Domain\Fish\Model\FishImage;

interface FishImagesRepository
{
    /**
     * @return FishImage[]
     */
    public function findAll();

    /**
     * @param $id
     * @return FishImage
     */
    public function find($id);

    /**
     * @param FishImage $fishImage
     */
    public function update(FishImage $fishImage);

    /**
     * @param FishImage $fishImage
     */
    public function remove(FishImage $fishImage);

    /**
     * @param FishImage $fishImage
     */
    public function add(FishImage $fishImage);

}
