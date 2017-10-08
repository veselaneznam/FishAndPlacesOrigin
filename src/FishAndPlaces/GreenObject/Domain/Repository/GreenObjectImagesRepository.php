<?php

namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Model\GreenObjectImage;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

interface GreenObjectImagesRepository
{
    /**
     * @return GreenObjectImage[]
     */
    public function findAll();

    /**
     * @param $id
     *
     * @return GreenObjectImage
     */
    public function find($id);

    /**
     * @param GreenObjectImage $greenObjectImage
     */
    public function update(GreenObjectImage $greenObjectImage);

    /**
     * @param GreenObjectImage $greenObjectImage
     */
    public function remove(GreenObjectImage $greenObjectImage);

    /**
     * @param GreenObjectImage $greenObjectImage
     */
    public function add(GreenObjectImage $greenObjectImage);

    /**
     * @param GreenObject $greenObject
     *
     * @return mixed
     */
    public function findByGreenObject(GreenObject $greenObject);

    /**
     * @param GreenObject $dam
     *
     * @return void
     */
    public function resetMain(GreenObject $dam);
}
