<?php

/* :pizza:index.html.twig */
class __TwigTemplate_e0ac6fc6d241e980145a62d0be52f506f06d84433d322dca600faebae474ac8e extends Twig_Template
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
        $__internal_03a6a24eddea0318c1920078b74e2147303e22e2276f6bd3b0cb110219fd1a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a6a24eddea0318c1920078b74e2147303e22e2276f6bd3b0cb110219fd1a11->enter($__internal_03a6a24eddea0318c1920078b74e2147303e22e2276f6bd3b0cb110219fd1a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $__internal_d1d114b8156fbac20df167f701516abf49d1bc279b0715b0ed26f3a7222049d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d114b8156fbac20df167f701516abf49d1bc279b0715b0ed26f3a7222049d7->enter($__internal_d1d114b8156fbac20df167f701516abf49d1bc279b0715b0ed26f3a7222049d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a6a24eddea0318c1920078b74e2147303e22e2276f6bd3b0cb110219fd1a11->leave($__internal_03a6a24eddea0318c1920078b74e2147303e22e2276f6bd3b0cb110219fd1a11_prof);

        
        $__internal_d1d114b8156fbac20df167f701516abf49d1bc279b0715b0ed26f3a7222049d7->leave($__internal_d1d114b8156fbac20df167f701516abf49d1bc279b0715b0ed26f3a7222049d7_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_cce78aff9b4da281178a825c99b84e20c671e2fe1aba5d982d3789798c965401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce78aff9b4da281178a825c99b84e20c671e2fe1aba5d982d3789798c965401->enter($__internal_cce78aff9b4da281178a825c99b84e20c671e2fe1aba5d982d3789798c965401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_42f1bb04b0f4bb9655abec41ada66cfc6979def001f219f20035f3b8e7b2f4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f1bb04b0f4bb9655abec41ada66cfc6979def001f219f20035f3b8e7b2f4f4->enter($__internal_42f1bb04b0f4bb9655abec41ada66cfc6979def001f219f20035f3b8e7b2f4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_42f1bb04b0f4bb9655abec41ada66cfc6979def001f219f20035f3b8e7b2f4f4->leave($__internal_42f1bb04b0f4bb9655abec41ada66cfc6979def001f219f20035f3b8e7b2f4f4_prof);

        
        $__internal_cce78aff9b4da281178a825c99b84e20c671e2fe1aba5d982d3789798c965401->leave($__internal_cce78aff9b4da281178a825c99b84e20c671e2fe1aba5d982d3789798c965401_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea62411e623c8b0b3a82a7d6d930ed33a5c402166641af0fe57aa83be1046cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea62411e623c8b0b3a82a7d6d930ed33a5c402166641af0fe57aa83be1046cbb->enter($__internal_ea62411e623c8b0b3a82a7d6d930ed33a5c402166641af0fe57aa83be1046cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1976c4115c34b330b76173ddcba613d89404229ed42aaf7e719ea3874235b011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1976c4115c34b330b76173ddcba613d89404229ed42aaf7e719ea3874235b011->enter($__internal_1976c4115c34b330b76173ddcba613d89404229ed42aaf7e719ea3874235b011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <section class=\"content-header\">
        <h1> Pizzas
            <small>Menu con todas las variedades de pizzas disponibles</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_new");
        echo "\" class=\"btn btn-success\">Agregar variedad de Pizza</a>
                </div>
                <div class=\"btn-group\">
                    <a href=\"";
        // line 21
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pizzas"] ?? $this->getContext($context, "pizzas")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 39
            echo "            <tr>

                <div class=\"col-md-4 portfolio-grids\">
                    <div class=\"sc-product-item thumbnail\">

                 ";
            // line 45
            echo "                        <div class=\"caption\">
                            <h4 data-name=\"product_name\">Pizza ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</h4>
                            <p data-name=\"product_desc\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</p>
                            <hr class=\"line\">
                            <div>
                                <h4 class=\"price pull-left espacio\">\$";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</h4>

                                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_show", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Ver</a>
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>

                                <a class=\"sc-add-to-cart btn btn-success btn-sm pull-right\" href=\"";
            // line 55
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
        // line 66
        echo "        </div>
    </div>
</section>

";
        
        $__internal_1976c4115c34b330b76173ddcba613d89404229ed42aaf7e719ea3874235b011->leave($__internal_1976c4115c34b330b76173ddcba613d89404229ed42aaf7e719ea3874235b011_prof);

        
        $__internal_ea62411e623c8b0b3a82a7d6d930ed33a5c402166641af0fe57aa83be1046cbb->leave($__internal_ea62411e623c8b0b3a82a7d6d930ed33a5c402166641af0fe57aa83be1046cbb_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e111dad64846da4e68355a5596e205ef61fbaba4c1aab67cd792ae45f407289e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e111dad64846da4e68355a5596e205ef61fbaba4c1aab67cd792ae45f407289e->enter($__internal_e111dad64846da4e68355a5596e205ef61fbaba4c1aab67cd792ae45f407289e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c72827ecae7bf12074a1533d38ada0ae7905bed9738cbffd185b6343aa9e55d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72827ecae7bf12074a1533d38ada0ae7905bed9738cbffd185b6343aa9e55d1->enter($__internal_c72827ecae7bf12074a1533d38ada0ae7905bed9738cbffd185b6343aa9e55d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c72827ecae7bf12074a1533d38ada0ae7905bed9738cbffd185b6343aa9e55d1->leave($__internal_c72827ecae7bf12074a1533d38ada0ae7905bed9738cbffd185b6343aa9e55d1_prof);

        
        $__internal_e111dad64846da4e68355a5596e205ef61fbaba4c1aab67cd792ae45f407289e->leave($__internal_e111dad64846da4e68355a5596e205ef61fbaba4c1aab67cd792ae45f407289e_prof);

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
        return array (  190 => 73,  181 => 72,  167 => 66,  150 => 55,  145 => 53,  141 => 52,  136 => 50,  130 => 47,  126 => 46,  123 => 45,  116 => 39,  112 => 38,  92 => 21,  86 => 18,  76 => 10,  67 => 9,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizza_new') }}\" class=\"btn btn-success\">Agregar variedad de Pizza</a>
                </div>
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

                 {#        <img src='asset/images/ga7.jpg' data-big-src='asset/images/ga1.jpg' class=\"img-responsive\" alt=\" \"/> #}
                        <div class=\"caption\">
                            <h4 data-name=\"product_name\">Pizza {{ pizza.nombre }}</h4>
                            <p data-name=\"product_desc\">{{ pizza.descripcion }}</p>
                            <hr class=\"line\">
                            <div>
                                <h4 class=\"price pull-left espacio\">\${{ pizza.precio }}</h4>

                                <a href=\"{{ path('pizza_show', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\" >Ver</a>
                                <a href=\"{{ path('pizza_edit', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\">Editar</a>

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
", ":pizza:index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizza/index.html.twig");
    }
}
