<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 23.07.17
 * Time: 14:14
 */

namespace FishAndPlaces\GreenObject\Domain\Repository;


interface LocalGeoPluginRepository
{
    /**
     * @param null $ipAddress
     * @return mixed
     */
    public function locate($ipAddress = null);

    public function nearby($radius=10, $limit=null);

}