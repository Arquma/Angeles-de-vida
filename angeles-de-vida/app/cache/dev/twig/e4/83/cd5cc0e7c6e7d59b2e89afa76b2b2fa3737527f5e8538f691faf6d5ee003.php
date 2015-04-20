<?php

/* AngelesVidaBundle:Default:temas_de_interes_padres.html.twig */
class __TwigTemplate_e483cd5cc0e7c6e7d59b2e89afa76b2b2fa3737527f5e8538f691faf6d5ee003 extends Twig_Template
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
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0\" />
        <title>Asociación Angeles de Vida</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/favicon.ico"), "html", null, true);
        echo "\"/> 
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style_amarillo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />

        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!--[if lt IE 9]>
                <script src=\"js/modernizr.custom.js\"></script>
        <![endif]-->
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <link id=\"bs-css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
        <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.noty.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/noty_theme_default.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.theme.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/uploadify.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/animate.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
         <!-- jQuery -->
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div id=\"wrapper\">

            <!-- top-nav -->
            ";
        // line 45
        $this->displayBlock('top_nav', $context, $blocks);
        // line 61
        echo "                   
            <!-- end of top-nav -->
            <!-- header -->
            ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 101
        echo "                                                
            <!-- end of header -->
            <!-- main -->
            ";
        // line 104
        $this->displayBlock('main', $context, $blocks);
        // line 206
        echo "            <!-- end of main -->
        </div>\t
        <!-- footer-push -->
        ";
        // line 209
        $this->displayBlock('footer_push', $context, $blocks);
        // line 212
        echo "        <!-- end of footer-push -->

        <!-- end of wrapper -->
        <!-- footer -->
        ";
        // line 216
        $this->displayBlock('footer', $context, $blocks);
        // line 284
        echo "        <!-- end of footer -->
         <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- library for cookie management -->
            <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
            <!-- calender plugin -->
            <script src='";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
            <!-- data table plugin -->
            <script src='";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

            <!-- select or dropdown enhancer -->
            <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- plugin for gallery image view -->
            <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
            <!-- notification plugin -->
            <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
            <!-- library for making tables responsive -->
            <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
            <!-- tour plugin -->
            <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
            <!-- star rating plugin -->
            <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
            <!-- for iOS style toggle switch -->
            <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
            <!-- autogrowing textarea plugin -->
            <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
            <!-- multiple file upload plugin -->
            <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
            <!-- application script for Charisma demo -->
            <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/charisma.js"), "html", null, true);
        echo "\"></script>  
    </body>
</html>";
    }

    // line 45
    public function block_top_nav($context, array $blocks = array())
    {
        // line 46
        echo "                <nav class=\"top-nav\" >
                    <div class=\"shell\" >
                        <!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
                        <span class=\"top-nav-shadow\"></span>-->
                        <ul class=\"clearfix\">
                            <li ><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
                            <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("pActividades");
        echo "\">Actividades</a></li>
                            <li class=\"active\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("pTemasDeInteres");
        echo "\">Temas de Interes</a></li>
                            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\">Galeria</a></li>
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\">Quienes somos</a></li>
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Iniciar sesión</a></li>

                        </ul>
                    </div>
                </nav>
            ";
    }

    // line 64
    public function block_header($context, array $blocks = array())
    {
        // line 65
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
                                    <li><a class=\"ajax-link\" href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("pProtocolos");
        echo "\"><i class=\"glyphicon glyphicon-trash icon-white\"></i><span>Protocolos</span></a>
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

    // line 104
    public function block_main($context, array $blocks = array())
    {
        // line 105
        echo "                <div class=\"main\">
                    <span class=\"shadow-top\"></span>
                    <!-- shell -->
                    <div class=\"shell\">
                        <div class=\"container\">
                            <!-- testimonial -->
                            <section class=\"testimonial\">
                                <h2>Responsive CSS Template with jQuery Slider</h2>
                                <p><strong>“</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum consequat. Nam leo libero, scelerisque tincidunt commodo id, hendrerit vitae orci. <span class=\"mobile\">Suspendisse eget nibh turpis. Sed at accumsan neque. Praesent purus eros, egestas eu tempus ut, mollis et libero\"</span></p>
                            </section>
                            <!-- testimonial -->

                            <section class=\"blog\">
                                <!-- content -->
                                <div class=\"content\">
                                    <img src=\"css/images/i-img.png\" alt=\"\"  class=\"alignleft\"/>
                                    <div class=\"cnt\">
                                        <h3>We Guarantee Commitment &amp; Quality</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum consequat. Nam leo libero, scelerisque tincidunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque. Praesent purus eros, egestas eu temp</p>
                                        <ul>
                                            <li><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                                            <li><a href=\"#\">Cras molestie condimentum consequat. </a></li>
                                            <li><a href=\"#\">Nam leo libero, scelerisque tincidunt commodo id</a></li>
                                            <li><a href=\"#\">Dae molestie condimentum consequat dolor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end of content -->

                                <!-- sidebar -->
                                <aside class=\"sidebar\">
                                    <!-- widget -->
                                    <div class=\"widget\">
                                        <h3>Latest Blog Posts</h3>
                                        <ul>
                                            <li>
                                                <div class=\"img-holder\">
                                                    <a href=\"#\"><img src=\"css/images/post-img.png\" alt=\"\" /></a>
                                                </div>

                                                <p><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <em class=\"mobile\"> idunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque praesent purus </em><span>02.02.2012</span></a> </p>
                                            </li>
                                            <li>
                                                <div class=\"img-holder\">
                                                    <a href=\"#\"><img src=\"css/images/post-img2.png\" alt=\"\" /></a>
                                                </div>
                                                <p><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <em class=\"mobile\"> idunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque praesent purus </em><span>01.02.2012</span></a> </p>
                                            </li>
                                            <li>
                                                <div class=\"img-holder\">
                                                    <a href=\"#\"><img src=\"css/images/post-img3.png\" alt=\"\" /></a>
                                                </div>
                                                <p>
                                                    <a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <em class=\"mobile\"> idunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque praesent purus </em> 
                                                        <span>30.01.2012</span></a></p>
                                            </li>
                                        </ul>
                                        <div class=\"cl\">&nbsp;</div>
                                    </div>
                                    <a href=\"#\" class=\"view\">View All</a>
                                    <!-- end of widget -->
                                </aside>
                                <!-- end of sidebar -->
                                <div class=\"cl\">&nbsp;</div>
                            </section>\t

                            <!-- cols -->
                            <section class=\"cols\">
                                <div class=\"col\">
                                    <h3>Tableless Construction</h3>
                                    <img src=\"css/images/cols-img.png\" alt=\"\" class=\"alignleft\"/>
                                    <div class=\"col-cnt\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum conse am leo libero, samet dor.</p>
                                    </div>
                                    <a href=\"#\" class=\"view\">View More</a>
                                </div>
                                <div class=\"col\">
                                    <h3>We’re Hiring</h3>
                                    <img src=\"css/images/cols-img2.png\" alt=\"\" class=\"alignleft\"/>
                                    <div class=\"col-cnt\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum conse am leo libero, samet dor.</p>
                                    </div>
                                    <a href=\"#\" class=\"view\">View More</a>
                                </div>
                                <div class=\"col\">
                                    <h3>Our Partners</h3>
                                    <img src=\"css/images/cols-img3.png\" alt=\"\" class=\"alignleft\"/>
                                    <div class=\"col-cnt\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum conse am leo libero, samet dor.</p>
                                    </div>
                                    <a href=\"#\" class=\"view\">View More</a>
                                </div>
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

    // line 209
    public function block_footer_push($context, array $blocks = array())
    {
        // line 210
        echo "            <div id=\"footer-push\"></div>
        ";
    }

    // line 216
    public function block_footer($context, array $blocks = array())
    {
        // line 217
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
        // line 262
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
        // line 274
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
        return "AngelesVidaBundle:Default:temas_de_interes_padres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 274,  510 => 262,  463 => 217,  460 => 216,  455 => 210,  452 => 209,  348 => 105,  345 => 104,  329 => 90,  302 => 65,  299 => 64,  289 => 56,  285 => 55,  281 => 54,  277 => 53,  273 => 52,  269 => 51,  262 => 46,  259 => 45,  252 => 316,  247 => 314,  242 => 312,  237 => 310,  232 => 308,  227 => 306,  222 => 304,  217 => 302,  212 => 300,  207 => 298,  202 => 296,  196 => 293,  191 => 291,  187 => 290,  182 => 288,  176 => 285,  173 => 284,  171 => 216,  165 => 212,  163 => 209,  158 => 206,  156 => 104,  151 => 101,  149 => 64,  144 => 61,  142 => 45,  133 => 39,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  71 => 22,  67 => 21,  63 => 20,  58 => 18,  54 => 17,  46 => 12,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
