<?php

/* :cliente:new.html.twig */
class __TwigTemplate_7768299e09186d8f582e64a8bf702008806199c343b10c38ef611f4de9476a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:new.html.twig", 1);
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
        $__internal_5146451a0fb2555f0f971fa2135cfa3f047c0ff492eb820a08eb4bd73a2e4f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5146451a0fb2555f0f971fa2135cfa3f047c0ff492eb820a08eb4bd73a2e4f85->enter($__internal_5146451a0fb2555f0f971fa2135cfa3f047c0ff492eb820a08eb4bd73a2e4f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_8d380c211eed2e43f34717b5f0506fd70ba5c421c7240ffd6909c244f3067d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d380c211eed2e43f34717b5f0506fd70ba5c421c7240ffd6909c244f3067d52->enter($__internal_8d380c211eed2e43f34717b5f0506fd70ba5c421c7240ffd6909c244f3067d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5146451a0fb2555f0f971fa2135cfa3f047c0ff492eb820a08eb4bd73a2e4f85->leave($__internal_5146451a0fb2555f0f971fa2135cfa3f047c0ff492eb820a08eb4bd73a2e4f85_prof);

        
        $__internal_8d380c211eed2e43f34717b5f0506fd70ba5c421c7240ffd6909c244f3067d52->leave($__internal_8d380c211eed2e43f34717b5f0506fd70ba5c421c7240ffd6909c244f3067d52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_355ee9394a6c0aea2878e9e5e2cd4fcec0094bd16aff88a7d85c8e4915cbdb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355ee9394a6c0aea2878e9e5e2cd4fcec0094bd16aff88a7d85c8e4915cbdb38->enter($__internal_355ee9394a6c0aea2878e9e5e2cd4fcec0094bd16aff88a7d85c8e4915cbdb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c670eb1599f8841d81c509fa4afb9dea9cb8e768752e16d779aba19cf35b59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c670eb1599f8841d81c509fa4afb9dea9cb8e768752e16d779aba19cf35b59e->enter($__internal_0c670eb1599f8841d81c509fa4afb9dea9cb8e768752e16d779aba19cf35b59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0c670eb1599f8841d81c509fa4afb9dea9cb8e768752e16d779aba19cf35b59e->leave($__internal_0c670eb1599f8841d81c509fa4afb9dea9cb8e768752e16d779aba19cf35b59e_prof);

        
        $__internal_355ee9394a6c0aea2878e9e5e2cd4fcec0094bd16aff88a7d85c8e4915cbdb38->leave($__internal_355ee9394a6c0aea2878e9e5e2cd4fcec0094bd16aff88a7d85c8e4915cbdb38_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cliente creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":cliente:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/new.html.twig");
    }
}
