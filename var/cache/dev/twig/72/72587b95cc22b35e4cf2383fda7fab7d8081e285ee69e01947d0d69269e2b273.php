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
        $__internal_2fe21a2dae84c93cd85326ba425df4c6ac6e6591dc78796001c1ae4efa166a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe21a2dae84c93cd85326ba425df4c6ac6e6591dc78796001c1ae4efa166a0c->enter($__internal_2fe21a2dae84c93cd85326ba425df4c6ac6e6591dc78796001c1ae4efa166a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $__internal_1a23e06252680eb9e6f4b61b81add43f04179670e61cb34e9fe8bf4217743f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a23e06252680eb9e6f4b61b81add43f04179670e61cb34e9fe8bf4217743f8b->enter($__internal_1a23e06252680eb9e6f4b61b81add43f04179670e61cb34e9fe8bf4217743f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe21a2dae84c93cd85326ba425df4c6ac6e6591dc78796001c1ae4efa166a0c->leave($__internal_2fe21a2dae84c93cd85326ba425df4c6ac6e6591dc78796001c1ae4efa166a0c_prof);

        
        $__internal_1a23e06252680eb9e6f4b61b81add43f04179670e61cb34e9fe8bf4217743f8b->leave($__internal_1a23e06252680eb9e6f4b61b81add43f04179670e61cb34e9fe8bf4217743f8b_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_4c4ac40b79d83f42bfc39812fca44c2cbfde32b210d6b55baa03eec9f425799c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4ac40b79d83f42bfc39812fca44c2cbfde32b210d6b55baa03eec9f425799c->enter($__internal_4c4ac40b79d83f42bfc39812fca44c2cbfde32b210d6b55baa03eec9f425799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_c5f15d8e3f0db97df1fcf55061f3769813464fd28252ed1dba2683e73f7dbe6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f15d8e3f0db97df1fcf55061f3769813464fd28252ed1dba2683e73f7dbe6e->enter($__internal_c5f15d8e3f0db97df1fcf55061f3769813464fd28252ed1dba2683e73f7dbe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_c5f15d8e3f0db97df1fcf55061f3769813464fd28252ed1dba2683e73f7dbe6e->leave($__internal_c5f15d8e3f0db97df1fcf55061f3769813464fd28252ed1dba2683e73f7dbe6e_prof);

        
        $__internal_4c4ac40b79d83f42bfc39812fca44c2cbfde32b210d6b55baa03eec9f425799c->leave($__internal_4c4ac40b79d83f42bfc39812fca44c2cbfde32b210d6b55baa03eec9f425799c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_724c1a86f8a1b2c363d6e9e54396a12fc32c8a7ea20436e8671c59ddd5fed542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724c1a86f8a1b2c363d6e9e54396a12fc32c8a7ea20436e8671c59ddd5fed542->enter($__internal_724c1a86f8a1b2c363d6e9e54396a12fc32c8a7ea20436e8671c59ddd5fed542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40dbf7295aa2d531fec4c27ecb2887809e6f302dd5ed8a544345fc58abf6beb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dbf7295aa2d531fec4c27ecb2887809e6f302dd5ed8a544345fc58abf6beb1->enter($__internal_40dbf7295aa2d531fec4c27ecb2887809e6f302dd5ed8a544345fc58abf6beb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <section class=\"content-header\">
        <h1> Pizzas
            <small>Menu con todas las variedades de pizzas disponibles</small>
        </h1>
        <div id = \"alert_placeholder\"> </div>
        <div id = \"alerta\"> </div>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "                    <div class=\"btn-group\">
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_new");
            echo "\" class=\"btn btn-success\">Agregar variedad de Pizza</a>
                    </div>
                ";
        }
        // line 25
        echo "                <div class=\"btn-group\">
                    <a href=\"";
        // line 26
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pizzas"] ?? $this->getContext($context, "pizzas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 44
            echo "                                        <tr>
                                            <div class=\"col-md-4 portfolio-grids\">
                                                <div class=\"sc-product-item thumbnail\">
                                                    <div class=\"caption\">
                                                        <h4 data-name=\"product_name\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</h4>
                                                        <p data-name=\"product_desc\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</p>
                                                        <hr class=\"line\">
                                                        <div>
                                                            <h4 class=\"price pull-left espacio\">\$";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</h4>
                                                            ";
            // line 53
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 54
                echo "                                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_show", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" >Ver</a>
                                                                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Editar</a>
                                                            ";
            }
            // line 57
            echo "                                                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 58
                echo "                                                                <a type=\"button\"  id = \"click\" class=\"sc-add-to-cart btn btn-success btn-sm pull-right\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_agregar_pizza", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\"  >Agregar al Carrito</a>
                                                            ";
            } else {
                // line 60
                echo "                                                                <input type=\"button\" value=\"Agregar al Carrito\" id = \"clickme\" Class=\" btn btn-success btn-sm pull-right\"   class=\"btn btn-primary\" > </a>
                                                            
                                                            ";
            }
            // line 63
            echo "                                                            
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
        // line 72
        echo "                                </div>
                            </div>
    </section>

";
        
        $__internal_40dbf7295aa2d531fec4c27ecb2887809e6f302dd5ed8a544345fc58abf6beb1->leave($__internal_40dbf7295aa2d531fec4c27ecb2887809e6f302dd5ed8a544345fc58abf6beb1_prof);

        
        $__internal_724c1a86f8a1b2c363d6e9e54396a12fc32c8a7ea20436e8671c59ddd5fed542->leave($__internal_724c1a86f8a1b2c363d6e9e54396a12fc32c8a7ea20436e8671c59ddd5fed542_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d012de3c2751a4250884c85ba4878a246323d4b90ddbd8feccc152279f47d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d012de3c2751a4250884c85ba4878a246323d4b90ddbd8feccc152279f47d8b->enter($__internal_7d012de3c2751a4250884c85ba4878a246323d4b90ddbd8feccc152279f47d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fefaa4abfceba57b3da884ae90f9c31633751b982ebc4ca04640dcc865a2de32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefaa4abfceba57b3da884ae90f9c31633751b982ebc4ca04640dcc865a2de32->enter($__internal_fefaa4abfceba57b3da884ae90f9c31633751b982ebc4ca04640dcc865a2de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script>
        bootstrap_alert = function() {}
        bootstrap_alert.warning = function(message) {
                    \$('#alert_placeholder').html('<div class=\"alert alert-danger fade in\"><a class=\"close\" data-dismiss=\"alert\">×</a><span>'+message+'</span></div>')
                }

        \$('#clickme').on('click', function() {
                    bootstrap_alert.warning('Inisiar Sesion para realizar un pedido');
        });

    </script>
        <script>
        bootstrap_alert = function() {}
        bootstrap_alert.success = function(message) {
                    \$('#alerta').html('<div class=\"alert alert-success fade in\"><a class=\"close\" data-dismiss=\"alert\">×</a><span>'+message+'</span></div>')
                }

                    \$('#click').on('click', function() {
                    bootstrap_alert.success('Pizza Agregada al carrito');
        });

    </script>

    </script>
";
        
        $__internal_fefaa4abfceba57b3da884ae90f9c31633751b982ebc4ca04640dcc865a2de32->leave($__internal_fefaa4abfceba57b3da884ae90f9c31633751b982ebc4ca04640dcc865a2de32_prof);

        
        $__internal_7d012de3c2751a4250884c85ba4878a246323d4b90ddbd8feccc152279f47d8b->leave($__internal_7d012de3c2751a4250884c85ba4878a246323d4b90ddbd8feccc152279f47d8b_prof);

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
        return array (  208 => 79,  199 => 78,  185 => 72,  171 => 63,  166 => 60,  160 => 58,  157 => 57,  152 => 55,  147 => 54,  145 => 53,  141 => 52,  135 => 49,  131 => 48,  125 => 44,  121 => 43,  101 => 26,  98 => 25,  92 => 22,  89 => 21,  87 => 20,  76 => 11,  67 => 10,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
        <div id = \"alert_placeholder\"> </div>
        <div id = \"alerta\"> </div>
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
                                                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                                                <a type=\"button\"  id = \"click\" class=\"sc-add-to-cart btn btn-success btn-sm pull-right\"  href=\"{{ path('pizzapedido_agregar_pizza', { 'idpizza': pizza.idpizza }) }}\"  >Agregar al Carrito</a>
                                                            {% else %}
                                                                <input type=\"button\" value=\"Agregar al Carrito\" id = \"clickme\" Class=\" btn btn-success btn-sm pull-right\"   class=\"btn btn-primary\" > </a>
                                                            
                                                            {% endif %}
                                                            
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script>
        bootstrap_alert = function() {}
        bootstrap_alert.warning = function(message) {
                    \$('#alert_placeholder').html('<div class=\"alert alert-danger fade in\"><a class=\"close\" data-dismiss=\"alert\">×</a><span>'+message+'</span></div>')
                }

        \$('#clickme').on('click', function() {
                    bootstrap_alert.warning('Inisiar Sesion para realizar un pedido');
        });

    </script>
        <script>
        bootstrap_alert = function() {}
        bootstrap_alert.success = function(message) {
                    \$('#alerta').html('<div class=\"alert alert-success fade in\"><a class=\"close\" data-dismiss=\"alert\">×</a><span>'+message+'</span></div>')
                }

                    \$('#click').on('click', function() {
                    bootstrap_alert.success('Pizza Agregada al carrito');
        });

    </script>

    </script>
{% endblock %}
", "pizza/index.html.twig", "/home/nico/pizzeria/app/Resources/views/pizza/index.html.twig");
    }
}
