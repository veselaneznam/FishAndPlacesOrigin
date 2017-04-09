<?php

namespace FishAndPlaces\Dam\Domain\Repository;

use FishAndPlaces\Dam\Domain\Model\DamImage;

interface DamImagesRepository
{
    /**
     * @return DamImage[]
     */
    public function findAll();

    /**
     * @param $id
     * @return DamImage
     */
    public function find($id);

    /**
     * @param DamImage $damImage
     */
    public function update(DamImage $damImage);

    /**
     * @param DamImage $damImage
     */
    public function remove(DamImage $damImage);

    /**
     * @param DamImage $damImage
     */
    public function add(DamImage $damImage);

    /**
     * @param int $damId
     *
     * @return mixed
     */
    public function findByDam($damId);

    /**
     * @param $dam
     *
     * @return void
     */
    public function resetMain($dam);
}
