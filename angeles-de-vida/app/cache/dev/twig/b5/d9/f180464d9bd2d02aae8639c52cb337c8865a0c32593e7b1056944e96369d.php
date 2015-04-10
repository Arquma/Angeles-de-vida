<?php

/* DBBundle:Usuario:edit.html.twig */
class __TwigTemplate_b5d9f180464d9bd2d02aae8639c52cb337c8865a0c32593e7b1056944e96369d extends Twig_Template
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
      \$(function() {
         \$(\"#edit_form\").validate({
             rules:{
                 'nombreUsuario':'required',
                 'contrasena':'required'
             },
             messages:{
                 'nombreUsuario':'Este campo es requerido.',
                 'contrasena':'Este campo es requerido.'
             },
             debug:true,
             submitHandler:function(form){
                 alert('Datos de usuario ingresados correctamente.');
             }
         }); 
      }); 
        
    </script>
    
    
    <center>

        <h2>Editar/Eliminar Usuario</h2>


        <div class=\"row\">
            <div class=\"box col-md-12\">
                <div class=\"box-inner\">
                    <div class=\"box-content\">
                        ";
        // line 37
        if (array_key_exists("message", $context)) {
            // line 38
            echo "                            <div class=\"alert alert-info\"><font color=\"088A08\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font></div>
                            ";
        }
        // line 40
        echo "
                        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "


                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreUsuario"), 'label');
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreUsuario"), 'errors');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreUsuario"), 'widget');
        echo "
                        <br>
                        <br>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contrasena"), 'label');
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contrasena"), 'errors');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contrasena"), 'widget');
        echo "
                        <br>
                        <br>
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                        <br>
                        
                        ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        
                        ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                        <br>

                        <a class=\"btn btn-primary\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\">
                            Volver a la lista de usuarios
                        </a>
                    </div>
                </div>
            </div>
        </div><!--/row-->
    </center>
";
    }

    public function getTemplateName()
    {
        return "DBBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 63,  133 => 60,  128 => 58,  122 => 55,  116 => 52,  112 => 51,  108 => 50,  102 => 47,  98 => 46,  94 => 45,  88 => 42,  84 => 41,  81 => 40,  75 => 38,  73 => 37,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
