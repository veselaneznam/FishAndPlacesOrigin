<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;

use FishAndPlaces\GreenObject\Application\Core\GeoLocatorService;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;
use FishAndPlaces\GreenObject\Domain\Repository\GreenObjectRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location as DomainLocation;
use FishAndPlaces\UI\Bundle\GoGreenBundle\Value\Location;
 class GreenObjectQueryService extends BaseQueryService
{
    /** @var GreenObjectRepository */
    protected $greenObjectRepository;

    /** @var GeoLocatorService */
    protected $geoLocatorService;

    /**
     * @param GreenObjectRepository     $objectRepository
     * @param GeoLocatorService $geoLocatorService
     */
    public function __construct(
        GreenObjectRepository $objectRepository,
        GeoLocatorService $geoLocatorService
    ) {
        $this->greenObjectRepository = $objectRepository;
        $this->geoLocatorService = $geoLocatorService;
    }

    /**
     * @param string $data
     *
     * @param null|int   $radius
     *
     * @return GreenObjectRepresentation[]
     */
    public function search($data, $radius = null)
    {
        $searchResultByLocation = [];
        if (null !== $data) {
            $address = $this->geoLocatorService->getLocation($data);
            if (!empty($address)) {
                $searchResultByLocation = $this->greenObjectRepository->findByLocation($address, $radius);
            }
        }

        return $this->convertToRepresentation($searchResultByLocation);
    }

    /**
     * @param Location $location
     *
     * @return GreenObjectRepresentation[]
     */
    public function searchNearBy(Location $location)
    {
        $searchResultByLocation = $this->greenObjectRepository->findByNearByLocation(
            new DomainLocation($location->getLat(), $location->getLon())
        );
        return $this->convertToRepresentation($searchResultByLocation);
    }

    /**
     * @return GreenObjectRepresentation[]
     */
    public function getFistPageList()
    {
        $greenObjects = $this->greenObjectRepository->findByFirstPage();

        return $this->convertToRepresentation($greenObjects);
    }

     /**
      * @return array
      */
     public function getCollection()
     {
         $greenObjects = $this->greenObjectRepository->findAll();

         return array_map(
             function (GreenObject $dam) {
                 return new GreenObjectRepresentation($dam);
             }, $greenObjects
         );
     }

     /**
      * @param array $collection
      *
      * @return GreenObjectRepresentation[]
      */
     protected function convertToRepresentation(array $collection)
     {
         if (null !== $collection) {
             return array_map(
                 function (GreenObject $greenObject) {
                     $greenObjectRepresentation = new GreenObjectRepresentation($greenObject);
                     return $greenObjectRepresentation;
                 }, $collection
             );
         }
         return [];
     }

     /**
      * @param $id
      *
      * @return GreenObjectRepresentation
      */
     public function find($id)
     {
         return new GreenObjectRepresentation($this->greenObjectRepository->find($id));
     }

     /**
      * @param string $name
      *
      * @return GreenObjectRepresentation[]
      */
     public function findByName($name)
     {
         $greenObjects = $this->greenObjectRepository->findByName($name);

         return $this->convertToRepresentation($greenObjects);
     }

 }
