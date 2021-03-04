<?php

namespace App\Repository;

use App\Entity\Medicin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Medicin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medicin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medicin[]    findAll()
 * @method Medicin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedicinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medicin::class);
    }

    // /**
    //  * @return Medicin[] Returns an array of Medicin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Medicin
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
