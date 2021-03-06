<?php

namespace App\Repository;

use App\Entity\Zaznamy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Zaznamy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zaznamy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zaznamy[]    findAll()
 * @method Zaznamy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZaznamyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Zaznamy::class);
    }

//    /**
//     * @return Zaznamy[] Returns an array of Zaznamy objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Zaznamy
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
