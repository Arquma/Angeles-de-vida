<?php

namespace AngelesVida\ModuloDoctoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloDoctoresBundle:Default:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function dArticulosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link=:link";
            $query = $em->createQuery($dql);
            $query->setParameter('link', '');
            $articulosDoc = $query->getResult();

            $em2 = $this->getDoctrine()->getManager();
            $dql2 = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link!=:link";
            $query2 = $em2->createQuery($dql2);
            $query2->setParameter('link', '');
            $articulosLink = $query2->getResult();
            if (!$articulosLink && !$articulosDoc) {
                $message = 'No se encontraron registros';
                return $this->render('ModuloDoctoresBundle:Default:articulosDoc_doctores.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink, 'message' => $message));

            } else {
                                return $this->render('ModuloDoctoresBundle:Default:articulosDoc_doctores.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink));
            }
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function dProtocolosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloDoctoresBundle:Default:protocolos_doctores.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function dHorariosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Horario a where a.tipoHorario=:tipoHorario";
            $query = $em->createQuery($dql);
            $query->setParameter('tipoHorario', 'Medicos Asistentes');
            $horarios = $query->getResult();
            if ($horarios) {
                return $this->render('ModuloDoctoresBundle:Default:horarios_doctores.html.twig', array('horarios' => $horarios));
            } else {
                $message = 'No se encontraron registros';
                return $this->render('ModuloDoctoresBundle:Default:horarios_doctores.html.twig', array('horarios' => $horarios, 'message' => $message));
            }
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//dHorariosAction

    public function dDescargarHorarioAction(Request $request) {
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
            return $this->render('ModuloDoctoresBundle:Default:horarios_doctores.html.twig', array('horarios' => $horarios));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//dDescargarHorarioAction

    public function dNuevoArticuloDocAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');

            $message = '';
            if ($request->getMethod() == 'POST') {

                mysql_connect($hostname, $user, $pass);
                mysql_select_db($dataBase);

                $descripcion = $request->get('descripcion');
                $archivo = $request->get('archivito');


                if ((!$descripcion == "") || (!$archivo == "")) {

                    $archivo = file_get_contents($_FILES["archivito"]["tmp_name"]);
                    $tipo = mysql_real_escape_string($_FILES["archivito"]["type"]);
                    $nombre = mysql_real_escape_string($_FILES["archivito"]["name"]);
                    $tamano = mysql_real_escape_string($_FILES["archivito"]["size"]);
                    $archivo = mysql_real_escape_string($archivo);
                    $compartir = $request->get('selectUsuario');

                    $qry = "INSERT INTO asociacion_angeles_de_vida.articulo(descripcion,documento,nombre,compartir,tipo_archivo,link) VALUES
                ('$descripcion','$archivo','$nombre','$compartir','$tipo','')";

                    mysql_query($qry);
                    $message = '¡Archivo cargado correctamente!';
                    return $this->render('ModuloDoctoresBundle:Default:nuevoArticuloDoc_doctores.html.twig', array('message' => $message));
                } else {
                    $error = '¡Por favor complete todos los espacios solicitados!';
                    return $this->render('ModuloDoctoresBundle:Default:nuevoArticuloDoc_doctores.html.twig', array('error' => $error));
                }
            }//if
            else {
                return $this->render('ModuloDoctoresBundle:Default:nuevoArticuloDoc_doctores.html.twig');
            }
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//dNuevoArticulo


    public function dEliminarArticuloAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $em = $this->getDoctrine()->getManager();


            $id = $_GET["id"];

            $articulo_eliminar = $em->getRepository('AngelesVida\DataBaseBundle\Entity\Articulo')->findOneBy(array('codArticulo' => $id));

        
                $em->remove($articulo_eliminar);
                $em->flush();
                $message = 'El registro se eliminó correctamente';

                $em = $this->getDoctrine()->getManager();
                $dql = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link=:link";
                $query = $em->createQuery($dql);
                $query->setParameter('link', '');
                $articulosDoc = $query->getResult();

                $em2 = $this->getDoctrine()->getManager();
                $dql2 = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link!=:link";
                $query2 = $em2->createQuery($dql2);
                $query2->setParameter('link', '');
                $articulosLink = $query2->getResult();
                return $this->render('ModuloDoctoresBundle:Default:articulosDoc_doctores.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink));
         
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//dEliminarArticulo

    public function dDescargarArticuloAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $id = $_GET["id"];

            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');


            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link=:link";
            $query = $em->createQuery($dql);
            $query->setParameter('link', '');
            $articulosDoc = $query->getResult();

            $em2 = $this->getDoctrine()->getManager();
            $dql2 = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link!=:link";
            $query2 = $em2->createQuery($dql2);
            $query2->setParameter('link', '');
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
            return $this->render('ModuloDoctoresBundle:Default:articulosDoc_doctores.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function dVerArticuloAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $id = $_GET["id"];

            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');


            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link=:link";
            $query = $em->createQuery($dql);
            $query->setParameter('link', '');
            $articulosDoc = $query->getResult();

            $em2 = $this->getDoctrine()->getManager();
            $dql2 = "select a from AngelesVida\DataBaseBundle\Entity\Articulo a where a.link!=:link";
            $query2 = $em2->createQuery($dql2);
            $query2->setParameter('link', '');
            $articulosLink = $query2->getResult();


            mysql_connect($hostname, $user, $pass);
            mysql_select_db($dataBase);
            $query3 = "SELECT * FROM asociacion_angeles_de_vida.articulo where cod_articulo=$id";

            $res = mysql_query($query3);
            $nombre = mysql_result($res, 0, "nombre");
            $ar = mysql_result($res, 0, "documento");
            $tipo = mysql_result($res, 0, "tipo_archivo");
            $tamano = mysql_result($res, 0, "tamano");

            header("Content-length: $tamano");
            header("Content-type: .$tipo");
            header('Content-Disposition: inline; filename=' . $nombre);
            header("Content-Transfer-Encoding: binary");
            header("Accept-Ranges: bytes");
            @readfile($ar);
            return $this->render('ModuloDoctoresBundle:Default:articulosDoc_doctores.html.twig', array('articulosDoc' => $articulosDoc, 'articulosLink' => $articulosLink));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function dNuevoArticuloLinkAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');

            $message = '';
            if ($request->getMethod() == 'POST') {

                mysql_connect($hostname, $user, $pass);
                mysql_select_db($dataBase);

                $descripcion = $request->get('descripcion');
                $nombre = $request->get('nombre');
                $direccion = $request->get('direccion');


                if ((!$descripcion == "") || (!$nombre == "") || (!$direccion == "")) {


                    $compartir = $request->get('selectUsuario');

                    $qry = "INSERT INTO asociacion_angeles_de_vida.articulo(descripcion,documento,nombre,compartir,tipo_archivo,link) VALUES
                ('$descripcion','','$nombre','$compartir','','$direccion')";

                    mysql_query($qry);
                    $message = '¡Archivo cargado correctamente!';
                    return $this->render('ModuloDoctoresBundle:Default:nuevoArticuloLink_doctores.html.twig', array('message' => $message));
                } else {
                    $error = '¡Por favor complete todos los espacios solicitados!';
                    return $this->render('ModuloDoctoresBundle:Default:nuevoArticuloLink_doctores.html.twig', array('error' => $error));
                }
            }//if
            else {
                return $this->render('ModuloDoctoresBundle:Default:nuevoArticuloLink_doctores.html.twig');
            }
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

}
