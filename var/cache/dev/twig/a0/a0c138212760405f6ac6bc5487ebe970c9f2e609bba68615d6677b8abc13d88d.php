<?php

/* pizza/index.html.twig */
class __TwigTemplate_2395f16321ed24fc9108d98d84fe4f7bffce11766dafd7188f18e0ca58ee0e05 extends Twig_Template
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
        $__internal_0021f2161418132cbe0f989e3319636ca572a847eafc1fe44d519fdb22cb6650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0021f2161418132cbe0f989e3319636ca572a847eafc1fe44d519fdb22cb6650->enter($__internal_0021f2161418132cbe0f989e3319636ca572a847eafc1fe44d519fdb22cb6650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $__internal_3d65f717f507a2d8425d6161703700a7f9a73284460db0083edd83a2f57c7ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d65f717f507a2d8425d6161703700a7f9a73284460db0083edd83a2f57c7ee7->enter($__internal_3d65f717f507a2d8425d6161703700a7f9a73284460db0083edd83a2f57c7ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0021f2161418132cbe0f989e3319636ca572a847eafc1fe44d519fdb22cb6650->leave($__internal_0021f2161418132cbe0f989e3319636ca572a847eafc1fe44d519fdb22cb6650_prof);

        
        $__internal_3d65f717f507a2d8425d6161703700a7f9a73284460db0083edd83a2f57c7ee7->leave($__internal_3d65f717f507a2d8425d6161703700a7f9a73284460db0083edd83a2f57c7ee7_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_6b2158104d2929472b844f5e9b9bf7d723a8c509fb7d53ddb76df5db466e1ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2158104d2929472b844f5e9b9bf7d723a8c509fb7d53ddb76df5db466e1ea6->enter($__internal_6b2158104d2929472b844f5e9b9bf7d723a8c509fb7d53ddb76df5db466e1ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_ed5b58d48c2637f935ffb48e2f8b7a706d8705e402970fa3dc10487232a03e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5b58d48c2637f935ffb48e2f8b7a706d8705e402970fa3dc10487232a03e2f->enter($__internal_ed5b58d48c2637f935ffb48e2f8b7a706d8705e402970fa3dc10487232a03e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_ed5b58d48c2637f935ffb48e2f8b7a706d8705e402970fa3dc10487232a03e2f->leave($__internal_ed5b58d48c2637f935ffb48e2f8b7a706d8705e402970fa3dc10487232a03e2f_prof);

        
        $__internal_6b2158104d2929472b844f5e9b9bf7d723a8c509fb7d53ddb76df5db466e1ea6->leave($__internal_6b2158104d2929472b844f5e9b9bf7d723a8c509fb7d53ddb76df5db466e1ea6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_de1279848f4c8daf0a115dd350cbb17cd26bbd205797d084b7737abf057f5913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1279848f4c8daf0a115dd350cbb17cd26bbd205797d084b7737abf057f5913->enter($__internal_de1279848f4c8daf0a115dd350cbb17cd26bbd205797d084b7737abf057f5913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e11e9696ca56bff4880429787e652b693c1565f1089e2b5f12bbcadd1c2a2063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11e9696ca56bff4880429787e652b693c1565f1089e2b5f12bbcadd1c2a2063->enter($__internal_e11e9696ca56bff4880429787e652b693c1565f1089e2b5f12bbcadd1c2a2063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e11e9696ca56bff4880429787e652b693c1565f1089e2b5f12bbcadd1c2a2063->leave($__internal_e11e9696ca56bff4880429787e652b693c1565f1089e2b5f12bbcadd1c2a2063_prof);

        
        $__internal_de1279848f4c8daf0a115dd350cbb17cd26bbd205797d084b7737abf057f5913->leave($__internal_de1279848f4c8daf0a115dd350cbb17cd26bbd205797d084b7737abf057f5913_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1cfb4f1026bd04f392ecc0ba0b4b552abbf7453650fb4de6d0102016a21d7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cfb4f1026bd04f392ecc0ba0b4b552abbf7453650fb4de6d0102016a21d7f2->enter($__internal_d1cfb4f1026bd04f392ecc0ba0b4b552abbf7453650fb4de6d0102016a21d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c5075e1a8df0f7b1d1ebe83b07d5c2f56c1362d13278cbb518ca46bdcedde78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5075e1a8df0f7b1d1ebe83b07d5c2f56c1362d13278cbb518ca46bdcedde78->enter($__internal_8c5075e1a8df0f7b1d1ebe83b07d5c2f56c1362d13278cbb518ca46bdcedde78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                    bootstrap_alert.success('Inisiar Sesion para realizar un pedido');
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
        
        $__internal_8c5075e1a8df0f7b1d1ebe83b07d5c2f56c1362d13278cbb518ca46bdcedde78->leave($__internal_8c5075e1a8df0f7b1d1ebe83b07d5c2f56c1362d13278cbb518ca46bdcedde78_prof);

        
        $__internal_d1cfb4f1026bd04f392ecc0ba0b4b552abbf7453650fb4de6d0102016a21d7f2->leave($__internal_d1cfb4f1026bd04f392ecc0ba0b4b552abbf7453650fb4de6d0102016a21d7f2_prof);

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
                    bootstrap_alert.success('Inisiar Sesion para realizar un pedido');
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
