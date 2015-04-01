<?php

namespace AngelesVida\ModuloAdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AngelesVida\DataBaseBundle\Models\Document;
use AngelesVida\DataBaseBundle\Entity\Galeria;

class DefaultController extends Controller {

    public function aInicioAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloAdministradorBundle:Default:index.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function aDocumentosAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloAdministradorBundle:Default:documentos_administrador.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function aCuentasAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloAdministradorBundle:Default:cuentas_administrador.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function aActividadesAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloAdministradorBundle:Default:actividades_administrador.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function aEditarInicioAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            return $this->render('ModuloAdministradorBundle:Default:editarPaginaInicio_administrador.html.twig');
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function aSubirHorarioAction() {

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
                $tipoHorario = $request->get('selectUsuario');

                $qry = "INSERT INTO asociacion_angeles_de_vida.horario(nombre,documento,tipo_archivo,descripcion,tipo_horario) VALUES
                ('$nombre','$archivo','$tipo','$descripcion','$tipoHorario')";

                mysql_query($qry);
                $message = '¡Archivo cargado correctamente!';
                return $this->render('ModuloAdministradorBundle:Default:documentos_administrador.html.twig', array('message' => $message));
            } else {
                $error = '¡Por favor complete todos los espacios solicitados!';
                return $this->render('ModuloAdministradorBundle:Default:documentos_administrador.html.twig', array('error' => $error));
            }
        }//if
        else {
            return $this->render('ModuloAdministradorBundle:Default:documentos_administrador.html.twig');
        }
    }//aSubirHorario

    public function aSubirImagenAction(Request $request) {
        if ($request->getMethod() == 'POST') {
                $descripcion = $request->get('descripcion');
                $imagen = $request->get('archivo');
                if ((!$descripcion == "") || (!$imagen == "")) {
                         $file   = $_FILES['archivo'];
                         // print_r($file);  just checking File properties

                          // File Properties
                          $file_name  = $file['name'];
                          $file_tmp   = $file['tmp_name'];
                          
                          

                            // Working With File Extension
                          $file_ext   = explode('.', $file_name);
                          $file_fname = explode('.', $file_name);

                          $file_fname = strtolower(current($file_fname));
                          $file_ext   = strtolower(end($file_ext));
                          $allowed    = array('jpg', 'jpeg', 'png');

                        if (in_array($file_ext,$allowed)) {
                            $root = getcwd();
                            move_uploaded_file($_FILES['archivo']['tmp_name'],$root.'/uploads/galeria/'.$_FILES['archivo']['name']);
                            $archivo = new Galeria();
                            $archivo->setImagen($file_name);
                            $archivo->setDescripcion($descripcion);

                            $em = $this->getDoctrine()->getManager();
                            $em->persist($archivo);
                            $em->flush();
                            $message = '¡Archivo cargado correctamente!';
                            return $this->render('ModuloAdministradorBundle:Default:editarPaginaInicio_administrador.html.twig', array('message' => $message));
                         }//fin validadicon de formato
                         else {
                             $error = '¡Informato incorrecto!';
                             return $this->render('ModuloAdministradorBundle:Default:editarPaginaInicio_administrador.html.twig', array('error' => $error));
                         }
                }//fin validacion campos vacios
                else {
                    $error = '¡Por favor complete todos los espacios solicitados!';
                    return $this->render('ModuloAdministradorBundle:Default:editarPaginaInicio_administrador.html.twig', array('error' => $error));
            }//else error
        }
        return $this->render('ModuloAdministradorBundle:Default:editarPaginaInicio_administrador.html.twig');
    }

     public function aMantHorarioAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {


            $em = $this->getDoctrine()->getManager();
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Horario a";
            $query = $em->createQuery($dql);
            $horarios = $query->getResult();
            if($horarios){
                 return $this->render('ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig', array('horarios' => $horarios));
            }else{
               $message = 'No se encontraron registros'; 
               return $this->render('ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig', array('horarios' => $horarios, 'message' => $message));
            }
           
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

//dHorariosAction

    public function aBorrarHorarioAction() {

        $em = $this->getDoctrine()->getManager();


        $id = $_GET["id"];

        $horario_eliminar = $em->getRepository('AngelesVida\DataBaseBundle\Entity\Horario')->findOneBy(array('id' => $id));

        if ($horario_eliminar) {
            $em->remove($horario_eliminar);
            $em->flush();
            $message = 'El registro se eliminó correctamente';

            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Horario a";
            $query = $em->createQuery($dql);
            $horarios = $query->getResult();
            return $this->render('ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig', array('horarios' => $horarios, 'message' => $message));
        }else{
            $dql = "select a from AngelesVida\DataBaseBundle\Entity\Horario a";
            $query = $em->createQuery($dql);
            $horarios = $query->getResult();
            if($horarios){
                 return $this->render('ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig', array('horarios' => $horarios));
            }else{
               $message = 'No se encontraron registros'; 
               return $this->render('ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig', array('horarios' => $horarios, 'message' => $message));
            }
           
        }//else
    }//BorrarHorarioAction()
    
     public function aDescargarHorarioAction(Request $request) {
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
            return $this->render('ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig', array('horarios' => $horarios));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }
     public function aMantenimientoGaleriaAction(Request $request)
    {
         $session = $request->getSession();
        if ($session->has("id")) {
        $em = $this->getDoctrine()->getEntityManager();
        $imagenes = $em->getRepository('DBBundle:Galeria')->findAll();
        
        return $this->render('ModuloAdministradorBundle:Default:mantenimientoGaleria.html.twig',array('imagenes' => $imagenes));
        }//fin si hay session
        else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
        
        }// fin método aMantenimientoGaleria
    
    public function aEliminarImagenAction()
    {
         $em = $this->getDoctrine()->getManager();


        $id = $_GET["id"];
        $ruta="uploads/galeria/".$id;
        $imagen_eliminar = $em->getRepository('DBBundle:Galeria')->findOneBy(array('imagen' => $id));
        if ($imagen_eliminar) {
            $em->remove($imagen_eliminar);
            $em->flush();
            $message = 'El registro se eliminó correctamente';
            unlink($ruta);
        }
        return $this->redirect($this->generateUrl('aMantGaleria'));
    }// fin método aEliminarImagen

}// DefaultController
