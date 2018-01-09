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
        $__internal_2d50a5200813176b9819bc5c2d37337b7500fedc45d57ebffc06185c92f5ea49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d50a5200813176b9819bc5c2d37337b7500fedc45d57ebffc06185c92f5ea49->enter($__internal_2d50a5200813176b9819bc5c2d37337b7500fedc45d57ebffc06185c92f5ea49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_55ea0b6b72b14180b89ea23496e2818cf9690b8af2e95bbb5d7025a4729514b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ea0b6b72b14180b89ea23496e2818cf9690b8af2e95bbb5d7025a4729514b4->enter($__internal_55ea0b6b72b14180b89ea23496e2818cf9690b8af2e95bbb5d7025a4729514b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

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
                            <!-- The user image in the navbar-->
                            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>

                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                <p>  ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                    <small>Estudiante en Desarrollo de Software</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"/profile/\" class=\"btn btn-default btn-flat\">Perfil</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"/logout\" class=\"btn btn-default btn-flat\">Cerrar Ses   ion</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        </div>
    </nav>
</header>";
        
        $__internal_2d50a5200813176b9819bc5c2d37337b7500fedc45d57ebffc06185c92f5ea49->leave($__internal_2d50a5200813176b9819bc5c2d37337b7500fedc45d57ebffc06185c92f5ea49_prof);

        
        $__internal_55ea0b6b72b14180b89ea23496e2818cf9690b8af2e95bbb5d7025a4729514b4->leave($__internal_55ea0b6b72b14180b89ea23496e2818cf9690b8af2e95bbb5d7025a4729514b4_prof);

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
        return array (  76 => 41,  72 => 40,  63 => 34,  58 => 32,  25 => 1,);
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
                            <!-- The user image in the navbar-->
                            <img src=\"{{ asset('asset/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">{{ app.user.username }}</span>

                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"{{ asset('asset/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                <p>  {{ app.user.username }}
                                    <small>Estudiante en Desarrollo de Software</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"/profile/\" class=\"btn btn-default btn-flat\">Perfil</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"/logout\" class=\"btn btn-default btn-flat\">Cerrar Ses   ion</a>
                                </div>
                            </li>
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
