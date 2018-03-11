<?php

/* default/header.html.twig */
class __TwigTemplate_b9e38e9620f41ab35bd7c28143de9175993d7aa9571d8f0db8ec40127a7210a8 extends Twig_Template
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
        $__internal_6fa4c20842aa96a467caf781718724cdf00523713aca5b4cf6416dce7ef7784b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa4c20842aa96a467caf781718724cdf00523713aca5b4cf6416dce7ef7784b->enter($__internal_6fa4c20842aa96a467caf781718724cdf00523713aca5b4cf6416dce7ef7784b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_f61441c5c9d105a15e021cc48a1a555c7217ab6e758747f67c7a57513a64f55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61441c5c9d105a15e021cc48a1a555c7217ab6e758747f67c7a57513a64f55f->enter($__internal_f61441c5c9d105a15e021cc48a1a555c7217ab6e758747f67c7a57513a64f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

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
                    <li class=\"\"><a href=\"/pizzapedido/cart\">Carrito</a></li>
                    ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                        <li class=\"\"><a href=\"/pedido\">Pedidos</a></li>
                    ";
        }
        // line 22
        echo "                    <li><a href=\"#footer\">Contacto <span class=\"sr-only\">(current)</span></a></li>

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
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                                 <span class=\"hidden-xs\"> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                            ";
        } else {
            // line 37
            echo "                                <a href=\"/login\" style=\"margin-top: -20px;\" ><span class=\"hidden-xs\">Iniciar Sesion</span></a>
                            ";
        }
        // line 39
        echo "                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                                <li class=\"user-header\">
                                    <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                                     <p> ";
            // line 45
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
        // line 57
        echo "                            
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        </div>
    </nav>
</header>";
        
        $__internal_6fa4c20842aa96a467caf781718724cdf00523713aca5b4cf6416dce7ef7784b->leave($__internal_6fa4c20842aa96a467caf781718724cdf00523713aca5b4cf6416dce7ef7784b_prof);

        
        $__internal_f61441c5c9d105a15e021cc48a1a555c7217ab6e758747f67c7a57513a64f55f->leave($__internal_f61441c5c9d105a15e021cc48a1a555c7217ab6e758747f67c7a57513a64f55f_prof);

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
        return array (  110 => 57,  94 => 45,  90 => 44,  87 => 43,  85 => 42,  80 => 39,  76 => 37,  71 => 35,  66 => 34,  64 => 33,  51 => 22,  47 => 20,  45 => 19,  25 => 1,);
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
                    <li class=\"\"><a href=\"/pizzapedido/cart\">Carrito</a></li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"\"><a href=\"/pedido\">Pedidos</a></li>
                    {% endif %}
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
</header>", "default/header.html.twig", "/home/nico/pizzeria/app/Resources/views/default/header.html.twig");
    }
}
