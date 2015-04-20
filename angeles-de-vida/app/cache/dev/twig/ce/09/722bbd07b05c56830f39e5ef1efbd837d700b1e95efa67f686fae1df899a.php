<?php

/* ModuloAdministradorBundle:Default:editarPaginaInicio_administrador.html.twig */
class __TwigTemplate_ce09722bbd07b05c56830f39e5ef1efbd837d700b1e95efa67f686fae1df899a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top_nav' => array($this, 'block_top_nav'),
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
        echo "<link id=\"bs-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- top-nav -->
                ";
        // line 8
        $this->displayBlock('top_nav', $context, $blocks);
        // line 23
        echo "       
\t\t<!-- end of top-nav -->
                <div class=\"navbar navbar-default\" role=\"navigation\">

    <div class=\"navbar-inner\">
        <button type=\"button\" class=\"navbar-toggle pull-left animated flip\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

    </div>
</div>
<div class=\"col-sm-2 col-lg-2\">
    <div class=\"sidebar-nav\">
        <div class=\"nav-canvas\">
            <div class=\"nav-sm nav nav-stacked\">

            </div>
            <ul class=\"nav nav-pills nav-stacked main-menu\">
                <li class=\"nav-header\">Mantenimiento Galeria</li>
                <li><a class=\"ajax-link\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("aSubirImagen");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i><span> Nueva Imagén</span></a>
                </li>
                <li><a class=\"ajax-link\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("aMantGaleria");
        echo "\"><i class=\"glyphicon glyphicon-trash icon-white\"></i><span>Eliminar Imagén</span></a>
                </li>
                
            </ul>

        </div>
    </div>
</div>
<center>
    <br>
    <br/>
    <div class=\"box-content\">
        <form role=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("aSubirImagen");
        echo "\">
            ";
        // line 60
        if (array_key_exists("message", $context)) {
            // line 61
            echo "                <p class=\"help-block\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></p>
                ";
        }
        // line 63
        echo "                ";
        if (array_key_exists("error", $context)) {
            // line 64
            echo "                <p class=\"help-block\"><font color=\"#FF0000\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</font></p>
                ";
        }
        // line 66
        echo "            <h2>¡Subir Imagen!</h2>
            
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Descripción</label>
                <input type=\"text\" class=\"form-control\" id=\"inputSuccess1\" name=\"descripcion\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputFile\">Imagen</label>
                <input type=\"file\" id=\"exampleInputFile\" name=\"archivo\">

            </div>
           
            <button class=\"btn btn-info btn-sm\">Guardar</button>
        </form>
    </div>
</center>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- library for cookie management -->
            <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
            <!-- calender plugin -->
            <script src='";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
            <!-- data table plugin -->
            <script src='";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

            <!-- select or dropdown enhancer -->
            <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- plugin for gallery image view -->
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
            <!-- notification plugin -->
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
            <!-- library for making tables responsive -->
            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
            <!-- tour plugin -->
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
            <!-- star rating plugin -->
            <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
            <!-- for iOS style toggle switch -->
            <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
            <!-- autogrowing textarea plugin -->
            <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
            <!-- multiple file upload plugin -->
            <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
            <!-- application script for Charisma demo -->
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/charisma.js"), "html", null, true);
        echo "\"></script>          
";
        // line 114
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminFooter.html.twig")->display($context);
        echo " 



";
    }

    // line 8
    public function block_top_nav($context, array $blocks = array())
    {
        // line 9
        echo "\t\t<nav class=\"top-nav\" \">
                    <div class=\"shell\" >
\t\t\t\t<!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
\t\t\t\t<span class=\"top-nav-shadow\"></span>-->
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("aInicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("aActividades");
        echo "\">Actividades</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("aDocumentos");
        echo "\">Documentos</a></li>
                                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("aCuentas");
        echo "\">Cuentas</a></li>
                                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("aEditarInicio");
        echo "\">Editar Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("cerrar_sesion");
        echo "\">Salir</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
                ";
    }

    public function getTemplateName()
    {
        return "ModuloAdministradorBundle:Default:editarPaginaInicio_administrador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 19,  237 => 18,  233 => 17,  229 => 16,  225 => 15,  221 => 14,  214 => 9,  211 => 8,  202 => 114,  198 => 113,  193 => 111,  188 => 109,  183 => 107,  178 => 105,  173 => 103,  168 => 101,  163 => 99,  158 => 97,  153 => 95,  148 => 93,  142 => 90,  137 => 88,  133 => 87,  128 => 85,  122 => 82,  104 => 66,  98 => 64,  95 => 63,  89 => 61,  87 => 60,  83 => 59,  68 => 47,  63 => 45,  39 => 23,  37 => 8,  31 => 5,  26 => 4,  24 => 3,  20 => 1,);
    }
}
