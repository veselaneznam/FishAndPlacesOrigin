<?php

namespace FishAndPlaces\Core\Application\CmsPage;

use FishAndPlaces\Core\Domain\Repository\CmsPageRepository;

class CmsPageService
{
    /** @var CmsPageRepository */
    private $cmsPageRepository;

    public function __construct(CmsPageRepository $cmsPageRepository)
    {
        $this->cmsPageRepository = $cmsPageRepository;
    }

    /**
     * @param UpdateCmsPageComand $command
     */
    public function update(UpdateCmsPageComand $command)
    {
        $this->cmsPageRepository->update($command->getPage());
    }

    /**
     * @param CreateCmsPageCommand $command
     */
    public function create(CreateCmsPageCommand $command)
    {
        $this->cmsPageRepository->add($command->getPage());
    }
}
