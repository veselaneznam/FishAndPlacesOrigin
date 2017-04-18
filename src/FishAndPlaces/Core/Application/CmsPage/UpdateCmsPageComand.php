<?php

namespace FishAndPlaces\Core\Application\CmsPage;

use FishAndPlaces\Core\Domain\Model\CmsPage;
use FishAndPlaces\Core\Domain\Value\Slug;

class UpdateCmsPageComand
{
    /** @var CmsPage */
    protected $page;

    /**
     * @param CmsPageRepresentation $cmsPageRepresentation
     */
    public function __construct(CmsPageRepresentation $cmsPageRepresentation)
    {
        $page = new CmsPage();
        $page->setTitle($cmsPageRepresentation->getTitle());
        $page->setSlug(Slug::transform($cmsPageRepresentation->getSlug()));
        $page->setIsActive($cmsPageRepresentation->isActive());
        $page->setIsNavigation($cmsPageRepresentation->isNavigation());
        $page->setDescription($cmsPageRepresentation->getDescription());
        $page->setId($cmsPageRepresentation->getId());
        $this->page = $page;
    }

    /**
     * @return CmsPage
     */
    public function getPage()
    {
        return $this->page;
    }
}

