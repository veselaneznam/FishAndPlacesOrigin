<?php

namespace FishAndPlaces\Dam\Application\Dam;

use Doctrine\Common\Cache\SQLite3Cache;
use FishAndPlaces\Dam\Domain\Model\Dam;
use FishAndPlaces\Dam\Domain\Model\Geocoder;
use FishAndPlaces\Dam\Domain\Model\Geocoder\GeocoderProxyInterface;
use FishAndPlaces\Dam\Domain\Repository\DamRepository;
use FishAndPlaces\Dam\Domain\Repository\GeocoderLocalRepository;
use FishAndPlaces\Dam\Domain\Value\Location as DomainLocation;
use FishAndPlaces\UI\Bundle\DamBundle\Value\Location;
use Symfony\Component\Cache\Adapter\DoctrineAdapter;

class DamQueryService
{
    /** @var DamRepository */
    private $damRepository;

    /** @var GeocoderProxyInterface */
    private $geocoderProxy;

    /** @var GeocoderLocalRepository */
    private $geocoderLocalRepository;
    /**
     * @var DoctrineAdapter
     */
    private $symfonyCache;

    /**
     * @param DamRepository           $damRepository
     * @param GeocoderProxyInterface  $geocoderProxy
     * @param GeocoderLocalRepository $geocoderLocalRepository
     */
    public function __construct(
        DamRepository $damRepository,
        GeocoderProxyInterface $geocoderProxy,
        GeocoderLocalRepository $geocoderLocalRepository
    )
    {
        $this->damRepository = $damRepository;
        $this->geocoderProxy = $geocoderProxy;
        $this->geocoderLocalRepository = $geocoderLocalRepository;
        if(null === $this->symfonyCache) {
            $sqliteDatabase = new \SQLite3(__DIR__.'/cache/data.sqlite');
            $doctrineCache = new SQLite3Cache($sqliteDatabase, 'locations');
            $this->symfonyCache = new DoctrineAdapter($doctrineCache);
        }
    }

    /**
     * @return array
     */
    public function getDamCollection()
    {
        $damCollection = $this->damRepository->findAll();

        return array_map(
            function (Dam $dam) {
                return new DamRepresentation($dam);
            }, $damCollection
        );
    }

    /**
     * @param string $data
     *
     * @return DamRepresentation[]
     */
    public function search($data)
    {
        if (null !== $data) {

            if (!$this->symfonyCache->hasItem("$data")) {
                $address = $this->geocoderLocalRepository->findOneByAddress($data);
                $this->saveToCasche($data, $address);
                if (null === $address) {
                    $address = $this->geocoderProxy->geocode($data)->first();
                    $newLocalGeocoder = new Geocoder(
                        $data,
                        $address->getLatitude(),
                        $address->getLongitude()
                    );
                    $this->geocoderLocalRepository->save($newLocalGeocoder);
                    $this->saveToCasche($data, $address);
                }
            } else {
                $address = $this->symfonyCache->getItem("$data")->get();
            }


            $searchResultByLocation = $this->damRepository->findByLocation(
                new DomainLocation($address->getLatitude(), $address->getLongitude()
                )
            );
        } else {
            $searchResultByLocation = $this->damRepository->findAll();
        }

        return $this->convertToRepresentation($searchResultByLocation);
    }

    /**
     * @param Location $location
     *
     * @return DamRepresentation[]
     */
    public function searchNearBy(Location $location)
    {
        $searchResultByLocation = $this->damRepository->findByNearByLocation(
            new DomainLocation($location->getLat(), $location->getLon())
        );
        return $this->convertToRepresentation($searchResultByLocation);
    }

    /**
     * @param Dam[] $searchResultByLocation
     *
     * @return DamRepresentation[]
     */
    private function convertToRepresentation($searchResultByLocation)
    {
        if (null !== $searchResultByLocation) {
            return array_map(
                function (Dam $dam) {
                    $damrepresentaiotn = new DamRepresentation($dam);
                    return $damrepresentaiotn;
                }, $searchResultByLocation
            );
        }
        return [];
    }

    public function searchDam($data)
    {

    }

    /**
     * @return DamRepresentation[]
     */
    public function getFistPageList()
    {
        $damCollection = $this->damRepository->findByFirstPage();

        return $this->convertToRepresentation($damCollection);
    }

    /**
     * @param $data
     * @param $address
     */
    private function saveToCasche($data, $address)
    {
        $cascheLocation = $this->symfonyCache->getItem("$data");
        $cascheLocation->set($address);
        $this->symfonyCache->save($cascheLocation);
    }
}
