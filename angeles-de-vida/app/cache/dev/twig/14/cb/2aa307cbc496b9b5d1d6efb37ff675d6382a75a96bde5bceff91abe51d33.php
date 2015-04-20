<?php

/* ModuloDoctoresBundle:Default:horarios_doctores.html.twig */
class __TwigTemplate_14cb2aa307cbc496b9b5d1d6efb37ff675d6382a75a96bde5bceff91abe51d33 extends Twig_Template
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
        // line 2
        $this->env->loadTemplate("ModuloDoctoresBundle:Default:baseDoctoresHeaderAlto.html.twig")->display($context);
        // line 3
        echo "<link id=\"bs-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


<!-- top-nav -->
";
        // line 8
        $this->displayBlock('top_nav', $context, $blocks);
        // line 23
        echo "       
<!-- end of top-nav -->
<center>
    <br><br/>
      <h3><li class=\"glyphicon glyphicon-edit\"></li><font color=\"#1C1C1C\"> Lista de Horarios<font/></h3>
    <div class=\"row\">
        <div class=\"box col-md-12\">
           
            <div class=\"box-inner\">
                <div class=\"box-content\">
                     ";
        // line 33
        if (array_key_exists("message", $context)) {
            // line 34
            echo "                        <div class=\"box-content alerts\">
                            <div class=\"alert alert-success\">
                             
                                <strong>¡";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "!</strong>
                            </div>
                        </div>
                    ";
        }
        // line 41
        echo "                    
                    <table class=\"table table-hover record_properties bootstrap-datatable datatable responsive table-bordered\">
                        ";
        // line 43
        if ((!array_key_exists("message", $context))) {
            // line 44
            echo "                       
                             
                            <tr class=\"bg-primary\">
                                <th class=\"center-text\">Nombre</th>
                                <th class=\"center-text\">Descripción</th>
                                <th class=\"center-\">Acción</th>
                            </tr>
                        
                         ";
        }
        // line 53
        echo "                        <tbody>
                            ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 55
            echo "                                <tr>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "nombre"), "html", null, true);
            echo "</td>
                                    <td class=\"center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "descripcion"), "html", null, true);
            echo "</td>
                                    <td class=\"center\">
                                        <a class=\"btn btn-success\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("dDescargarHorario");
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["horario"]) ? $context["horario"] : $this->getContext($context, "horario")), "id"), "html", null, true);
            echo "\">
                                            <i class=\"glyphicon glyphicon-download-alt\"></i>
                                            Ver
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                        </tbody>
                    </table>
                            
                            
                </div>
            </div>
        </div>
    </div><!--/row-->
</center>

";
        // line 77
        $this->env->loadTemplate("ModuloDoctoresBundle:Default:baseDoctoresFooter.html.twig")->display($context);
        echo " ";
    }

    // line 8
    public function block_top_nav($context, array $blocks = array())
    {
        // line 9
        echo "    <nav class=\"top-nav\" \">
        <div class=\"shell\" >
            <!--<a href=\"#\" class=\"nav-btn\">Inicio<span></span></a>
            <span class=\"top-nav-shadow\"></span>-->
            <ul class=\"clearfix\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("dInicio");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("dArticulos");
        echo "\">Articulos</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("dProtocolos");
        echo "\">Protocolos</a></li>
                <li class=\"active\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("dHorarios");
        echo "\">Horarios y Roles</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">Salir</a></li>

            </ul>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "ModuloDoctoresBundle:Default:horarios_doctores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 11,  216 => 139,  213 => 5,  233 => 17,  225 => 15,  153 => 17,  137 => 62,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 64,  110 => 69,  20 => 2,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 5,  129 => 60,  113 => 66,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 77,  118 => 33,  65 => 27,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 150,  198 => 112,  194 => 73,  190 => 73,  160 => 110,  134 => 9,  104 => 49,  23 => 3,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 69,  152 => 108,  127 => 33,  84 => 38,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 108,  178 => 104,  146 => 43,  124 => 36,  100 => 30,  90 => 71,  76 => 32,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 96,  169 => 60,  140 => 81,  132 => 74,  128 => 85,  107 => 33,  61 => 20,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 93,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 89,  204 => 113,  179 => 69,  159 => 88,  143 => 42,  135 => 79,  119 => 67,  102 => 31,  71 => 24,  67 => 23,  63 => 22,  59 => 46,  38 => 6,  94 => 62,  89 => 56,  85 => 42,  75 => 25,  68 => 44,  56 => 16,  87 => 28,  21 => 2,  26 => 4,  93 => 57,  88 => 64,  78 => 25,  46 => 12,  27 => 4,  44 => 12,  31 => 8,  28 => 19,  201 => 77,  196 => 131,  183 => 106,  171 => 116,  166 => 71,  163 => 98,  158 => 88,  156 => 109,  151 => 86,  142 => 89,  138 => 88,  136 => 98,  121 => 54,  117 => 87,  105 => 81,  91 => 29,  62 => 41,  49 => 17,  24 => 3,  25 => 4,  19 => 1,  79 => 53,  72 => 31,  69 => 28,  47 => 15,  40 => 4,  37 => 8,  22 => 3,  246 => 108,  157 => 18,  145 => 15,  139 => 36,  131 => 8,  123 => 32,  120 => 37,  115 => 35,  111 => 34,  108 => 50,  101 => 80,  98 => 59,  96 => 54,  83 => 27,  74 => 24,  66 => 43,  55 => 37,  52 => 15,  50 => 34,  43 => 5,  41 => 12,  35 => 9,  32 => 21,  29 => 5,  209 => 82,  203 => 114,  199 => 67,  193 => 110,  189 => 71,  187 => 290,  182 => 288,  176 => 110,  173 => 102,  168 => 100,  164 => 59,  162 => 89,  154 => 87,  149 => 16,  147 => 85,  144 => 73,  141 => 14,  133 => 61,  130 => 73,  125 => 75,  122 => 82,  116 => 53,  112 => 63,  109 => 82,  106 => 32,  103 => 32,  99 => 31,  95 => 30,  92 => 28,  86 => 55,  82 => 54,  80 => 25,  73 => 42,  64 => 25,  60 => 13,  57 => 43,  54 => 11,  51 => 16,  48 => 33,  45 => 12,  42 => 5,  39 => 13,  36 => 23,  33 => 6,  30 => 22,);
    }
}