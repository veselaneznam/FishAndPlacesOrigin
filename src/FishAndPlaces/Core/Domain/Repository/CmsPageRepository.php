<?php

namespace FishAndPlaces\Core\Domain\Repository;

use FishAndPlaces\Core\Domain\Model\CmsPage;

interface CmsPageRepository
{
    /**
     * @param string $slug
     *
     * @return CmsPage
     */
    public function findOneBySlug($slug);

    /**
     * @param $title
     *
     * @return mixed
     */
    public function findByTitle($title);

    /**
     * @param int $id
     *
     * @return CmsPage
     */
    public function findOneById($id);

    /**
     * @return CmsPage[]
     */
    public function findAll();

    /**
     * @param CmsPage $cmsPage
     *
     * @return mixed
     */
    public function update(CmsPage $cmsPage);

    public function add(CmsPage $cmsPage);
}
