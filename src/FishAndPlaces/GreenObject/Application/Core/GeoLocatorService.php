<?php

namespace FishAndPlaces\GreenObject\Application\Core;


use Doctrine\Common\Cache\SQLite3Cache;
use FishAndPlaces\GreenObject\Domain\Model\Geocoder;
use FishAndPlaces\GreenObject\Domain\Model\Geocoder\GeocoderProxyInterface;
use FishAndPlaces\GreenObject\Domain\Repository\GeocoderLocalRepository;
use FishAndPlaces\GreenObject\Domain\Value\Location;
use Geocoder\Model\Address;
use Symfony\Component\Cache\Adapter\DoctrineAdapter;

class GeoLocatorService
{
    /** @var GeocoderProxyInterface */
    private $geocoderProxy;

    /** @var GeocoderLocalRepository */
    private $geocoderLocalRepository;

    /**
     * @var DoctrineAdapter
     */
    private $symfonyCache;

    public function __construct(GeocoderProxyInterface $geocoderProxy, GeocoderLocalRepository $geocoderLocalRepository)
    {
        $this->geocoderProxy = $geocoderProxy;
        $this->geocoderLocalRepository = $geocoderLocalRepository;
        if(null === $this->symfonyCache) {
            $sqliteDatabase = new \SQLite3(__DIR__ . '/cache/data.sqlite');
            $doctrineCache = new SQLite3Cache($sqliteDatabase, 'locations');
            $this->symfonyCache = new DoctrineAdapter($doctrineCache);
        }
    }

    /**
     * @param string $data
     *
     * @return Location
     * @throws \Exception
     */
    public function getLocation($data)
    {
        $data = mb_strtolower($data);
        if (!$this->symfonyCache->hasItem("$data")) {
            $address = $this->geocoderLocalRepository->findOneByAddress($data);
            if (empty($address)) {
                $address = $this->geocoderProxy->geocode($data)->first();
                if (!empty($address)) {
                    $newLocaiton = $this->saveNewLocation($data, $address->getLatitude(), $address->getLongitude());
                    return new Location($newLocaiton->getLatitude(), $newLocaiton->getLongitude());
                } else {
                    throw new \Exception(sprintf('unable to find location for "%s"', $data));
                }
            } else {
                $this->saveToCasche($data, $address);
                return new Location($address->getLatitude(), $address->getLongitude());
            }
        } else {
            /**
             * @var Address | Geocoder $address
             */
            $address = $this->symfonyCache->getItem("$data")->get();
            if(empty($address)) {
                $this->symfonyCache->deleteItem("$data");
                return $this->getLocation($data);
            } else {
                return new Location($address->getLatitude(), $address->getLongitude());
            }
        }
    }


    /**
     * @param $data
     * @param $address
     */
    private function saveToCasche($data, $address)
    {
        $cascheLocation = $this->symfonyCache->getItem("$data");
        if (is_array($address)) {
            $cascheLocation->set($address[0]);
        } else {
            $cascheLocation->set($address);
        }
        $this->symfonyCache->save($cascheLocation);
    }

    /**
     * @param string $data
     * @param float $lat
     * @param float $lng
     *
     * @return Geocoder
     * @internal param $location
     *
     */
    public function saveNewLocation($data, $lat, $lng)
    {
        $newLocalGeocoder = new Geocoder(
            $data,
            $lat,
            $lng
        );
        $this->geocoderLocalRepository->save($newLocalGeocoder);
        $this->saveToCasche($data, $newLocalGeocoder);
        return $newLocalGeocoder;
    }
}
