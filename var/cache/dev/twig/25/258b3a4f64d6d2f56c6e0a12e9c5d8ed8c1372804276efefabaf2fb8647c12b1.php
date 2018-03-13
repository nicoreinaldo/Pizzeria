<?php

/* :pizza:index.html.twig */
class __TwigTemplate_fcf12de43601c43956ceead8769df52cec1db748e61322390184e2cce1ba2809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizza:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 27
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_cart");
            echo "\" class=\"btn btn-danger\">Ver Carrito</a>
                    ";
        } else {
            // line 29
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
            echo "\"</a>
                    ";
        }
        // line 31
        echo "                </div>
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pizzas"] ?? $this->getContext($context, "pizzas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 48
            echo "                                        <tr>
                                            <div class=\"col-md-4 portfolio-grids\">
                                                <div class=\"sc-product-item thumbnail\">
                                                    <div class=\"caption\">
                                                        <h4 data-name=\"product_name\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</h4>
                                                        <p data-name=\"product_desc\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</p>
                                                        <hr class=\"line\">
                                                        <div>
                                                            <h4 class=\"price pull-left espacio\">\$";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</h4>
                                                            ";
            // line 57
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_show", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" >Ver</a>
                                                                <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Editar</a>
                                                            ";
            }
            // line 61
            echo "                                                            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 62
                echo "                                                                <a type=\"button\"  id = \"click\" class=\"sc-add-to-cart btn btn-success btn-sm pull-right\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_agregar_pizza", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\"  >Agregar al Carrito</a>
                                                            ";
            } else {
                // line 64
                echo "                                                                <input type=\"button\" value=\"Agregar al Carrito\" id = \"clickme\" Class=\" btn btn-success btn-sm pull-right\"   class=\"btn btn-primary\" > </a>
                                                            
                                                            ";
            }
            // line 67
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
        // line 76
        echo "                                </div>
                            </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":pizza:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 83,  211 => 82,  197 => 76,  183 => 67,  178 => 64,  172 => 62,  169 => 61,  164 => 59,  159 => 58,  157 => 57,  153 => 56,  147 => 53,  143 => 52,  137 => 48,  133 => 47,  115 => 31,  109 => 29,  103 => 27,  101 => 26,  98 => 25,  92 => 22,  89 => 21,  87 => 20,  76 => 11,  67 => 10,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <a href=\"{{ path('pizzapedido_cart') }}\" class=\"btn btn-danger\">Ver Carrito</a>
                    {% else %}
                        <a href=\"{{ path('cliente_index') }}\"</a>
                    {% endif %}
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
", ":pizza:index.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/pizza/index.html.twig");
    }
}
