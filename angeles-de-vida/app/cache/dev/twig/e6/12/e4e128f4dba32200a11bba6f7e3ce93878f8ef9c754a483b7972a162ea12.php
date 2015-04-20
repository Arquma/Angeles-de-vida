<?php

/* ModuloAdministradorBundle:Default:index.html.twig */
class __TwigTemplate_e612e4e128f4dba32200a11bba6f7e3ce93878f8ef9c754a483b7972a162ea12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminHeaderAlto.html.twig")->display($context);
        // line 4
        echo "

<!-- top-nav -->
\t\t<nav class=\"top-nav\">
\t\t\t<div class=\"shell\">
\t\t\t\t<!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
\t\t\t\t<span class=\"top-nav-shadow\"></span>-->
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("aInicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("aActividades");
        echo "\">Actividades</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("aDocumentos");
        echo "\">Documentos</a></li>
                                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("aCuentas");
        echo "\">Cuentas</a></li>
                                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("aEditarInicio");
        echo "\">Editar Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("cerrar_sesion");
        echo "\">Salir</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t\t<!-- end of top-nav -->
<div class=\"ch-container\">
    <div class=\"row\">

        <div class=\"row\">
            <div class=\"col-md-12 center login-header\">


                <center> <h2 id=\"logo2\"></h2></center>\t



                <h2><font color=\"#000000\">Asociación Pro Neonatos Dr.R.A Calderón Guardia<font/></h2>
                <h5><font color=\"#6E6E6E\">Somos un grupo de personas con sensibilidad social, reunidas para gestionar recursos,
                  <font/>
                </h5>
                <h5><font color=\"#6E6E6E\">paralelamente a aquellos que aporta la Caja Costarricense de Seguro Social,
                  <font/>
                </h5>
                <h5>  <font color=\"#6E6E6E\">con el fin de cumplir la misión del Servicio de Neonatología del Hospital Dr. Rafael Ángel Calderón Guardia.<font/></h5>
            </div>
            <!--/span-->

        </div><!--/fluid-row-->

    </div><!--/.fluid-container-->

    <br>
    
    
    
    
    
    <br/>
</div><!--/.fluid-container-->

";
        // line 57
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminFooter.html.twig")->display($context);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "ModuloAdministradorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 57,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  25 => 4,  23 => 3,  19 => 1,);
    }
}
