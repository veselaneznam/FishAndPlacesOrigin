<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Map;

use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use Ivory\GoogleMap\Event\MouseEvent;
use Ivory\GoogleMap\Overlay\InfoWindow as BaseInfoWindow;
use Symfony\Component\Templating\EngineInterface;

class InfoWindow extends BaseInfoWindow
{
    public static function build(DamRepresentation $damRepresentation, $twig)
    {
        $templatePath = '@Dam/dam/map_info_window.html.twig';
        $html = $twig->render($templatePath, $damRepresentation);
        $infoWindow = new InfoWindow($html);

        $infoWindow->setOpen(false);
        $infoWindow->setAutoOpen(true);
        $infoWindow->setOpenEvent(MouseEvent::CLICK);
        $infoWindow->setAutoClose(false);
        $infoWindow->setOption('disableAutoPan', true);
        $infoWindow->setOption('zIndex', 10);
        $infoWindow->setOptions(array(
            'disableAutoPan' => true,
            'zIndex'         => 10,
        ));
    }
}
