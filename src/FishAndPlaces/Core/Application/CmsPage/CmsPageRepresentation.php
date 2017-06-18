<?php

namespace FishAndPlaces\Core\Application\CmsPage;

use FishAndPlaces\Core\Domain\Model\CmsPage;

class CmsPageRepresentation
{
    /** @var int */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $slug;

    /** @var string */
    private $description;

    /** @var bool */
    private $isActive;

    /** @var bool */
    private $isNavigation;

    /** @var CmsPage|null */
    private $cmsPage;

    /**
     * @param CmsPage|null $page
     */
    public function __construct(CmsPage $page = null)
    {
        if (null !== $page) {
            $this->id = $page->getId();
            $this->title = $page->getTitle();
            $this->slug = $page->getSlug();
            $this->description = $page->getDescription();
            $this->isActive = $page->isActive();
            $this->isNavigation = $page->isNavigation();
            $this->cmsPage = $page;
        }
    }

    /**
     * @return CmsPage|null
     */
    public function getCmsPage()
    {
        return $this->cmsPage;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return CmsPageRepresentation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return CmsPageRepresentation
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return CmsPageRepresentation
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return CmsPageRepresentation
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     *
     * @return CmsPageRepresentation
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNavigation()
    {
        return $this->isNavigation;
    }

    /**
     * @param bool $isNavigation
     *
     * @return CmsPageRepresentation
     */
    public function setIsNavigation($isNavigation)
    {
        $this->isNavigation = $isNavigation;
        return $this;
    }
}
