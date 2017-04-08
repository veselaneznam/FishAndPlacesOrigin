<?php

namespace FishAndPlaces\Dam\Application\Dam;


use Doctrine\Common\Cache\SQLite3Cache;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use FishAndPlaces\Dam\Domain\Model\Geocoder;
use FishAndPlaces\Dam\Domain\Model\Geocoder\GeocoderProxyInterface;
use FishAndPlaces\Dam\Domain\Repository\GeocoderLocalRepository;
use FishAndPlaces\Dam\Domain\Value\Location;
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
            $sqliteDatabase = new \SQLite3(__DIR__.'/cache/data.sqlite');
            $doctrineCache = new SQLite3Cache($sqliteDatabase, 'locations');
            $this->symfonyCache = new DoctrineAdapter($doctrineCache);
        }
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    public function getLocation($data)
    {
        if (!$this->symfonyCache->hasItem("$data")) {
            $address = $this->geocoderLocalRepository->findOneByAddress($data);
            $this->saveToCasche($data, $address);
            if (null === $address) {
                $address = $this->geocoderProxy->geocode($data)->first();
                if (null !== $address) {
                    $newLocalGeocoder = new Geocoder(
                        $data,
                        $address->getLatitude(),
                        $address->getLongitude()
                    );

                    $this->geocoderLocalRepository->save($newLocalGeocoder);
                    $this->saveToCasche($data, $newLocalGeocoder);
                    return $newLocalGeocoder;
                }
            }
        } else {
            $address = $this->symfonyCache->getItem("$data")->get();
            if(null === $address) {
                $this->symfonyCache->deleteItem("$data");
                $this->getLocation($data);
            }
            return $address;
        }
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
