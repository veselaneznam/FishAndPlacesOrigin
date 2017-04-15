<?php

namespace FishAndPlaces\Dam\Domain\Repository;

use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\Fish;

interface FishRepository
{
    /**
     * @return Fish[]
     */
    public function findAll();

    /**
     * @param $id
     * @return Fish
     */
    public function find($id);

    /**
     * @param Fish $fish
     */
    public function update(Fish $fish);

    /**
     * @param Fish $fish
     */
    public function remove(Fish $fish);

    /**
     * @param Fish $fish
     */
    public function add(Fish $fish);

    /**
     * @param $name
     *
     * @return Fish[]
     */
    public function findByName($name);

}
