<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a52f9f2701e2bea71266220a49df5c3a93d21016641665ef100d0702e26e3b6f extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  338 => 135,  323 => 128,  300 => 121,  286 => 112,  270 => 102,  226 => 84,  197 => 71,  172 => 62,  81 => 23,  253 => 75,  249 => 51,  228 => 104,  218 => 100,  161 => 9,  34 => 23,  311 => 17,  307 => 16,  295 => 13,  287 => 7,  272 => 162,  257 => 156,  239 => 15,  231 => 13,  223 => 102,  216 => 79,  213 => 78,  233 => 87,  225 => 15,  153 => 69,  137 => 61,  200 => 72,  192 => 103,  155 => 72,  150 => 55,  114 => 50,  110 => 22,  20 => 2,  522 => 274,  507 => 262,  460 => 217,  452 => 210,  449 => 198,  329 => 131,  267 => 101,  256 => 96,  185 => 75,  180 => 17,  175 => 16,  170 => 67,  129 => 16,  113 => 48,  97 => 41,  479 => 215,  464 => 203,  417 => 158,  414 => 157,  406 => 150,  390 => 134,  376 => 127,  370 => 124,  342 => 137,  302 => 65,  289 => 113,  277 => 53,  259 => 45,  237 => 148,  212 => 300,  207 => 75,  202 => 134,  165 => 60,  284 => 6,  281 => 54,  276 => 163,  184 => 12,  174 => 74,  167 => 71,  148 => 93,  126 => 56,  118 => 49,  65 => 28,  53 => 12,  371 => 155,  366 => 122,  363 => 148,  350 => 139,  345 => 105,  340 => 135,  335 => 134,  325 => 129,  320 => 127,  315 => 125,  310 => 123,  299 => 14,  279 => 110,  248 => 94,  245 => 95,  242 => 109,  198 => 92,  194 => 70,  190 => 73,  160 => 63,  134 => 54,  104 => 42,  23 => 2,  348 => 140,  301 => 141,  293 => 134,  290 => 115,  275 => 105,  262 => 98,  250 => 109,  236 => 103,  232 => 146,  222 => 142,  191 => 77,  186 => 52,  181 => 65,  152 => 73,  127 => 60,  84 => 24,  77 => 46,  70 => 19,  394 => 168,  378 => 246,  330 => 131,  327 => 199,  319 => 192,  303 => 122,  292 => 169,  211 => 137,  188 => 76,  178 => 64,  146 => 71,  124 => 54,  100 => 45,  90 => 27,  76 => 31,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 216,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 151,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 156,  368 => 112,  365 => 111,  362 => 121,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 193,  314 => 188,  312 => 124,  309 => 97,  305 => 121,  298 => 120,  294 => 116,  285 => 55,  283 => 88,  278 => 106,  268 => 101,  264 => 142,  258 => 98,  252 => 154,  247 => 152,  241 => 90,  229 => 85,  220 => 81,  214 => 9,  177 => 83,  169 => 60,  140 => 82,  132 => 60,  128 => 59,  107 => 42,  61 => 12,  273 => 52,  269 => 51,  254 => 110,  243 => 16,  240 => 105,  238 => 108,  235 => 14,  230 => 82,  227 => 144,  224 => 71,  221 => 14,  219 => 89,  217 => 302,  208 => 96,  204 => 78,  179 => 69,  159 => 74,  143 => 73,  135 => 62,  119 => 40,  102 => 41,  71 => 22,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 55,  85 => 32,  75 => 31,  68 => 27,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 60,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 12,  31 => 3,  28 => 3,  201 => 77,  196 => 131,  183 => 106,  171 => 73,  166 => 71,  163 => 13,  158 => 79,  156 => 58,  151 => 91,  142 => 89,  138 => 56,  136 => 61,  121 => 50,  117 => 19,  105 => 34,  91 => 8,  62 => 40,  49 => 14,  24 => 3,  25 => 35,  19 => 1,  79 => 36,  72 => 32,  69 => 44,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 18,  145 => 15,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 55,  111 => 47,  108 => 19,  101 => 43,  98 => 41,  96 => 37,  83 => 33,  74 => 27,  66 => 43,  55 => 16,  52 => 14,  50 => 27,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 90,  189 => 71,  187 => 75,  182 => 85,  176 => 63,  173 => 82,  168 => 61,  164 => 70,  162 => 59,  154 => 87,  149 => 16,  147 => 54,  144 => 62,  141 => 51,  133 => 60,  130 => 46,  125 => 51,  122 => 55,  116 => 39,  112 => 51,  109 => 16,  106 => 45,  103 => 8,  99 => 31,  95 => 54,  92 => 43,  86 => 40,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 36,  57 => 12,  54 => 11,  51 => 16,  48 => 9,  45 => 10,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 3,);
    }
}
