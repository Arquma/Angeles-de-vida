<?php

namespace AngelesVida\AngelesVidaBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AngelesVida\DataBaseBundle\Entity\Usuario;


class SecurityController extends Controller
{
    
    public function loginAction(Request $request)
    {
      if($request->getMethod()=="POST")
          {
            $nombre=$request->get("_username");
            $contrasena=$request->get("_password");
            //$user= Usuario();
            //los parametros que se la pasan son nombres de los campos de la entidad
            $user=$this->getDoctrine()->getRepository('DBBundle:Usuario')->findOneBy(array("nombreUsuario"=>$nombre,"contrasena"=>$contrasena));
            if($user)
            {
                $session=$request->getSession();
               $session->set("id",$user->getId());
               $session->set("nombre",$user->getNombreUsuario());
               //echo $session->get("nombre");exit;
               if(strcasecmp($user->getNombreUsuario(),"administrador")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
               return $this->redirect($this->generateUrl('aInicio'));}
               if(strcasecmp($user->getNombreUsuario(),"medicos asistentes")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
               return $this->redirect($this->generateUrl('dInicio'));}
               if(strcasecmp($user->getNombreUsuario(),"medicos residentes")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
               return $this->redirect($this->generateUrl('rInicio'));}
              
               if(strcasecmp($user->getNombreUsuario(),"asociacion")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
               return $this->redirect($this->generateUrl('AsInicio'));}
               if(strcasecmp($user->getNombreUsuario(),"medicos internos")==0 && strcasecmp($user->getContrasena(),$contrasena)==0){
               return $this->redirect($this->generateUrl('iInicio'));}
            }//end if user
            else
            {
                 $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'Los datos ingresados no son válidos'
                            );
                    return $this->redirect($this->generateUrl('login'));
            }
          }//endif request
            return $this->render('AngelesVidaBundle:Default:login.html.twig');
    }
    public function logoutAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
        //$this->get('session')->getFlashBag()->add(
          //                      'mensaje',
            //                    'Se ha cerrado sessión exitosamente, gracias por visitarnos'
              //              );
                    return $this->redirect($this->generateUrl('inicio'));
    }
}
