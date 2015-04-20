<?php

/* ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig */
class __TwigTemplate_2b908eb934b2ce8d05c7b1a7976e353285681e83a3d57dd912b0468acaf8eb72 extends Twig_Template
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
        // line 2
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminHeaderAlto.html.twig")->display($context);
        // line 3
        echo "<link id=\"bs-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- top-nav -->
<nav class=\"top-nav\">
    <div class=\"shell\">
        <a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
        <span class=\"top-nav-shadow\"></span>
        <ul class=\"clearfix\">
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("aInicio");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("aActividades");
        echo "\">Actividades</a></li>
            <li class=\"active\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("aDocumentos");
        echo "\">Documentos</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("aCuentas");
        echo "\">Cuentas</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("aEditarInicio");
        echo "\">Editar Inicio</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("cerrar_sesion");
        echo "\">Salir</a></li>

        </ul>
    </div>
</nav>
<!-- end of top-nav -->
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
                <li class=\"nav-header\">Acciones</li>
                <li><a class=\"ajax-link\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("aDocumentos");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i><span> Nuevo horario</span></a>
                </li>
                <li><a class=\"ajax-link\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("aMantHorario");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i><span> Ver horarios</span></a>
                </li>
                
                
            </ul>

        </div>
    </div>
</div>
<center>
    <br><br/>
     <br><br/>
      <br><br/>
      <h3><li class=\"glyphicon glyphicon-edit\"></li><font color=\"#1C1C1C\"> Lista de Horarios<font/></h3>
    <div class=\"row\">
        <div class=\"box col-md-12\">
           
            <div class=\"box-inner\">
                <div class=\"box-content\">
                     ";
        // line 63
        if (array_key_exists("message", $context)) {
            // line 64
            echo "                        <div class=\"box-content alerts\">
                            <div class=\"alert alert-success\">
                             
                                <strong>¡";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "!</strong>
                            </div>
                        </div>
                    ";
        }
        // line 71
        echo "                    
                    <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">
                        ";
        // line 73
        if ((!array_key_exists("message", $context))) {
            // line 74
            echo "                        <thead>
                             
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Tipo de horario</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                         ";
        }
        // line 84
        echo "                        <tbody>
                            ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 86
            echo "                                <tr>
                                    <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "nombre"), "html", null, true);
            echo "</td>
                                    <td class=\"center\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "descripcion"), "html", null, true);
            echo "</td>
                                    <td class=\"center\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "tipoHorario"), "html", null, true);
            echo "</td>
                                    <td class=\"center\">
                                        <a class=\"btn btn-success\" href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("aDescargarHorario");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "id"), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-download-alt\"></i>
                                            Ver
                                        </a>

                                        <a class=\"btn btn-danger\" href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("aBorrarHorario");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "id"), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                                            Borrar
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                        </tbody>
                    </table>
                            
                            
                </div>
            </div>
        </div>
    </div><!--/row-->
</center>
";
        // line 113
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminFooter.html.twig")->display($context);
        echo " ";
    }

    public function getTemplateName()
    {
        return "ModuloAdministradorBundle:Default:verYeliminarHorarios_administrador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 15,  231 => 13,  223 => 11,  216 => 6,  213 => 5,  233 => 17,  225 => 15,  153 => 94,  137 => 88,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 64,  110 => 69,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 143,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 5,  129 => 33,  113 => 29,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 18,  212 => 300,  207 => 115,  202 => 114,  165 => 212,  284 => 148,  281 => 54,  276 => 141,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 71,  118 => 33,  65 => 21,  53 => 42,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 64,  279 => 110,  248 => 96,  245 => 95,  242 => 312,  198 => 112,  194 => 73,  190 => 73,  160 => 155,  134 => 37,  104 => 66,  23 => 3,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 46,  250 => 109,  236 => 103,  232 => 308,  222 => 304,  191 => 291,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 40,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 8,  188 => 108,  178 => 104,  146 => 43,  124 => 36,  100 => 30,  90 => 44,  76 => 56,  58 => 44,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 316,  247 => 314,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 96,  169 => 60,  140 => 81,  132 => 74,  128 => 85,  107 => 72,  61 => 20,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 93,  235 => 14,  230 => 82,  227 => 12,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 89,  204 => 113,  179 => 69,  159 => 88,  143 => 42,  135 => 79,  119 => 67,  102 => 31,  71 => 22,  67 => 47,  63 => 45,  59 => 17,  38 => 6,  94 => 62,  89 => 61,  85 => 42,  75 => 86,  68 => 47,  56 => 16,  87 => 60,  21 => 3,  26 => 4,  93 => 136,  88 => 64,  78 => 25,  46 => 12,  27 => 5,  44 => 13,  31 => 5,  28 => 3,  201 => 77,  196 => 15,  183 => 106,  171 => 216,  166 => 71,  163 => 98,  158 => 88,  156 => 104,  151 => 86,  142 => 89,  138 => 88,  136 => 60,  121 => 31,  117 => 30,  105 => 67,  91 => 133,  62 => 45,  49 => 17,  24 => 3,  25 => 4,  19 => 2,  79 => 57,  72 => 55,  69 => 26,  47 => 15,  40 => 12,  37 => 8,  22 => 2,  246 => 108,  157 => 56,  145 => 83,  139 => 36,  131 => 71,  123 => 32,  120 => 67,  115 => 71,  111 => 28,  108 => 32,  101 => 208,  98 => 57,  96 => 29,  83 => 59,  74 => 24,  66 => 22,  55 => 17,  52 => 15,  50 => 14,  43 => 14,  41 => 12,  35 => 12,  32 => 7,  29 => 20,  209 => 82,  203 => 114,  199 => 67,  193 => 110,  189 => 71,  187 => 290,  182 => 288,  176 => 110,  173 => 102,  168 => 100,  164 => 59,  162 => 89,  154 => 87,  149 => 64,  147 => 85,  144 => 84,  141 => 48,  133 => 86,  130 => 73,  125 => 75,  122 => 82,  116 => 66,  112 => 63,  109 => 25,  106 => 32,  103 => 71,  99 => 70,  95 => 63,  92 => 28,  86 => 27,  82 => 26,  80 => 25,  73 => 42,  64 => 14,  60 => 13,  57 => 43,  54 => 17,  51 => 16,  48 => 14,  45 => 6,  42 => 5,  39 => 13,  36 => 11,  33 => 22,  30 => 7,);
    }
}
