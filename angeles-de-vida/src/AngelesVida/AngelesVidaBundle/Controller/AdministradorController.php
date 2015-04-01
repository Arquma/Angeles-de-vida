<?php



namespace AngelesVida\AngelesVidaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministradorController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AngelesVidaBundle:Default:index.html.twig', array('name' => $name));
    }
     public  function inicioAction()
    {
        return $this->render('AngelesVidaBundle:Administrador:inicio.html.twig');
}

    }
