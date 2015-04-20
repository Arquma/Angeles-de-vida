<?php

/* AngelesVidaBundle:Default:protocolo.html.twig */
class __TwigTemplate_2c9fb9bb399c153b03639fffa798739fd23c5416c3be729cdc020ba136c6ef45 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style_amarillo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />

        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--[if lt IE 9]>
                <script src=\"js/modernizr.custom.js\"></script>
        <![endif]-->
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <link id=\"bs-css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
        <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.noty.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/noty_theme_default.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.theme.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/uploadify.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/animate.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
         <!-- jQuery -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div id=\"wrapper\">

            <!-- top-nav -->
            ";
        // line 46
        $this->displayBlock('top_nav', $context, $blocks);
        // line 62
        echo "                   
            <!-- end of top-nav -->
            <!-- header -->
            ";
        // line 65
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "                                                
            <!-- end of header -->
            <!-- main -->
            ";
        // line 105
        $this->displayBlock('main', $context, $blocks);
        // line 147
        echo "            <!-- end of main -->
        </div>\t
        <!-- footer-push -->
        ";
        // line 150
        $this->displayBlock('footer_push', $context, $blocks);
        // line 153
        echo "        <!-- end of footer-push -->

        <!-- end of wrapper -->
        <!-- footer -->
        ";
        // line 157
        $this->displayBlock('footer', $context, $blocks);
        // line 225
        echo "        <!-- end of footer -->
         <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- library for cookie management -->
            <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
            <!-- calender plugin -->
            <script src='";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
            <!-- data table plugin -->
            <script src='";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

            <!-- select or dropdown enhancer -->
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- plugin for gallery image view -->
            <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
            <!-- notification plugin -->
            <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
            <!-- library for making tables responsive -->
            <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
            <!-- tour plugin -->
            <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
            <!-- star rating plugin -->
            <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
            <!-- for iOS style toggle switch -->
            <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
            <!-- autogrowing textarea plugin -->
            <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
            <!-- multiple file upload plugin -->
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
            <!-- application script for Charisma demo -->
            <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/charisma.js"), "html", null, true);
        echo "\"></script>  
    </body>
</html>";
    }

    // line 46
    public function block_top_nav($context, array $blocks = array())
    {
        // line 47
        echo "                <nav class=\"top-nav\" >
                    <div class=\"shell\" >
                        <!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
                        <span class=\"top-nav-shadow\"></span>-->
                        <ul class=\"clearfix\">
                            <li ><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
                            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("pActividades");
        echo "\">Actividades</a></li>
                            <li class=\"active\"><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getUrl("pTemasDeInteres");
        echo "\">Temas de Interes</a></li>
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\">Galeria</a></li>
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\">Quienes somos</a></li>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Iniciar sesión</a></li>

                        </ul>
                    </div>
                </nav>
            ";
    }

    // line 65
    public function block_header($context, array $blocks = array())
    {
        // line 66
        echo "                <header id=\"header\">

                    
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
                                    <li class=\"nav-header\">Temas de interes</li>
                                    <li><a class=\"ajax-link\" href=\"#\"><i class=\"glyphicon glyphicon-plus\"></i><span>Enfermedades</span></a>
                                    </li>
                                    <li><a class=\"ajax-link\" href=\"#\"><i class=\"glyphicon glyphicon-trash icon-white\"></i><span>Protocolos</span></a>
                                    </li>
                                    <li><a class=\"ajax-link\" href=\"#\"><i class=\"glyphicon glyphicon-trash icon-white\"></i><span>Articulos</span></a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </header>
            ";
    }

    // line 105
    public function block_main($context, array $blocks = array())
    {
        // line 106
        echo "                <div class=\"main\">
                    <span class=\"shadow-top\"></span>
                    <!-- shell -->
                    <div class=\"shell\">
                        <div class=\"container\">
                            <!-- testimonial -->
                            <section class=\"testimonial\">
                                <h2>Protocolos</h2>
                                <p><strong></strong><span class=\"mobile\"></span></p>
                            </section>
                            <!-- testimonial -->

                            <section class=\"blog\">
                                <section class=\"cols\">
                                   
                                    ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["protocolos"]) ? $context["protocolos"] : $this->getContext($context, "protocolos")));
        foreach ($context['_seq'] as $context["_key"] => $context["protocolo"]) {
            // line 122
            echo "                                        <div class=\"col\">

                                            <h3>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["protocolo"]) ? $context["protocolo"] : $this->getContext($context, "protocolo")), "nombre"), "html", null, true);
            echo "</h3>

                                            <div class=\"col-cnt\">
                                                <p>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["protocolo"]) ? $context["protocolo"] : $this->getContext($context, "protocolo")), "descripcion"), "html", null, true);
            echo "</p>
                                                
                                            </div>


                                        </div>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['protocolo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo " 
                                            <div class=\"cl\">&nbsp;</div>
                                </section>
                                <!-- end of cols -->
                            </section>\t

                            
                        </div>
                        <!-- end of shell -->
                    </div>
                    <!-- end of container -->
                </div>
            ";
    }

    // line 150
    public function block_footer_push($context, array $blocks = array())
    {
        // line 151
        echo "            <div id=\"footer-push\"></div>
        ";
    }

    // line 157
    public function block_footer($context, array $blocks = array())
    {
        // line 158
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
                            <h3><a href=\"#\">Siguenos</a></h3>
                            <div class=\"col-cnt\">
                                <a href=\"https://www.facebook.com/angelitosdevida\" target=\"_blank\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/facebook-icon.png"), "html", null, true);
        echo "\"></a>
                            </div>
                        </div>
                        <div class=\"cl\">&nbsp;</div>
                    </div>
                    <!-- end of shell -->
                </div>
                <!-- end of footer-cols -->
                <div class=\"footer-bottom\">
                    <div class=\"shell\">
                        <nav class=\"footer-nav\">
                            <ul>
                                <li><a href=\"";
        // line 215
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>

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
        return "AngelesVidaBundle:Default:protocolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 105,  302 => 66,  289 => 57,  277 => 54,  259 => 46,  237 => 251,  212 => 241,  207 => 239,  202 => 237,  165 => 153,  284 => 148,  281 => 55,  276 => 141,  184 => 70,  174 => 67,  167 => 65,  148 => 50,  126 => 35,  118 => 33,  65 => 21,  53 => 15,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 106,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 65,  279 => 110,  248 => 96,  245 => 95,  242 => 253,  198 => 55,  194 => 73,  190 => 53,  160 => 155,  134 => 37,  104 => 32,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 47,  250 => 109,  236 => 103,  232 => 249,  222 => 245,  191 => 232,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 27,  77 => 44,  70 => 25,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 68,  188 => 74,  178 => 50,  146 => 45,  124 => 37,  100 => 31,  90 => 192,  76 => 25,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 99,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 56,  283 => 88,  278 => 86,  268 => 101,  264 => 84,  258 => 98,  252 => 257,  247 => 255,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 68,  169 => 60,  140 => 55,  132 => 36,  128 => 38,  107 => 36,  61 => 20,  273 => 53,  269 => 52,  254 => 110,  243 => 88,  240 => 105,  238 => 93,  235 => 74,  230 => 82,  227 => 247,  224 => 71,  221 => 77,  219 => 89,  217 => 243,  208 => 85,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 35,  119 => 31,  102 => 223,  71 => 23,  67 => 22,  63 => 21,  59 => 17,  38 => 6,  94 => 143,  89 => 20,  85 => 50,  75 => 17,  68 => 23,  56 => 9,  87 => 137,  21 => 2,  26 => 6,  93 => 136,  88 => 28,  78 => 43,  46 => 13,  27 => 7,  44 => 12,  31 => 8,  28 => 3,  201 => 77,  196 => 234,  183 => 72,  171 => 157,  166 => 71,  163 => 150,  158 => 147,  156 => 105,  151 => 102,  142 => 46,  138 => 38,  136 => 60,  121 => 46,  117 => 44,  105 => 40,  91 => 133,  62 => 23,  49 => 19,  24 => 2,  25 => 3,  19 => 1,  79 => 90,  72 => 24,  69 => 26,  47 => 12,  40 => 10,  37 => 10,  22 => 2,  246 => 108,  157 => 56,  145 => 67,  139 => 36,  131 => 34,  123 => 32,  120 => 36,  115 => 43,  111 => 28,  108 => 33,  101 => 208,  98 => 199,  96 => 30,  83 => 92,  74 => 42,  66 => 15,  55 => 16,  52 => 21,  50 => 14,  43 => 11,  41 => 7,  35 => 9,  32 => 8,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 71,  187 => 231,  182 => 229,  176 => 226,  173 => 225,  168 => 44,  164 => 59,  162 => 231,  154 => 151,  149 => 65,  147 => 145,  144 => 62,  141 => 48,  133 => 40,  130 => 36,  125 => 38,  122 => 34,  116 => 35,  112 => 34,  109 => 25,  106 => 26,  103 => 32,  99 => 140,  95 => 50,  92 => 29,  86 => 130,  82 => 45,  80 => 26,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 18,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
