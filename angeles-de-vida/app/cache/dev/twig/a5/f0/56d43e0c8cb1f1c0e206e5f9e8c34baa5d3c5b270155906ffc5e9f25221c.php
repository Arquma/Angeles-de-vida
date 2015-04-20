<?php

/* ModuloResidentesBundle:Default:index.html.twig */
class __TwigTemplate_a5f056d43e0c8cb1f1c0e206e5f9e8c34baa5d3c5b270155906ffc5e9f25221c extends Twig_Template
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
        $this->env->loadTemplate("ModuloResidentesBundle:Default:baseResidentesHeaderAlto.html.twig")->display($context);
        // line 2
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  

<link id=\"bs-css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- top-nav -->
\t\t<nav class=\"top-nav\">
\t\t\t<div class=\"shell\">
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("rInicio");
        echo "\">Inicio</a></li>
                                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("rArticulos");
        echo "\">Articulos</a></li>
                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("rHorarios");
        echo "\">Horarios y Roles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("login");
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
        // line 54
        $this->env->loadTemplate("ModuloResidentesBundle:Default:baseResidentesFooter.html.twig")->display($context);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ModuloResidentesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 15,  231 => 13,  223 => 11,  216 => 6,  213 => 5,  233 => 17,  225 => 15,  153 => 94,  137 => 62,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 64,  110 => 69,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 143,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 5,  129 => 60,  113 => 29,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 18,  212 => 300,  207 => 115,  202 => 114,  165 => 212,  284 => 148,  281 => 54,  276 => 141,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 71,  118 => 33,  65 => 27,  53 => 14,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 64,  279 => 110,  248 => 96,  245 => 95,  242 => 312,  198 => 112,  194 => 73,  190 => 73,  160 => 75,  134 => 37,  104 => 49,  23 => 3,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 46,  250 => 109,  236 => 103,  232 => 308,  222 => 304,  191 => 291,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 38,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 8,  188 => 108,  178 => 104,  146 => 43,  124 => 36,  100 => 30,  90 => 44,  76 => 32,  58 => 44,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 316,  247 => 314,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 96,  169 => 60,  140 => 81,  132 => 74,  128 => 85,  107 => 72,  61 => 20,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 93,  235 => 14,  230 => 82,  227 => 12,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 89,  204 => 113,  179 => 69,  159 => 88,  143 => 42,  135 => 79,  119 => 67,  102 => 31,  71 => 22,  67 => 28,  63 => 45,  59 => 17,  38 => 6,  94 => 62,  89 => 61,  85 => 42,  75 => 86,  68 => 47,  56 => 16,  87 => 60,  21 => 2,  26 => 3,  93 => 136,  88 => 64,  78 => 25,  46 => 12,  27 => 7,  44 => 12,  31 => 8,  28 => 3,  201 => 77,  196 => 15,  183 => 106,  171 => 216,  166 => 71,  163 => 98,  158 => 88,  156 => 73,  151 => 86,  142 => 89,  138 => 88,  136 => 60,  121 => 54,  117 => 30,  105 => 67,  91 => 40,  62 => 24,  49 => 13,  24 => 3,  25 => 4,  19 => 1,  79 => 35,  72 => 31,  69 => 28,  47 => 15,  40 => 11,  37 => 8,  22 => 2,  246 => 108,  157 => 56,  145 => 83,  139 => 36,  131 => 62,  123 => 32,  120 => 67,  115 => 54,  111 => 28,  108 => 50,  101 => 48,  98 => 57,  96 => 54,  83 => 34,  74 => 24,  66 => 22,  55 => 17,  52 => 15,  50 => 14,  43 => 14,  41 => 11,  35 => 9,  32 => 7,  29 => 5,  209 => 82,  203 => 114,  199 => 67,  193 => 110,  189 => 71,  187 => 290,  182 => 288,  176 => 110,  173 => 102,  168 => 100,  164 => 59,  162 => 89,  154 => 87,  149 => 64,  147 => 85,  144 => 73,  141 => 48,  133 => 61,  130 => 73,  125 => 75,  122 => 82,  116 => 53,  112 => 63,  109 => 25,  106 => 32,  103 => 71,  99 => 42,  95 => 41,  92 => 28,  86 => 39,  82 => 26,  80 => 25,  73 => 42,  64 => 25,  60 => 13,  57 => 43,  54 => 17,  51 => 16,  48 => 13,  45 => 12,  42 => 5,  39 => 13,  36 => 10,  33 => 6,  30 => 7,);
    }
}
