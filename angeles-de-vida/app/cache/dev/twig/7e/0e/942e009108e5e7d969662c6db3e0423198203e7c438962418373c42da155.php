<?php

/* ModuloInternosBundle:Default:articulos_internos.html.twig */
class __TwigTemplate_7e0e942e009108e5e7d969662c6db3e0423198203e7c438962418373c42da155 extends Twig_Template
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
        echo "<link id=\"bs-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


<!-- top-nav -->
<nav class=\"top-nav\">
    <div class=\"shell\">
        <ul class=\"clearfix\">
            <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("iInicio");
        echo "\">Inicio</a></li>
            <li class=\"active\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("iArticulos");
        echo "\">Articulos</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("iHorarios");
        echo "\">Horarios y Roles</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Salir</a></li>
        </ul>
    </div>
</nav>
<!-- end of top-nav -->
<br>

<br/>
<center><h3><li class=\"glyphicon glyphicon-ok-circle\"></li><font color=\"#1C1C1C\"> Lista de Artículos<font/></h3></center>

";
        // line 23
        if (array_key_exists("message", $context)) {
            // line 24
            echo "    <div class=\"box-content alerts\">
        <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>¡";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "!</strong>
        </div>
    </div>
";
        }
        // line 31
        echo "<div class=\"row\">
    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulosLink"]) ? $context["articulosLink"] : $this->getContext($context, "articulosLink")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 33
            echo "        <div class=\"box col-md-4\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                </div>
                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-md-4\"><h6>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "nombre"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "descripcion"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6> <a class=\"btn btn-warning btn-xs\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "link"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-download-alt\"></i>
                                    Ver
                                </a></h6></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulosDoc"]) ? $context["articulosDoc"] : $this->getContext($context, "articulosDoc")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 53
            echo "        <div class=\"box col-md-4\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                </div>
                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-md-4\"><h6>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "nombre"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "descripcion"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6> <a class=\"btn btn-success btn-xs\" href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("rDescargarArticulo");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "codArticulo"), "html", null, true);
            echo "\">
                                    <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>
                                    Ver
                                </a></h6></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/span-->

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</div><!--/row-->

";
        // line 74
        $this->env->loadTemplate("ModuloInternosBundle:Default:baseInternosFooter.html.twig")->display($context);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ModuloInternosBundle:Default:articulos_internos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 15,  81 => 51,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 9,  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 102,  216 => 139,  213 => 98,  233 => 106,  225 => 15,  153 => 7,  137 => 61,  200 => 16,  192 => 103,  155 => 72,  150 => 85,  114 => 50,  110 => 49,  20 => 2,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 17,  175 => 16,  170 => 67,  129 => 16,  113 => 14,  97 => 57,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 14,  148 => 93,  126 => 56,  118 => 33,  65 => 39,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 109,  198 => 92,  194 => 73,  190 => 73,  160 => 63,  134 => 55,  104 => 46,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 72,  152 => 73,  127 => 54,  84 => 33,  77 => 46,  70 => 27,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 88,  178 => 104,  146 => 71,  124 => 54,  100 => 45,  90 => 39,  76 => 48,  58 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 83,  169 => 60,  140 => 82,  132 => 60,  128 => 59,  107 => 42,  61 => 23,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 108,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 96,  204 => 113,  179 => 69,  159 => 74,  143 => 61,  135 => 79,  119 => 52,  102 => 47,  71 => 22,  67 => 33,  63 => 24,  59 => 19,  38 => 5,  94 => 40,  89 => 55,  85 => 31,  75 => 31,  68 => 27,  56 => 13,  87 => 28,  21 => 2,  26 => 3,  93 => 60,  88 => 32,  78 => 32,  46 => 26,  27 => 7,  44 => 12,  31 => 5,  28 => 5,  201 => 77,  196 => 131,  183 => 106,  171 => 15,  166 => 71,  163 => 13,  158 => 8,  156 => 8,  151 => 91,  142 => 89,  138 => 56,  136 => 61,  121 => 16,  117 => 15,  105 => 15,  91 => 8,  62 => 40,  49 => 17,  24 => 3,  25 => 3,  19 => 1,  79 => 47,  72 => 43,  69 => 44,  47 => 12,  40 => 11,  37 => 8,  22 => 3,  246 => 50,  157 => 18,  145 => 15,  139 => 63,  131 => 58,  123 => 53,  120 => 53,  115 => 52,  111 => 65,  108 => 50,  101 => 14,  98 => 41,  96 => 60,  83 => 52,  74 => 28,  66 => 43,  55 => 35,  52 => 28,  50 => 27,  43 => 5,  41 => 12,  35 => 6,  32 => 6,  29 => 2,  209 => 82,  203 => 94,  199 => 67,  193 => 90,  189 => 71,  187 => 75,  182 => 85,  176 => 16,  173 => 82,  168 => 14,  164 => 64,  162 => 89,  154 => 87,  149 => 16,  147 => 86,  144 => 62,  141 => 14,  133 => 60,  130 => 57,  125 => 17,  122 => 55,  116 => 52,  112 => 51,  109 => 16,  106 => 9,  103 => 8,  99 => 44,  95 => 35,  92 => 43,  86 => 64,  82 => 33,  80 => 32,  73 => 36,  64 => 41,  60 => 36,  57 => 43,  54 => 11,  51 => 16,  48 => 13,  45 => 7,  42 => 22,  39 => 21,  36 => 10,  33 => 3,  30 => 2,);
    }
}