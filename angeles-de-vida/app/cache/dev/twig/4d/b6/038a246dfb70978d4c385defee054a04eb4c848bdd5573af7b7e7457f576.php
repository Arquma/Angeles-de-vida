<?php

/* ModuloAdministradorBundle:Default:documentos_administrador.html.twig */
class __TwigTemplate_4db6038a246dfb70978d4c385defee054a04eb4c848bdd5573af7b7e7457f576 extends Twig_Template
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
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminHeaderAlto.html.twig")->display($context);
        // line 2
        echo "<link id=\"bs-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- top-nav -->
<nav class=\"top-nav\">
    <div class=\"shell\">
       <!-- <a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
        <span class=\"top-nav-shadow\"></span>-->
        <ul class=\"clearfix\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("aInicio");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("aActividades");
        echo "\">Actividades</a></li>
            <li class=\"active\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("aDocumentos");
        echo "\">Documentos</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("aCuentas");
        echo "\">Cuentas</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("aEditarInicio");
        echo "\">Editar Inicio</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("cerrar_sesion");
        echo "\">Salir</a></li>

        </ul>
    </div>
</nav>
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
        // line 40
        echo $this->env->getExtension('routing')->getPath("aDocumentos");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i><span> Nuevo horario</span></a>
                </li>
                <li><a class=\"ajax-link\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("aMantHorario");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i><span> Ver horarios</span></a>
                </li>
                
                
            </ul>

        </div>
    </div>
</div>
<!-- end of top-nav -->
<center>
    <br>
 
    <br/>
     <br>
    
    
    <br/>
       <br>
    
    
    <br/>
    <div class=\"box-content\">
        
        <form role=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("aSubirHorario");
        echo "\">
           ";
        // line 67
        if (array_key_exists("message", $context)) {
            // line 68
            echo "                <p class=\"help-block\"><font color=\"088A08\"><h4>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</h4></font></p>
                ";
        }
        // line 70
        echo "                ";
        if (array_key_exists("error", $context)) {
            // line 71
            echo "                <p class=\"help-block\"><font color=\"#FF0000\"><h4>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</h4></font></p>
                ";
        }
        // line 73
        echo "
            <h2>¡Subir horario!</h2>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Descripción</label>
                <input type=\"text\" class=\"form-control\" id=\"inputSuccess1\" name=\"descripcion\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputFile\">Archivo</label>
                <input type=\"file\" id=\"exampleInputFile\" name=\"archivito\">

            </div>
            <div class=\"box-content\">
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"selectError\">Compartir con:</label>

                    <div class=\"controls\">
                        <select id=\"selectError\" data-rel=\"chosen\" name=\"selectUsuario\">
                            <option value=\"Medicos Asistentes\">Médicos Asistentes</option>
                            <option value=\"Medicos Residentes\">Médicos Residentes</option>
                            <option value=\"Medicos Internos\">Médicos Internos</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class=\"btn btn-info btn-sm\">Guardar</button>
            <br>


            
            
            
            
        <br/>
        
        </form>
    </div>
</center>
";
        // line 110
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminFooter.html.twig")->display($context);
        echo " 




";
    }

    public function getTemplateName()
    {
        return "ModuloAdministradorBundle:Default:documentos_administrador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 73,  200 => 16,  192 => 14,  155 => 87,  150 => 85,  114 => 34,  110 => 69,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 143,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 5,  129 => 33,  113 => 29,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 310,  212 => 300,  207 => 298,  202 => 296,  165 => 212,  284 => 148,  281 => 54,  276 => 141,  184 => 12,  174 => 67,  167 => 65,  148 => 50,  126 => 35,  118 => 33,  65 => 21,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 64,  279 => 110,  248 => 96,  245 => 95,  242 => 312,  198 => 55,  194 => 73,  190 => 73,  160 => 155,  134 => 37,  104 => 31,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 46,  250 => 109,  236 => 103,  232 => 308,  222 => 304,  191 => 291,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 40,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 90,  188 => 13,  178 => 50,  146 => 43,  124 => 36,  100 => 30,  90 => 61,  76 => 24,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 316,  247 => 314,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 68,  169 => 60,  140 => 81,  132 => 36,  128 => 70,  107 => 36,  61 => 20,  273 => 52,  269 => 51,  254 => 110,  243 => 88,  240 => 105,  238 => 93,  235 => 74,  230 => 82,  227 => 306,  224 => 71,  221 => 77,  219 => 89,  217 => 302,  208 => 89,  204 => 72,  179 => 69,  159 => 88,  143 => 42,  135 => 79,  119 => 36,  102 => 31,  71 => 22,  67 => 47,  63 => 20,  59 => 17,  38 => 6,  94 => 62,  89 => 42,  85 => 59,  75 => 86,  68 => 15,  56 => 15,  87 => 135,  21 => 2,  26 => 3,  93 => 136,  88 => 27,  78 => 25,  46 => 12,  27 => 5,  44 => 12,  31 => 8,  28 => 3,  201 => 77,  196 => 15,  183 => 72,  171 => 216,  166 => 71,  163 => 209,  158 => 206,  156 => 104,  151 => 101,  142 => 45,  138 => 38,  136 => 60,  121 => 31,  117 => 30,  105 => 67,  91 => 133,  62 => 45,  49 => 17,  24 => 1,  25 => 3,  19 => 1,  79 => 56,  72 => 16,  69 => 26,  47 => 12,  40 => 11,  37 => 10,  22 => 2,  246 => 108,  157 => 56,  145 => 83,  139 => 36,  131 => 71,  123 => 32,  120 => 67,  115 => 71,  111 => 28,  108 => 32,  101 => 208,  98 => 30,  96 => 29,  83 => 92,  74 => 24,  66 => 22,  55 => 16,  52 => 14,  50 => 14,  43 => 11,  41 => 12,  35 => 9,  32 => 7,  29 => 20,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 71,  187 => 290,  182 => 288,  176 => 110,  173 => 6,  168 => 44,  164 => 59,  162 => 231,  154 => 151,  149 => 64,  147 => 145,  144 => 61,  141 => 48,  133 => 39,  130 => 77,  125 => 75,  122 => 68,  116 => 66,  112 => 33,  109 => 25,  106 => 32,  103 => 23,  99 => 64,  95 => 142,  92 => 28,  86 => 27,  82 => 26,  80 => 25,  73 => 42,  64 => 14,  60 => 13,  57 => 43,  54 => 17,  51 => 14,  48 => 13,  45 => 6,  42 => 5,  39 => 10,  36 => 10,  33 => 22,  30 => 7,);
    }
}
