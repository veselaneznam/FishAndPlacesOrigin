<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 23.07.17
 * Time: 14:28
 */

namespace FishAndPlaces\GreenObject\Infrastructure\Geocoder;


use FishAndPlaces\GreenObject\Domain\Repository\LocalGeoPluginRepository;

class GoogleMapxGeoLocationProxy implements LocalGeoPluginRepository
{


    /**
     * @param null $ipAddress
     * @return mixed
     */
    public function locate($ipAddress = null)
    {
            // TODO: Implement locate() method.
    }

    public function nearby($radius = 10, $limit = null)
    {
        // TODO: Implement nearby() method.
    }
}