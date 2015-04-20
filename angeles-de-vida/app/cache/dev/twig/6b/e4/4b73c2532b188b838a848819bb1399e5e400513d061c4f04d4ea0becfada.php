<?php

/* AngelesVidaBundle:Default:actividades_padres.html.twig */
class __TwigTemplate_6be44b73c2532b188b838a848819bb1399e5e400513d061c4f04d4ea0becfada extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0\" />
        <title>Asociación Angeles de Vida</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/favicon.ico"), "html", null, true);
        echo "\"/> 
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/style_rosado.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
        
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
</head>
        
    </head>
    <body>
        <div id=\"wrapper\">

            <!-- top-nav -->
            ";
        // line 25
        $this->displayBlock('top_nav', $context, $blocks);
        // line 41
        echo "                 
            <!-- end of top-nav -->
            <!-- header -->
            ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 90
        echo "                                                
            <!-- end of header -->
            <!-- main -->
            ";
        // line 93
        $this->displayBlock('main', $context, $blocks);
        // line 130
        echo "            <!-- end of main -->
        </div>\t
        <!-- footer-push -->
        ";
        // line 133
        $this->displayBlock('footer_push', $context, $blocks);
        // line 136
        echo "        <!-- end of footer-push -->

        <!-- end of wrapper -->
        <!-- footer -->
        ";
        // line 140
        $this->displayBlock('footer', $context, $blocks);
        // line 208
        echo "        <!-- end of footer -->
        
        
    </body>
</html>";
    }

    // line 25
    public function block_top_nav($context, array $blocks = array())
    {
        // line 26
        echo "                <nav class=\"top-nav\" >
                    <div class=\"shell\" >
                        <!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
                        <span class=\"top-nav-shadow\"></span>-->
                        <ul class=\"clearfix\">
                            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("pActividades");
        echo "\">Actividades</a></li>
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("pTemasDeInteres");
        echo "\">Temas de Interes</a></li>
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\">Galeria</a></li>
                            <li class=\"active\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\">Quienes somos</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Iniciar sesión</a></li>

                        </ul>
                    </div>
                </nav>
            ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "                <header id=\"header\">

                    <div class=\"header-center\">
                        <div class=\"header-top\"></div>
                        <!-- shell -->
                        <div class=\"shell\">
                            <div class=\"header-inner\">
                                <!-- header-cnt -->
                                <div class=\"header-cnt\">
                                    <h1 id=\"logo\"><a href=\"#\">Simple</a></h1>\t\t
                                    <p>

                                    <h10 style='font-size: 22px ; color: #ffffff ; font-family: arial,sans-serif ' >Asociación Pro Neonatos Dr.R.A Calderón Guardia</h10>
                                    </p>

                                    <br></br>
                                </div>
                                <!-- end of header-cnt -->
                                <!-- slider -->
                                <div class=\"slider-holder\">
                                    <div class=\"flexslider\">
                                        <ul class=\"slides\">
                                            <li><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/images/actividad1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

                                            <li><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/images/actividad2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

                                            <li><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/images/actividad3.jpg"), "html", null, true);
        echo "\" /></li>

                                            <li><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/images/actividad4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

                                            <li><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/images/actividad5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

                                            <li><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/images/actividad6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end of slider -->
                                <div class=\"cl\">&nbsp;</div>
                            </div>
                            <div class=\"cl\">&nbsp;</div>
                        </div>
                        <!-- end of shell -->\t
                        <div class=\"header-bottom\"></div>
                    </div>
                </header>
            ";
    }

    // line 93
    public function block_main($context, array $blocks = array())
    {
        // line 94
        echo "                <div class=\"main\">
                    <span class=\"shadow-top\"></span>
                    <!-- shell -->
                    <div class=\"shell\">
                        <div class=\"container\">
                           
                                <section class=\"cols\">
                                   
                                    ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 103
            echo "                                        <div class=\"col\">

                                            <h3>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "nombre"), "html", null, true);
            echo "</h3>

                                            <div class=\"col-cnt\">
                                                <p>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "descripcion"), "html", null, true);
            echo "</p>
                                                <li><i class=\"glyphicon glyphicon-calendar\" style=\"color: #33ccff; font-size: 14px\"></i> Fecha : ";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "fecha"), "d-m-Y"), "html", null, true);
            echo "</li>
                                                <li><i class=\"glyphicon glyphicon-map-marker\" style=\"color: #ff3333; font-size: 14px\"></i> Lugar: ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "lugar"), "html", null, true);
            echo "</li>
                                                <li><i class=\"glyphicon glyphicon-time\" style=\"color: #000000; font-size: 14px\"></i> Inicio: ";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "horaInicio"), "H:i a"), "html", null, true);
            echo "</li>
                                                <li><i class=\"glyphicon glyphicon-time\" style=\"color: #000000; font-size: 14px\"></i> Fin: ";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actividad"]) ? $context["actividad"] : $this->getContext($context, "actividad")), "horaFin"), "H:i a"), "html", null, true);
            echo "</li>
                                            </div>


                                        </div>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo " 
                                            <div class=\"cl\">&nbsp;</div>
                                </section>
                                <!-- end of cols -->
                                
                        </div>
                        <!-- end of shell -->
                    </div>
                                    
                    <!-- end of container -->
                </div>
            ";
    }

    // line 133
    public function block_footer_push($context, array $blocks = array())
    {
        // line 134
        echo "            <div id=\"footer-push\"></div>
        ";
    }

    // line 140
    public function block_footer($context, array $blocks = array())
    {
        // line 141
        echo "            <div  id=\"footer\">
                <span class=\"shadow-bottom\"></span>
                <!-- footer-cols -->
                <div class=\"footer-cols\">
                    <!-- shell -->
                    <div class=\"shell\">
                        <div class=\"col\">
                            <h3><a href=\"#\">Solutions</a></h3>
                            <div class=\"col-cnt\">
                                <ul>
                                    <li><a href=\"#\">Lorem lipsum dolor </a></li>
                                    <li><a href=\"#\">Ame tleo libero dolor</a></li>
                                    <li><a href=\"#\">Aidpispicing lipsum </a></li>
                                    <li><a href=\"#\">Commodo id amet </a></li>
                                    <li><a href=\"#\">Sectetur amet au car </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col\">
                            <h3><a href=\"#\">Services</a></h3>
                            <div class=\"col-cnt\">
                                <ul>
                                    <li><a href=\"#\">Lorem lipsum dolor </a></li>
                                    <li><a href=\"#\">Ame tleo libero dolor</a></li>
                                    <li><a href=\"#\">Aidpispicing lipsum </a></li>
                                    <li><a href=\"#\">Commodo id amet </a></li>
                                    <li><a href=\"#\">Sectetur amet au car </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col\">
                            <h3><a href=\"#\">Portfolio</a></h3>
                            <div class=\"col-cnt\">
                                <ul>
                                    <li><a href=\"#\">Lorem lipsum dolor </a></li>
                                    <li><a href=\"#\">Ame tleo libero dolor</a></li>
                                    <li><a href=\"#\">Aidpispicing lipsum </a></li>
                                    <li><a href=\"#\">Commodo id amet </a></li>
                                    <li><a href=\"#\">Sectetur amet au car </a></li>
                                </ul>
                            </div>
                        </div>
                       <div class=\"col\">
\t\t\t\t\t<h3><a href=\"#\">Siguenos</a></h3>
\t\t\t\t\t<div class=\"col-cnt\">
                                           <a href=\"https://www.facebook.com/angelitosdevida\" target=\"_blank\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/facebook-icon.png"), "html", null, true);
        echo "\"></a>
                                             </div>
\t\t\t\t</div>
                        <div class=\"cl\">&nbsp;</div>
                    </div>
                    <!-- end of shell -->
                </div>
                <!-- end of footer-cols -->
                <div class=\"footer-bottom\">
                    <div class=\"shell\">
                        <nav class=\"footer-nav\">
                            <ul>
                                <li><a href=\"#\">Home</a></li>
                               
                            </ul>
                            <div class=\"cl\">&nbsp;</div>
                        </nav>
                        <p class=\"copy\">&copy; Copyright 2012<span>|</span>Sitename. Design by <a href=\"http://chocotemplates.com\" target=\"_blank\">ChocoTemplates.com</a></p>
                    </div>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "AngelesVidaBundle:Default:actividades_padres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 186,  301 => 141,  293 => 134,  290 => 133,  275 => 118,  262 => 112,  250 => 109,  236 => 103,  232 => 102,  222 => 94,  191 => 73,  186 => 71,  181 => 69,  152 => 45,  127 => 33,  84 => 93,  77 => 44,  70 => 25,  394 => 259,  378 => 246,  330 => 200,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 92,  188 => 74,  178 => 70,  146 => 45,  124 => 34,  100 => 269,  90 => 192,  76 => 45,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 193,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 140,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 111,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 65,  169 => 60,  140 => 55,  132 => 36,  128 => 35,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 110,  243 => 88,  240 => 105,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 35,  119 => 31,  102 => 32,  71 => 42,  67 => 15,  63 => 15,  59 => 17,  38 => 6,  94 => 28,  89 => 20,  85 => 189,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 136,  88 => 6,  78 => 89,  46 => 13,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 77,  196 => 75,  183 => 72,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 37,  121 => 46,  117 => 44,  105 => 40,  91 => 133,  62 => 23,  49 => 19,  24 => 2,  25 => 3,  19 => 1,  79 => 90,  72 => 41,  69 => 26,  47 => 15,  40 => 10,  37 => 10,  22 => 2,  246 => 108,  157 => 56,  145 => 46,  139 => 36,  131 => 34,  123 => 32,  120 => 33,  115 => 43,  111 => 37,  108 => 36,  101 => 208,  98 => 199,  96 => 31,  83 => 92,  74 => 14,  66 => 15,  55 => 16,  52 => 21,  50 => 14,  43 => 14,  41 => 7,  35 => 5,  32 => 8,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 71,  187 => 84,  182 => 66,  176 => 67,  173 => 68,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 44,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 32,  112 => 26,  109 => 25,  106 => 26,  103 => 32,  99 => 140,  95 => 28,  92 => 195,  86 => 130,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 17,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 7,);
    }
}
