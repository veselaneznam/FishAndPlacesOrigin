<?php

namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\Fish;

interface FishRepository
{
    /**
     * @return Fish[]
     */
    public function findAll();

    /**
     * @param int $id
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
