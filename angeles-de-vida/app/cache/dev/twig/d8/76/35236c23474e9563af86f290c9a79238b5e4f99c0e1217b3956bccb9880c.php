<?php

/* ModuloAdministradorBundle:Default:baseAdminHeaderAlto.html.twig */
class __TwigTemplate_d87635236c23474e9563af86f290c9a79238b5e4f99c0e1217b3956bccb9880c extends Twig_Template
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
        <link id=\"bs-css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
        <link href='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.noty.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/noty_theme_default.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/elfinder.theme.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/jquery.iphone.toggle.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/uploadify.css"), "html", null, true);
        echo "' rel='stylesheet'>
        <link href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/animate.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
         <!-- jQuery -->
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
\t<div id=\"wrapper\">
\t\t
</html>";
    }

    public function getTemplateName()
    {
        return "ModuloAdministradorBundle:Default:baseAdminHeaderAlto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  114 => 34,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  70 => 23,  66 => 22,  62 => 21,  57 => 19,  53 => 18,  49 => 17,  41 => 12,  35 => 9,  31 => 8,  27 => 7,  19 => 1,  253 => 75,  249 => 51,  246 => 50,  242 => 109,  238 => 108,  233 => 106,  228 => 104,  223 => 102,  218 => 100,  213 => 98,  208 => 96,  203 => 94,  198 => 92,  193 => 90,  188 => 88,  182 => 85,  177 => 83,  173 => 82,  168 => 80,  161 => 77,  159 => 75,  152 => 73,  146 => 71,  140 => 69,  138 => 68,  132 => 66,  115 => 55,  110 => 33,  105 => 50,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  47 => 13,  39 => 8,  28 => 3,  23 => 2,  21 => 1,  133 => 50,  128 => 65,  117 => 42,  111 => 39,  107 => 52,  101 => 37,  95 => 36,  89 => 35,  85 => 34,  81 => 33,  78 => 25,  74 => 24,  58 => 17,  52 => 15,  50 => 14,  40 => 6,  37 => 5,  32 => 4,  29 => 2,);
    }
}
