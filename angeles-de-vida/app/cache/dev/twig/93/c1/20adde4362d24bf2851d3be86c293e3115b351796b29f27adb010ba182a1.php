<?php

/* AngelesVidaBundle:Default:quienes_somos_padres.html.twig */
class __TwigTemplate_93c120adde4362d24bf2851d3be86c293e3115b351796b29f27adb010ba182a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top_nav' => array($this, 'block_top_nav'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer_push' => array($this, 'block_footer_push'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0\" />
\t<title>Asociación Angeles de Vida</title>
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/favicon.ico"), "html", null, true);
        echo "\"/> 
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style_verde.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
\t
\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       
\t<!--[if lt IE 9]>
\t\t<script src=\"js/modernizr.custom.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
</head>
<body>
\t<div id=\"wrapper\">
\t\t
\t\t ";
        // line 23
        $this->displayBlock('top_nav', $context, $blocks);
        // line 39
        echo "               
\t\t<!-- end of top-nav -->
\t\t\t<!-- header -->
                        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 86
        echo "                                                
\t\t\t<!-- end of header -->
\t\t\t<!-- main -->
                        ";
        // line 89
        $this->displayBlock('main', $context, $blocks);
        // line 132
        echo "\t\t\t<!-- end of main -->
\t\t</div>\t
\t\t<!-- footer-push -->
                ";
        // line 135
        $this->displayBlock('footer_push', $context, $blocks);
        // line 138
        echo "\t\t<!-- end of footer-push -->
\t
\t<!-- end of wrapper -->
\t<!-- footer -->
        ";
        // line 142
        $this->displayBlock('footer', $context, $blocks);
        // line 210
        echo "\t<!-- end of footer -->
</body>
</html>";
    }

    // line 23
    public function block_top_nav($context, array $blocks = array())
    {
        // line 24
        echo "\t\t<nav class=\"top-nav\" \">
                    <div class=\"shell\" >
\t\t\t\t<!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
\t\t\t\t<span class=\"top-nav-shadow\"></span>-->
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("pActividades");
        echo "\">Actividades</a></li>
                                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("pTemasDeInteres");
        echo "\">Temas de Interes</a></li>
                                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\">Galeria</a></li>
                                        <li class=\"active\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\">Quienes somos</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Iniciar sesión</a></li>
                                       
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
                ";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "\t\t\t<header id=\"header\">
\t\t\t\t
\t\t\t\t<div class=\"header-center\">
\t\t\t\t\t<div class=\"header-top\"></div>
\t\t\t\t\t<!-- shell -->
\t\t\t\t\t<div class=\"shell\">
\t\t\t\t\t\t<div class=\"header-inner\">
\t\t\t\t\t\t\t<!-- header-cnt -->
\t\t\t\t\t\t\t<div class=\"header-cnt\">
\t\t\t\t\t\t\t\t<h1 id=\"logo\"><a href=\"#\">Simple</a></h1>\t\t
\t\t\t\t\t\t\t\t<p>
                                                                    
                                                                    <h10 style='font-size: 22px ; color: #ffffff ; font-family: arial,sans-serif ' >Asociación Pro Neonatos Dr.R.A Calderón Guardia</h10>
\t\t\t\t\t\t\t\t</p>\t
                                                              
                                                                <br></br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end of header-cnt -->
\t\t\t\t\t\t\t<!-- slider -->
\t\t\t\t\t\t\t<div class=\"slider-holder\">
\t\t\t\t\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe3.jpg"), "html", null, true);
        echo "\" /></li>

\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end of slider -->
\t\t\t\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end of shell -->\t
\t\t\t\t\t<div class=\"header-bottom\"></div>
\t\t\t\t</div>
\t\t\t</header>
                        ";
    }

    // line 89
    public function block_main($context, array $blocks = array())
    {
        // line 90
        echo "\t\t\t<div class=\"main\">
\t\t\t\t<span class=\"shadow-top\"></span>
\t\t\t\t<!-- shell -->
\t\t\t\t<div class=\"shell\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<!-- testimonial -->
\t\t\t\t\t\t<section class=\"testimonial\">
\t\t\t\t\t\t\t<h2>Asociación Pro Neonatos Dr.R.A Calderón Guardia</h2>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<!-- testimonial -->

\t\t\t\t\t\t<section class=\"blog\">
\t\t\t\t\t\t\t<!-- content -->
\t\t\t\t\t\t\t<div class=\"col-cnt\">
\t\t\t\t\t\t\t\t
                                                               
\t\t\t\t\t\t\t\t\t<h3>Objetivos</h3>
\t\t\t\t\t\t\t\t\t<ul>
                                                                            <li style=\"color: #239CC5 ; font-size: 17px ; alignment-adjust: central\">Recaudar fondos para proveer al servicio de neonatología del HCG de equipo médico de ultima tecnología </li><br>
                                                                            <li style=\"color: #239CC5 ; font-size: 17px\">Apoyar todos los esfuerzos de la institución para que la infraestructura del servicio de neonatología cuente con elementos idóneos para funcionar</li><br>
                                                                            <li style=\"color: #239CC5 ; font-size: 17px\">Procurar asistencia económica a los padres de niños ingresados en servicios tales como desplazamiento, hospedaje, alimentación</li><br>
                                                                            <li style=\"color: #239CC5 ; font-size: 17px\">Colaborar para promocionar apoyo y soporte psicológico a las familias con niños internados en cuidados intensivos</li><br>
                                                                            <li style=\"color: #239CC5 ; font-size: 17px ; alignment-adjust: \">Impulsar la participación y el apoyo, en el proceso de atención a los niños egresados del servicio, de otros profesionales especializados como: psicólogos, fisioterapeutas, terapistas ocupacionales, de lenguaje, pedagogos</li><br>
                                                                            <li style=\"color: #239CC5 ; font-size: 17px\">Coordinar con instituciones nacionales e internacionales con el fin de proveer atención a los niños ingresados</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end of content -->

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t\t\t</section>\t
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- cols -->
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- end of cols -->
\t\t\t\t\t</div>
\t\t\t\t<!-- end of shell -->
\t\t\t\t</div>
\t\t\t\t<!-- end of container -->
\t\t\t</div>
                        ";
    }

    // line 135
    public function block_footer_push($context, array $blocks = array())
    {
        // line 136
        echo "\t\t<div id=\"footer-push\"></div>
                ";
    }

    // line 142
    public function block_footer($context, array $blocks = array())
    {
        // line 143
        echo "\t<div  id=\"footer\">
\t\t<span class=\"shadow-bottom\"></span>
\t\t<!-- footer-cols -->
\t\t<div class=\"footer-cols\">
\t\t\t<!-- shell -->
\t\t\t<div class=\"shell\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h3><a href=\"#\">Solutions</a></h3>
\t\t\t\t\t<div class=\"col-cnt\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Lorem lipsum dolor </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Ame tleo libero dolor</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Aidpispicing lipsum </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Commodo id amet </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Sectetur amet au car </a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h3><a href=\"#\">Services</a></h3>
\t\t\t\t\t<div class=\"col-cnt\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Lorem lipsum dolor </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Ame tleo libero dolor</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Aidpispicing lipsum </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Commodo id amet </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Sectetur amet au car </a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h3><a href=\"#\">Portfolio</a></h3>
\t\t\t\t\t<div class=\"col-cnt\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Lorem lipsum dolor </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Ame tleo libero dolor</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Aidpispicing lipsum </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Commodo id amet </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Sectetur amet au car </a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h3><a href=\"#\">Siguenos</a></h3>
\t\t\t\t\t<div class=\"col-cnt\">
                                           <a href=\"https://www.facebook.com/angelitosdevida\" target=\"_blank\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/facebook-icon.png"), "html", null, true);
        echo "\"></a>
                                             </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t</div>
\t\t\t<!-- end of shell -->
\t\t</div>
\t\t<!-- end of footer-cols -->
\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"shell\">
\t\t\t\t<nav class=\"footer-nav\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t</nav>
\t\t\t\t<p class=\"copy\">&copy; Copyright 2012<span>|</span>Sitename. Design by <a href=\"http://chocotemplates.com\" target=\"_blank\">ChocoTemplates.com</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
        ";
    }

    public function getTemplateName()
    {
        return "AngelesVidaBundle:Default:quienes_somos_padres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 200,  267 => 143,  256 => 135,  185 => 71,  180 => 69,  175 => 67,  170 => 65,  129 => 33,  113 => 29,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 105,  302 => 66,  289 => 57,  277 => 54,  259 => 136,  237 => 251,  212 => 241,  207 => 239,  202 => 237,  165 => 153,  284 => 148,  281 => 55,  276 => 141,  184 => 70,  174 => 67,  167 => 65,  148 => 50,  126 => 35,  118 => 33,  65 => 21,  53 => 15,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 106,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 65,  279 => 110,  248 => 96,  245 => 95,  242 => 253,  198 => 55,  194 => 73,  190 => 73,  160 => 155,  134 => 37,  104 => 32,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 47,  250 => 109,  236 => 103,  232 => 249,  222 => 245,  191 => 232,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 27,  77 => 44,  70 => 25,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 90,  188 => 74,  178 => 50,  146 => 43,  124 => 37,  100 => 31,  90 => 192,  76 => 25,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 56,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 257,  247 => 255,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 68,  169 => 60,  140 => 55,  132 => 36,  128 => 38,  107 => 36,  61 => 20,  273 => 53,  269 => 52,  254 => 110,  243 => 88,  240 => 105,  238 => 93,  235 => 74,  230 => 82,  227 => 247,  224 => 71,  221 => 77,  219 => 89,  217 => 243,  208 => 89,  204 => 72,  179 => 69,  159 => 61,  143 => 42,  135 => 35,  119 => 31,  102 => 223,  71 => 23,  67 => 22,  63 => 21,  59 => 17,  38 => 6,  94 => 143,  89 => 138,  85 => 50,  75 => 86,  68 => 39,  56 => 9,  87 => 135,  21 => 2,  26 => 6,  93 => 136,  88 => 28,  78 => 43,  46 => 12,  27 => 7,  44 => 12,  31 => 8,  28 => 3,  201 => 77,  196 => 234,  183 => 72,  171 => 157,  166 => 71,  163 => 150,  158 => 147,  156 => 105,  151 => 102,  142 => 46,  138 => 38,  136 => 60,  121 => 31,  117 => 30,  105 => 40,  91 => 133,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 90,  72 => 24,  69 => 26,  47 => 12,  40 => 9,  37 => 10,  22 => 2,  246 => 108,  157 => 56,  145 => 67,  139 => 36,  131 => 34,  123 => 32,  120 => 36,  115 => 43,  111 => 28,  108 => 33,  101 => 208,  98 => 199,  96 => 30,  83 => 92,  74 => 42,  66 => 23,  55 => 16,  52 => 21,  50 => 14,  43 => 11,  41 => 7,  35 => 9,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 71,  187 => 231,  182 => 229,  176 => 226,  173 => 225,  168 => 44,  164 => 59,  162 => 231,  154 => 151,  149 => 65,  147 => 145,  144 => 62,  141 => 48,  133 => 34,  130 => 36,  125 => 32,  122 => 34,  116 => 35,  112 => 34,  109 => 25,  106 => 24,  103 => 23,  99 => 140,  95 => 142,  92 => 29,  86 => 130,  82 => 132,  80 => 89,  73 => 42,  64 => 17,  60 => 6,  57 => 11,  54 => 17,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 10,  36 => 8,  33 => 4,  30 => 7,);
    }
}
