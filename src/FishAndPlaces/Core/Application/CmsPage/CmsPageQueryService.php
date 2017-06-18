<?php

namespace FishAndPlaces\Core\Application\CmsPage;

use FishAndPlaces\Core\Domain\Model\CmsPage;
use FishAndPlaces\Core\Domain\Repository\CmsPageRepository;

class CmsPageQueryService
{
    /** @var CmsPageRepository */
    private $cmsPageRepository;

    /**
     * @param CmsPageRepository $cmsPageRepository
     */
    public function __construct(CmsPageRepository $cmsPageRepository)
    {
        $this->cmsPageRepository = $cmsPageRepository;
    }

    /**
     * @return CmsPageRepresentation[]
     */
    public function getPageCollection()
    {
        $pageCollection = $this->cmsPageRepository->findAll();

        return $this->convertToRepresentation($pageCollection);
    }

    /**
     * @param $id
     *
     * @return CmsPageRepresentation
     */
    public function getPage($id)
    {
        $page = $this->cmsPageRepository->findOneById($id);

        return new CmsPageRepresentation($page);
    }

    public function getPageBySlug($slug)
    {
        $page = $this->cmsPageRepository->findOneBySlug($slug);

        return new CmsPageRepresentation($page);
    }

    /**
     * @param $title
     *
     * @return CmsPageRepresentation[]
     */
    public function getPageByTitle($title)
    {
        $pageCollection = $this->cmsPageRepository->findByTitle($title);

        return $this->convertToRepresentation($pageCollection);
    }

    /**
     * @param CmsPage[] $cmsPages
     *
     * @return CmsPageRepresentation[]
     */
    private function convertToRepresentation($cmsPages)
    {
        if (null !== $cmsPages) {
            return array_map(
                function (CmsPage $cmsPage) {
                    $cmsPageRepresentation = new CmsPageRepresentation($cmsPage);
                    return $cmsPageRepresentation;
                }, $cmsPages
            );
        }
        return [];
    }

}
