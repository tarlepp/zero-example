<?php

namespace App\Repository;

use App\Entity\Signer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Signer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Signer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Signer[]    findAll()
 * @method Signer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Signer::class);
    }

    // /**
    //  * @return Signer[] Returns an array of Signer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Signer
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
