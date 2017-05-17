<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Map;

use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\InfoWindow;
use Ivory\GoogleMap\Overlay\InfoWindowType;

class InfoWindowHelper
{
    /**
     * @param GreenObjectRepresentation $greenObjectRepresentation
     * @param                   $twig
     *
     * @return InfoWindow
     */
    public static function build(GreenObjectRepresentation $greenObjectRepresentation, $twig)
    {
        $templatePath = '@GoGreen/greenObject/map_info_window.html.twig';
        $html = $twig->render($templatePath, $greenObjectRepresentation->toArray());
        $infoWindow = new InfoWindow(
            $html,
            InfoWindowType::DEFAULT_,
            new Coordinate($greenObjectRepresentation->getLat(),
                $greenObjectRepresentation->getLong()
            )
        );
        return $infoWindow;
    }
}
