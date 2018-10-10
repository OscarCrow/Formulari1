<?php
namespace App\Repository;

use App\Entity\PcFormulario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PcFormularioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PcFormulario::class);
    }

    public function ultimoConsecutivo() 
    {
        $qb = $this->createQueryBuilder('a')
            ->select('max(a.numeroproceso) as anterior')
            ->orderBy('a.idformulario', 'ASC')
            ->getQuery();

        $qb->execute();

        $anterior = $qb->setMaxResults(1)->getOneOrNullResult();

        return $anterior;
    }
}