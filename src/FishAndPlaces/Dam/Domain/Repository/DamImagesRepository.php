<?php

namespace FishAndPlaces\Dam\Domain\Repository;

use FishAndPlaces\Domain\Dam\Model\DamImage;

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
     * @param DamImage $dam
     */
    public function update(DamImage $dam);

    /**
     * @param DamImage $dam
     */
    public function remove(DamImage $dam);

    /**
     * @param DamImage $dam
     */
    public function add(DamImage $dam);

    /**
     * @param int $damId
     *
     * @return mixed
     */
    public function findByDam($damId);
}
