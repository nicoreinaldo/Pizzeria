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
        $__internal_27c925acf88d20db30ee8f15572fa7b82ba35afdb35fce633ab72235d4021df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c925acf88d20db30ee8f15572fa7b82ba35afdb35fce633ab72235d4021df6->enter($__internal_27c925acf88d20db30ee8f15572fa7b82ba35afdb35fce633ab72235d4021df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $__internal_f923ea8792a91acd40e0f924d3e9145b735598ceee84c37a9fb8393b416c5259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f923ea8792a91acd40e0f924d3e9145b735598ceee84c37a9fb8393b416c5259->enter($__internal_f923ea8792a91acd40e0f924d3e9145b735598ceee84c37a9fb8393b416c5259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c925acf88d20db30ee8f15572fa7b82ba35afdb35fce633ab72235d4021df6->leave($__internal_27c925acf88d20db30ee8f15572fa7b82ba35afdb35fce633ab72235d4021df6_prof);

        
        $__internal_f923ea8792a91acd40e0f924d3e9145b735598ceee84c37a9fb8393b416c5259->leave($__internal_f923ea8792a91acd40e0f924d3e9145b735598ceee84c37a9fb8393b416c5259_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_c0eff8a63944fc886f118c6f95b47d2f97f3fa5a8ea741f1bdccb07224ebb410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0eff8a63944fc886f118c6f95b47d2f97f3fa5a8ea741f1bdccb07224ebb410->enter($__internal_c0eff8a63944fc886f118c6f95b47d2f97f3fa5a8ea741f1bdccb07224ebb410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_e16da9f64565382d0522b40a0a9045a07a6c96ca7528d9e12d68290e2e4ad092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16da9f64565382d0522b40a0a9045a07a6c96ca7528d9e12d68290e2e4ad092->enter($__internal_e16da9f64565382d0522b40a0a9045a07a6c96ca7528d9e12d68290e2e4ad092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_e16da9f64565382d0522b40a0a9045a07a6c96ca7528d9e12d68290e2e4ad092->leave($__internal_e16da9f64565382d0522b40a0a9045a07a6c96ca7528d9e12d68290e2e4ad092_prof);

        
        $__internal_c0eff8a63944fc886f118c6f95b47d2f97f3fa5a8ea741f1bdccb07224ebb410->leave($__internal_c0eff8a63944fc886f118c6f95b47d2f97f3fa5a8ea741f1bdccb07224ebb410_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_85faf0752948f0825047709d8485bfb46ac796c88e5ea738dd7d3362d59fb7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85faf0752948f0825047709d8485bfb46ac796c88e5ea738dd7d3362d59fb7b3->enter($__internal_85faf0752948f0825047709d8485bfb46ac796c88e5ea738dd7d3362d59fb7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e57866d12d330b963c92c7bacae93155046cecfa930a2254ad948cce52f63b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e57866d12d330b963c92c7bacae93155046cecfa930a2254ad948cce52f63b7->enter($__internal_1e57866d12d330b963c92c7bacae93155046cecfa930a2254ad948cce52f63b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "        <tr>
          <div class=\"col-md-4 portfolio-grids\">
              <div class=\"sc-product-item thumbnail\">
                  <div class=\"caption\">
                      <h4 data-name=\"product_name\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</h4>
                      <p data-name=\"product_desc\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</p>
                      <hr class=\"line\">
                      <div>
                          <h4 class=\"price pull-left espacio\">\$";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</h4>
                          <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_show", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" >Ver</a>
                          <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                          <a class=\"sc-add-to-cart btn btn-success btn-sm pull-right\" href=\"";
            // line 50
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
        // line 59
        echo "    </div>
  </div>
</section>

";
        
        $__internal_1e57866d12d330b963c92c7bacae93155046cecfa930a2254ad948cce52f63b7->leave($__internal_1e57866d12d330b963c92c7bacae93155046cecfa930a2254ad948cce52f63b7_prof);

        
        $__internal_85faf0752948f0825047709d8485bfb46ac796c88e5ea738dd7d3362d59fb7b3->leave($__internal_85faf0752948f0825047709d8485bfb46ac796c88e5ea738dd7d3362d59fb7b3_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4993c7d2ceea56da70afc7f6bf63defd14d810e5d9313a9c35b0aed426f283a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4993c7d2ceea56da70afc7f6bf63defd14d810e5d9313a9c35b0aed426f283a0->enter($__internal_4993c7d2ceea56da70afc7f6bf63defd14d810e5d9313a9c35b0aed426f283a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_08227e30bb04780a7fbe22160bc4b384f9509df4d5151ba0357642f315708bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08227e30bb04780a7fbe22160bc4b384f9509df4d5151ba0357642f315708bb1->enter($__internal_08227e30bb04780a7fbe22160bc4b384f9509df4d5151ba0357642f315708bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_08227e30bb04780a7fbe22160bc4b384f9509df4d5151ba0357642f315708bb1->leave($__internal_08227e30bb04780a7fbe22160bc4b384f9509df4d5151ba0357642f315708bb1_prof);

        
        $__internal_4993c7d2ceea56da70afc7f6bf63defd14d810e5d9313a9c35b0aed426f283a0->leave($__internal_4993c7d2ceea56da70afc7f6bf63defd14d810e5d9313a9c35b0aed426f283a0_prof);

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
        return array (  182 => 66,  173 => 65,  159 => 59,  144 => 50,  140 => 49,  136 => 48,  132 => 47,  126 => 44,  122 => 43,  116 => 39,  112 => 38,  92 => 21,  86 => 18,  76 => 10,  67 => 9,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                  <div class=\"caption\">
                      <h4 data-name=\"product_name\">{{ pizza.nombre }}</h4>
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
