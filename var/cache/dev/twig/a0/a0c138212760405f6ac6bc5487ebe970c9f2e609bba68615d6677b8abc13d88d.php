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
        $__internal_6afe25e7025a03f41b6098725f605eb20751ea94acf16a05796b6c052511d3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afe25e7025a03f41b6098725f605eb20751ea94acf16a05796b6c052511d3d3->enter($__internal_6afe25e7025a03f41b6098725f605eb20751ea94acf16a05796b6c052511d3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $__internal_495b65445b19badbea7dfe418decd9fc8e15b664b1fe0cb39a46b70c5b796bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495b65445b19badbea7dfe418decd9fc8e15b664b1fe0cb39a46b70c5b796bcc->enter($__internal_495b65445b19badbea7dfe418decd9fc8e15b664b1fe0cb39a46b70c5b796bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afe25e7025a03f41b6098725f605eb20751ea94acf16a05796b6c052511d3d3->leave($__internal_6afe25e7025a03f41b6098725f605eb20751ea94acf16a05796b6c052511d3d3_prof);

        
        $__internal_495b65445b19badbea7dfe418decd9fc8e15b664b1fe0cb39a46b70c5b796bcc->leave($__internal_495b65445b19badbea7dfe418decd9fc8e15b664b1fe0cb39a46b70c5b796bcc_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_a91a28d4d92f464516b8fb4ffae68dbe3fc8cc3ce2c574b27de74c06e00b31e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91a28d4d92f464516b8fb4ffae68dbe3fc8cc3ce2c574b27de74c06e00b31e4->enter($__internal_a91a28d4d92f464516b8fb4ffae68dbe3fc8cc3ce2c574b27de74c06e00b31e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_41cc5da11bcd90de029bd39c9ac1dcd29c6206b13228fbd23c4cf830da5f7b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cc5da11bcd90de029bd39c9ac1dcd29c6206b13228fbd23c4cf830da5f7b88->enter($__internal_41cc5da11bcd90de029bd39c9ac1dcd29c6206b13228fbd23c4cf830da5f7b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_41cc5da11bcd90de029bd39c9ac1dcd29c6206b13228fbd23c4cf830da5f7b88->leave($__internal_41cc5da11bcd90de029bd39c9ac1dcd29c6206b13228fbd23c4cf830da5f7b88_prof);

        
        $__internal_a91a28d4d92f464516b8fb4ffae68dbe3fc8cc3ce2c574b27de74c06e00b31e4->leave($__internal_a91a28d4d92f464516b8fb4ffae68dbe3fc8cc3ce2c574b27de74c06e00b31e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_39040c5377320fdde9488c8b2e7d9fd56bcbcf7c5d44940cae420b72c72ac410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39040c5377320fdde9488c8b2e7d9fd56bcbcf7c5d44940cae420b72c72ac410->enter($__internal_39040c5377320fdde9488c8b2e7d9fd56bcbcf7c5d44940cae420b72c72ac410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b8591cf89ba8089e1a16087fb5b6549461c3e1dfd08be8d714f77636b60a9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8591cf89ba8089e1a16087fb5b6549461c3e1dfd08be8d714f77636b60a9e6->enter($__internal_7b8591cf89ba8089e1a16087fb5b6549461c3e1dfd08be8d714f77636b60a9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b8591cf89ba8089e1a16087fb5b6549461c3e1dfd08be8d714f77636b60a9e6->leave($__internal_7b8591cf89ba8089e1a16087fb5b6549461c3e1dfd08be8d714f77636b60a9e6_prof);

        
        $__internal_39040c5377320fdde9488c8b2e7d9fd56bcbcf7c5d44940cae420b72c72ac410->leave($__internal_39040c5377320fdde9488c8b2e7d9fd56bcbcf7c5d44940cae420b72c72ac410_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_513d24e7282242e94106cb8d71025c9bbb97e7910cd411ae6036b354ad72d080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513d24e7282242e94106cb8d71025c9bbb97e7910cd411ae6036b354ad72d080->enter($__internal_513d24e7282242e94106cb8d71025c9bbb97e7910cd411ae6036b354ad72d080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1faeab2ed25d7f7ade4a30e3c8ce54676426a20c36d5ddf8eb497169a5680b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1faeab2ed25d7f7ade4a30e3c8ce54676426a20c36d5ddf8eb497169a5680b8->enter($__internal_c1faeab2ed25d7f7ade4a30e3c8ce54676426a20c36d5ddf8eb497169a5680b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c1faeab2ed25d7f7ade4a30e3c8ce54676426a20c36d5ddf8eb497169a5680b8->leave($__internal_c1faeab2ed25d7f7ade4a30e3c8ce54676426a20c36d5ddf8eb497169a5680b8_prof);

        
        $__internal_513d24e7282242e94106cb8d71025c9bbb97e7910cd411ae6036b354ad72d080->leave($__internal_513d24e7282242e94106cb8d71025c9bbb97e7910cd411ae6036b354ad72d080_prof);

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
