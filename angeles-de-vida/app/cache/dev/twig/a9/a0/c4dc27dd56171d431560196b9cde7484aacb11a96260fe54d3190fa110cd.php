<?php

/* ModuloResidentesBundle:Default:articulos_residentes.html.twig */
class __TwigTemplate_a9a0c4dc27dd56171d431560196b9cde7484aacb11a96260fe54d3190fa110cd extends Twig_Template
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
        $this->env->loadTemplate("ModuloResidentesBundle:Default:baseResidentesHeaderAlto.html.twig")->display($context);
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
        echo $this->env->getExtension('routing')->getUrl("rInicio");
        echo "\">Inicio</a></li>
            <li class=\"active\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("rArticulos");
        echo "\">Articulos</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("rHorarios");
        echo "\">Horarios y Roles</a></li>
            <li><a href=\"#\">Normas</a></li>
            <li><a href=\"";
        // line 14
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
        // line 24
        if (array_key_exists("message", $context)) {
            // line 25
            echo "    <div class=\"box-content alerts\">
        <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>¡";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "!</strong>
        </div>
    </div>
";
        }
        // line 32
        echo "<div class=\"row\">
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulosLink"]) ? $context["articulosLink"] : $this->getContext($context, "articulosLink")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 34
            echo "        <div class=\"box col-md-4\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                </div>
                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-md-4\"><h6>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "nombre"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "descripcion"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6> <a class=\"btn btn-warning btn-xs\" href=\"";
            // line 42
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
        // line 53
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulosDoc"]) ? $context["articulosDoc"] : $this->getContext($context, "articulosDoc")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 54
            echo "        <div class=\"box col-md-4\">
            <div class=\"box-inner\">
                <div class=\"box-header well\" data-original-title=\"\">
                </div>
                <div class=\"box-content\">
                    <div class=\"row\">
                        <div class=\"col-md-4\"><h6>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "nombre"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "descripcion"), "html", null, true);
            echo "</h6></div>
                        <div class=\"col-md-4\"><h6> <a class=\"btn btn-success btn-xs\" href=\"";
            // line 62
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
        // line 73
        echo "</div><!--/row-->

";
        // line 75
        $this->env->loadTemplate("ModuloResidentesBundle:Default:baseResidentesFooter.html.twig")->display($context);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ModuloResidentesBundle:Default:articulos_residentes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 15,  231 => 13,  223 => 11,  216 => 6,  213 => 5,  233 => 17,  225 => 15,  153 => 94,  137 => 62,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 64,  110 => 69,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 143,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 5,  129 => 60,  113 => 29,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 18,  212 => 300,  207 => 115,  202 => 114,  165 => 212,  284 => 148,  281 => 54,  276 => 141,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 71,  118 => 33,  65 => 21,  53 => 42,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 64,  279 => 110,  248 => 96,  245 => 95,  242 => 312,  198 => 112,  194 => 73,  190 => 73,  160 => 75,  134 => 37,  104 => 66,  23 => 3,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 46,  250 => 109,  236 => 103,  232 => 308,  222 => 304,  191 => 291,  186 => 52,  181 => 69,  152 => 148,  127 => 33,  84 => 40,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 177,  292 => 169,  211 => 8,  188 => 108,  178 => 104,  146 => 43,  124 => 36,  100 => 30,  90 => 44,  76 => 32,  58 => 44,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 316,  247 => 314,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 96,  169 => 60,  140 => 81,  132 => 74,  128 => 85,  107 => 72,  61 => 20,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 93,  235 => 14,  230 => 82,  227 => 12,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 89,  204 => 113,  179 => 69,  159 => 88,  143 => 42,  135 => 79,  119 => 67,  102 => 31,  71 => 22,  67 => 47,  63 => 45,  59 => 17,  38 => 6,  94 => 62,  89 => 61,  85 => 42,  75 => 86,  68 => 47,  56 => 16,  87 => 60,  21 => 2,  26 => 3,  93 => 136,  88 => 64,  78 => 25,  46 => 12,  27 => 5,  44 => 12,  31 => 5,  28 => 3,  201 => 77,  196 => 15,  183 => 106,  171 => 216,  166 => 71,  163 => 98,  158 => 88,  156 => 73,  151 => 86,  142 => 89,  138 => 88,  136 => 60,  121 => 54,  117 => 30,  105 => 67,  91 => 40,  62 => 24,  49 => 14,  24 => 3,  25 => 4,  19 => 1,  79 => 33,  72 => 55,  69 => 28,  47 => 15,  40 => 11,  37 => 8,  22 => 2,  246 => 108,  157 => 56,  145 => 83,  139 => 36,  131 => 71,  123 => 32,  120 => 67,  115 => 71,  111 => 28,  108 => 32,  101 => 208,  98 => 57,  96 => 29,  83 => 34,  74 => 24,  66 => 22,  55 => 17,  52 => 15,  50 => 14,  43 => 14,  41 => 12,  35 => 12,  32 => 7,  29 => 20,  209 => 82,  203 => 114,  199 => 67,  193 => 110,  189 => 71,  187 => 290,  182 => 288,  176 => 110,  173 => 102,  168 => 100,  164 => 59,  162 => 89,  154 => 87,  149 => 64,  147 => 85,  144 => 84,  141 => 48,  133 => 61,  130 => 73,  125 => 75,  122 => 82,  116 => 53,  112 => 63,  109 => 25,  106 => 32,  103 => 71,  99 => 42,  95 => 41,  92 => 28,  86 => 27,  82 => 26,  80 => 25,  73 => 42,  64 => 25,  60 => 13,  57 => 43,  54 => 17,  51 => 16,  48 => 14,  45 => 6,  42 => 5,  39 => 13,  36 => 10,  33 => 22,  30 => 7,);
    }
}
