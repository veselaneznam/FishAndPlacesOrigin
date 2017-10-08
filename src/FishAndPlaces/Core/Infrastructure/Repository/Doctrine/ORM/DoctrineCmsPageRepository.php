<?php

namespace FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM;

use FishAndPlaces\Core\Domain\Model\CmsPage;
use FishAndPlaces\Core\Domain\Repository\CmsPageRepository;

class DoctrineCmsPageRepository extends DoctrineRepository implements CmsPageRepository
{

    /**
     * @param string $slug
     *
     * @return CmsPage
     */
    public function findOneBySlug($slug)
    {
        return $this->findOneBy(['slug' => $slug, 'isActive' => 1]);
    }

    /**
     * @param int $id
     *
     * @return CmsPage
     */
    public function findOneById($id)
    {
        return $this->findOneBy(['id' => $id]);
    }

    /**
     * @param string $title
     *
     * @return CmsPage[]
     */
    public function findByTitle($title)
    {
        return $this->createQueryBuilder('cp')
            ->andWhere('cp.name LIKE :name')
            ->setParameter('title', $title . '%')
            ->getQuery()
            ->getResult();
    }

    /**
     * @inheritdoc
     */
    public function update(CmsPage $cmsPage)
    {
        $data = $this->getEntityManager()->getReference('FishAndPlaces\Core\Domain\Model\CmsPage', $cmsPage->getId());

        $data->setTitle($cmsPage->getTitle());
        $data->setDescription($cmsPage->getDescription());
        $data->setIsActive($cmsPage->isActive());
        $data->setIsNavigation($cmsPage->isNavigation());
        $data->setSlug($cmsPage->getSlug());
        $this->getEntityManager()->flush();
    }

    /**
     * @inheritdoc
     */
    public function add(CmsPage $cmsPage)
    {
        $this->getEntityManager()->persist($cmsPage);
        $this->getEntityManager()->flush();
    }
}
