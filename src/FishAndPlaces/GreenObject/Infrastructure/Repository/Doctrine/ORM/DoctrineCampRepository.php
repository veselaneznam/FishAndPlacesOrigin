<?php
namespace FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\GreenObject\Domain\Model\Camp;
use FishAndPlaces\GreenObject\Domain\Repository\CampRepository;
use FishAndPlaces\GreenObject\Domain\Model\GreenObject;

class DoctrineCampRepository extends DoctrineGreenObjectRepository implements CampRepository
{

    /**
     * @param GreenObject $camp
     *
     * @throws \Exception
     */
    public function update(GreenObject $camp)
    {
        if(!$camp instanceof Camp) {
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
        if(!$villageHoliday instanceof Camp) {
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
        if(!$villageHoliday instanceof Camp) {
            throw new \Exception('Unexpected Entity');
        }
        parent::add($villageHoliday);
    }
}
