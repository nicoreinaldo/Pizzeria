<?php

/* default/header.html.twig */
class __TwigTemplate_189c7ec4f97153cd5bec9d9e9bfc3d8e86c63d77d927f470fd954c972970cbb1 extends Twig_Template
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
        $__internal_b74cf2e9c592d0c2d8d3ef7b7850931d4f1fa67ed43b5c4609c1e512c7608352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74cf2e9c592d0c2d8d3ef7b7850931d4f1fa67ed43b5c4609c1e512c7608352->enter($__internal_b74cf2e9c592d0c2d8d3ef7b7850931d4f1fa67ed43b5c4609c1e512c7608352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_8451d040a1d86269dcc1cc58c3e3215ad0b9cdc5ad90ee04e231cf346bad7884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8451d040a1d86269dcc1cc58c3e3215ad0b9cdc5ad90ee04e231cf346bad7884->enter($__internal_8451d040a1d86269dcc1cc58c3e3215ad0b9cdc5ad90ee04e231cf346bad7884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        echo "
<header class=\"main-header\">
    <nav class=\"navbar \">
    <div class=\"main_menu_bg navbar-fixed-top wow slideInDown\" data-wow-duration=\"1s\">
    
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"/\" class=\"navbar-brand\"><b>Pizzeria</b>Nuestra</a>
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-left\" id=\"navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"\"><a href=\"/pizza\">Pizzas <span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"\"><a href=\"/pizzapedido/cart\">Pedidos</a></li>
                    <li><a href=\"#footer\">Contacto <span class=\"sr-only\">(current)</span></a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 31
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                                 <span class=\"hidden-xs\"> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                            ";
        } else {
            // line 34
            echo "                                <a href=\"/login\" style=\"margin-top: -20px;\" ><span class=\"hidden-xs\">Iniciar Sesion</span></a>
                            ";
        }
        // line 36
        echo "                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "                                <li class=\"user-header\">
                                    <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                                     <p> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                                     <small>Estudiante en Desarrollo de Software</small>
                                    </li>
                            <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"/profile/\" class=\"btn btn-default btn-flat\">Perfil</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"/logout\" class=\"btn btn-default btn-flat\">Cerrar Sesion</a>
                                    </div>
                                </li>
                            ";
        }
        // line 54
        echo "                            
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        </div>
    </nav>
</header>";
        
        $__internal_b74cf2e9c592d0c2d8d3ef7b7850931d4f1fa67ed43b5c4609c1e512c7608352->leave($__internal_b74cf2e9c592d0c2d8d3ef7b7850931d4f1fa67ed43b5c4609c1e512c7608352_prof);

        
        $__internal_8451d040a1d86269dcc1cc58c3e3215ad0b9cdc5ad90ee04e231cf346bad7884->leave($__internal_8451d040a1d86269dcc1cc58c3e3215ad0b9cdc5ad90ee04e231cf346bad7884_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 54,  86 => 42,  82 => 41,  79 => 40,  77 => 39,  72 => 36,  68 => 34,  63 => 32,  58 => 31,  56 => 30,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<header class=\"main-header\">
    <nav class=\"navbar \">
    <div class=\"main_menu_bg navbar-fixed-top wow slideInDown\" data-wow-duration=\"1s\">
    
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"/\" class=\"navbar-brand\"><b>Pizzeria</b>Nuestra</a>
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse pull-left\" id=\"navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"\"><a href=\"/pizza\">Pizzas <span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"\"><a href=\"/pizzapedido/cart\">Pedidos</a></li>
                    <li><a href=\"#footer\">Contacto <span class=\"sr-only\">(current)</span></a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle active\" data-toggle=\"dropdown\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <img src=\"{{ asset('asset/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                                 <span class=\"hidden-xs\"> {{ app.user.username }}</span>
                            {% else %}
                                <a href=\"/login\" style=\"margin-top: -20px;\" ><span class=\"hidden-xs\">Iniciar Sesion</span></a>
                            {% endif %}
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <li class=\"user-header\">
                                    <img src=\"{{ asset('asset/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                     <p> {{ app.user.username }}</p>
                                     <small>Estudiante en Desarrollo de Software</small>
                                    </li>
                            <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"/profile/\" class=\"btn btn-default btn-flat\">Perfil</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"/logout\" class=\"btn btn-default btn-flat\">Cerrar Sesion</a>
                                    </div>
                                </li>
                            {% endif %}                            
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        </div>
    </nav>
</header>", "default/header.html.twig", "/home/nico/pizzerianostra/app/Resources/views/default/header.html.twig");
    }
}
