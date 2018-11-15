<?php

namespace App\Repository;

use App\Entity\Raccolta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Raccolta|null find($id, $lockMode = null, $lockVersion = null)
 * @method Raccolta|null findOneBy(array $criteria, array $orderBy = null)
 * @method Raccolta[]    findAll()
 * @method Raccolta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RaccoltaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Raccolta::class);
    }

//    /**
//     * @return Raccolta[] Returns an array of Raccolta objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Raccolta
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
