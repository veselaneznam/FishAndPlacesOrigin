<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Map;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\Marker;
use Symfony\Component\Config\Definition\Exception\Exception;

class MarkerHelper
{
    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param                   $twig
     *
     * @return Marker
     */
    public static function build(GreenObjectRepresentation $greenObjectRepresentation, $twig)
    {
        if(null !== $greenObjectRepresentation->getLat() && null !== $greenObjectRepresentation->getLong()) {
            $marker = new Marker(
                new Coordinate($greenObjectRepresentation->getLat(), $greenObjectRepresentation->getLong()));
            $marker->setInfoWindow(InfoWindowHelper::build($greenObjectRepresentation, $twig));
            return $marker;
        }

        throw new Exception('Missing location');
    }
}
