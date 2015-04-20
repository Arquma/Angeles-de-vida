<?php

/* DBBundle:Actividad:edit.html.twig */
class __TwigTemplate_d3af7d56b2cc9626529712c708c7af72f7cdf9901cafde88e46bc0c7ec63ca97 extends Twig_Template
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
        echo "
    <script>
        \$(function () {
            \$(\"#edit_form\").validate({
                rules: {
                    'nombre': 'required',
                    'descripcion': 'required',
                    'lugar': 'required'
                },
                messages: {
                    'nombre': 'Este campo es requerido.'
                },
                debug: true,
                submitHandler: function (form) {
                    alert('Datos de actividad ingresados correctamente.');
                }
            });
        });

    </script>

    <center>
        <h2>Crear Actividad</h2>


        <div class=\"row\">
            <div class=\"box col-md-12\">
                <div class=\"box-inner\">
                    <div class=\"box-content\">
                        ";
        // line 35
        if (array_key_exists("message", $context)) {
            // line 36
            echo "                            <div class=\"alert alert-info\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></div>
                            ";
        }
        // line 38
        echo "
                        ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'label');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'errors');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre"), 'widget');
        echo "
                        <br>
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha"), 'label');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha"), 'errors');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fecha"), 'widget');
        echo "
                        <br>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaInicio"), 'label');
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaInicio"), 'errors');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaInicio"), 'widget');
        echo "
                        <br>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaFin"), 'label');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaFin"), 'errors');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaFin"), 'widget');
        echo "
                        <br>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion"), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion"), 'errors');
        echo "
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion"), 'widget');
        echo "
                        <br>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lugar"), 'label');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lugar"), 'errors');
        echo "
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lugar"), 'widget');
        echo "
                        <br>

                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                        <br>

                        ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

                        <br>
                        <a class=\"btn btn-primary\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("actividad");
        echo "\">
                            Volver a actividades
                        </a>
                        </center>
                    ";
    }

    public function getTemplateName()
    {
        return "DBBundle:Actividad:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 11,  216 => 139,  213 => 5,  233 => 17,  225 => 15,  153 => 17,  137 => 18,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 8,  110 => 69,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 11,  175 => 67,  170 => 67,  129 => 16,  113 => 66,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 77,  118 => 33,  65 => 27,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 150,  198 => 112,  194 => 73,  190 => 73,  160 => 63,  134 => 55,  104 => 46,  23 => 3,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 72,  152 => 108,  127 => 33,  84 => 38,  77 => 44,  70 => 23,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 108,  178 => 104,  146 => 43,  124 => 14,  100 => 30,  90 => 13,  76 => 32,  58 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 96,  169 => 60,  140 => 18,  132 => 16,  128 => 15,  107 => 33,  61 => 36,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 93,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 89,  204 => 113,  179 => 69,  159 => 88,  143 => 58,  135 => 79,  119 => 67,  102 => 71,  71 => 35,  67 => 39,  63 => 22,  59 => 46,  38 => 6,  94 => 14,  89 => 56,  85 => 42,  75 => 25,  68 => 16,  56 => 13,  87 => 28,  21 => 2,  26 => 4,  93 => 57,  88 => 64,  78 => 25,  46 => 31,  27 => 4,  44 => 12,  31 => 8,  28 => 6,  201 => 77,  196 => 131,  183 => 106,  171 => 116,  166 => 71,  163 => 98,  158 => 88,  156 => 62,  151 => 60,  142 => 89,  138 => 56,  136 => 17,  121 => 51,  117 => 50,  105 => 81,  91 => 42,  62 => 41,  49 => 33,  24 => 3,  25 => 4,  19 => 1,  79 => 38,  72 => 31,  69 => 28,  47 => 32,  40 => 6,  37 => 5,  22 => 2,  246 => 108,  157 => 18,  145 => 15,  139 => 36,  131 => 8,  123 => 32,  120 => 37,  115 => 35,  111 => 8,  108 => 47,  101 => 80,  98 => 15,  96 => 54,  83 => 27,  74 => 24,  66 => 43,  55 => 35,  52 => 12,  50 => 32,  43 => 5,  41 => 12,  35 => 9,  32 => 3,  29 => 2,  209 => 82,  203 => 114,  199 => 67,  193 => 110,  189 => 71,  187 => 75,  182 => 288,  176 => 70,  173 => 102,  168 => 100,  164 => 64,  162 => 89,  154 => 87,  149 => 16,  147 => 59,  144 => 73,  141 => 14,  133 => 17,  130 => 54,  125 => 52,  122 => 82,  116 => 53,  112 => 48,  109 => 75,  106 => 72,  103 => 32,  99 => 44,  95 => 43,  92 => 28,  86 => 40,  82 => 39,  80 => 25,  73 => 36,  64 => 15,  60 => 14,  57 => 43,  54 => 11,  51 => 16,  48 => 33,  45 => 7,  42 => 6,  39 => 13,  36 => 23,  33 => 6,  30 => 21,);
    }
}
