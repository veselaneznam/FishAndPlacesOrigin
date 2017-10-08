<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 16.07.17
 * Time: 13:12
 */

namespace FishAndPlaces\GreenObject\Application\GreenObject;


use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\GreenObject\Domain\Value\GreenObjectType;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GreenObjectServiceFactory
{
    /**
     * @param GreenObject $greenObject
     * @param ContainerInterface $container
     * @return GreenObjectService
     */
    public static function initService(GreenObject $greenObject, ContainerInterface $container)
    {
        switch ($greenObject->getType()) {
            case GreenObjectType::DAM :
                return $container->get('fish_and_places.dam_service');
            case GreenObjectType::CAMP :
                return $container->get('fish_and_places.camp_service');
            case GreenObjectType::CABIN :
                return $container->get('fish_and_places.cabin_service');
            case GreenObjectType::VILLAGE_HOLIDAY :
                return $container->get('fish_and_places.village_holiday_service');
        }
    }

    /**
     * @param GreenObject $greenObject
     * @param ContainerInterface $container
     * @return GreenObjectQueryService
     */
    public static function initQueryService(GreenObject $greenObject, ContainerInterface $container)
    {
        switch ($greenObject->getType()) {
            case GreenObjectType::DAM :
                return $container->get('fish_and_places.dam_query_service');
            case GreenObjectType::CAMP :
                return $container->get('fish_and_places.camp_query_service');
            case GreenObjectType::CABIN :
                return $container->get('fish_and_places.cabin_query_service');
            case GreenObjectType::VILLAGE_HOLIDAY :
                return $container->get('fish_and_places.village_holiday_query_service');
        }
    }
}