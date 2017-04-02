<?php
namespace FishAndPlaces\Dam\Domain\Repository;

use FishAndPlaces\Dam\Domain\Model\Dam;

interface DamRepository
{
    /**
     * @return Dam[]
     */
    public function findAll();

    /**
     * @param $id
     * @return Dam
     */
    public function find($id);

    /**
     * @param Dam $dam
     */
    public function update(Dam $dam);

    /**
     * @param Dam $dam
     */
    public function remove(Dam $dam);

    /**
     * @param Dam $dam
     */
    public function add(Dam $dam);

    /**
     * @param $data
     *
     * @return Dam[]
     */
    public function findByLocation($data);

}
