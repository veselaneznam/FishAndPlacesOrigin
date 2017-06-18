<?php

namespace FishAndPlaces\Core\Domain\Model;

class CmsPage
{
    /** @var int */
    private $id;

    /** @var string */
    private $title;

    /** @var bool */
    private $isNavigation;

    /** @var bool */
    private $isActive;

    /** @var string */
    private $description;

    /** @var string */
    private $slug;

    /**
     * @var int
     */
    private $parent;

    /**
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
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
     * @return CmsPage
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
     * @return CmsPage
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return CmsPage
     */
    public function setIsNavigation($isNavigation)
    {
        $this->isNavigation = $isNavigation;
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
     * @return CmsPage
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
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
     * @return CmsPage
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return CmsPage
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }
}
