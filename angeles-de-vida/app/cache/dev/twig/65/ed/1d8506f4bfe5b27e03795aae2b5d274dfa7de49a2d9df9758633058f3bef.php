<?php

/* DBBundle:Actividad:index.html.twig */
class __TwigTemplate_65ed1d8506f4bfe5b27e03795aae2b5d274dfa7de49a2d9df9758633058f3bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("baseCrud.html.twig");

        $this->blocks = array(
            'titleCrud' => array($this, 'block_titleCrud'),
            'bodyCrud' => array($this, 'block_bodyCrud'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseCrud.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titleCrud($context, array $blocks = array())
    {
        // line 3
        echo "    <li class=\"nav-header\">Actividades</li>
    ";
    }

    // line 5
    public function block_bodyCrud($context, array $blocks = array())
    {
        // line 6
        echo "    <center>

        <h2>Actividades</h2>

        <div class=\"row\">
            <div class=\"box col-md-12\">
                <div class=\"box-inner\">
                    <div class=\"box-content\">
                        ";
        // line 14
        if (array_key_exists("message", $context)) {
            // line 15
            echo "                            <div class=\"alert alert-info\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></div>
                            ";
        }
        // line 17
        echo "
                        <table class=\"rwd-table\">
                            <tbody>
                                <tr class=\"bg-primary\">
                                    <th class=\"center-text\">Id</th>
                                    <th class=\"center-text\">Nombre</th>
                                    <th class=\"center-text\">Fecha</th>
                                    <th class=\"center-text\">Hora de inicio</th>
                                    <th class=\"center-text\">Hora de fin</th>
                                    <th class=\"center-text\">Descripción</th>
                                    <th class=\"center-text\">Lugar</th>
                                    <th class=\"center-text\">Acciones</th>
                                </tr>

                                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                                    <tr class=\"center-text\">
                                        <td data-th=\"Id\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                                        <td data-th=\"Nombre\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                                        <td data-th=\"Fecha\">";
            // line 35
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                        <td data-th=\"Hora de inicio\">";
            // line 36
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaInicio")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaInicio"), "H:i"), "html", null, true);
            }
            echo "</td>
                                        <td data-th=\"Hora de fin\">";
            // line 37
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaFin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaFin"), "H:i"), "html", null, true);
            }
            echo "</td>
                                        <td data-th=\"Descripción\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                                        <td data-th=\"Lugar\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lugar"), "html", null, true);
            echo "</td>
                                        <td data-th=\"Acciones\">
                                            <ul>
                                                <a class=\"btn btn-warning\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actividad_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar/Eliminar</a>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </tbody>
                        </table>

                        <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("actividad_new");
        echo "\">
                            Crear una nueva actividad
                        </a>
                        </center>
                    ";
    }

    public function getTemplateName()
    {
        return "DBBundle:Actividad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 77,  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 102,  216 => 139,  213 => 98,  233 => 106,  225 => 15,  153 => 17,  137 => 18,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 8,  110 => 53,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 67,  129 => 16,  113 => 66,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 77,  118 => 33,  65 => 27,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 109,  198 => 92,  194 => 73,  190 => 73,  160 => 63,  134 => 55,  104 => 46,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 72,  152 => 73,  127 => 33,  84 => 38,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 88,  178 => 104,  146 => 71,  124 => 14,  100 => 30,  90 => 13,  76 => 27,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 83,  169 => 60,  140 => 69,  132 => 66,  128 => 47,  107 => 38,  61 => 36,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 108,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 96,  204 => 113,  179 => 69,  159 => 75,  143 => 58,  135 => 79,  119 => 67,  102 => 71,  71 => 35,  67 => 39,  63 => 22,  59 => 46,  38 => 6,  94 => 14,  89 => 35,  85 => 34,  75 => 25,  68 => 25,  56 => 13,  87 => 28,  21 => 1,  26 => 4,  93 => 57,  88 => 64,  78 => 32,  46 => 31,  27 => 4,  44 => 12,  31 => 8,  28 => 3,  201 => 77,  196 => 131,  183 => 106,  171 => 116,  166 => 71,  163 => 98,  158 => 88,  156 => 62,  151 => 60,  142 => 89,  138 => 68,  136 => 17,  121 => 51,  117 => 42,  105 => 50,  91 => 42,  62 => 41,  49 => 33,  24 => 3,  25 => 4,  19 => 1,  79 => 38,  72 => 26,  69 => 28,  47 => 13,  40 => 6,  37 => 5,  22 => 2,  246 => 50,  157 => 18,  145 => 15,  139 => 36,  131 => 8,  123 => 32,  120 => 37,  115 => 55,  111 => 39,  108 => 47,  101 => 37,  98 => 15,  96 => 54,  83 => 27,  74 => 31,  66 => 43,  55 => 35,  52 => 15,  50 => 14,  43 => 5,  41 => 12,  35 => 9,  32 => 3,  29 => 2,  209 => 82,  203 => 94,  199 => 67,  193 => 90,  189 => 71,  187 => 75,  182 => 85,  176 => 70,  173 => 82,  168 => 80,  164 => 64,  162 => 89,  154 => 87,  149 => 16,  147 => 59,  144 => 73,  141 => 14,  133 => 50,  130 => 54,  125 => 52,  122 => 82,  116 => 53,  112 => 48,  109 => 75,  106 => 72,  103 => 32,  99 => 44,  95 => 36,  92 => 28,  86 => 40,  82 => 39,  80 => 28,  73 => 36,  64 => 24,  60 => 23,  57 => 43,  54 => 11,  51 => 16,  48 => 33,  45 => 7,  42 => 6,  39 => 8,  36 => 23,  33 => 6,  30 => 21,);
    }
}
