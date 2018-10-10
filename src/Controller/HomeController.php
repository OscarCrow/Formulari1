<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\PcFormulario;

class HomeController extends AbstractController
{
    public function index()
    {
        $procesos = $this->getDoctrine()
            ->getRepository(PcFormulario::class)
            ->findBy(array(), array('numeroproceso' => 'ASC'));    

        return $this->render('home/index.html.twig', [
            'procesos' => $procesos
        ]);
    }
}
