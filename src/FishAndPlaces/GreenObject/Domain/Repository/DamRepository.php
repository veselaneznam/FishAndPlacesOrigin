<?php
namespace FishAndPlaces\GreenObject\Domain\Repository;

use FishAndPlaces\GreenObject\Domain\Model\Dam;
use FishAndPlaces\GreenObject\Domain\Model\Fish;
use FishAndPlaces\GreenObject\Domain\Value\Location;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

interface DamRepository extends GreenObjectRepository
{
    /**
     * @param Fish $fish
     *
     * @return mixed
     */
    public function findByFish(Fish $fish);

    /**
     * @return Dam[]
     */
    public function findAllActive();

    public function findAll();

    /**
     * @param $id
     * @return Dam
     */
    public function find($id);

    /**
     * @param Location $location
     *
     * @param  int| null $radius
     *
     * @return Dam[]
     */
    public function findByLocation(Location $location, $radius = null);

    /**
     * @param Location $location
     *
     * @return Dam[]
     */
    public function findByNearByLocation(Location $location);

    /**
     * @param array $ids
     *
     * @return Dam[]
     */
    public function findByIds(array $ids);


    /**
     * @return Dam[]
     */
    public function findByFirstPage();

    /**
     * @param $name
     *
     * @return Dam[]
     */
    public function findByName($name);

}
