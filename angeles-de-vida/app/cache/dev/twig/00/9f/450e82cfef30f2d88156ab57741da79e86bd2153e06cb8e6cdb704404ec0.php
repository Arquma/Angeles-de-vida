<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_009f450e82cfef30f2d88156ab57741da79e86bd2153e06cb8e6cdb704404ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 15,  81 => 51,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 9,  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 102,  216 => 139,  213 => 98,  233 => 106,  225 => 15,  153 => 7,  137 => 61,  200 => 16,  192 => 103,  155 => 72,  150 => 85,  114 => 50,  110 => 22,  20 => 2,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 209,  329 => 200,  267 => 160,  256 => 135,  185 => 71,  180 => 17,  175 => 16,  170 => 67,  129 => 16,  113 => 14,  97 => 57,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 104,  302 => 65,  289 => 56,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 136,  202 => 134,  165 => 212,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 67,  167 => 14,  148 => 93,  126 => 56,  118 => 33,  65 => 28,  53 => 10,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 133,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 96,  245 => 95,  242 => 109,  198 => 92,  194 => 73,  190 => 73,  160 => 63,  134 => 55,  104 => 50,  23 => 2,  348 => 186,  301 => 141,  293 => 134,  290 => 115,  275 => 118,  262 => 158,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 128,  186 => 52,  181 => 72,  152 => 73,  127 => 28,  84 => 29,  77 => 46,  70 => 27,  394 => 259,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 15,  292 => 169,  211 => 137,  188 => 88,  178 => 104,  146 => 71,  124 => 54,  100 => 45,  90 => 32,  76 => 17,  58 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 141,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 98,  309 => 97,  305 => 121,  298 => 140,  294 => 116,  285 => 55,  283 => 88,  278 => 86,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 19,  229 => 16,  220 => 70,  214 => 9,  177 => 83,  169 => 60,  140 => 82,  132 => 60,  128 => 59,  107 => 42,  61 => 12,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 108,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 96,  204 => 113,  179 => 69,  159 => 74,  143 => 73,  135 => 79,  119 => 52,  102 => 17,  71 => 22,  67 => 29,  63 => 24,  59 => 19,  38 => 6,  94 => 34,  89 => 55,  85 => 31,  75 => 31,  68 => 27,  56 => 11,  87 => 28,  21 => 2,  26 => 4,  93 => 60,  88 => 31,  78 => 26,  46 => 26,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 77,  196 => 131,  183 => 106,  171 => 15,  166 => 71,  163 => 13,  158 => 8,  156 => 8,  151 => 91,  142 => 89,  138 => 56,  136 => 61,  121 => 16,  117 => 19,  105 => 18,  91 => 8,  62 => 40,  49 => 17,  24 => 3,  25 => 3,  19 => 1,  79 => 36,  72 => 32,  69 => 44,  47 => 8,  40 => 11,  37 => 8,  22 => 3,  246 => 50,  157 => 18,  145 => 15,  139 => 63,  131 => 63,  123 => 53,  120 => 20,  115 => 55,  111 => 65,  108 => 19,  101 => 49,  98 => 41,  96 => 48,  83 => 52,  74 => 28,  66 => 43,  55 => 35,  52 => 10,  50 => 27,  43 => 7,  41 => 5,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 94,  199 => 67,  193 => 90,  189 => 71,  187 => 75,  182 => 85,  176 => 16,  173 => 82,  168 => 14,  164 => 64,  162 => 89,  154 => 87,  149 => 16,  147 => 86,  144 => 62,  141 => 14,  133 => 60,  130 => 57,  125 => 17,  122 => 55,  116 => 52,  112 => 51,  109 => 16,  106 => 9,  103 => 8,  99 => 44,  95 => 54,  92 => 43,  86 => 40,  82 => 28,  80 => 32,  73 => 16,  64 => 13,  60 => 36,  57 => 12,  54 => 11,  51 => 16,  48 => 9,  45 => 7,  42 => 22,  39 => 11,  36 => 4,  33 => 3,  30 => 2,);
    }
}
