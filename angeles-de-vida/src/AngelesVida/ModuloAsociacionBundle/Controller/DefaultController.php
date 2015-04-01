<?php

namespace AngelesVida\ModuloAsociacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloAsociacionBundle:Default:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//indexAction

    public function AsSubirArchivoAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {

            $request = $this->getRequest();
            $message = '';
            if ($request->getMethod() == 'POST') {


                $hostname = $this->container->getParameter('database_host');
                $user = $this->container->getParameter('database_user');
                $pass = $this->container->getParameter('database_password');
                $dataBase = $this->container->getParameter('database_name');
                mysql_connect($hostname, $user, $pass);
                mysql_select_db($dataBase);

                $descripcion = $request->get('descripcion');
                $archivo = $request->get('archivito');


                if ((!$descripcion == "") || (!$archivo == "")) {

                    $archivo = file_get_contents($_FILES["archivito"]["tmp_name"]);
                    $tipo = mysql_real_escape_string($_FILES["archivito"]["type"]);
                    $nombre = mysql_real_escape_string($_FILES["archivito"]["name"]);
                    $archivo = mysql_real_escape_string($archivo);
                    $tipoDocumento = $request->get('selectUsuario');

                    $qry = "INSERT INTO asociacion_angeles_de_vida.asociacion(archivo,descripcion,nombre,tipo_archivo,tipo_doc) VALUES
                ('$archivo','$descripcion','$nombre','$tipo','$tipoDocumento')";

                    mysql_query($qry);
                    $message = '¡Archivo cargado correctamente!';
                    return $this->render('ModuloAsociacionBundle:Default:subirArchivo_asociacion.html.twig', array('message' => $message));
                } else {
                    $error = '¡Por favor complete todos los espacios solicitados!';
                    return $this->render('ModuloAsociacionBundle:Default:subirArchivo_asociacion.html.twig', array('error' => $error));
                }
            }//if
            else {
                return $this->render('ModuloAsociacionBundle:Default:subirArchivo_asociacion.html.twig');
            }


            return $this->render('ModuloAsociacionBundle:Default:subirArchivo_asociacion.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//AsSubirArchivo

    public function AsEstadosDeCuentaAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            if ($session->has("id")) {


                $em = $this->getDoctrine()->getManager();
                $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
                $query = $em->createQuery($dql);
                $query->setParameter('tipoDoc', 'Estado de cuenta');
                $archivos = $query->getResult();
                if ($archivos) {
                    return $this->render('ModuloAsociacionBundle:Default:estadosDeCuenta_asociacion.html.twig', array('archivos' => $archivos));
                } else {
                    $message = 'No se encontraron registros';
                    return $this->render('ModuloAsociacionBundle:Default:estadosDeCuenta_asociacion.html.twig', array('archivos' => $archivos, 'message' => $message));
                }

                return $this->render('ModuloAsociacionBundle:Default:estadosDeCuenta_asociacion.html.twig');
            } else {
                $this->get('session')->getFlashBag()->add(
                        'mensaje', 'Debe estar logueado para ver este contenido'
                );
                return $this->redirect($this->generateUrl('login'));
            }
        }
    }

//AsEstadosDeCuenta

    public function AsComunicadosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            if ($session->has("id")) {


                $em = $this->getDoctrine()->getManager();
                $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
                $query = $em->createQuery($dql);
                $query->setParameter('tipoDoc', 'Comunicado');
                $archivos = $query->getResult();
                if ($archivos) {
                    return $this->render('ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig', array('archivos' => $archivos));
                } else {
                    $message = 'No se encontraron registros';
                    return $this->render('ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig', array('archivos' => $archivos, 'message' => $message));
                }

                return $this->render('ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig');
            } else {
                $this->get('session')->getFlashBag()->add(
                        'mensaje', 'Debe estar logueado para ver este contenido'
                );
                return $this->redirect($this->generateUrl('login'));
            }
        }
    }

//AsComunicados

    public function AsDescargarEcAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            $id = $_GET["id"];

            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');

            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
            $query = $em->createQuery($dql);
            $query->setParameter('tipoDoc', 'Estado de cuenta');
            $archivos = $query->getResult();



            mysql_connect($hostname, $user, $pass);
            mysql_select_db($dataBase);
            $query2 = "SELECT * FROM asociacion_angeles_de_vida.asociacion where id_doc=$id";

            $res = mysql_query($query2);
            $nombre = mysql_result($res, 0, "nombre");
            $ar = mysql_result($res, 0, "archivo");
            $tipo = mysql_result($res, 0, "tipo_archivo");



            //$pdfFile = $item->getFile(); //returns pdf file stored as mysql blob
            header("Content-type: .$tipo");

            header('Content-Disposition: attachment; filename=' . $nombre);
            header("Content-Transfer-Encoding: binary");
            header("Accept-Ranges: bytes");
            print $ar;
            return $this->render('ModuloAsociacionBundle:Default:estadosDeCuenta_asociacion.html.twig', array('archivos' => $archivos));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function AsEliminarEcAction(Request $request) {
        $em = $this->getDoctrine()->getManager();


        $id = $_GET["id"];

        $estadoCuenta_eliminar = $em->getRepository('AngelesVida\DataBaseBundle\Entity\Asociacion')->findOneBy(array('idDoc' => $id));

        if ($estadoCuenta_eliminar) {
            $em->remove($estadoCuenta_eliminar);
            $em->flush();
            $message = 'El registro se eliminó correctamente';
            
            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
            $query = $em->createQuery($dql);
            $query->setParameter('tipoDoc', 'Estado de cuenta');
            $archivos = $query->getResult();
            return $this->render('ModuloAsociacionBundle:Default:estadosDeCuenta_asociacion.html.twig', array('archivos' => $archivos));
        } else {
             $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
            $query = $em->createQuery($dql);
            $query->setParameter('tipoDoc', 'Estado de cuenta');
            $archivos = $query->getResult();
            if ($archivos) {
                return $this->render('ModuloAsociacionBundle:Default:estadosDeCuenta_asociacion.html.twig', array('archivos' => $archivos));
            } else {
                $message = 'No se encontraron registros';
                return $this->render('ModuloAsociacionBundle:Default:estadosDeCuenta_asociacion.html.twig', array('archivos' => $archivos, 'message' => $message));
            }
        }//else
    }
    
     public function AsEliminarComAction(Request $request) {
        $em = $this->getDoctrine()->getManager();


        $id = $_GET["id"];

        $estadoCuenta_eliminar = $em->getRepository('AngelesVida\DataBaseBundle\Entity\Asociacion')->findOneBy(array('idDoc' => $id));

        if ($estadoCuenta_eliminar) {
            $em->remove($estadoCuenta_eliminar);
            $em->flush();
            $message = 'El registro se eliminó correctamente';
            
           $em = $this->getDoctrine()->getManager();
                $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
                $query = $em->createQuery($dql);
                $query->setParameter('tipoDoc', 'Comunicado');
                $archivos = $query->getResult();
            return $this->render('ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig', array('archivos' => $archivos));
        } else {
               $em = $this->getDoctrine()->getManager();
                $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
                $query = $em->createQuery($dql);
                $query->setParameter('tipoDoc', 'Comunicado');
                $archivos = $query->getResult();
                if ($archivos) {
                    return $this->render('ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig', array('archivos' => $archivos));
                } else {
                    $message = 'No se encontraron registros';
                    return $this->render('ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig', array('archivos' => $archivos, 'message' => $message));
                }
        }//else
    }


    public function AsDescargarComAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            $id = $_GET["id"];

            $hostname = $this->container->getParameter('database_host');
            $user = $this->container->getParameter('database_user');
            $pass = $this->container->getParameter('database_password');
            $dataBase = $this->container->getParameter('database_name');

            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Asociacion a where a.tipoDoc=:tipoDoc";
            $query = $em->createQuery($dql);
            $query->setParameter('tipoDoc', 'Comunicado');
            $archivos = $query->getResult();



            mysql_connect($hostname, $user, $pass);
            mysql_select_db($dataBase);
            $query2 = "SELECT * FROM asociacion_angeles_de_vida.asociacion where id_doc=$id";

            $res = mysql_query($query2);
            $nombre = mysql_result($res, 0, "nombre");
            $ar = mysql_result($res, 0, "archivo");
            $tipo = mysql_result($res, 0, "tipo_archivo");



            //$pdfFile = $item->getFile(); //returns pdf file stored as mysql blob
            header("Content-type: .$tipo");

            header('Content-Disposition: attachment; filename=' . $nombre);
            header("Content-Transfer-Encoding: binary");
            header("Accept-Ranges: bytes");
            print $ar;
            return $this->render('ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig', array('archivos' => $archivos));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

}
