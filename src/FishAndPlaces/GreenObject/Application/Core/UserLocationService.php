<?php
/**
 * Created by PhpStorm.
 * User: gogo
 * Date: 23.07.17
 * Time: 15:21
 */

namespace FishAndPlaces\GreenObject\Application\Core;


use DateTime;
use Doctrine\Common\Cache\SQLite3Cache;
use Symfony\Component\Cache\Adapter\DoctrineAdapter;

class UserLocationService
{

    /**
     * @var DoctrineAdapter
     */
    private $symfonyCache;

    public function __construct()
    {
        if(null === $this->symfonyCache) {
            $sqliteDatabase = new \SQLite3(__DIR__ . '/cache/data.sqlite');
            $doctrineCache = new SQLite3Cache($sqliteDatabase, 'userLocation');
            $this->symfonyCache = new DoctrineAdapter($doctrineCache);
        }
    }

    /**
     * @param string $userIpAddress
     * @param array $data
     * @return mixed|\Psr\Cache\CacheItemInterface
     */
    public function buildUserLocation(string $userIpAddress, array $data = [])
    {
        $key = $userIpAddress;

        if(!$this->symfonyCache->hasItem($key)) {
            $cacheItem =$this->symfonyCache->getItem($key);
            $cacheItem->set($data);
            $now = new DateTime('now');
            $cacheItem->expiresAt($now->modify('+ 1 day'));
            $this->symfonyCache->save($cacheItem);
        }

        return $this->symfonyCache->getItem($key);
    }
}