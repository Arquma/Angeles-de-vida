<?php

namespace AngelesVida\ModuloInternosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
     public function iInicioAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloInternosBundle:Default:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function iArticulosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link=:link and a.compartir=:compartir";
            $query = $em->createQuery($dql);
            $query->setParameter('link', '');
            $query->setParameter('compartir', 'Medicos Residentes e Internos');
            $articulosDoc = $query->getResult();

            $em2 = $this->getDoctrine()->getManager();
            $dql2 = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link!=:link and a.compartir=:compartir";
            $query2 = $em2->createQuery($dql2);
            $query2->setParameter('link', '');
            $query2->setParameter('compartir', 'Medicos Residentes e Internos');
            $articulosLink = $query2->getResult();
            return $this->render('ModuloInternosBundle:Default:articulos_internos.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }
    public function iHorariosAction(Request $request) {
       


            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Horario a where a.tipoHorario=:tipoHorario";
            $query = $em->createQuery($dql);
            $query->setParameter('tipoHorario', 'Medicos Internos');
            $horarios = $query->getResult();
            if ($horarios) {
                return $this->render('ModuloInternosBundle:Default:horarios_internos.html.twig', array('horarios' => $horarios));
            } else {
                $message = 'No se encontraron registros';
                return $this->render('ModuloInternosBundle:Default:horarios_internos.html.twig', array('horarios' => $horarios, 'message' => $message));
            }
       
    }
}
