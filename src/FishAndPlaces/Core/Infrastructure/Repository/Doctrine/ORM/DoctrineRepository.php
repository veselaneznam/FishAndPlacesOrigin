<?php

namespace FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM;

use Doctrine\DBAL\Cache\QueryCacheProfile;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\Tools\Pagination\Paginator;

class DoctrineRepository extends EntityRepository
{

    /**
     * @param mixed $entity
     */
    protected function saveEntity($entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush($entity);
    }

    /**
     * Executes an, optionally parametrized, SQL query.
     *
     * If the query is parametrized, a prepared statement is used.
     * If an SQLLogger is configured, the execution is logged.
     *
     * @param string                                      $query  The SQL query to execute.
     * @param array                                       $params The parameters to bind to the query, if any.
     * @param array                                       $types  The types the previous parameters are in.
     * @param \Doctrine\DBAL\Cache\QueryCacheProfile|null $qcp    The query cache profile, optional.
     *
     * @return \Doctrine\DBAL\Driver\Statement The executed statement.
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function executeQuery($query, array $params = array(), $types = array(), QueryCacheProfile $qcp = null)
    {
        return $this->getEntityManager()->getConnection()->executeQuery($query, $params, $types, $qcp);
    }

    /**
     * @param mixed $entity
     */
    public function refresh($entity)
    {
        $this->getEntityManager()->refresh($entity);
    }

    /**
     * @param Query $query
     * @param int $page
     * @param int $limit
     *
     * @return Paginator
     */
    public function paginate($query, $page = 1, $limit = 5)
    {
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit);// Limit

        return $paginator;
    }
}
