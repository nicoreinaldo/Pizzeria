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
        $__internal_e4068d53abc03d988d71d0526c24704582d97bfcce5abd2ffb8035b158acd1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4068d53abc03d988d71d0526c24704582d97bfcce5abd2ffb8035b158acd1eb->enter($__internal_e4068d53abc03d988d71d0526c24704582d97bfcce5abd2ffb8035b158acd1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $__internal_e6cbfa3d99efe78c34d3c2253189932a73009b75b9435523d9076ae4bc78fd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cbfa3d99efe78c34d3c2253189932a73009b75b9435523d9076ae4bc78fd41->enter($__internal_e6cbfa3d99efe78c34d3c2253189932a73009b75b9435523d9076ae4bc78fd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4068d53abc03d988d71d0526c24704582d97bfcce5abd2ffb8035b158acd1eb->leave($__internal_e4068d53abc03d988d71d0526c24704582d97bfcce5abd2ffb8035b158acd1eb_prof);

        
        $__internal_e6cbfa3d99efe78c34d3c2253189932a73009b75b9435523d9076ae4bc78fd41->leave($__internal_e6cbfa3d99efe78c34d3c2253189932a73009b75b9435523d9076ae4bc78fd41_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_919f45708b2381732f3fc9cef693624e5eb6aa5bf3f10a3e8ce2326ef5bfec1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919f45708b2381732f3fc9cef693624e5eb6aa5bf3f10a3e8ce2326ef5bfec1b->enter($__internal_919f45708b2381732f3fc9cef693624e5eb6aa5bf3f10a3e8ce2326ef5bfec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_5437dc235b7b4ef656d7f697982ecda7da4bcf0687ce5f1d651f7fe91c1cbe5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5437dc235b7b4ef656d7f697982ecda7da4bcf0687ce5f1d651f7fe91c1cbe5c->enter($__internal_5437dc235b7b4ef656d7f697982ecda7da4bcf0687ce5f1d651f7fe91c1cbe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_5437dc235b7b4ef656d7f697982ecda7da4bcf0687ce5f1d651f7fe91c1cbe5c->leave($__internal_5437dc235b7b4ef656d7f697982ecda7da4bcf0687ce5f1d651f7fe91c1cbe5c_prof);

        
        $__internal_919f45708b2381732f3fc9cef693624e5eb6aa5bf3f10a3e8ce2326ef5bfec1b->leave($__internal_919f45708b2381732f3fc9cef693624e5eb6aa5bf3f10a3e8ce2326ef5bfec1b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e540e9e2aaef375dfece622a38d643635f2ff9a6207082bec6493bf3923e31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e540e9e2aaef375dfece622a38d643635f2ff9a6207082bec6493bf3923e31e->enter($__internal_0e540e9e2aaef375dfece622a38d643635f2ff9a6207082bec6493bf3923e31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92690fe79b6755e2201b20b6e28885ed3c69e9cf44d83da9f4afbf9bbb55fa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92690fe79b6755e2201b20b6e28885ed3c69e9cf44d83da9f4afbf9bbb55fa2d->enter($__internal_92690fe79b6755e2201b20b6e28885ed3c69e9cf44d83da9f4afbf9bbb55fa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "                <div class=\"btn-group\">
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
            echo "        <tr>
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
                echo "                          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_show", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\" >Ver</a>
                          <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Editar</a>
                        ";
            }
            // line 54
            echo "                          <a class=\"sc-add-to-cart btn btn-success btn-sm pull-right\" href=\"";
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
        echo "    </div>
  </div>
</section>

";
        
        $__internal_92690fe79b6755e2201b20b6e28885ed3c69e9cf44d83da9f4afbf9bbb55fa2d->leave($__internal_92690fe79b6755e2201b20b6e28885ed3c69e9cf44d83da9f4afbf9bbb55fa2d_prof);

        
        $__internal_0e540e9e2aaef375dfece622a38d643635f2ff9a6207082bec6493bf3923e31e->leave($__internal_0e540e9e2aaef375dfece622a38d643635f2ff9a6207082bec6493bf3923e31e_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22dd672e1886cb72ed256b5860374e299e2299fb3e687a539c0400f45258e2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22dd672e1886cb72ed256b5860374e299e2299fb3e687a539c0400f45258e2d6->enter($__internal_22dd672e1886cb72ed256b5860374e299e2299fb3e687a539c0400f45258e2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ac502025b9589ef81224d8c9c77accf4b7d08eada37baddba7b8a87aa67bffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac502025b9589ef81224d8c9c77accf4b7d08eada37baddba7b8a87aa67bffb->enter($__internal_6ac502025b9589ef81224d8c9c77accf4b7d08eada37baddba7b8a87aa67bffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6ac502025b9589ef81224d8c9c77accf4b7d08eada37baddba7b8a87aa67bffb->leave($__internal_6ac502025b9589ef81224d8c9c77accf4b7d08eada37baddba7b8a87aa67bffb_prof);

        
        $__internal_22dd672e1886cb72ed256b5860374e299e2299fb3e687a539c0400f45258e2d6->leave($__internal_22dd672e1886cb72ed256b5860374e299e2299fb3e687a539c0400f45258e2d6_prof);

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
", ":pizza:index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizza/index.html.twig");
    }
}
