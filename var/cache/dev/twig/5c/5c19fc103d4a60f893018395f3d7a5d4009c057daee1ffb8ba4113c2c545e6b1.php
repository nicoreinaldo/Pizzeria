<?php

/* :tamanopizza:edit.html.twig */
class __TwigTemplate_b674147e32692702736b7226aa15e7ec84751984d60c1d431ac5586c35c5477f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tamanopizza:edit.html.twig", 1);
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
        $__internal_4d9b82475e795fbf093302be10ecbddbdf48cc45e54db4a083b09029a0816b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9b82475e795fbf093302be10ecbddbdf48cc45e54db4a083b09029a0816b9c->enter($__internal_4d9b82475e795fbf093302be10ecbddbdf48cc45e54db4a083b09029a0816b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:edit.html.twig"));

        $__internal_5230d96c56d9d6ab879dc7f188aa7bf5b79134875bed3ab9b99e83ae9fb7d1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5230d96c56d9d6ab879dc7f188aa7bf5b79134875bed3ab9b99e83ae9fb7d1e9->enter($__internal_5230d96c56d9d6ab879dc7f188aa7bf5b79134875bed3ab9b99e83ae9fb7d1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9b82475e795fbf093302be10ecbddbdf48cc45e54db4a083b09029a0816b9c->leave($__internal_4d9b82475e795fbf093302be10ecbddbdf48cc45e54db4a083b09029a0816b9c_prof);

        
        $__internal_5230d96c56d9d6ab879dc7f188aa7bf5b79134875bed3ab9b99e83ae9fb7d1e9->leave($__internal_5230d96c56d9d6ab879dc7f188aa7bf5b79134875bed3ab9b99e83ae9fb7d1e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e86f01281843b57432828a634f8649c27411c87ff7cae4e1911e190009fde658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86f01281843b57432828a634f8649c27411c87ff7cae4e1911e190009fde658->enter($__internal_e86f01281843b57432828a634f8649c27411c87ff7cae4e1911e190009fde658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7042aac7b6621c62a9a96d8e48a2b8d39daca46acf75a9cd2935fc076e7e9f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7042aac7b6621c62a9a96d8e48a2b8d39daca46acf75a9cd2935fc076e7e9f1a->enter($__internal_7042aac7b6621c62a9a96d8e48a2b8d39daca46acf75a9cd2935fc076e7e9f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tamanopizza edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7042aac7b6621c62a9a96d8e48a2b8d39daca46acf75a9cd2935fc076e7e9f1a->leave($__internal_7042aac7b6621c62a9a96d8e48a2b8d39daca46acf75a9cd2935fc076e7e9f1a_prof);

        
        $__internal_e86f01281843b57432828a634f8649c27411c87ff7cae4e1911e190009fde658->leave($__internal_e86f01281843b57432828a634f8649c27411c87ff7cae4e1911e190009fde658_prof);

    }

    public function getTemplateName()
    {
        return ":tamanopizza:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tamanopizza edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tamanopizza_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":tamanopizza:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/tamanopizza/edit.html.twig");
    }
}
