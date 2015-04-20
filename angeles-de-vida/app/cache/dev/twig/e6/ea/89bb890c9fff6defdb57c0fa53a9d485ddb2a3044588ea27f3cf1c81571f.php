<?php

/* AngelesVidaBundle:Default:galeria.html.twig */
class __TwigTemplate_e6ea89bb890c9fff6defdb57c0fa53a9d485ddb2a3044588ea27f3cf1c81571f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top_nav' => array($this, 'block_top_nav'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        
\t<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
\t
\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       
\t<!--[if lt IE 9]>
\t\t<script src=\"js/modernizr.custom.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
        <link id=\"bs-css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
    <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.noty.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/noty_theme_default.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.theme.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/uploadify.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/animate.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <!-- jQuery -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
\t<div id=\"wrapper\">
\t\t
\t\t<!-- top-nav -->
                ";
        // line 44
        $this->displayBlock('top_nav', $context, $blocks);
        // line 60
        echo "                
\t\t<!-- end of top-nav -->
\t\t\t<!-- header -->
                        
\t\t\t                                                
\t\t\t<!-- end of header -->
\t\t\t<!-- main -->
                        ";
        // line 67
        $this->displayBlock('main', $context, $blocks);
        // line 145
        echo "\t\t\t<!-- end of main -->
\t\t</div>\t
\t\t<!-- footer-push -->
                ";
        // line 148
        $this->displayBlock('footer_push', $context, $blocks);
        // line 151
        echo "\t\t<!-- end of footer-push -->
\t
\t<!-- end of wrapper -->
\t<!-- footer -->
        ";
        // line 155
        $this->displayBlock('footer', $context, $blocks);
        // line 231
        echo "\t<!-- end of footer -->
</body>
</html>";
    }

    // line 44
    public function block_top_nav($context, array $blocks = array())
    {
        // line 45
        echo "\t\t<nav class=\"top-nav\" >
                    <div class=\"shell\" >
\t\t\t\t<!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
\t\t\t\t<span class=\"top-nav-shadow\"></span>-->
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getUrl("pActividades");
        echo "\">Actividades</a></li>
                                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("pTemasDeInteres");
        echo "\">Temas de Interes</a></li>
                                        <li class=\"active\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\">Galeria</a></li>
                                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\">Quienes somos</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Iniciar sesión</a></li>
                                       
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
                ";
    }

    // line 67
    public function block_main($context, array $blocks = array())
    {
        // line 68
        echo "\t\t\t<div class=\"main\">
\t\t\t<div class=\"row\">
        <div class=\"box col-md-12\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                    <h2><i class=\"glyphicon glyphicon-picture\"></i> Galería</h2>

                    <div class=\"box-icon\">
                        <a href=\"#\" class=\"btn btn-setting btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" class=\"btn btn-minimize btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-chevron-up\"></i></a>
                        <a href=\"#\" class=\"btn btn-close btn-round btn-default\"><i
                                class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </div>
                <div class=\"box-content\">
                    <br>
                    <ul class=\"thumbnails gallery\">
                                                    <li id=\"image-1\" class=\"thumbnail\">
                                <a style=\"background:url(https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/1.jpg)\"
                                   title=\"Sample Image 1\" href=\"https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/1.jpg\"><img
                                        class=\"grayscale\" src=\"https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/1.jpg\"
                                        alt=\"Sample Image 1\"></a>
                            </li>
                             ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) ? $context["imagenes"] : $this->getContext($context, "imagenes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 94
            echo "                                ";
            $context["foo"] = ("uploads/galeria/" . $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "imagen"));
            // line 95
            echo "                                 <li id=\"image-1\" class=\"thumbnail\">
                                <a style=\"background:url(";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo ")\"
                                   title=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "descripcion"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\"><img
                                        class=\"grayscale\" src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\"
                                        alt=\"Sample Image 1\"></a>
                            </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo " 
                                            </ul>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

\t\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<!-- calender plugin -->
<script src='";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
<!-- data table plugin -->
<script src='";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

<!-- select or dropdown enhancer -->
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- plugin for gallery image view -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<!-- notification plugin -->
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
<!-- library for making tables responsive -->
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
<!-- tour plugin -->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
<!-- star rating plugin -->
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<!-- for iOS style toggle switch -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
<!-- autogrowing textarea plugin -->
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
<!-- multiple file upload plugin -->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
<!-- application script for Charisma demo -->
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/charisma.js"), "html", null, true);
        echo "\"></script>\t\t
    
\t\t\t</div>
                        ";
    }

    // line 148
    public function block_footer_push($context, array $blocks = array())
    {
        // line 149
        echo "\t\t<div id=\"footer-push\"></div>
                ";
    }

    // line 155
    public function block_footer($context, array $blocks = array())
    {
        // line 156
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
\t\t\t\t\t<h3><a href=\"#\">Contact Us</a></h3>
\t\t\t\t\t<div class=\"col-cnt\">
\t\t\t\t\t\t<p><strong>Email:</strong> <a href=\"#\">info@yourwebsitename.com</a></p>
\t\t\t\t\t\t<p><strong>Phone:</strong> 655-606-111</p>
\t\t\t\t\t\t<p><strong>Adress:</strong> East Pixel Bld. 99, Creative City 9000,Republic of Design Email:</p>\t
\t\t\t\t\t</div>
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
\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Projects</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Solutions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Jobs</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Blog</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contacts</a></li>
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
        return "AngelesVidaBundle:Default:galeria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 155,  366 => 149,  363 => 148,  350 => 139,  345 => 137,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 118,  279 => 110,  248 => 96,  245 => 95,  242 => 94,  198 => 55,  194 => 54,  190 => 53,  160 => 155,  134 => 44,  104 => 32,  23 => 1,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 112,  250 => 109,  236 => 103,  232 => 102,  222 => 94,  191 => 73,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 27,  77 => 44,  70 => 25,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 68,  188 => 74,  178 => 50,  146 => 45,  124 => 34,  100 => 31,  90 => 192,  76 => 25,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 99,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 113,  283 => 88,  278 => 86,  268 => 101,  264 => 84,  258 => 98,  252 => 97,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 65,  169 => 60,  140 => 55,  132 => 36,  128 => 35,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 110,  243 => 88,  240 => 105,  238 => 93,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 93,  217 => 75,  208 => 67,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 35,  119 => 31,  102 => 32,  71 => 42,  67 => 15,  63 => 21,  59 => 17,  38 => 6,  94 => 28,  89 => 20,  85 => 189,  75 => 17,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 136,  88 => 28,  78 => 89,  46 => 13,  27 => 4,  44 => 12,  31 => 7,  28 => 3,  201 => 77,  196 => 75,  183 => 72,  171 => 45,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 60,  121 => 46,  117 => 44,  105 => 40,  91 => 133,  62 => 23,  49 => 19,  24 => 2,  25 => 3,  19 => 1,  79 => 90,  72 => 24,  69 => 26,  47 => 15,  40 => 10,  37 => 10,  22 => 2,  246 => 108,  157 => 56,  145 => 67,  139 => 36,  131 => 34,  123 => 32,  120 => 36,  115 => 43,  111 => 37,  108 => 33,  101 => 208,  98 => 199,  96 => 30,  83 => 92,  74 => 14,  66 => 15,  55 => 16,  52 => 21,  50 => 14,  43 => 14,  41 => 7,  35 => 8,  32 => 8,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 71,  187 => 84,  182 => 51,  176 => 67,  173 => 68,  168 => 44,  164 => 59,  162 => 231,  154 => 151,  149 => 44,  147 => 145,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 43,  116 => 35,  112 => 34,  109 => 25,  106 => 26,  103 => 32,  99 => 140,  95 => 28,  92 => 29,  86 => 130,  82 => 22,  80 => 26,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 18,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 7,);
    }
}
