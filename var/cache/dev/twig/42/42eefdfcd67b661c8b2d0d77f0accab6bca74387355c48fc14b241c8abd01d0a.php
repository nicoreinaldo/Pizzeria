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
        $__internal_e4ff1cd8506c25713dd82bdc1b051e17710fca3d675e2785c92f01c3f8482fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ff1cd8506c25713dd82bdc1b051e17710fca3d675e2785c92f01c3f8482fa8->enter($__internal_e4ff1cd8506c25713dd82bdc1b051e17710fca3d675e2785c92f01c3f8482fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_dac93244dd07a387d764cfd11304291ae117c26b6eee1d6b2ace82bb0aa1ec94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac93244dd07a387d764cfd11304291ae117c26b6eee1d6b2ace82bb0aa1ec94->enter($__internal_dac93244dd07a387d764cfd11304291ae117c26b6eee1d6b2ace82bb0aa1ec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4ff1cd8506c25713dd82bdc1b051e17710fca3d675e2785c92f01c3f8482fa8->leave($__internal_e4ff1cd8506c25713dd82bdc1b051e17710fca3d675e2785c92f01c3f8482fa8_prof);

        
        $__internal_dac93244dd07a387d764cfd11304291ae117c26b6eee1d6b2ace82bb0aa1ec94->leave($__internal_dac93244dd07a387d764cfd11304291ae117c26b6eee1d6b2ace82bb0aa1ec94_prof);

    }

    // line 3
    public function block_styleshetts($context, array $blocks = array())
    {
        $__internal_b481e030213ecb2f0e37d3344fd633eb91799360748b7ffc0d0fb7fffe8107b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b481e030213ecb2f0e37d3344fd633eb91799360748b7ffc0d0fb7fffe8107b4->enter($__internal_b481e030213ecb2f0e37d3344fd633eb91799360748b7ffc0d0fb7fffe8107b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        $__internal_6805b317fda5d186784adc7ec36784b5c393d538f836c112576264f99fba4f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6805b317fda5d186784adc7ec36784b5c393d538f836c112576264f99fba4f98->enter($__internal_6805b317fda5d186784adc7ec36784b5c393d538f836c112576264f99fba4f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleshetts"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("styleshetts", $context, $blocks);
        echo "
";
        
        $__internal_6805b317fda5d186784adc7ec36784b5c393d538f836c112576264f99fba4f98->leave($__internal_6805b317fda5d186784adc7ec36784b5c393d538f836c112576264f99fba4f98_prof);

        
        $__internal_b481e030213ecb2f0e37d3344fd633eb91799360748b7ffc0d0fb7fffe8107b4->leave($__internal_b481e030213ecb2f0e37d3344fd633eb91799360748b7ffc0d0fb7fffe8107b4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed3a0c8620fcf4995f92bf52c30a4e7e7034138ea440cdd2177ece2fe8069e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed3a0c8620fcf4995f92bf52c30a4e7e7034138ea440cdd2177ece2fe8069e7->enter($__internal_1ed3a0c8620fcf4995f92bf52c30a4e7e7034138ea440cdd2177ece2fe8069e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16ab522ae1e26590068c31ac735fa7539e93042638f07d3c075a827facdda3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ab522ae1e26590068c31ac735fa7539e93042638f07d3c075a827facdda3f5->enter($__internal_16ab522ae1e26590068c31ac735fa7539e93042638f07d3c075a827facdda3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16ab522ae1e26590068c31ac735fa7539e93042638f07d3c075a827facdda3f5->leave($__internal_16ab522ae1e26590068c31ac735fa7539e93042638f07d3c075a827facdda3f5_prof);

        
        $__internal_1ed3a0c8620fcf4995f92bf52c30a4e7e7034138ea440cdd2177ece2fe8069e7->leave($__internal_1ed3a0c8620fcf4995f92bf52c30a4e7e7034138ea440cdd2177ece2fe8069e7_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_658ef205d10e4bc005e4b7cd45764a219c36f19df7911e8c3c20efdc67d4297e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658ef205d10e4bc005e4b7cd45764a219c36f19df7911e8c3c20efdc67d4297e->enter($__internal_658ef205d10e4bc005e4b7cd45764a219c36f19df7911e8c3c20efdc67d4297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6995d45be1d39cde6369b1fe94feba43b1564eb0efbf7f307671a98d33f76a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6995d45be1d39cde6369b1fe94feba43b1564eb0efbf7f307671a98d33f76a68->enter($__internal_6995d45be1d39cde6369b1fe94feba43b1564eb0efbf7f307671a98d33f76a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6995d45be1d39cde6369b1fe94feba43b1564eb0efbf7f307671a98d33f76a68->leave($__internal_6995d45be1d39cde6369b1fe94feba43b1564eb0efbf7f307671a98d33f76a68_prof);

        
        $__internal_658ef205d10e4bc005e4b7cd45764a219c36f19df7911e8c3c20efdc67d4297e->leave($__internal_658ef205d10e4bc005e4b7cd45764a219c36f19df7911e8c3c20efdc67d4297e_prof);

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
