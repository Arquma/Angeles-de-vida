<?php

/* ModuloInternosBundle:Default:index.html.twig */
class __TwigTemplate_81537797b12aebc1d4e5c0f945ff32e7c6f6172f65340c96d83db991ff6c4120 extends Twig_Template
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
        $this->env->loadTemplate("ModuloInternosBundle:Default:baseInternosHeaderAlto.html.twig")->display($context);
        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  

<link id=\"bs-css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- top-nav -->
\t\t<nav class=\"top-nav\">
\t\t\t<div class=\"shell\">
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("iInicio");
        echo "\">Inicio</a></li>
                                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("iArticulos");
        echo "\">Articulos</a></li>
                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("iHorarios");
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
        $this->env->loadTemplate("ModuloInternosBundle:Default:baseInternosFooter.html.twig")->display($context);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ModuloInternosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 15,  81 => 51,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 9,  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 102,  216 => 139,  213 => 98,  233 => 106,  225 => 15,  153 => 7,  137 => 61,  200 => 16,  192 => 103,  155 => 72,  150 => 85,  114 => 50,  110 => 49,  20 => 2,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 17,  175 => 16,  170 => 67,  129 => 16,  113 => 14,  97 => 57,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 14,  148 => 93,  126 => 56,  118 => 33,  65 => 28,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 109,  198 => 92,  194 => 73,  190 => 73,  160 => 63,  134 => 55,  104 => 50,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 72,  152 => 73,  127 => 54,  84 => 39,  77 => 46,  70 => 27,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 88,  178 => 104,  146 => 71,  124 => 54,  100 => 45,  90 => 39,  76 => 48,  58 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 83,  169 => 60,  140 => 82,  132 => 60,  128 => 59,  107 => 42,  61 => 23,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 108,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 96,  204 => 113,  179 => 69,  159 => 74,  143 => 73,  135 => 79,  119 => 52,  102 => 47,  71 => 22,  67 => 29,  63 => 24,  59 => 19,  38 => 5,  94 => 40,  89 => 55,  85 => 31,  75 => 31,  68 => 27,  56 => 13,  87 => 28,  21 => 2,  26 => 4,  93 => 60,  88 => 32,  78 => 32,  46 => 26,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 77,  196 => 131,  183 => 106,  171 => 15,  166 => 71,  163 => 13,  158 => 8,  156 => 8,  151 => 91,  142 => 89,  138 => 56,  136 => 61,  121 => 16,  117 => 15,  105 => 15,  91 => 8,  62 => 40,  49 => 17,  24 => 3,  25 => 3,  19 => 1,  79 => 36,  72 => 32,  69 => 44,  47 => 13,  40 => 11,  37 => 8,  22 => 3,  246 => 50,  157 => 18,  145 => 15,  139 => 63,  131 => 63,  123 => 53,  120 => 53,  115 => 55,  111 => 65,  108 => 51,  101 => 49,  98 => 41,  96 => 48,  83 => 52,  74 => 28,  66 => 43,  55 => 35,  52 => 14,  50 => 27,  43 => 12,  41 => 12,  35 => 10,  32 => 6,  29 => 2,  209 => 82,  203 => 94,  199 => 67,  193 => 90,  189 => 71,  187 => 75,  182 => 85,  176 => 16,  173 => 82,  168 => 14,  164 => 64,  162 => 89,  154 => 87,  149 => 16,  147 => 86,  144 => 62,  141 => 14,  133 => 60,  130 => 57,  125 => 17,  122 => 55,  116 => 52,  112 => 51,  109 => 16,  106 => 9,  103 => 8,  99 => 44,  95 => 54,  92 => 43,  86 => 40,  82 => 33,  80 => 32,  73 => 36,  64 => 41,  60 => 36,  57 => 43,  54 => 11,  51 => 16,  48 => 13,  45 => 7,  42 => 22,  39 => 11,  36 => 10,  33 => 3,  30 => 2,);
    }
}
