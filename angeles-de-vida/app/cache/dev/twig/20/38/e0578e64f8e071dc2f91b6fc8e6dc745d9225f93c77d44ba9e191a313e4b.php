<?php

/* DBBundle:Usuario:index.html.twig */
class __TwigTemplate_2038e0578e64f8e071dc2f91b6fc8e6dc745d9225f93c77d44ba9e191a313e4b extends Twig_Template
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
        echo "    <center>

        <h2>Usuarios</h2>

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
                                    <th>Id</th>
                                    <th>Nombre de usuario</th>
                                    <th>Contraseña</th>
                                    <th>Acciones</th>
                                </tr>

                                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "
                                    <tr class=\"center-text\">
                                        <td data-th=\"Id\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                                        <td data-th=\"Nombre de Usuario\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreUsuario"), "html", null, true);
            echo "</td>
                                        <td data-th=\"Contraseña\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contrasena"), "html", null, true);
            echo "</td>
                                        <td data-th=\"Acciones\">
                                            <ul>
                                                <a class=\"btn btn-warning\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"> Editar/Eliminar</a>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </tbody>
                        </table>


                        <a class=\"btn btn-primary\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\">
                            Crear un nuevo usuario
                        </a>
                        </center>
                    ";
    }

    public function getTemplateName()
    {
        return "DBBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  105 => 42,  94 => 37,  88 => 34,  84 => 33,  80 => 32,  76 => 30,  72 => 29,  58 => 17,  52 => 15,  50 => 14,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
