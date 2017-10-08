<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 24.06.17
 * Time: 09:59
 */

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Map;

use Ivory\GoogleMap\Overlay\InfoWindow;

class MarkerDecorator
{
    private $latitude;

    private $longitude;

    private $data;

    /**
     * MarkerDecorator constructor.
     * @param $latitude
     * @param $longitude
     * @param $data
     */
    public function __construct($latitude, $longitude, InfoWindow $data)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->data = $data->getContent();
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return MarkerDecorator
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return MarkerDecorator
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return MarkerDecorator
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}