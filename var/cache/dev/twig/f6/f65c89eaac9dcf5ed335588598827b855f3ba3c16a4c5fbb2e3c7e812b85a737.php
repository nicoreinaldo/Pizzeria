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
        $__internal_460483d36c447cf2993409b6bfa0601e0949f2ffd94410cd33521e464361eee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460483d36c447cf2993409b6bfa0601e0949f2ffd94410cd33521e464361eee8->enter($__internal_460483d36c447cf2993409b6bfa0601e0949f2ffd94410cd33521e464361eee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:new.html.twig"));

        $__internal_ad4117c3c8ed19f67a4891bec33782f1dab9246098a77df9869a83bbe61df1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4117c3c8ed19f67a4891bec33782f1dab9246098a77df9869a83bbe61df1f2->enter($__internal_ad4117c3c8ed19f67a4891bec33782f1dab9246098a77df9869a83bbe61df1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_460483d36c447cf2993409b6bfa0601e0949f2ffd94410cd33521e464361eee8->leave($__internal_460483d36c447cf2993409b6bfa0601e0949f2ffd94410cd33521e464361eee8_prof);

        
        $__internal_ad4117c3c8ed19f67a4891bec33782f1dab9246098a77df9869a83bbe61df1f2->leave($__internal_ad4117c3c8ed19f67a4891bec33782f1dab9246098a77df9869a83bbe61df1f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_622d1f4556b43902f241f19103c4c1cddf5344898cbc710ee08172265d4c8928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622d1f4556b43902f241f19103c4c1cddf5344898cbc710ee08172265d4c8928->enter($__internal_622d1f4556b43902f241f19103c4c1cddf5344898cbc710ee08172265d4c8928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fe3140668f6cfc2e7e3ebec97240f1b92e48d96eb4c27f2b1c3d7aeb746a0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe3140668f6cfc2e7e3ebec97240f1b92e48d96eb4c27f2b1c3d7aeb746a0fa->enter($__internal_2fe3140668f6cfc2e7e3ebec97240f1b92e48d96eb4c27f2b1c3d7aeb746a0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2fe3140668f6cfc2e7e3ebec97240f1b92e48d96eb4c27f2b1c3d7aeb746a0fa->leave($__internal_2fe3140668f6cfc2e7e3ebec97240f1b92e48d96eb4c27f2b1c3d7aeb746a0fa_prof);

        
        $__internal_622d1f4556b43902f241f19103c4c1cddf5344898cbc710ee08172265d4c8928->leave($__internal_622d1f4556b43902f241f19103c4c1cddf5344898cbc710ee08172265d4c8928_prof);

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
