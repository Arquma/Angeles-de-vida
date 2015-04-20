<?php

/* AngelesVidaBundle:Default:login.html.twig */
class __TwigTemplate_2b5e21fcce47461e301eaf9fdc4c6f02ce097d5f44b37c5c28697cf081f66566 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>

        <meta charset=\"utf-8\">
        <title>Asociación Angeles de vida</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/images/favicon.ico"), "html", null, true);
        echo "\"/> 
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/cssCeleste/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  

        <link id=\"bs-css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/angelesvida/other/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>

    <body>

        <div class=\"ch-container\">
            <div class=\"row\">

                <div class=\"row\">
                    <div class=\"col-md-12 center login-header\">


                        <center> <h2 id=\"logo2\"></h2></center>\t



                        <h2>Asociación Pro Neonatos Dr.R.A Calderón Guardia</h2>

                    </div>
                    <!--/span-->
                </div><!--/row-->
                <br>
                <br/><br>
                <br/><br>
                <br/><br>
                <br/><br>
                <br/>
                <div class=\"row\">
                    <div class=\"well col-md-5 center login-box\">

                        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "                            <div class=\"alert alert-info\">

                                <font color=\"#FF0000\">";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</font>

                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
                        <form class=\"form-horizontal\" action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"POST\">
                            <fieldset>
                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user red\"></i></span>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" name=\"_username\">
                                </div>
                                <div class=\"clearfix\"></div><br>

                                <div class=\"input-group input-group-lg\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock red\"></i></span>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\">
                                </div>
                                <div class=\"clearfix\"></div>

                                <div class=\"clearfix\"></div>

                                <p class=\"center col-md-5\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Entrar</button>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <!--/span-->
                </div><!--/row-->
            </div><!--/fluid-row-->

        </div><!--/.fluid-container-->


    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AngelesVidaBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  92 => 49,  82 => 45,  78 => 43,  74 => 42,  40 => 11,  36 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}
