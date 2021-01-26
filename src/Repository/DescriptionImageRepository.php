<?php

namespace App\Repository;

use App\Entity\DescriptionImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DescriptionImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DescriptionImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DescriptionImage[]    findAll()
 * @method DescriptionImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DescriptionImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DescriptionImage::class);
    }

    // /**
    //  * @return DescriptionImage[] Returns an array of DescriptionImage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DescriptionImage
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
