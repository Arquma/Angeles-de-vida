<?php

namespace AngelesVida\ModuloResidentesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function rInicioAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloResidentesBundle:Default:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function rArticulosAction(Request $request) {
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
            return $this->render('ModuloResidentesBundle:Default:articulos_residentes.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//rArticulosAction

    public function rDescargarArticuloAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $id = $_GET["id"];

            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');


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


            mysql_connect($hostname, $user, $pass);
            mysql_select_db($dataBase);
            $query3 = "SELECT * FROM asociacion_angeles_de_vida.articulo where cod_articulo=$id";

            $res = mysql_query($query3);
            $nombre = mysql_result($res, 0, "nombre");
            $ar = mysql_result($res, 0, "documento");
            $tipo = mysql_result($res, 0, "tipo_archivo");

            header("Content-type: .$tipo");
            header('Content-Disposition: attachment; filename=' . $nombre);
            header("Content-Transfer-Encoding: binary");
            header("Accept-Ranges: bytes");
            print $ar;
            return $this->render('ModuloResidentesBundle:Default:articulos_residentes.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function rHorariosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Horario a where a.tipoHorario=:tipoHorario";
            $query = $em->createQuery($dql);
            $query->setParameter('tipoHorario', 'Medicos Residentes');
            $horarios = $query->getResult();
            if ($horarios) {
                return $this->render('ModuloResidentesBundle:Default:horarios_residentes.html.twig', array('horarios' => $horarios));
            } else {
                $message = 'No se encontraron registros';
                return $this->render('ModuloResidentesBundle:Default:horarios_residentes.html.twig', array('horarios' => $horarios, 'message' => $message));
            }
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }
    
    public function rDescargarHorarioAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            $id = $_GET["id"];

            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');

            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Horario a";
            $query = $em->createQuery($dql);
            $horarios = $query->getResult();



            mysql_connect($hostname, $user, $pass);
            mysql_select_db($dataBase);
            $query2 = "SELECT * FROM asociacion_angeles_de_vida.horario where id=$id";

            $res = mysql_query($query2);
            $nombre = mysql_result($res, 0, "nombre");
            $ar = mysql_result($res, 0, "documento");
            $tipo = mysql_result($res, 0, "tipo_archivo");



            //$pdfFile = $item->getFile(); //returns pdf file stored as mysql blob
            header("Content-type: .$tipo");

            header('Content-Disposition: attachment; filename=' . $nombre);
            header("Content-Transfer-Encoding: binary");
            header("Accept-Ranges: bytes");
            print $ar;
            return $this->render('ModuloResidentesBundle:Default:horarios_residentes.html.twig', array('horarios' => $horarios));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }



}
