<?php

/* ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig */
class __TwigTemplate_288b9d0ff92f5c323aa8fd2fd2498d1819ea2e78db8c48c45059de2b35d2156f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top_nav' => array($this, 'block_top_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("ModuloAsociacionBundle:Default:baseAsociacionHeaderAlto.html.twig")->display($context);
        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  

<link id=\"bs-css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- top-nav -->
";
        // line 7
        $this->displayBlock('top_nav', $context, $blocks);
        // line 21
        echo "  
<center>
    <div class=\"row\">
        <br>





        <br/> <a class=\"btn btn-default btn-lg\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("AsSubirArchivo");
        echo "\" >
       <i class=\"glyphicon glyphicon-circle-arrow-up\"></i> ¡Subir Archivo!</a>
        <div class=\"box col-md-12\">
            <div class=\"box-inner\">
                <div class=\"box-content\">
                    ";
        // line 35
        if (array_key_exists("message", $context)) {
            // line 36
            echo "                        <div class=\"box-content alerts\">
                            <div class=\"alert alert-danger\">

                                <strong>¡";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "!</strong>
                            </div>
                        </div>
                    ";
        }
        // line 43
        echo "                    <table class=\"table table-hover record_properties bootstrap-datatable datatable responsive table-bordered\">

                        <tbody>
                            ";
        // line 46
        if ((!array_key_exists("message", $context))) {
            // line 47
            echo "                                <tr class=\"bg-primary\">

                                    <th class=\"center-text\">Nombre</th>
                                    <th class=\"center-text\">Descripción</th>     
                                    <th class=\"center-text\">Acciones</th>
                                </tr>

                            ";
        }
        // line 55
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archivos"]) ? $context["archivos"] : $this->getContext($context, "archivos")));
        foreach ($context['_seq'] as $context["_key"] => $context["asociacion"]) {
            // line 56
            echo "                                <tr class=\"center-text\">
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asociacion"]) ? $context["asociacion"] : $this->getContext($context, "asociacion")), "nombre"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asociacion"]) ? $context["asociacion"] : $this->getContext($context, "asociacion")), "descripcion"), "html", null, true);
            echo "</td>

                                    <td>

                                        


                                        <a class=\"btn btn-info btn-xs\" href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("AsDescargarCom");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asociacion"]) ? $context["asociacion"] : $this->getContext($context, "asociacion")), "idDoc"), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-download-alt\"></i>
                                            Descargar</a>


                                        <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("AsEliminarCom");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asociacion"]) ? $context["asociacion"] : $this->getContext($context, "asociacion")), "idDoc"), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                                            Eliminar</a>

                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asociacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </center>
    ";
        // line 86
        $this->env->loadTemplate("ModuloAsociacionBundle:Default:baseAsociacionFooter.html.twig")->display($context);
        echo " 
";
    }

    // line 7
    public function block_top_nav($context, array $blocks = array())
    {
        // line 8
        echo "    <nav class=\"top-nav\" >
        <div class=\"shell\" >
            <!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
            <span class=\"top-nav-shadow\"></span>-->
            <ul class=\"clearfix\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("AsInicio");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("AsEstadosDeCuenta");
        echo "\">Estados de cuenta</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("AsComunicados");
        echo "\">Comunicados</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Salir</a></li>

            </ul>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "ModuloAsociacionBundle:Default:comunicados_asociacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 77,  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 102,  216 => 139,  213 => 98,  233 => 106,  225 => 15,  153 => 7,  137 => 61,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 50,  110 => 49,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 11,  175 => 16,  170 => 67,  129 => 16,  113 => 49,  97 => 57,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 14,  148 => 93,  126 => 56,  118 => 33,  65 => 39,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 109,  198 => 92,  194 => 73,  190 => 73,  160 => 63,  134 => 55,  104 => 46,  23 => 1,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 72,  152 => 73,  127 => 54,  84 => 33,  77 => 46,  70 => 27,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 88,  178 => 104,  146 => 71,  124 => 54,  100 => 45,  90 => 13,  76 => 30,  58 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 83,  169 => 60,  140 => 69,  132 => 56,  128 => 58,  107 => 42,  61 => 36,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 108,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 96,  204 => 113,  179 => 69,  159 => 75,  143 => 61,  135 => 79,  119 => 52,  102 => 47,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  38 => 5,  94 => 56,  89 => 55,  85 => 31,  75 => 38,  68 => 25,  56 => 13,  87 => 28,  21 => 1,  26 => 4,  93 => 57,  88 => 32,  78 => 34,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 4,  201 => 77,  196 => 131,  183 => 106,  171 => 15,  166 => 71,  163 => 13,  158 => 88,  156 => 8,  151 => 66,  142 => 89,  138 => 56,  136 => 77,  121 => 70,  117 => 50,  105 => 42,  91 => 33,  62 => 41,  49 => 17,  24 => 3,  25 => 4,  19 => 1,  79 => 47,  72 => 43,  69 => 11,  47 => 12,  40 => 6,  37 => 7,  22 => 2,  246 => 50,  157 => 18,  145 => 15,  139 => 63,  131 => 58,  123 => 53,  120 => 53,  115 => 55,  111 => 65,  108 => 50,  101 => 58,  98 => 46,  96 => 44,  83 => 27,  74 => 28,  66 => 43,  55 => 35,  52 => 15,  50 => 30,  43 => 5,  41 => 12,  35 => 9,  32 => 5,  29 => 2,  209 => 82,  203 => 94,  199 => 67,  193 => 90,  189 => 71,  187 => 75,  182 => 85,  176 => 70,  173 => 82,  168 => 80,  164 => 64,  162 => 89,  154 => 87,  149 => 16,  147 => 86,  144 => 62,  141 => 14,  133 => 60,  130 => 57,  125 => 55,  122 => 55,  116 => 52,  112 => 51,  109 => 48,  106 => 48,  103 => 40,  99 => 44,  95 => 35,  92 => 43,  86 => 40,  82 => 39,  80 => 32,  73 => 36,  64 => 10,  60 => 36,  57 => 43,  54 => 11,  51 => 16,  48 => 33,  45 => 7,  42 => 10,  39 => 21,  36 => 23,  33 => 3,  30 => 2,);
    }
}
