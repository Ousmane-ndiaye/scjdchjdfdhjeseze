<?php

namespace App\Repository;

use App\Entity\CArrondissement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CArrondissement|null find($id, $lockMode = null, $lockVersion = null)
 * @method CArrondissement|null findOneBy(array $criteria, array $orderBy = null)
 * @method CArrondissement[]    findAll()
 * @method CArrondissement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CArrondissementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CArrondissement::class);
    }

//    /**
//     * @return CArrondissement[] Returns an array of CArrondissement objects
//     */
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
    public function findOneBySomeField($value): ?CArrondissement
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
