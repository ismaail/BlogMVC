<?php

namespace Acme\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Knp\Component\Pager\Paginator;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends EntityRepository
{
    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function createFindPostsQueryBuilder()
    {
        $qb = $this->createQueryBuilder('p');
        $qb
            ->select('p, c, u')
            ->leftJoin('p.category', 'c')
            ->leftJoin('p.user', 'u')
            ->orderBy('p.created', 'desc')
        ;

        return $qb;
    }

    /**
     * @param Paginator $paginator
     * @param $page
     * @param $perPage
     *
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    public function allPosts(Paginator $paginator, $page, $perPage)
    {
        $qb = $this->createFindPostsQueryBuilder();

        return $paginator->paginate($qb->getQuery(), $page, $perPage);
    }

    /**
     * @param $id
     * @param Paginator $paginator
     * @param $page
     * @param $perPage
     *
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    public function authorPosts($id, Paginator $paginator, $page, $perPage)
    {
        $qb = $this->createFindPostsQueryBuilder();

        $qb->where('u.id = :userId');
        $qb->setParameter('userId', $id);

        return $paginator->paginate($qb->getQuery(), $page, $perPage);
    }

    /**
     * @param array $conditions
     *
     * @return \Doctrine\ORM\QueryBuilder
     *
     * @deprecated
     */
    public function findAllQuery($conditions = array())
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p, c, u')
            ->leftJoin('p.category', 'c')
            ->leftJoin('p.user', 'u')
            ->orderBy('p.created', 'DESC')
        ;

        foreach ($conditions as $k => $v) {
            $qb->andWhere("$k = '$v'");
        }

        $qb
            ->getQuery()
        ;
        return $qb;
    }

    /**
     * @param int $limit
     *
     * @return mixed
     */
    public function findLast($limit = 1)
    {
        return $this->createQueryBuilder('p')
            ->select('p')
            ->orderBy('p.created', 'DESC')
            ->getQuery()
            ->setMaxResults($limit)
            ->getResult()
        ;
    }
}
