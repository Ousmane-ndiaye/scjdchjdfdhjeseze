<?php

namespace App\Repository;

use App\Entity\Typedebien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Typedebien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typedebien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typedebien[]    findAll()
 * @method Typedebien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypedebienRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Typedebien::class);
    }

//    /**
//     * @return Typedebien[] Returns an array of Typedebien objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Typedebien
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
