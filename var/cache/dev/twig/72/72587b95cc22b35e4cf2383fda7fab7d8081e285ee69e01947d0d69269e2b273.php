<?php

/* pizza/index.html.twig */
class __TwigTemplate_e0ac6fc6d241e980145a62d0be52f506f06d84433d322dca600faebae474ac8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizza/index.html.twig", 1);
        $this->blocks = array(
            'styleshetts' => array($this, 'block_styleshetts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33df75666c30726ffc2cd900bdb1865b34dc9427271249225979367c586fc2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33df75666c30726ffc2cd900bdb1865b34dc9427271249225979367c586fc2f7->enter($__internal_33df75666c30726ffc2cd900bdb1865b34dc9427271249225979367c586fc2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $__internal_6e985815be30e439f054d4b8a1559f55eeb75ba713f70ccb1ae90c51e6bfa2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e985815be30e439f054d4b8a1559f55eeb75ba713f70ccb1ae90c51e6bfa2d8->enter($__internal_6e985815be30e439f054d4b8a1559f55eeb75ba713f70ccb1ae90c51e6bfa2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33df75666c30726ffc2cd900bdb1865b34dc9427271249225979367c586fc2f7->leave($__internal_33df75666c30726ffc2cd900bdb1865b34dc9427271249225979367c586fc2f7_prof);

        
        $__internal_6e985815be30e439f054d4b8a1559f55eeb75ba713f70ccb1ae90c51e6bfa2d8->leave($__internal_6e985815be30e439f054d4b8a1559f55eeb75ba713f70ccb1ae90c51e6bfa2d8_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_55cf0aa37ca3a87f71b26b19ec40e0b3d35a41c747d4c609c9162a48a68152b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55cf0aa37ca3a87f71b26b19ec40e0b3d35a41c747d4c609c9162a48a68152b5->enter($__internal_55cf0aa37ca3a87f71b26b19ec40e0b3d35a41c747d4c609c9162a48a68152b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_038c6952402e98d58903302d625f638acf5df509837554aad82c6c3b7d52b2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038c6952402e98d58903302d625f638acf5df509837554aad82c6c3b7d52b2b6->enter($__internal_038c6952402e98d58903302d625f638acf5df509837554aad82c6c3b7d52b2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_038c6952402e98d58903302d625f638acf5df509837554aad82c6c3b7d52b2b6->leave($__internal_038c6952402e98d58903302d625f638acf5df509837554aad82c6c3b7d52b2b6_prof);

        
        $__internal_55cf0aa37ca3a87f71b26b19ec40e0b3d35a41c747d4c609c9162a48a68152b5->leave($__internal_55cf0aa37ca3a87f71b26b19ec40e0b3d35a41c747d4c609c9162a48a68152b5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc36d0887a4b93b8b048327313f7c5e71a04ce05b6b2e0ff0f0039e4d2c41b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc36d0887a4b93b8b048327313f7c5e71a04ce05b6b2e0ff0f0039e4d2c41b33->enter($__internal_cc36d0887a4b93b8b048327313f7c5e71a04ce05b6b2e0ff0f0039e4d2c41b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eb47b524fe60009d67a20ca26511ba6042276ad0ef354546b2e97ca09dadf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb47b524fe60009d67a20ca26511ba6042276ad0ef354546b2e97ca09dadf8e->enter($__internal_7eb47b524fe60009d67a20ca26511ba6042276ad0ef354546b2e97ca09dadf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <section class=\"content-header\">
        <h1> Pizzas
            <small>Menu con todas las variedades de pizzas disponibles</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                    <div class=\"btn-group\">
                        <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_new");
            echo "\" class=\"btn btn-success\">Agregar variedad de Pizza</a>
                    </div>
                ";
        }
        // line 22
        echo "                <div class=\"btn-group\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_cart");
        echo "\" class=\"btn btn-danger\">Ver Carrito</a>
                </div>
            </div>
        </ol>
    </section>

    <br>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"gallery\" class=\"portfolio\">
                    <div class=\"container\">
                        <div class=\"sap_tabs\">
                            <div id=\"horizontalTab\">
                                <div class=\"resp-tabs-container\">
                                    <div class=\"tab-1 resp-tab-content\">

                                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pizzas"] ?? $this->getContext($context, "pizzas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 41
            echo "                                        <tr>
                                            <div class=\"col-md-4 portfolio-grids\">
                                                <div class=\"sc-product-item thumbnail\">
                                                    <div class=\"caption\">
                                                        <h4 data-name=\"product_name\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</h4>
                                                        <p data-name=\"product_desc\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</p>
                                                        <hr class=\"line\">
                                                        <div>
                                                            <h4 class=\"price pull-left espacio\">\$";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</h4>
                                                            ";
            // line 50
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 51
                echo "                                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_show", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" >Ver</a>
                                                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Editar</a>
                                                            ";
            }
            // line 54
            echo "                                                            <a class=\"sc-add-to-cart btn btn-success btn-sm pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_agregar_pizza", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Agregar al carrito</a>
                                                        </div>
                                                        <div class=\"clearfix\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </div>
                            </div>
    </section>

";
        
        $__internal_7eb47b524fe60009d67a20ca26511ba6042276ad0ef354546b2e97ca09dadf8e->leave($__internal_7eb47b524fe60009d67a20ca26511ba6042276ad0ef354546b2e97ca09dadf8e_prof);

        
        $__internal_cc36d0887a4b93b8b048327313f7c5e71a04ce05b6b2e0ff0f0039e4d2c41b33->leave($__internal_cc36d0887a4b93b8b048327313f7c5e71a04ce05b6b2e0ff0f0039e4d2c41b33_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da289b80e072d8a9466b9d01911b4c542c8ed3792a2fd76f8031d3f6094b5d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da289b80e072d8a9466b9d01911b4c542c8ed3792a2fd76f8031d3f6094b5d38->enter($__internal_da289b80e072d8a9466b9d01911b4c542c8ed3792a2fd76f8031d3f6094b5d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a9a5ee3a55ff3e4f3a5ef4823e9a45fa69d3f2ba50da454f1a25dd11bba259df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a5ee3a55ff3e4f3a5ef4823e9a45fa69d3f2ba50da454f1a25dd11bba259df->enter($__internal_a9a5ee3a55ff3e4f3a5ef4823e9a45fa69d3f2ba50da454f1a25dd11bba259df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_a9a5ee3a55ff3e4f3a5ef4823e9a45fa69d3f2ba50da454f1a25dd11bba259df->leave($__internal_a9a5ee3a55ff3e4f3a5ef4823e9a45fa69d3f2ba50da454f1a25dd11bba259df_prof);

        
        $__internal_da289b80e072d8a9466b9d01911b4c542c8ed3792a2fd76f8031d3f6094b5d38->leave($__internal_da289b80e072d8a9466b9d01911b4c542c8ed3792a2fd76f8031d3f6094b5d38_prof);

    }

    public function getTemplateName()
    {
        return "pizza/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  185 => 69,  171 => 63,  155 => 54,  150 => 52,  145 => 51,  143 => 50,  139 => 49,  133 => 46,  129 => 45,  123 => 41,  119 => 40,  99 => 23,  96 => 22,  90 => 19,  87 => 18,  85 => 17,  76 => 10,  67 => 9,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block styleshetts %}
    {# el parent es una herencia #}
    {{  parent() }}

{% endblock %}

{% block body %}

    <section class=\"content-header\">
        <h1> Pizzas
            <small>Menu con todas las variedades de pizzas disponibles</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"btn-group\">
                        <a href=\"{{ path('pizza_new') }}\" class=\"btn btn-success\">Agregar variedad de Pizza</a>
                    </div>
                {% endif %}
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizzapedido_cart') }}\" class=\"btn btn-danger\">Ver Carrito</a>
                </div>
            </div>
        </ol>
    </section>

    <br>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"gallery\" class=\"portfolio\">
                    <div class=\"container\">
                        <div class=\"sap_tabs\">
                            <div id=\"horizontalTab\">
                                <div class=\"resp-tabs-container\">
                                    <div class=\"tab-1 resp-tab-content\">

                                        {% for pizza in pizzas %}
                                        <tr>
                                            <div class=\"col-md-4 portfolio-grids\">
                                                <div class=\"sc-product-item thumbnail\">
                                                    <div class=\"caption\">
                                                        <h4 data-name=\"product_name\">{{ pizza.nombre }}</h4>
                                                        <p data-name=\"product_desc\">{{ pizza.descripcion }}</p>
                                                        <hr class=\"line\">
                                                        <div>
                                                            <h4 class=\"price pull-left espacio\">\${{ pizza.precio }}</h4>
                                                            {% if is_granted('ROLE_ADMIN') %}
                                                                <a href=\"{{ path('pizza_show', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\" >Ver</a>
                                                                <a href=\"{{ path('pizza_edit', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\">Editar</a>
                                                            {% endif %}
                                                            <a class=\"sc-add-to-cart btn btn-success btn-sm pull-right\" href=\"{{ path('pizzapedido_agregar_pizza', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\" >Agregar al carrito</a>
                                                        </div>
                                                        <div class=\"clearfix\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </tr>
                                    {% endfor %}
                                </div>
                            </div>
    </section>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "pizza/index.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/pizza/index.html.twig");
    }
}
