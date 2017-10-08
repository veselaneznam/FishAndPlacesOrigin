<?php

namespace FishAndPlaces\UI\Bundle\GoGreenBundle\Map;

use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\GreenObjectRepresentation;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Value\Location;
use Geocoder\Exception\Exception;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Control\ControlPosition;
use Ivory\GoogleMap\Control\FullscreenControl;
use Ivory\GoogleMap\Map;

class MapHelper
{
    /**
     * @param Location $userLocation
     * @param GreenObjectRepresentation[] $greenObjectRepresentations
     * @param $twig
     *
     * @return Map
     */
    public static function build(Location $userLocation, $greenObjectRepresentations, $twig)
    {
        $map = new Map();
        $map->addStylesheetOptions(['width' => '100%', 'height' => '500px']);
        $map->setMapOption('zoom', 10);
        $fullscreenControl = new FullscreenControl(ControlPosition::TOP_LEFT);
        $map->getControlManager()->setFullscreenControl($fullscreenControl);

        /** @var Location $location */
        if (!empty($greenObjectRepresentations)) {
            $map->setAutoZoom(true);
            $map->setCenter(new Coordinate($userLocation->getLat(), $userLocation->getLon()));
            try {
                foreach ($greenObjectRepresentations as $greenObjectRepresentation) {
                    $map->getOverlayManager()->addMarker(
                        MarkerHelper::build($greenObjectRepresentation, $twig)
                    );
                }
            } catch (Exception $e) {
                $map->setAutoZoom(false);
                $map->setCenter(new Coordinate($userLocation->getLat(), $userLocation->getLon()));
            }
        }
        return $map;
    }
}
