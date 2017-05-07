<?php
namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\GreenObject\Domain\Model\VillageHoliday;
use FishAndPlaces\GreenObject\Domain\Repository\VillageHolidayRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class DoctrineVillageHolidayRepository extends DoctrineGreenObjectRepository implements VillageHolidayRepository
{

    /**
     * @param GreenObject $villageHoliday
     *
     * @throws \Exception
     */
    public function update(GreenObject $villageHoliday)
    {
        if(!$villageHoliday instanceof VillageHoliday) {
            throw new \Exception('Unexpected Entity');
        }
        parent::update($villageHoliday);
    }

    /**
     * @param GreenObject $villageHoliday
     *
     * @throws \Exception
     */
    public function remove(GreenObject $villageHoliday)
    {
        if(!$villageHoliday instanceof VillageHoliday) {
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
        if(!$villageHoliday instanceof VillageHoliday) {
            throw new \Exception('Unexpected Entity');
        }
        parent::add($villageHoliday);
    }
}
