<?php
namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\GreenObject\Domain\Model\Cabin;
use FishAndPlaces\GreenObject\Domain\Repository\CabinRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class DoctrineCabinRepository extends DoctrineGreenObjectRepository implements CabinRepository
{

    /**
     * @param GreenObject $camp
     *
     * @throws \Exception
     */
    public function update(GreenObject $camp)
    {
        if(!$camp instanceof Cabin) {
            throw new \Exception('Unexpected Entity');
        }
        parent::update($camp);
    }

    /**
     * @param GreenObject $villageHoliday
     *
     * @throws \Exception
     */
    public function remove(GreenObject $villageHoliday)
    {
        if(!$villageHoliday instanceof Cabin) {
            throw new \Exception('Unexpected Entity');
        }
        parent::remove($villageHoliday);
    }

    /**
     * @param GreenObject $villageHoliday
     *
     * @throws \Exception
     */
    public function add(GreenObject $villageHoliday)
    {
        if(!$villageHoliday instanceof Cabin) {
            throw new \Exception('Unexpected Entity');
        }
        parent::add($villageHoliday);
    }
}
