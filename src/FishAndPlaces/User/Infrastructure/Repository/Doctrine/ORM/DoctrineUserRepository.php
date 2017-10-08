<?php

namespace FishAndPlaces\User\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\User\Domain\Model\User;
use FishAndPlaces\User\Domain\Repository\UserRepository;
use Doctrine\ORM\EntityRepository;

class DoctrineUserRepository extends EntityRepository implements UserRepository
{
    /**
     * {@inheritdoc}
     */
    public function findOneByUsernameAndPassword($userName, $password)
    {
        return parent::findOneBy(['username' => $userName, 'password' => $password]);
    }

    /**
     * {@inheritdoc}
     */
    public function findOneByEmail($email)
    {
        return parent::findOneBy(['email' => $email]);
    }

    /**
     * @param $user
     */
    public function save(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush($user);
    }
}
