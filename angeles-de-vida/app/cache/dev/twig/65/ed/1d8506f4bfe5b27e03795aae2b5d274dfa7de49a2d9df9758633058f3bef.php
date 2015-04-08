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
        return array (  133 => 50,  128 => 47,  117 => 42,  111 => 39,  107 => 38,  101 => 37,  95 => 36,  89 => 35,  85 => 34,  81 => 33,  78 => 32,  74 => 31,  58 => 17,  52 => 15,  50 => 14,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
