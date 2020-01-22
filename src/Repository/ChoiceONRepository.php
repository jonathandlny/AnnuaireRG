<?php

namespace App\Repository;

use App\Entity\ChoiceON;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ChoiceON|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChoiceON|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChoiceON[]    findAll()
 * @method ChoiceON[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChoiceONRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChoiceON::class);
    }

    // /**
    //  * @return ChoiceON[] Returns an array of ChoiceON objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChoiceON
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
