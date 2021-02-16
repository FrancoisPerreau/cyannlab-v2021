<?php

namespace App\Repository;

use App\Entity\Work;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Work|null find($id, $lockMode = null, $lockVersion = null)
 * @method Work|null findOneBy(array $criteria, array $orderBy = null)
 * @method Work[]    findAll()
 * @method Work[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Work::class);
    }

    public function findByCategorieSlug($slug)
    {
        return $this->createQueryBuilder('w')
            ->select('w', 'c')
            ->join('w.categorie', 'c')
            ->andWhere('c.slug = :slug')
            ->setParameter('slug', $slug)
            ->orderBy('w.created_at', 'DESC')
            ->setMaxResults(16)
            ->getQuery()
            ->getResult();
    }


    public function findPreviousWork($date)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.created_at > :date')
            ->setParameter('date', $date)
            ->orderBy('w.created_at', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function findNextWork($date)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.created_at < :date')
            ->setParameter('date', $date)
            ->orderBy('w.created_at', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
    // /**
    //  * @return Work[] Returns an array of Work objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Work
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
