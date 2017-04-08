<?php

namespace FishAndPlaces\UI\Bundle\DamBundle\Map;

use FishAndPlaces\Dam\Application\Dam\DamRepresentation;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;
use Geocoder\Exception\Exception;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Control\ControlPosition;
use Ivory\GoogleMap\Control\FullscreenControl;
use Ivory\GoogleMap\Map;

class MapHelper
{
    /**
     * @param Location $userLocation
     * @param DamRepresentation[] $damRepresentations
     * @param $twig
     *
     * @return Map
     */
    public static function build(Location $userLocation, $damRepresentations, $twig)
    {
        $map = new Map();
        $map->addStylesheetOptions(['width' => '100%', 'height' => '500px']);
        $map->setMapOption('zoom', 5);
        $fullscreenControl = new FullscreenControl(ControlPosition::TOP_LEFT);
        $map->getControlManager()->setFullscreenControl($fullscreenControl);

        /** @var Location $location */
        if (!empty($damRepresentations)) {
            $map->setAutoZoom(true);
            $map->setCenter(new Coordinate($userLocation->getLat(), $userLocation->getLon()));
            try {
                foreach ($damRepresentations as $damRepresentation) {
                    $map->getOverlayManager()->addMarker(
                        MarkerHelper::build($damRepresentation, $twig)
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
