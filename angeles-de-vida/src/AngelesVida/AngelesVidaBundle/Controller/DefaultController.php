<?php

namespace AngelesVida\AngelesVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('AngelesVidaBundle:Default:index.html.twig', array('name' => $name));
    }

    public function inicioAction() {
        return $this->render('AngelesVidaBundle:Default:inicio.html.twig');
    }

    public function loginAction() {
        return $this->render('AngelesVidaBundle:Default:login.html.twig');
    }

    public function pActividadesAction() {
        $em = $this->getDoctrine()->getManager();
        $dql = "select a from AngelesVida\DataBaseBundle\Entity\Actividad a order by a.fecha DESC";
        $query = $em->createQuery($dql);
        $actividades = $query->getResult();
        if ($actividades) {
            return $this->render('AngelesVidaBundle:Default:actividades_padres.html.twig', array('actividades' => $actividades));
        } else {
            $message = 'No se encontraron registros';
            return $this->render('AngelesVidaBundle:Default:actividades_padres.html.twig', array('actividades' => $actividades, 'message' => $message));
        }
    }

    public function pTemasDeInteresAction() {
        return $this->render('AngelesVidaBundle:Default:temas_de_interes_padres.html.twig');
    }

    public function pQuienesSomosAction() {
        return $this->render('AngelesVidaBundle:Default:quienes_somos_padres.html.twig');
    }

    public function pGaleriaAction() {

        $em = $this->getDoctrine()->getEntityManager();
        $imagenes = $em->getRepository('DBBundle:Galeria')->findAll();

        return $this->render('AngelesVidaBundle:Default:galeria.html.twig', array('imagenes' => $imagenes));
    }

}
