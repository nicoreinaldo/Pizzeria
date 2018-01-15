<?php

/* :tamanopizza:new.html.twig */
class __TwigTemplate_4d9a7556a79f1597416ad94fc03f91aa8c1622bf2bd0c8bbda7d04897ae0473f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tamanopizza:new.html.twig", 1);
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
        $__internal_780971b29ac25ca7200b4fc88e87f58d85b5b1ec73a328ca5761329e29c9b678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780971b29ac25ca7200b4fc88e87f58d85b5b1ec73a328ca5761329e29c9b678->enter($__internal_780971b29ac25ca7200b4fc88e87f58d85b5b1ec73a328ca5761329e29c9b678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:new.html.twig"));

        $__internal_f3e70f4749532a5e79744a5741937fae523b4aae6ee19ba5e1add91f9aa55098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e70f4749532a5e79744a5741937fae523b4aae6ee19ba5e1add91f9aa55098->enter($__internal_f3e70f4749532a5e79744a5741937fae523b4aae6ee19ba5e1add91f9aa55098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780971b29ac25ca7200b4fc88e87f58d85b5b1ec73a328ca5761329e29c9b678->leave($__internal_780971b29ac25ca7200b4fc88e87f58d85b5b1ec73a328ca5761329e29c9b678_prof);

        
        $__internal_f3e70f4749532a5e79744a5741937fae523b4aae6ee19ba5e1add91f9aa55098->leave($__internal_f3e70f4749532a5e79744a5741937fae523b4aae6ee19ba5e1add91f9aa55098_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dad3f5d3014e3712f4f227fcbc974abf4a19b09e5186e5251e9e5fd9b40ad4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad3f5d3014e3712f4f227fcbc974abf4a19b09e5186e5251e9e5fd9b40ad4b7->enter($__internal_dad3f5d3014e3712f4f227fcbc974abf4a19b09e5186e5251e9e5fd9b40ad4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cefce2b64dcfeace9478d3763aafa488362499947a97714b13cb254591a400c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefce2b64dcfeace9478d3763aafa488362499947a97714b13cb254591a400c9->enter($__internal_cefce2b64dcfeace9478d3763aafa488362499947a97714b13cb254591a400c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tamanopizza creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cefce2b64dcfeace9478d3763aafa488362499947a97714b13cb254591a400c9->leave($__internal_cefce2b64dcfeace9478d3763aafa488362499947a97714b13cb254591a400c9_prof);

        
        $__internal_dad3f5d3014e3712f4f227fcbc974abf4a19b09e5186e5251e9e5fd9b40ad4b7->leave($__internal_dad3f5d3014e3712f4f227fcbc974abf4a19b09e5186e5251e9e5fd9b40ad4b7_prof);

    }

    public function getTemplateName()
    {
        return ":tamanopizza:new.html.twig";
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
    <h1>Tamanopizza creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tamanopizza_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":tamanopizza:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/tamanopizza/new.html.twig");
    }
}
