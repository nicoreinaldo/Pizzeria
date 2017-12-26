<?php

/* :pizza:new.html.twig */
class __TwigTemplate_be3408cd043613c100e59ca942e72d31cbb39b9b935e402e7e5dc3e1c6cca834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizza:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e4893fa1a1158728cd9e28e4cf90b2ee9fddbbc39dd2bc6bb663819b9acee24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4893fa1a1158728cd9e28e4cf90b2ee9fddbbc39dd2bc6bb663819b9acee24->enter($__internal_4e4893fa1a1158728cd9e28e4cf90b2ee9fddbbc39dd2bc6bb663819b9acee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:new.html.twig"));

        $__internal_9fb6d52288db18bc538586e3c8adb376cbe223f95f7d26f7b0941e7bb9d2e874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb6d52288db18bc538586e3c8adb376cbe223f95f7d26f7b0941e7bb9d2e874->enter($__internal_9fb6d52288db18bc538586e3c8adb376cbe223f95f7d26f7b0941e7bb9d2e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e4893fa1a1158728cd9e28e4cf90b2ee9fddbbc39dd2bc6bb663819b9acee24->leave($__internal_4e4893fa1a1158728cd9e28e4cf90b2ee9fddbbc39dd2bc6bb663819b9acee24_prof);

        
        $__internal_9fb6d52288db18bc538586e3c8adb376cbe223f95f7d26f7b0941e7bb9d2e874->leave($__internal_9fb6d52288db18bc538586e3c8adb376cbe223f95f7d26f7b0941e7bb9d2e874_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24d783bb141cf1fa2569bf0cd23b563e33f611f48bb9922fc37a297c0deb1448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d783bb141cf1fa2569bf0cd23b563e33f611f48bb9922fc37a297c0deb1448->enter($__internal_24d783bb141cf1fa2569bf0cd23b563e33f611f48bb9922fc37a297c0deb1448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38686d716ca44d009bacc68c90339fb8d7f1d8ab5822cd8275a434d4440df800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38686d716ca44d009bacc68c90339fb8d7f1d8ab5822cd8275a434d4440df800->enter($__internal_38686d716ca44d009bacc68c90339fb8d7f1d8ab5822cd8275a434d4440df800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>Agregar Nueva variedad de Pizza</h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Crear\" />
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver a la Carta</a>
        </li>
    </ul>
";
        
        $__internal_38686d716ca44d009bacc68c90339fb8d7f1d8ab5822cd8275a434d4440df800->leave($__internal_38686d716ca44d009bacc68c90339fb8d7f1d8ab5822cd8275a434d4440df800_prof);

        
        $__internal_24d783bb141cf1fa2569bf0cd23b563e33f611f48bb9922fc37a297c0deb1448->leave($__internal_24d783bb141cf1fa2569bf0cd23b563e33f611f48bb9922fc37a297c0deb1448_prof);

    }

    public function getTemplateName()
    {
        return ":pizza:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  68 => 15,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <section class=\"content-header\">
        <h1>Agregar Nueva variedad de Pizza</h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Crear\" />
            {{ form_end(form) }}
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver a la Carta</a>
        </li>
    </ul>
{% endblock %}
", ":pizza:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizza/new.html.twig");
    }
}
