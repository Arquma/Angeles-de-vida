<?php

/* ::baseCrud.html.twig */
class __TwigTemplate_1503d237f34c378bdfb5833c259521092957a5eb003521e40ffbc7ee8bae4a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titleCrud' => array($this, 'block_titleCrud'),
            'bodyCrud' => array($this, 'block_bodyCrud'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminHeaderAlto.html.twig")->display($context);
        // line 2
        echo "<link id=\"bs-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/css/tableIndex.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<script
    type=\"text/javascript\"
    src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery/jquery.js"), "html", null, true);
        echo "\">
</script>

<script
    type=\"text/javascript\"
    src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery-validate/jquery.validate.js"), "html", null, true);
        echo "\">
</script>


<!-- top-nav -->
<nav class=\"top-nav\">
    <div class=\"shell\">
        <a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
       
        <ul class=\"clearfix\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("aInicio");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("aActividades");
        echo "\">Actividades</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("aDocumentos");
        echo "\">Documentos</a></li>
                                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("aCuentas");
        echo "\">Cuentas</a></li>
                                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("aEditarInicio");
        echo "\">Editar Inicio</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("cerrar_sesion");
        echo "\">Salir</a></li>
\t\t\t\t</ul>
    </div>
</nav>

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
                <ul class=\"nav nav-pills nav-stacked main-menu\">
                    ";
        // line 50
        $this->displayBlock('titleCrud', $context, $blocks);
        // line 52
        echo "
                    <li><a class=\"ajax-link\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("aSubirImagen");
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i><span> Actualizar</span></a>
                    </li>
                    <li><a class=\"ajax-link\" href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("aCuentas");
        echo "\"><i class=\"glyphicon glyphicon-arrow-left\"></i><span>Regresar</span></a>
                    </li>

                </ul>

            </div>
        </div>
    </div>     
</div>

";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessage"]) {
            // line 66
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " fade in\">
        <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
        ";
            // line 68
            if ($this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : null), "title", array(), "any", true, true)) {
                // line 69
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "message"), "html", null, true);
                echo "
        ";
            } else {
                // line 71
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "
        ";
            }
            // line 73
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        $this->displayBlock('bodyCrud', $context, $blocks);
        // line 77
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<!-- calender plugin -->
<script src='";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
<!-- data table plugin -->
<script src='";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

<!-- select or dropdown enhancer -->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- plugin for gallery image view -->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<!-- notification plugin -->
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
<!-- library for making tables responsive -->
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
<!-- tour plugin -->
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
<!-- star rating plugin -->
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<!-- for iOS style toggle switch -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
<!-- autogrowing textarea plugin -->
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
<!-- multiple file upload plugin -->
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
<!-- application script for Charisma demo -->
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/js/charisma.js"), "html", null, true);
        echo "\"></script>
";
        // line 109
        $this->env->loadTemplate("ModuloAdministradorBundle:Default:baseAdminHeaderAlto.html.twig")->display($context);
    }

    // line 50
    public function block_titleCrud($context, array $blocks = array())
    {
        // line 51
        echo "                    ";
    }

    // line 75
    public function block_bodyCrud($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::baseCrud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1024 => 321,  1022 => 320,  1012 => 318,  1009 => 317,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  956 => 300,  948 => 296,  944 => 295,  932 => 287,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  826 => 246,  821 => 244,  817 => 239,  814 => 238,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 199,  734 => 197,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  703 => 180,  701 => 179,  689 => 173,  685 => 170,  683 => 169,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  656 => 155,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  638 => 145,  635 => 144,  631 => 141,  619 => 135,  611 => 129,  596 => 127,  594 => 126,  589 => 123,  586 => 122,  581 => 118,  579 => 116,  577 => 114,  576 => 113,  572 => 112,  569 => 110,  564 => 108,  558 => 104,  556 => 103,  554 => 102,  552 => 101,  550 => 100,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 91,  504 => 87,  476 => 80,  472 => 78,  467 => 77,  465 => 76,  448 => 75,  445 => 74,  425 => 63,  412 => 59,  404 => 58,  399 => 56,  397 => 55,  383 => 49,  357 => 37,  349 => 34,  346 => 33,  339 => 28,  317 => 17,  282 => 3,  263 => 150,  260 => 293,  306 => 286,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 182,  694 => 175,  690 => 469,  679 => 466,  677 => 465,  660 => 158,  649 => 462,  634 => 456,  629 => 140,  625 => 453,  620 => 451,  606 => 449,  601 => 128,  567 => 109,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 51,  386 => 159,  367 => 339,  358 => 151,  343 => 146,  334 => 26,  331 => 140,  326 => 21,  321 => 18,  296 => 121,  288 => 118,  265 => 299,  255 => 284,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 47,  359 => 123,  356 => 122,  353 => 328,  347 => 119,  333 => 115,  328 => 22,  324 => 112,  313 => 110,  308 => 287,  274 => 110,  234 => 90,  210 => 77,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 322,  1023 => 632,  1021 => 631,  1018 => 319,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 312,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 301,  955 => 600,  947 => 597,  941 => 294,  937 => 593,  935 => 592,  930 => 286,  926 => 285,  923 => 284,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 271,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 247,  824 => 245,  815 => 531,  812 => 530,  810 => 235,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 224,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 198,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 178,  696 => 476,  692 => 174,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 148,  640 => 448,  636 => 446,  628 => 444,  626 => 139,  622 => 136,  616 => 133,  603 => 439,  591 => 124,  587 => 434,  578 => 115,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 99,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  251 => 182,  462 => 202,  446 => 197,  441 => 71,  439 => 70,  431 => 66,  429 => 65,  422 => 184,  415 => 180,  408 => 176,  401 => 57,  380 => 158,  373 => 46,  361 => 152,  351 => 141,  338 => 116,  323 => 19,  300 => 13,  286 => 112,  270 => 316,  226 => 84,  197 => 69,  172 => 57,  81 => 30,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 77,  34 => 4,  311 => 17,  307 => 128,  295 => 11,  287 => 5,  272 => 162,  257 => 291,  239 => 15,  231 => 13,  223 => 102,  216 => 79,  213 => 98,  233 => 106,  225 => 15,  153 => 77,  137 => 61,  200 => 72,  192 => 103,  155 => 47,  150 => 55,  114 => 91,  110 => 53,  20 => 1,  522 => 406,  507 => 88,  460 => 217,  452 => 210,  449 => 198,  329 => 131,  267 => 101,  256 => 96,  185 => 75,  180 => 70,  175 => 58,  170 => 84,  129 => 122,  113 => 40,  97 => 41,  479 => 82,  464 => 203,  417 => 143,  414 => 60,  406 => 150,  390 => 134,  376 => 127,  370 => 45,  342 => 30,  302 => 125,  289 => 196,  277 => 53,  259 => 103,  237 => 262,  212 => 224,  207 => 127,  202 => 125,  165 => 83,  284 => 6,  281 => 114,  276 => 111,  184 => 63,  174 => 74,  167 => 71,  148 => 93,  126 => 121,  118 => 49,  65 => 17,  53 => 11,  371 => 156,  366 => 122,  363 => 153,  350 => 327,  345 => 147,  340 => 145,  335 => 134,  325 => 129,  320 => 127,  315 => 131,  310 => 123,  299 => 14,  279 => 110,  248 => 144,  245 => 270,  242 => 109,  198 => 92,  194 => 197,  190 => 73,  160 => 63,  134 => 133,  104 => 74,  23 => 2,  348 => 140,  301 => 141,  293 => 120,  290 => 7,  275 => 330,  262 => 93,  250 => 274,  236 => 103,  232 => 249,  222 => 238,  191 => 196,  186 => 190,  181 => 185,  152 => 73,  127 => 35,  84 => 33,  77 => 25,  70 => 29,  394 => 54,  378 => 157,  330 => 23,  327 => 199,  319 => 192,  303 => 122,  292 => 169,  211 => 137,  188 => 88,  178 => 184,  146 => 71,  124 => 108,  100 => 36,  90 => 34,  76 => 27,  58 => 26,  480 => 162,  474 => 79,  469 => 158,  461 => 155,  457 => 216,  453 => 199,  444 => 149,  440 => 148,  437 => 69,  435 => 146,  430 => 144,  427 => 64,  423 => 62,  413 => 134,  409 => 151,  407 => 138,  402 => 130,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 329,  341 => 117,  337 => 27,  322 => 193,  314 => 16,  312 => 130,  309 => 129,  305 => 108,  298 => 12,  294 => 116,  285 => 4,  283 => 115,  278 => 331,  268 => 300,  264 => 142,  258 => 148,  252 => 283,  247 => 273,  241 => 93,  229 => 87,  220 => 81,  214 => 231,  177 => 83,  169 => 168,  140 => 69,  132 => 66,  128 => 65,  107 => 52,  61 => 2,  273 => 317,  269 => 107,  254 => 110,  243 => 142,  240 => 263,  238 => 108,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 80,  219 => 237,  217 => 232,  208 => 96,  204 => 215,  179 => 69,  159 => 75,  143 => 73,  135 => 46,  119 => 95,  102 => 30,  71 => 15,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 35,  89 => 35,  85 => 26,  75 => 22,  68 => 25,  56 => 12,  87 => 26,  21 => 1,  26 => 3,  93 => 28,  88 => 28,  78 => 31,  46 => 23,  27 => 7,  44 => 8,  31 => 5,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 89,  138 => 68,  136 => 138,  121 => 107,  117 => 37,  105 => 50,  91 => 44,  62 => 27,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 26,  72 => 26,  69 => 21,  47 => 13,  40 => 11,  37 => 7,  22 => 2,  246 => 50,  157 => 18,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 55,  111 => 90,  108 => 33,  101 => 73,  98 => 36,  96 => 53,  83 => 30,  74 => 30,  66 => 28,  55 => 12,  52 => 13,  50 => 24,  43 => 9,  41 => 21,  35 => 5,  32 => 4,  29 => 4,  209 => 223,  203 => 94,  199 => 212,  193 => 90,  189 => 66,  187 => 119,  182 => 85,  176 => 178,  173 => 82,  168 => 80,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 45,  130 => 46,  125 => 41,  122 => 55,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 38,  99 => 54,  95 => 39,  92 => 31,  86 => 33,  82 => 32,  80 => 28,  73 => 23,  64 => 24,  60 => 23,  57 => 19,  54 => 25,  51 => 37,  48 => 11,  45 => 9,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
