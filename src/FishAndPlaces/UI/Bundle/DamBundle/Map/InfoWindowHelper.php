<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Map;

use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\InfoWindow;
use Ivory\GoogleMap\Overlay\InfoWindowType;

class InfoWindowHelper
{
    /**
     * @param DamRepresentation $damRepresentation
     * @param                   $twig
     *
     * @return InfoWindow
     */
    public static function build(DamRepresentation $damRepresentation, $twig)
    {
        $templatePath = '@Dam/dam/map_info_window.html.twig';
        $html = $twig->render($templatePath, $damRepresentation->toArray());
        $infoWindow = new InfoWindow($html, InfoWindowType::DEFAULT_, new Coordinate($damRepresentation->getLat(), $damRepresentation->getLong()));
        return $infoWindow;
    }
}
