<?php

namespace OpenSID\Repository;

use OpenSID\Entity\OpenSID;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OpenSID|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpenSID|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpenSID[]    findAll()
 * @method OpenSID[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpenSIDRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OpenSID::class);
    }

    // /**
    //  * @return OpenSID[] Returns an array of OpenSID objects
    //  */
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
    public function findOneBySomeField($value): ?OpenSID
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
