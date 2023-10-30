<?php

namespace App\Repository;

use App\Entity\Avispost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avispost>
 *
 * @method Avispost|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avispost|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avispost[]    findAll()
 * @method Avispost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvispostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avispost::class);
    }

//    /**
//     * @return Avispost[] Returns an array of Avispost objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Avispost
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
