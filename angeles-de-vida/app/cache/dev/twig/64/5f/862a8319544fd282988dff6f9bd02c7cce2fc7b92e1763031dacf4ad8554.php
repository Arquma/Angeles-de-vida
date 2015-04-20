<?php

/* AngelesVidaBundle:Default:galeria4.html.twig */
class __TwigTemplate_645f862a8319544fd282988dff6f9bd02c7cce2fc7b92e1763031dacf4ad8554 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0\" />
\t<title>Asociación Angeles de Vida</title>
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/favicon.ico"), "html", null, true);
        echo "\"/> 
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/galeria/cssCeleste/css/portfolio_one.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/galeria/cssCeleste/css/dark.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
\t
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery-1.8.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
       
\t<!--[if lt IE 9]>
\t\t<script src=\"js/modernizr.custom.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/js/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
</head>
<body>
\t<div id=\"wrapper\">
\t\t
\t\t<!-- top-nav -->
                ";
        // line 27
        $this->displayBlock('top_nav', $context, $blocks);
        // line 43
        echo "                
\t\t<!-- end of top-nav -->
\t\t\t<!-- header -->
                        
\t\t\t                                                
\t\t\t<!-- end of header -->
\t\t\t<!-- main -->
                        ";
        // line 50
        $this->displayBlock('main', $context, $blocks);
        // line 137
        echo "\t\t\t<!-- end of main -->
\t\t</div>\t
\t\t<!-- footer-push -->
                ";
        // line 140
        $this->displayBlock('footer_push', $context, $blocks);
        // line 143
        echo "\t\t<!-- end of footer-push -->
\t
\t<!-- end of wrapper -->
\t<!-- footer -->
        ";
        // line 147
        $this->displayBlock('footer', $context, $blocks);
        // line 223
        echo "\t<!-- end of footer -->
</body>
</html>";
    }

    // line 27
    public function block_top_nav($context, array $blocks = array())
    {
        // line 28
        echo "\t\t<nav class=\"top-nav\" >
                    <div class=\"shell\" >
\t\t\t\t<!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
\t\t\t\t<span class=\"top-nav-shadow\"></span>-->
\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("inicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("pActividades");
        echo "\">Actividades</a></li>
                                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("pTemasDeInteres");
        echo "\">Temas de Interes</a></li>
                                        <li class=\"active\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("galeria");
        echo "\">Galeria</a></li>
                                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("pQuienesSomos");
        echo "\">Quienes somos</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Iniciar sesión</a></li>
                                       
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
                ";
    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        // line 51
        echo "\t\t\t<div class=\"main\">
\t\t\t\t <div id=\"site_content\">
      <!-- start gallery HTML containers -->
      <div id=\"gallery\" class=\"content\">
        <div class=\"slideshow-container\">
          <div id=\"loading\" class=\"loader\"></div>
          <div id=\"slideshow\" class=\"slideshow\"></div>
        </div>
      </div>
      <div id=\"thumb-container\">
        <div id=\"thumbs\" class=\"navigation\">
          <h1>Galeria</h1>
          <ul class=\"thumbs noscript\">
             
           ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imagenes"]) ? $context["imagenes"] : $this->getContext($context, "imagenes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
            // line 66
            echo "                                ";
            $context["foo"] = ("uploads/galeria/" . $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "imagen"));
            // line 67
            echo "                                <li>
                                <a class=\"thumb\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo"))), "html", null, true);
            echo "\" alt=\"one\" height=\"75px\" width=\"75px\"></a>
                                <div class=\"caption\">
                                <div class=\"image-title portfolio_one\">&quot;";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imagen"]) ? $context["imagen"] : $this->getContext($context, "imagen")), "descripcion"), "html", null, true);
            echo "&quot;</div>
              </div>
            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "   
          </ul>
</div>
        <div id=\"controls\" class=\"controls portfolio_one\"></div>
        <div id=\"caption\" class=\"caption-container\"></div>
        <div style=\"clear: both;\"></div>
        <!-- end gallery HTML containers -->
      </div>
    </div>

\t\t\t\t
                          <!-- javascript at the bottom for fast page loading -->
  <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/galeria/js/jquery.min.js"), "html", null, true);
        echo "\"></script><script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/galeria/js/jquery.easing-sooper.js"), "html", null, true);
        echo "\"></script><script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/galeria/js/jquery.sooperfish.js"), "html", null, true);
        echo "\"></script><!-- initialise sooperfish menu --><script type=\"text/javascript\">
    \$(document).ready(function() {
      \$('ul.sf-menu').sooperfish();
    });
  </script><script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/galeria/js/jquery.galleriffic.js"), "html", null, true);
        echo "\"></script><script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/galeria/js/jquery.opacityrollover.js"), "html", null, true);
        echo "\"></script><script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
      // we only want these styles applied when javascript is enabled
      \$('div.navigation').css({'width' : '450px', 'float' : 'left'});
      \$('div.content').css('display', 'block');
      // initially set opacity on thumbs and add additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.67;
      \$('#thumbs ul.thumbs li').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  1.0,
        fadeSpeed:         'fast',
        exemptionSelector: '.selected'
      });
      // initialize advanced galleriffic gallery
      var gallery = \$('#thumbs').galleriffic({
        delay:                     3500,
        numThumbs:                 10,
        preloadAhead:              10,
        enableTopPager:            false,
        enableBottomPager:         true,
        maxPagesToShow:            7,
        imageContainerSel:         '#slideshow',
        controlsContainerSel:      '#controls',
        captionContainerSel:       '#caption',
        loadingContainerSel:       '#loading',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              'Iniciar Presentación',
        pauseLinkText:             'Pausar',
        prevLinkText:              '&lsaquo; Foto Anterior',
        nextLinkText:              'Foto Siguiente  &rsaquo;',
        nextPageLinkText:          'Siguiente &rsaquo;',
        prevPageLinkText:          '&lsaquo; Anterior',
        enableHistory:             false,
        autoStart:                 false,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // 'this' refers to the gallery, which is an extension of \$('#thumbs')
          this.find('ul.thumbs').children()
            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
            .eq(nextIndex).fadeTo('fast', 1.0);
        }
      });
    });
  </script>   
\t\t\t</div>
                        ";
    }

    // line 140
    public function block_footer_push($context, array $blocks = array())
    {
        // line 141
        echo "\t\t<div id=\"footer-push\"></div>
                ";
    }

    // line 147
    public function block_footer($context, array $blocks = array())
    {
        // line 148
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
        return "AngelesVidaBundle:Default:galeria4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 148,  281 => 147,  276 => 141,  184 => 70,  174 => 67,  167 => 65,  148 => 50,  126 => 35,  118 => 33,  65 => 21,  53 => 15,  371 => 155,  366 => 149,  363 => 148,  350 => 139,  345 => 137,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 118,  279 => 110,  248 => 96,  245 => 95,  242 => 94,  198 => 55,  194 => 73,  190 => 53,  160 => 155,  134 => 37,  104 => 32,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 112,  250 => 109,  236 => 103,  232 => 102,  222 => 94,  191 => 73,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 27,  77 => 44,  70 => 25,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 68,  188 => 74,  178 => 50,  146 => 45,  124 => 34,  100 => 147,  90 => 192,  76 => 43,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 99,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 113,  283 => 88,  278 => 86,  268 => 101,  264 => 84,  258 => 98,  252 => 97,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 68,  169 => 60,  140 => 55,  132 => 36,  128 => 35,  107 => 36,  61 => 20,  273 => 140,  269 => 94,  254 => 110,  243 => 88,  240 => 105,  238 => 93,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 89,  217 => 75,  208 => 85,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 35,  119 => 31,  102 => 223,  71 => 42,  67 => 15,  63 => 21,  59 => 17,  38 => 6,  94 => 143,  89 => 20,  85 => 50,  75 => 17,  68 => 23,  56 => 9,  87 => 137,  21 => 2,  26 => 6,  93 => 136,  88 => 28,  78 => 89,  46 => 13,  27 => 4,  44 => 12,  31 => 8,  28 => 3,  201 => 77,  196 => 75,  183 => 72,  171 => 66,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 51,  142 => 59,  138 => 38,  136 => 60,  121 => 46,  117 => 44,  105 => 40,  91 => 133,  62 => 23,  49 => 19,  24 => 2,  25 => 3,  19 => 1,  79 => 90,  72 => 24,  69 => 26,  47 => 12,  40 => 10,  37 => 10,  22 => 2,  246 => 108,  157 => 56,  145 => 67,  139 => 36,  131 => 34,  123 => 32,  120 => 36,  115 => 43,  111 => 28,  108 => 27,  101 => 208,  98 => 199,  96 => 30,  83 => 92,  74 => 27,  66 => 15,  55 => 16,  52 => 21,  50 => 14,  43 => 11,  41 => 7,  35 => 9,  32 => 8,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 76,  189 => 71,  187 => 84,  182 => 51,  176 => 67,  173 => 68,  168 => 44,  164 => 59,  162 => 231,  154 => 151,  149 => 44,  147 => 145,  144 => 49,  141 => 48,  133 => 55,  130 => 36,  125 => 38,  122 => 34,  116 => 35,  112 => 34,  109 => 25,  106 => 26,  103 => 32,  99 => 140,  95 => 28,  92 => 140,  86 => 130,  82 => 22,  80 => 26,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 18,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
