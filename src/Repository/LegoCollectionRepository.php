<?php

namespace App\Repository;

use App\Entity\LegoCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegoCollection>
 */

 class LegoCollectionRepository extends ServiceEntityRepository
 {
     public function __construct(ManagerRegistry $registry)
     {
         parent::__construct($registry, LegoCollection::class);
     }
 }