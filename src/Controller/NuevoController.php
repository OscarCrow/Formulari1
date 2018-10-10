<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\PcFormulario;

class NuevoController extends AbstractController
{
    public function nuevo()
    {
        $anterior = $this->getDoctrine()
            ->getRepository(PcFormulario::class)
            ->ultimoConsecutivo();

        $numero = $this->crearConsecutivo($anterior['anterior']);

        return $this->render('nuevo/nuevo.html.twig', [
            'numero' => $numero,
        ]);
    }

    public function crearConsecutivo($anterior) 
    {
        $nuevo = '';
        if ($anterior != '') {
            $anterior++;
            if ($anterior < 10) {
                $nuevo .= "0000000" . $anterior ;
            } else {
                if ($anterior < 100) {
                    $nuevo .= "000000" . $anterior ;
                } else {
                    if ($anterior < 1000) {
                        $nuevo .= "00000" . $anterior ;
                    } else {
                        if ($anterior < 10000) {
                            $nuevo .= "0000" . $anterior ;
                        } else {
                            if ($anterior < 100000) {
                                $nuevo .= "000" . $anterior ;
                            } else {
                                if ($anterior < 1000000) {
                                    $nuevo .= "00" . $anterior ;
                                } else {
                                    if ($anterior < 10000000) {
                                        $nuevo .= "0" . $anterior ;
                                    } else {
                                        $nuevo .= $anterior;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $nuevo = '00000000';
        }

        return $nuevo;
    }

    public function crear(Request $request) 
    {
        $em = $this->getDoctrine()->getManager();
        
        $formulario = new PcFormulario();
        $formulario->setNumeroproceso($request->get('numeroproceso'));
        $formulario->setDescripcion($request->get('descripcion'));
        $formulario->setSede($request->get('sede'));
        $formulario->setPresupuesto($request->get('valor'));
        $formulario->setFechacreacion(new \DateTime());
        
        $em->persist($formulario);
        $em->flush();
        
        $procesos = $this->getDoctrine()
            ->getRepository(PcFormulario::class)
            ->findBy(array(), array('numeroproceso' => 'ASC'));    

        return $this->render('home/index.html.twig', [
            'procesos' => $procesos,
        ]);
    }
}
