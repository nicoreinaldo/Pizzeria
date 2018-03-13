<?php

/* :default:asside.html.twig */
class __TwigTemplate_94470b607bcc35ba040086a8606411ffc3c481f5913533f0ae6966166699a9bd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:asside.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:asside.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <form action=\"#\" class=\"sidebar-form\" method=\"get\">
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"q\" placeholder=\"Search...\" type=\"text\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-flat\" id=\"search-btn\" name=\"search\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
            </div>
        </form>
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">MENU PRINCIPAL</li>
            <li class=\"\">
                <a href=\"pizza\">
                    <i class=\"fa ion-pie-graph\"></i>
                    <span>Productos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-th\"></i>
                    <span>Pedidos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"pizzapedido/new\">
                            <i class=\"fa fa-circle-o\"></i>
                            Nuevo
                        </a>
                    </li>
                    <li>
                        <a href=\"pizzapedido/\">
                            <i class=\"fa fa-circle-o\"></i>
                            Ver todos
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":default:asside.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <form action=\"#\" class=\"sidebar-form\" method=\"get\">
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"q\" placeholder=\"Search...\" type=\"text\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-flat\" id=\"search-btn\" name=\"search\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
            </div>
        </form>
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">MENU PRINCIPAL</li>
            <li class=\"\">
                <a href=\"pizza\">
                    <i class=\"fa ion-pie-graph\"></i>
                    <span>Productos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-th\"></i>
                    <span>Pedidos</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"pizzapedido/new\">
                            <i class=\"fa fa-circle-o\"></i>
                            Nuevo
                        </a>
                    </li>
                    <li>
                        <a href=\"pizzapedido/\">
                            <i class=\"fa fa-circle-o\"></i>
                            Ver todos
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
</aside>", ":default:asside.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/default/asside.html.twig");
    }
}
