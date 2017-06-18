<?php

namespace FishAndPlaces\Core\Application\CmsPage;

class ActivateCmsPageCommand extends UpdateCmsPageComand
{
    /**
     * @param CmsPageRepresentation $cmsPageRepresentation
     */
    public function __construct(CmsPageRepresentation $cmsPageRepresentation)
    {
        parent::__construct($cmsPageRepresentation);
        $this->page->setIsActive(1);
    }
}
