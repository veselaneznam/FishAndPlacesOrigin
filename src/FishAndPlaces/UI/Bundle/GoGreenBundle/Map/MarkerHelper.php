<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Map;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\GreenObject\Application\Value\GreenObjectType;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Base\Size;
use Ivory\GoogleMap\Overlay\Icon;
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
                new Coordinate(
                    $greenObjectRepresentation->getLat(),
                    $greenObjectRepresentation->getLong()
                ),
                null,
                new Icon(GreenObjectType::TYPE_TO_ICON[$greenObjectRepresentation->getType()], null, null, new Size(40,60,'px', 'px'))
            );
            $marker->setInfoWindow(InfoWindowHelper::build($greenObjectRepresentation, $twig));
            return $marker;
        }

        throw new Exception('Missing location');
    }
}
