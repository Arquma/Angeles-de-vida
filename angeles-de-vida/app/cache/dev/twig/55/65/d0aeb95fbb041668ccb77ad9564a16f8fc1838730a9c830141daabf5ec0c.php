<?php

/* ::base2.html.twig */
class __TwigTemplate_5565d0aeb95fbb041668ccb77ad9564a16f8fc1838730a9c830141daabf5ec0c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style.css"), "html", null, true);
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
\t\t<!-- top-nav -->
                ";
        // line 26
        $this->displayBlock('top_nav', $context, $blocks);
        // line 42
        echo "                
\t\t<!-- end of top-nav -->
\t\t\t<!-- header -->
                        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "                                                
\t\t\t<!-- end of header -->
\t\t\t<!-- main -->
                        ";
        // line 92
        $this->displayBlock('main', $context, $blocks);
        // line 189
        echo "\t\t\t<!-- end of main -->
\t\t</div>\t
\t\t<!-- footer-push -->
                ";
        // line 192
        $this->displayBlock('footer_push', $context, $blocks);
        // line 195
        echo "\t\t<!-- end of footer-push -->
\t
\t<!-- end of wrapper -->
\t<!-- footer -->
        ";
        // line 199
        $this->displayBlock('footer', $context, $blocks);
        // line 269
        echo "\t<!-- end of footer -->
</body>
</html>";
    }

    // line 26
    public function block_top_nav($context, array $blocks = array())
    {
        // line 27
        echo "\t\t<nav class=\"top-nav\" \">
                    <div class=\"shell\" >
\t\t\t\t<!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
\t\t\t\t<span class=\"top-nav-shadow\"></span>-->
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("pActividades");
        echo "\">Actividades</a></li>
                                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("pTemasDeInteres");
        echo "\">Temas de Interes</a></li>
                                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\">Galeria</a></li>
                                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\">Quienes somos</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Iniciar sesión</a></li>
                                       
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
                ";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
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
\t\t\t\t\t\t\t\t</p>

                                                                <br></br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end of header-cnt -->
\t\t\t\t\t\t\t<!-- slider -->
\t\t\t\t\t\t\t<div class=\"slider-holder\">
\t\t\t\t\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe3.jpg"), "html", null, true);
        echo "\" /></li>

\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/bebe4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></li>

\t\t\t\t\t\t\t\t\t\t<li><img src=\"";
        // line 76
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

    // line 92
    public function block_main($context, array $blocks = array())
    {
        // line 93
        echo "\t\t\t<div class=\"main\">
\t\t\t\t<span class=\"shadow-top\"></span>
\t\t\t\t<!-- shell -->
\t\t\t\t<div class=\"shell\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<!-- testimonial -->
\t\t\t\t\t\t<section class=\"testimonial\">
                                                    <h3><font color=\"#848484\" style=\"font-size: 18px\">Somos un grupo de personas con sensibilidad social, reunidas para gestionar recursos, paralelamente a aquellos que aporta la Caja Costarricense de Seguro Social, 
                                                            con el fin de cumplir la misión del Servicio de Neonatología del Hospital Dr. Rafael Ángel Calderón Guardia.<font/></h3>
                                                    
\t\t\t\t\t\t\t<p><strong></strong><span class=\"mobile\"></span></p>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<!-- testimonial -->

\t\t\t\t\t\t<section class=\"blog\">
\t\t\t\t\t\t\t<!-- content -->
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"cnt\">
\t\t\t\t\t\t\t\t\t<h3>Próximas actividades</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum consequat. Nam leo libero, scelerisque tincidunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque. Praesent purus eros, egestas eu temp</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Cras molestie condimentum consequat. </a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nam leo libero, scelerisque tincidunt commodo id</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dae molestie condimentum consequat dolor</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end of content -->

\t\t\t\t\t\t\t<!-- sidebar -->
\t\t\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t\t\t<!-- widget -->
\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t<h3>Temas de interés</h3>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"css/images/post-img.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <em class=\"mobile\"> idunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque praesent purus </em></a> </p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"css/images/post-img2.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <em class=\"mobile\"> idunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque praesent purus </em></a> </p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img-holder\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"css/images/post-img3.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <em class=\"mobile\"> idunt commodo id, hendrerit vitae orci. Suspendisse eget nibh turpis. Sed at accumsan neque praesent purus </em> 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"view\">Ver todos</a>
\t\t\t\t\t\t\t\t<!-- end of widget -->
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t\t<!-- end of sidebar -->
\t\t\t\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t\t\t</section>\t
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- cols -->
\t\t\t\t\t\t<section class=\"cols\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h3>Galería</h3>
\t\t\t\t\t\t\t\t<img src=\"css/images/cols-img.png\" alt=\"\" class=\"alignleft\"/>
\t\t\t\t\t\t\t\t<div class=\"col-cnt\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum conse am leo libero, samet dor.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\" class=\"view\">Ver más</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h3>Quiénes somos</h3>
\t\t\t\t\t\t\t\t<img src=\"css/images/cols-img2.png\" alt=\"\" class=\"alignleft\"/>
\t\t\t\t\t\t\t\t<div class=\"col-cnt\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie condimentum conse am leo libero, samet dor.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\" class=\"view\">Ver más</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"cl\">&nbsp;</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<!-- end of cols -->
\t\t\t\t\t</div>
\t\t\t\t<!-- end of shell -->
\t\t\t\t</div>
\t\t\t\t<!-- end of container -->
\t\t\t</div>
                        ";
    }

    // line 192
    public function block_footer_push($context, array $blocks = array())
    {
        // line 193
        echo "\t\t<div id=\"footer-push\"></div>
                ";
    }

    // line 199
    public function block_footer($context, array $blocks = array())
    {
        // line 200
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
\t\t\t\t\t
\t\t\t\t\t<h3><a href=\"#\">Siguenos</a></h3>
\t\t\t\t\t<div class=\"col-cnt\">
                                           <a href=\"https://www.facebook.com/angelitosdevida\" target=\"_blank\"><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/facebook-icon.png"), "html", null, true);
        echo "\"></a>
                                             </div>
\t\t\t\t</div>
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
        // line 259
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
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 259,  378 => 246,  330 => 200,  327 => 199,  322 => 193,  319 => 192,  303 => 177,  292 => 169,  214 => 93,  211 => 92,  193 => 76,  188 => 74,  183 => 72,  178 => 70,  173 => 68,  149 => 46,  146 => 45,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  109 => 27,  106 => 26,  100 => 269,  98 => 199,  92 => 195,  90 => 192,  85 => 189,  83 => 92,  78 => 89,  76 => 45,  71 => 42,  69 => 26,  58 => 18,  54 => 17,  46 => 12,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
