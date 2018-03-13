<?php

/* default/index.html.twig */
class __TwigTemplate_1863b1875ffdc5a39cf8936e17d0e88437ddf135d7bd88f1469018adc08634ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_c628ffd220be9e4881a057b15d534b43f236c5cffa41f3a377e0a671a95d1557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c628ffd220be9e4881a057b15d534b43f236c5cffa41f3a377e0a671a95d1557->enter($__internal_c628ffd220be9e4881a057b15d534b43f236c5cffa41f3a377e0a671a95d1557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_d63a2eaeacb10972c8363c65b70530d0de57dedac03c16c5cf92ef96eed0681a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63a2eaeacb10972c8363c65b70530d0de57dedac03c16c5cf92ef96eed0681a->enter($__internal_d63a2eaeacb10972c8363c65b70530d0de57dedac03c16c5cf92ef96eed0681a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c628ffd220be9e4881a057b15d534b43f236c5cffa41f3a377e0a671a95d1557->leave($__internal_c628ffd220be9e4881a057b15d534b43f236c5cffa41f3a377e0a671a95d1557_prof);

        
        $__internal_d63a2eaeacb10972c8363c65b70530d0de57dedac03c16c5cf92ef96eed0681a->leave($__internal_d63a2eaeacb10972c8363c65b70530d0de57dedac03c16c5cf92ef96eed0681a_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_68004dd9f650ca939921943347429081f2a4c8d77eab732c051359223486ba20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68004dd9f650ca939921943347429081f2a4c8d77eab732c051359223486ba20->enter($__internal_68004dd9f650ca939921943347429081f2a4c8d77eab732c051359223486ba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_2d3f5ae7cbee68a4ce0385cb7bd7e8b3033824878dd357426d3de28765b14589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3f5ae7cbee68a4ce0385cb7bd7e8b3033824878dd357426d3de28765b14589->enter($__internal_2d3f5ae7cbee68a4ce0385cb7bd7e8b3033824878dd357426d3de28765b14589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "
";
        
        $__internal_2d3f5ae7cbee68a4ce0385cb7bd7e8b3033824878dd357426d3de28765b14589->leave($__internal_2d3f5ae7cbee68a4ce0385cb7bd7e8b3033824878dd357426d3de28765b14589_prof);

        
        $__internal_68004dd9f650ca939921943347429081f2a4c8d77eab732c051359223486ba20->leave($__internal_68004dd9f650ca939921943347429081f2a4c8d77eab732c051359223486ba20_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_49f9515870a761134ef485bfb7648304b43d95b146cfd64b2c17244eb91414c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f9515870a761134ef485bfb7648304b43d95b146cfd64b2c17244eb91414c1->enter($__internal_49f9515870a761134ef485bfb7648304b43d95b146cfd64b2c17244eb91414c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28fccffa8f47fad12b4e733421f4ebddbf64f7317e3a1041f0aa4cee44109fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fccffa8f47fad12b4e733421f4ebddbf64f7317e3a1041f0aa4cee44109fd7->enter($__internal_28fccffa8f47fad12b4e733421f4ebddbf64f7317e3a1041f0aa4cee44109fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class='preloader'>
\t\t<div class='loaded'>&nbsp;</div>
\t</div>

\t<section id=\"banner\" class=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_banner_area text-center\">
\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-md-offset-7 col-sm-offset-7\">
\t\t\t\t\t\t<div class=\"single_banner_text wow zoomIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<img src=\"asset/images/logo.png\" alt=\"logo de nuestra marca, es el logo que nos identifica, contiene los colores de italia\">
\t\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t\t\t<h1>La pizza de Rio Cuarto</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End of Banner Section -->


\t
\t<section id=\"abouts\" class=\"abouts sections\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_abouts\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"single_abouts wow slideInLeft\" data-wow-duration=\"2s\">
\t\t\t\t\t\t\t<div class=\"head_title text-center\">
\t\t\t\t\t\t\t\t<h2>La mejor Pizza de Cordoba</h2>
\t\t\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>La comida para ser perfecta siempre debe estar acompañada con una buena compania.</p>
\t\t\t\t\t\t\t<div class=\"signature_img text-right\">
\t\t\t\t\t\t\t\t<img src=\"asset/images/logoNegro.png\" alt=\"version mas chica y negra del logo de la empresa de esta pagina mas pequeño\" width=\"150\" height=\"150\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"single_abouts wow slideInRight\" data-wow-duration=\"2s\">
\t\t\t\t\t\t\t<img src=\"asset/images/abimg.png\" alt=\"masa y palo de amazar\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End of Abouts Section -->


\t<section id=\"menus\" class=\"menus sections\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_menus\">
\t\t\t\t\t<div class=\"head_title text-center wow slideInDown\" data-wow-duration=\"2s\">
\t\t\t\t\t\t<h3>Menu</h3>
\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menus_top_menu text-center wow slideInDown\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#menu1\">Pizzas</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"menu1\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t<h3>Pizzas</h3>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"single_menus wow slideInLeft \" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$100</span> <strong>Muzarella</strong>   <p> Queso Muzarella</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$115</span> <strong>Napolitana.</strong>  <p> Tomate al horno y albahaca</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$186</span><strong>  Salami</strong> <p> Queso, Salami, Aceitunas negras</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$174</span><strong> Mediterranea</strong>   <p>Pimentón asado, zuquini, aceitunas, calabacín, y tomates marinados.</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$100</span> <strong>Pollo</strong>   <p> Pollo trozado con salsa roja</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"single_menus wow slideInRight\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$115</span> <strong> Champiñones.</strong>  <p> Champignones con salsa blanca</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$125</span> <strong>Fugazza</strong>  <p> Muzzarela, cebolla curada, aceitunas negras</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$186</span> <strong>  Rucula</strong> <p> Rucula, panzeta, queso zardo y aceitunas negras</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$174</span> <strong>  Roquefort</strong> <p> Queso roquefort, muzarella</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$200</span> <strong> Cuatro quesos</strong> <p>Muzarella, Roquefort, Provolone, Zardo </p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_28fccffa8f47fad12b4e733421f4ebddbf64f7317e3a1041f0aa4cee44109fd7->leave($__internal_28fccffa8f47fad12b4e733421f4ebddbf64f7317e3a1041f0aa4cee44109fd7_prof);

        
        $__internal_49f9515870a761134ef485bfb7648304b43d95b146cfd64b2c17244eb91414c1->leave($__internal_49f9515870a761134ef485bfb7648304b43d95b146cfd64b2c17244eb91414c1_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49841463e0f6bce16ef061edfd41936b8dbffe2fd60083cfe79eed19a31af406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49841463e0f6bce16ef061edfd41936b8dbffe2fd60083cfe79eed19a31af406->enter($__internal_49841463e0f6bce16ef061edfd41936b8dbffe2fd60083cfe79eed19a31af406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a0530883b3f0e81da1f2f893890e2097d3db350bc1776a58e938e23a34e56100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0530883b3f0e81da1f2f893890e2097d3db350bc1776a58e938e23a34e56100->enter($__internal_a0530883b3f0e81da1f2f893890e2097d3db350bc1776a58e938e23a34e56100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_a0530883b3f0e81da1f2f893890e2097d3db350bc1776a58e938e23a34e56100->leave($__internal_a0530883b3f0e81da1f2f893890e2097d3db350bc1776a58e938e23a34e56100_prof);

        
        $__internal_49841463e0f6bce16ef061edfd41936b8dbffe2fd60083cfe79eed19a31af406->leave($__internal_49841463e0f6bce16ef061edfd41936b8dbffe2fd60083cfe79eed19a31af406_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 128,  201 => 127,  75 => 9,  66 => 8,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
\t<div class='preloader'>
\t\t<div class='loaded'>&nbsp;</div>
\t</div>

\t<section id=\"banner\" class=\"banner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_banner_area text-center\">
\t\t\t\t\t<div class=\"col-md-5 col-sm-5 col-md-offset-7 col-sm-offset-7\">
\t\t\t\t\t\t<div class=\"single_banner_text wow zoomIn\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<img src=\"asset/images/logo.png\" alt=\"logo de nuestra marca, es el logo que nos identifica, contiene los colores de italia\">
\t\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t\t\t<h1>La pizza de Rio Cuarto</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End of Banner Section -->


\t
\t<section id=\"abouts\" class=\"abouts sections\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_abouts\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"single_abouts wow slideInLeft\" data-wow-duration=\"2s\">
\t\t\t\t\t\t\t<div class=\"head_title text-center\">
\t\t\t\t\t\t\t\t<h2>La mejor Pizza de Cordoba</h2>
\t\t\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>La comida para ser perfecta siempre debe estar acompañada con una buena compania.</p>
\t\t\t\t\t\t\t<div class=\"signature_img text-right\">
\t\t\t\t\t\t\t\t<img src=\"asset/images/logoNegro.png\" alt=\"version mas chica y negra del logo de la empresa de esta pagina mas pequeño\" width=\"150\" height=\"150\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"single_abouts wow slideInRight\" data-wow-duration=\"2s\">
\t\t\t\t\t\t\t<img src=\"asset/images/abimg.png\" alt=\"masa y palo de amazar\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End of Abouts Section -->


\t<section id=\"menus\" class=\"menus sections\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"main_menus\">
\t\t\t\t\t<div class=\"head_title text-center wow slideInDown\" data-wow-duration=\"2s\">
\t\t\t\t\t\t<h3>Menu</h3>
\t\t\t\t\t\t<div class=\"separetor\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menus_top_menu text-center wow slideInDown\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#menu1\">Pizzas</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"menu1\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t<h3>Pizzas</h3>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"single_menus wow slideInLeft \" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$100</span> <strong>Muzarella</strong>   <p> Queso Muzarella</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$115</span> <strong>Napolitana.</strong>  <p> Tomate al horno y albahaca</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$186</span><strong>  Salami</strong> <p> Queso, Salami, Aceitunas negras</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$174</span><strong> Mediterranea</strong>   <p>Pimentón asado, zuquini, aceitunas, calabacín, y tomates marinados.</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$100</span> <strong>Pollo</strong>   <p> Pollo trozado con salsa roja</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"single_menus wow slideInRight\" data-wow-duration=\"1.5s\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$115</span> <strong> Champiñones.</strong>  <p> Champignones con salsa blanca</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$125</span> <strong>Fugazza</strong>  <p> Muzzarela, cebolla curada, aceitunas negras</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$186</span> <strong>  Rucula</strong> <p> Rucula, panzeta, queso zardo y aceitunas negras</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$174</span> <strong>  Roquefort</strong> <p> Queso roquefort, muzarella</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge\">\$200</span> <strong> Cuatro quesos</strong> <p>Muzarella, Roquefort, Provolone, Zardo </p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "default/index.html.twig", "/home/nico/pizzeria/app/Resources/views/default/index.html.twig");
    }
}
