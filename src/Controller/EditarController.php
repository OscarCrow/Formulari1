<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\PcFormulario;

class EditarController extends AbstractController
{
    public function editar($id)
    {
        $proceso = $this->getDoctrine()
            ->getRepository(PcFormulario::class)
            ->find($id);

        return $this->render('editar/editar.html.twig', [
            'proceso' => $proceso,
        ]);
    }

    public function actualizar($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        $formulario = $this->getDoctrine()
            ->getRepository(PcFormulario::class)
            ->find($id);
        
        $formulario->setNumeroproceso($request->get('numeroproceso'));
        $formulario->setDescripcion($request->get('descripcion'));
        $formulario->setSede($request->get('sede'));
        $formulario->setPresupuesto($request->get('valor'));
        
        $em->persist($formulario);
        $em->flush();
        
        $procesos  = $this->getDoctrine()
            ->getRepository(PcFormulario::class)
            ->findBy(array(), array('numeroproceso' => 'ASC'));
        
        return $this->render('home/index.html.twig', [
            'procesos' => $procesos,
        ]);
    }
}
