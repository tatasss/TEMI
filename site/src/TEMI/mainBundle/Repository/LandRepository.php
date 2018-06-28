<?php

namespace TEMI\mainBundle\Repository;
use TEMI\mainBundle\Entity\Land\Land;

/**
 * LandRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LandRepository extends \Doctrine\ORM\EntityRepository
{
    public function selectedLand(){

        $queryBuilder = $this->createQueryBuilder('a');
        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;
    }
    public function selectedLandUser($userId){

        $queryBuilder = $this->createQueryBuilder('s');
        $queryBuilder->select('a')
            ->from(Land::class,'a')
            ->where('a.user= :id')
            ->setParameter('id',$userId);

        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;
    }
}
