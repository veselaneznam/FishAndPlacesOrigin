<?php
namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Value\Location;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

interface GreenObjectRepository
{
    /**
     * @return GreenObject[]
     */
    public function findAll();

    /**
     * @param $id
     * @return GreenObject
     */
    public function find($id);

    /**
     * @param GreenObject $greenObject
     */
    public function update(GreenObject $greenObject);

    /**
     * @param GreenObject $greenObject
     */
    public function remove(GreenObject $greenObject);

    /**
     * @param GreenObject $greenObject
     */
    public function add(GreenObject $greenObject);

    /**
     * @param Location $location
     *
     * @param  int| null $radius
     *
     * @return GreenObject[]
     */
    public function findByLocation(Location $location, $radius = null);

    /**
     * @param Location $location
     *
     * @return GreenObject[]
     */
    public function findByNearByLocation(Location $location);

    /**
     * @param array $ids
     *
     * @return GreenObject[]
     */
    public function findByIds(array $ids);


    /**
     * @return GreenObject[]
     */
    public function findByFirstPage();

    /**
     * @param $name
     *
     * @return GreenObject[]
     */
    public function findByName($name);
}
