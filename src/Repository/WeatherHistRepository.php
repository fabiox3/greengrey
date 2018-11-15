<?php

namespace App\Repository;

use App\Entity\WeatherHist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method WeatherHist|null find($id, $lockMode = null, $lockVersion = null)
 * @method WeatherHist|null findOneBy(array $criteria, array $orderBy = null)
 * @method WeatherHist[]    findAll()
 * @method WeatherHist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeatherHistRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WeatherHist::class);
    }

//    /**
//     * @return WeatherHist[] Returns an array of WeatherHist objects
//     */
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
    public function findOneBySomeField($value): ?WeatherHist
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
