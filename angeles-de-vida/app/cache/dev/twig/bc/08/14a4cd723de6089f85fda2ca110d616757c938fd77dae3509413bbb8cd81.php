<?php

/* ModuloDoctoresBundle:Default:articulosDoc_doctores.html.twig */
class __TwigTemplate_bc0814a4cd723de6089f85fda2ca110d616757c938fd77dae3509413bbb8cd81 extends Twig_Template
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
        $this->env->loadTemplate("ModuloDoctoresBundle:Default:baseDoctoresHeaderAlto.html.twig")->display($context);
        // line 2
        echo "
<!-- top-nav -->

<!-- top-nav -->
";
        // line 6
        $this->displayBlock('top_nav', $context, $blocks);
        // line 22
        echo "  

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
        // line 44
        echo $this->env->getExtension('routing')->getPath("dNuevoArticuloDoc");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i><span> Nuevo documento</span></a>
                </li>
                <li><a class=\"ajax-link\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("dNuevoArticuloLink");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i><span> Nuevo link</span></a>
                </li>
                <li><a class=\"ajax-link\" href=\"form.html\"><i
                            class=\"glyphicon glyphicon-list-alt\"></i><span> Artículos</span></a></li>

                <li class=\"nav-header hidden-md\">Referencias</li>
                <li><a class=\"ajax-link\" href=\"table.html\"><i
                            class=\"glyphicon glyphicon-align-justify\"></i><span>Ejemplo</span></a></li>
                <li><a class=\"ajax-link\" href=\"table.html\"><i
                            class=\"glyphicon glyphicon-align-justify\"></i><span>Ejemplo</span></a></li>
                <li><a class=\"ajax-link\" href=\"table.html\"><i
                            class=\"glyphicon glyphicon-align-justify\"></i><span>Ejemplo</span></a></li>
            </ul>

        </div>
    </div>
</div>
<!-- end of top-nav -->
<!-- end of top-nav -->


<div class=\"row\">


    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulosLink"]) ? $context["articulosLink"] : $this->getContext($context, "articulosLink")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 71
            echo "        <div class=\"box col-md-4\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">


                   
                </div>
                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-md-4\"><h6>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "nombre"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "descripcion"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6> <a class=\"btn btn-success btn-xs\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "link"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-download-alt\"></i>
                                    Ver
                                </a></h6>
                            <h6>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("dEliminarArticulo");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "codArticulo"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-trash\"></i>
                                    Eliminar</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulosDoc"]) ? $context["articulosDoc"] : $this->getContext($context, "articulosDoc")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 99
            echo "        <div class=\"box col-md-4\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">


                 
                </div>
                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-md-4\"><h6>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "nombre"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "descripcion"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6> <a class=\"btn btn-success btn-xs\" href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("dVerArticulo");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "codArticulo"), "html", null, true);
            echo "\" target=\"_blank\">
                                    <i class=\"glyphicon glyphicon-download-alt\"></i>
                                    Ver
                                </a></h6>
                            
                            <h6>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("dEliminarArticulo");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "codArticulo"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-trash\"></i>
                                    Eliminar</a></h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "</div><!--/row-->


<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<!-- calender plugin -->
<script src='";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
<!-- data table plugin -->
<script src='";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

<!-- select or dropdown enhancer -->
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- plugin for gallery image view -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<!-- notification plugin -->
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
<!-- library for making tables responsive -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
<!-- tour plugin -->
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
<!-- star rating plugin -->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<!-- for iOS style toggle switch -->
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
<!-- autogrowing textarea plugin -->
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
<!-- multiple file upload plugin -->
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
<!-- application script for Charisma demo -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/charisma.js"), "html", null, true);
        echo "\"></script>
";
        // line 163
        $this->env->loadTemplate("ModuloDoctoresBundle:Default:baseDoctoresFooter.html.twig")->display($context);
        echo " 


";
    }

    // line 6
    public function block_top_nav($context, array $blocks = array())
    {
        // line 7
        echo "    <nav class=\"top-nav\" \">
        <div class=\"shell\" >
            <!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
            <span class=\"top-nav-shadow\"></span>-->
            <ul class=\"clearfix\">

                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("dInicio");
        echo "\">Inicio</a></li>
                <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("dArticulos");
        echo "\">Articulos</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("dProtocolos");
        echo "\">Protocolos</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("dHorarios");
        echo "\">Horarios y Roles</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("cerrar_sesion");
        echo "\">Salir</a></li>

            </ul>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "ModuloDoctoresBundle:Default:articulosDoc_doctores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 11,  216 => 139,  213 => 5,  233 => 17,  225 => 15,  153 => 94,  137 => 62,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 64,  110 => 69,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 5,  129 => 60,  113 => 29,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 71,  118 => 33,  65 => 27,  53 => 14,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 150,  198 => 112,  194 => 73,  190 => 73,  160 => 110,  134 => 37,  104 => 49,  23 => 3,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 69,  152 => 108,  127 => 33,  84 => 38,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 108,  178 => 104,  146 => 43,  124 => 36,  100 => 30,  90 => 71,  76 => 32,  58 => 44,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 96,  169 => 60,  140 => 81,  132 => 74,  128 => 85,  107 => 72,  61 => 20,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 93,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 89,  204 => 113,  179 => 69,  159 => 88,  143 => 42,  135 => 79,  119 => 67,  102 => 31,  71 => 22,  67 => 28,  63 => 45,  59 => 46,  38 => 6,  94 => 62,  89 => 61,  85 => 42,  75 => 86,  68 => 47,  56 => 16,  87 => 60,  21 => 2,  26 => 3,  93 => 136,  88 => 64,  78 => 25,  46 => 12,  27 => 7,  44 => 12,  31 => 8,  28 => 6,  201 => 77,  196 => 131,  183 => 106,  171 => 116,  166 => 71,  163 => 98,  158 => 88,  156 => 109,  151 => 86,  142 => 89,  138 => 88,  136 => 98,  121 => 54,  117 => 87,  105 => 81,  91 => 40,  62 => 24,  49 => 13,  24 => 3,  25 => 4,  19 => 1,  79 => 35,  72 => 31,  69 => 28,  47 => 15,  40 => 11,  37 => 8,  22 => 2,  246 => 108,  157 => 56,  145 => 83,  139 => 36,  131 => 62,  123 => 32,  120 => 67,  115 => 54,  111 => 28,  108 => 50,  101 => 80,  98 => 57,  96 => 54,  83 => 34,  74 => 24,  66 => 22,  55 => 17,  52 => 15,  50 => 14,  43 => 14,  41 => 11,  35 => 9,  32 => 7,  29 => 5,  209 => 82,  203 => 114,  199 => 67,  193 => 110,  189 => 71,  187 => 290,  182 => 288,  176 => 110,  173 => 102,  168 => 100,  164 => 59,  162 => 89,  154 => 87,  149 => 64,  147 => 85,  144 => 73,  141 => 99,  133 => 61,  130 => 73,  125 => 75,  122 => 82,  116 => 53,  112 => 63,  109 => 82,  106 => 32,  103 => 71,  99 => 42,  95 => 41,  92 => 28,  86 => 70,  82 => 26,  80 => 25,  73 => 42,  64 => 25,  60 => 13,  57 => 43,  54 => 44,  51 => 16,  48 => 13,  45 => 12,  42 => 5,  39 => 13,  36 => 10,  33 => 6,  30 => 22,);
    }
}
