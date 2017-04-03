<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Map;

use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\Animation;
use Ivory\GoogleMap\Overlay\Icon;
use Ivory\GoogleMap\Overlay\Marker as BaseMarker;
use Ivory\GoogleMap\Overlay\MarkerShape;
use Ivory\GoogleMap\Overlay\MarkerShapeType;
use Ivory\GoogleMap\Overlay\Symbol;
use Ivory\GoogleMap\Overlay\SymbolPath;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Templating\EngineInterface;

class Marker extends BaseMarker
{

    public static function build(DamRepresentation $damRepresentation, $twig)
    {
        if(null !== $damRepresentation->getLocation()->getLat() && null !== $damRepresentation->getLocation()->getLon()) {
            $marker = new Marker(
                new Coordinate($damRepresentation->getLocation()->getLat(), $damRepresentation->getLocation()->getLon()),
                Animation::BOUNCE,
                new Icon('/images/Cuddly_Fisherman.png'),
                new Symbol(SymbolPath::CIRCLE),
                new MarkerShape(MarkerShapeType::CIRCLE, [1.1, 2.1, 1.4]),
                ['clickable' => true]
            );
            return $marker->setInfoWindow(InfoWindow::build($damRepresentation, $twig));
        }

        throw new Exception('Missing location');
    }
}
