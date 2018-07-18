<?php

namespace App\Repository;

use App\Entity\Ouvrable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ouvrable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ouvrable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ouvrable[]    findAll()
 * @method Ouvrable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OuvrableRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ouvrable::class);
    }

//    /**
//     * @return Ouvrable[] Returns an array of Ouvrable objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ouvrable
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
