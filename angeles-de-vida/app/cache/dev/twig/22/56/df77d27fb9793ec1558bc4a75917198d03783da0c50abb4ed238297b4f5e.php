<?php

/* DBBundle:Usuario:new.html.twig */
class __TwigTemplate_2256df77d27fb9793ec1558bc4a75917198d03783da0c50abb4ed238297b4f5e extends Twig_Template
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
        echo "    <li class=\"nav-header\">Usuarios</li>
    ";
    }

    // line 5
    public function block_bodyCrud($context, array $blocks = array())
    {
        // line 6
        echo "
    <script>
        \$(function () {
            \$(\"#form\").validate({
                rules: {
                    'nombreUsuario': 'required',
                    'contrasena': 'required'
                },
                messages: {
                    'nombreUsuario': 'Este campo es requerido.',
                    'contrasena': 'Este campo es requerido.'
                },
                debug: true,
                submitHandler: function (form) {
                    alert('Datos de usuario ingresados correctamente.');
                }
            });
        });

    </script>

    <center>
        <h2>Crear Usuario</h2>


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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreUsuario"), 'label');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreUsuario"), 'errors');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreUsuario"), 'widget');
        echo "
                        <br>
                        <br>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena"), 'label');
        echo "
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena"), 'errors');
        echo "
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena"), 'widget');
        echo "
                        <br>
                        <br>
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                        <br>
                        <a class=\"btn btn-primary\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\">
                            Volver a usuarios
                        </a>
                        </center>
                    ";
    }

    public function getTemplateName()
    {
        return "DBBundle:Usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 77,  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 102,  216 => 139,  213 => 98,  233 => 106,  225 => 15,  153 => 17,  137 => 61,  200 => 16,  192 => 103,  155 => 87,  150 => 85,  114 => 50,  110 => 49,  20 => 1,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 11,  175 => 69,  170 => 67,  129 => 16,  113 => 49,  97 => 210,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 91,  148 => 93,  126 => 56,  118 => 33,  65 => 27,  53 => 18,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 109,  198 => 92,  194 => 73,  190 => 73,  160 => 63,  134 => 55,  104 => 46,  23 => 1,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 72,  152 => 73,  127 => 54,  84 => 33,  77 => 29,  70 => 27,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 88,  178 => 104,  146 => 71,  124 => 54,  100 => 45,  90 => 13,  76 => 30,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 83,  169 => 60,  140 => 69,  132 => 56,  128 => 58,  107 => 42,  61 => 36,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 108,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 96,  204 => 113,  179 => 69,  159 => 75,  143 => 61,  135 => 79,  119 => 52,  102 => 47,  71 => 35,  67 => 26,  63 => 25,  59 => 6,  38 => 6,  94 => 37,  89 => 35,  85 => 31,  75 => 38,  68 => 25,  56 => 13,  87 => 28,  21 => 1,  26 => 4,  93 => 57,  88 => 34,  78 => 34,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 77,  196 => 131,  183 => 106,  171 => 116,  166 => 71,  163 => 98,  158 => 88,  156 => 62,  151 => 66,  142 => 89,  138 => 56,  136 => 60,  121 => 51,  117 => 50,  105 => 42,  91 => 34,  62 => 41,  49 => 33,  24 => 3,  25 => 4,  19 => 1,  79 => 38,  72 => 29,  69 => 11,  47 => 12,  40 => 6,  37 => 5,  22 => 2,  246 => 50,  157 => 18,  145 => 15,  139 => 63,  131 => 58,  123 => 53,  120 => 53,  115 => 55,  111 => 46,  108 => 50,  101 => 37,  98 => 46,  96 => 44,  83 => 27,  74 => 28,  66 => 43,  55 => 35,  52 => 15,  50 => 14,  43 => 5,  41 => 12,  35 => 7,  32 => 3,  29 => 2,  209 => 82,  203 => 94,  199 => 67,  193 => 90,  189 => 71,  187 => 75,  182 => 85,  176 => 70,  173 => 82,  168 => 80,  164 => 64,  162 => 89,  154 => 87,  149 => 16,  147 => 59,  144 => 62,  141 => 14,  133 => 60,  130 => 57,  125 => 55,  122 => 55,  116 => 52,  112 => 51,  109 => 48,  106 => 48,  103 => 40,  99 => 44,  95 => 43,  92 => 43,  86 => 40,  82 => 39,  80 => 32,  73 => 36,  64 => 10,  60 => 22,  57 => 43,  54 => 11,  51 => 16,  48 => 33,  45 => 7,  42 => 10,  39 => 10,  36 => 23,  33 => 6,  30 => 21,);
    }
}
