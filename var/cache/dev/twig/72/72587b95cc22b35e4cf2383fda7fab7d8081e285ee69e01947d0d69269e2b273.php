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
        $__internal_209ef0a33d1649c4f8666968ab6e017d9a88f872098ace4cf2d58aca1094403e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209ef0a33d1649c4f8666968ab6e017d9a88f872098ace4cf2d58aca1094403e->enter($__internal_209ef0a33d1649c4f8666968ab6e017d9a88f872098ace4cf2d58aca1094403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $__internal_679ca790f39292eacdfe98a2d018093f6045655989c1d13efe4b9c19ac43d6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679ca790f39292eacdfe98a2d018093f6045655989c1d13efe4b9c19ac43d6f0->enter($__internal_679ca790f39292eacdfe98a2d018093f6045655989c1d13efe4b9c19ac43d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209ef0a33d1649c4f8666968ab6e017d9a88f872098ace4cf2d58aca1094403e->leave($__internal_209ef0a33d1649c4f8666968ab6e017d9a88f872098ace4cf2d58aca1094403e_prof);

        
        $__internal_679ca790f39292eacdfe98a2d018093f6045655989c1d13efe4b9c19ac43d6f0->leave($__internal_679ca790f39292eacdfe98a2d018093f6045655989c1d13efe4b9c19ac43d6f0_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_57046e5d2f0f941c64d841fd58f70492d6e5a664d8ef5a25f0f6f334d41dab28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57046e5d2f0f941c64d841fd58f70492d6e5a664d8ef5a25f0f6f334d41dab28->enter($__internal_57046e5d2f0f941c64d841fd58f70492d6e5a664d8ef5a25f0f6f334d41dab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_a2ce29584ba27c3571ff7cff20d94f8c113ea3561e7f0d58e47e85d5aa1bf1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ce29584ba27c3571ff7cff20d94f8c113ea3561e7f0d58e47e85d5aa1bf1ae->enter($__internal_a2ce29584ba27c3571ff7cff20d94f8c113ea3561e7f0d58e47e85d5aa1bf1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "

";
        
        $__internal_a2ce29584ba27c3571ff7cff20d94f8c113ea3561e7f0d58e47e85d5aa1bf1ae->leave($__internal_a2ce29584ba27c3571ff7cff20d94f8c113ea3561e7f0d58e47e85d5aa1bf1ae_prof);

        
        $__internal_57046e5d2f0f941c64d841fd58f70492d6e5a664d8ef5a25f0f6f334d41dab28->leave($__internal_57046e5d2f0f941c64d841fd58f70492d6e5a664d8ef5a25f0f6f334d41dab28_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1196f1d8ffa5279090657b73e60d4aa3740e6b93eadfeeec484e9507e2f420d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1196f1d8ffa5279090657b73e60d4aa3740e6b93eadfeeec484e9507e2f420d4->enter($__internal_1196f1d8ffa5279090657b73e60d4aa3740e6b93eadfeeec484e9507e2f420d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_beb07e9a3ba3fc87f6aeea8044b9eea21f439a34b922b442a4398eab4ce7f4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb07e9a3ba3fc87f6aeea8044b9eea21f439a34b922b442a4398eab4ce7f4a9->enter($__internal_beb07e9a3ba3fc87f6aeea8044b9eea21f439a34b922b442a4398eab4ce7f4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_beb07e9a3ba3fc87f6aeea8044b9eea21f439a34b922b442a4398eab4ce7f4a9->leave($__internal_beb07e9a3ba3fc87f6aeea8044b9eea21f439a34b922b442a4398eab4ce7f4a9_prof);

        
        $__internal_1196f1d8ffa5279090657b73e60d4aa3740e6b93eadfeeec484e9507e2f420d4->leave($__internal_1196f1d8ffa5279090657b73e60d4aa3740e6b93eadfeeec484e9507e2f420d4_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1dd2f78842cd70cbebed88cb74ceb6dd9fc29fc5d89215945cd110f4d43e9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1dd2f78842cd70cbebed88cb74ceb6dd9fc29fc5d89215945cd110f4d43e9ce->enter($__internal_a1dd2f78842cd70cbebed88cb74ceb6dd9fc29fc5d89215945cd110f4d43e9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b1b220d50dca246beeaf66ba2fb24c461ac9904a05f8e593f2cf2d8524e629b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b220d50dca246beeaf66ba2fb24c461ac9904a05f8e593f2cf2d8524e629b3->enter($__internal_b1b220d50dca246beeaf66ba2fb24c461ac9904a05f8e593f2cf2d8524e629b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_b1b220d50dca246beeaf66ba2fb24c461ac9904a05f8e593f2cf2d8524e629b3->leave($__internal_b1b220d50dca246beeaf66ba2fb24c461ac9904a05f8e593f2cf2d8524e629b3_prof);

        
        $__internal_a1dd2f78842cd70cbebed88cb74ceb6dd9fc29fc5d89215945cd110f4d43e9ce->leave($__internal_a1dd2f78842cd70cbebed88cb74ceb6dd9fc29fc5d89215945cd110f4d43e9ce_prof);

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
", "pizza/index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizza/index.html.twig");
    }
}
