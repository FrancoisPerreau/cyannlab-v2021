<?php

namespace App\Repository;

use App\Entity\HeroHeader;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HeroHeader|null find($id, $lockMode = null, $lockVersion = null)
 * @method HeroHeader|null findOneBy(array $criteria, array $orderBy = null)
 * @method HeroHeader[]    findAll()
 * @method HeroHeader[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeroHeaderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HeroHeader::class);
    }

    // /**
    //  * @return HeroHeader[] Returns an array of HeroHeader objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HeroHeader
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
