<?php

namespace FishAndPlaces\GreenObject\Application\Core;

class Paginator
{
    /**
     * @var int
     */
    private $count;
    /**
     * @var int
     */
    private $currentPage;

    /**
     * @var int
     */
    private $totalPages;

    /**
     * @param array $collection
     * @param int $limit
     * @param int   $page
     *
     * @return array
     */
    public function paginate(array $collection, $page = 1, $limit = 8)
    {
        $this->count = count($collection);

        $this->currentPage = $page;

        $this->totalPages = ceil($this->count / $limit);

        $offset = (($page - 1) * $limit);

        return array_slice($collection, $offset, $limit, true);
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }
}
