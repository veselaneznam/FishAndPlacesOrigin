<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Map;

use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Base\Size;
use Ivory\GoogleMap\Overlay\Animation;
use Ivory\GoogleMap\Overlay\Icon;
use Ivory\GoogleMap\Overlay\Marker;
use Ivory\GoogleMap\Overlay\MarkerShape;
use Ivory\GoogleMap\Overlay\MarkerShapeType;
use Ivory\GoogleMap\Overlay\Symbol;
use Ivory\GoogleMap\Overlay\SymbolPath;
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
