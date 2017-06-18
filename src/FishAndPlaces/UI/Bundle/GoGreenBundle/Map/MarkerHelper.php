<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Map;

use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\Marker;
use Symfony\Component\Config\Definition\Exception\Exception;

class MarkerHelper
{
    /**
     * @param DamRepresentation $damRepresentation
     * @param                   $twig
     *
     * @return Marker
     */
    public static function build(DamRepresentation $damRepresentation, $twig)
    {
        if(null !== $damRepresentation->getLat() && null !== $damRepresentation->getLong()) {
            $marker = new Marker(
                new Coordinate($damRepresentation->getLat(), $damRepresentation->getLong()));
            $marker->setInfoWindow(InfoWindowHelper::build($damRepresentation, $twig));
            return $marker;
        }

        throw new Exception('Missing location');
    }
}
