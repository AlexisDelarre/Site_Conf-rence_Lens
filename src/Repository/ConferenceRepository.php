<?php
namespace App\Repository;

use App\Entity\Conference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ConferenceRepository extends ServiceEntityRepository {
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Conference::class);
    }

    public function findByDate()
    {
        return $this->createQueryBuilder('c')->orderBy('c.date', 'ASC')->getQuery()->getResult();
    }
}
