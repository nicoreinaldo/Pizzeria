<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
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
        $__internal_0f49f398221affd5ab63a9aee5ad266269e34b7996c98fe86465c8b14dd390bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f49f398221affd5ab63a9aee5ad266269e34b7996c98fe86465c8b14dd390bf->enter($__internal_0f49f398221affd5ab63a9aee5ad266269e34b7996c98fe86465c8b14dd390bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b9969d62ffe22b9c3f6a8163df7b07e383afbca1bfa9cc1e2aaf5eacd589c952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9969d62ffe22b9c3f6a8163df7b07e383afbca1bfa9cc1e2aaf5eacd589c952->enter($__internal_b9969d62ffe22b9c3f6a8163df7b07e383afbca1bfa9cc1e2aaf5eacd589c952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f49f398221affd5ab63a9aee5ad266269e34b7996c98fe86465c8b14dd390bf->leave($__internal_0f49f398221affd5ab63a9aee5ad266269e34b7996c98fe86465c8b14dd390bf_prof);

        
        $__internal_b9969d62ffe22b9c3f6a8163df7b07e383afbca1bfa9cc1e2aaf5eacd589c952->leave($__internal_b9969d62ffe22b9c3f6a8163df7b07e383afbca1bfa9cc1e2aaf5eacd589c952_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_3db3f33127bc5b59eb030a579e980a7b03ac0cd4b089ecf2fd2f66b6d094f9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db3f33127bc5b59eb030a579e980a7b03ac0cd4b089ecf2fd2f66b6d094f9a9->enter($__internal_3db3f33127bc5b59eb030a579e980a7b03ac0cd4b089ecf2fd2f66b6d094f9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_cf9efce3d052ad8e213b4a3c5bf6a4227dd7323c3d463d9a88dc4ccdec5d68ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9efce3d052ad8e213b4a3c5bf6a4227dd7323c3d463d9a88dc4ccdec5d68ba->enter($__internal_cf9efce3d052ad8e213b4a3c5bf6a4227dd7323c3d463d9a88dc4ccdec5d68ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "
";
        
        $__internal_cf9efce3d052ad8e213b4a3c5bf6a4227dd7323c3d463d9a88dc4ccdec5d68ba->leave($__internal_cf9efce3d052ad8e213b4a3c5bf6a4227dd7323c3d463d9a88dc4ccdec5d68ba_prof);

        
        $__internal_3db3f33127bc5b59eb030a579e980a7b03ac0cd4b089ecf2fd2f66b6d094f9a9->leave($__internal_3db3f33127bc5b59eb030a579e980a7b03ac0cd4b089ecf2fd2f66b6d094f9a9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0875c80ee1b152d8ebb74f3debd235fcca4bb05e10fa44dfefbf5e19aab97d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0875c80ee1b152d8ebb74f3debd235fcca4bb05e10fa44dfefbf5e19aab97d6->enter($__internal_b0875c80ee1b152d8ebb74f3debd235fcca4bb05e10fa44dfefbf5e19aab97d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e6dd11d4d9dc87fb6c16cf95bb6db95297760a6df00f631fd098cd74dcde789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6dd11d4d9dc87fb6c16cf95bb6db95297760a6df00f631fd098cd74dcde789->enter($__internal_5e6dd11d4d9dc87fb6c16cf95bb6db95297760a6df00f631fd098cd74dcde789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e6dd11d4d9dc87fb6c16cf95bb6db95297760a6df00f631fd098cd74dcde789->leave($__internal_5e6dd11d4d9dc87fb6c16cf95bb6db95297760a6df00f631fd098cd74dcde789_prof);

        
        $__internal_b0875c80ee1b152d8ebb74f3debd235fcca4bb05e10fa44dfefbf5e19aab97d6->leave($__internal_b0875c80ee1b152d8ebb74f3debd235fcca4bb05e10fa44dfefbf5e19aab97d6_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c6f584c84aa5900e4abcd7470b04fc44040171ad72a0584654435bf3314db54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6f584c84aa5900e4abcd7470b04fc44040171ad72a0584654435bf3314db54->enter($__internal_1c6f584c84aa5900e4abcd7470b04fc44040171ad72a0584654435bf3314db54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c978f2ee2719d87243fbe9e5c6cdef8302595a8b3e2e89e7f7b5930dd284e173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c978f2ee2719d87243fbe9e5c6cdef8302595a8b3e2e89e7f7b5930dd284e173->enter($__internal_c978f2ee2719d87243fbe9e5c6cdef8302595a8b3e2e89e7f7b5930dd284e173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c978f2ee2719d87243fbe9e5c6cdef8302595a8b3e2e89e7f7b5930dd284e173->leave($__internal_c978f2ee2719d87243fbe9e5c6cdef8302595a8b3e2e89e7f7b5930dd284e173_prof);

        
        $__internal_1c6f584c84aa5900e4abcd7470b04fc44040171ad72a0584654435bf3314db54->leave($__internal_1c6f584c84aa5900e4abcd7470b04fc44040171ad72a0584654435bf3314db54_prof);

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
{% endblock %}", "default/index.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/default/index.html.twig");
    }
}
