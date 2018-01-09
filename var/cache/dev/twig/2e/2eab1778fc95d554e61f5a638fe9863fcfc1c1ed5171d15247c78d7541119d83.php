<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_56a7c35800be1dda0bd8b751c8892c999130155040f4173a416188f670fade6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b89ee82a0a5e98eb6f68e775deef53c941f0ac9aa38af5ccc5c35a8a288f7a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89ee82a0a5e98eb6f68e775deef53c941f0ac9aa38af5ccc5c35a8a288f7a01->enter($__internal_b89ee82a0a5e98eb6f68e775deef53c941f0ac9aa38af5ccc5c35a8a288f7a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_44e6a1108a7abf905b94cabc3568723f2892d56060979963226da7b7b6136da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e6a1108a7abf905b94cabc3568723f2892d56060979963226da7b7b6136da0->enter($__internal_44e6a1108a7abf905b94cabc3568723f2892d56060979963226da7b7b6136da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b89ee82a0a5e98eb6f68e775deef53c941f0ac9aa38af5ccc5c35a8a288f7a01->leave($__internal_b89ee82a0a5e98eb6f68e775deef53c941f0ac9aa38af5ccc5c35a8a288f7a01_prof);

        
        $__internal_44e6a1108a7abf905b94cabc3568723f2892d56060979963226da7b7b6136da0->leave($__internal_44e6a1108a7abf905b94cabc3568723f2892d56060979963226da7b7b6136da0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f770e4c1f2ce0a30a182fe6e6eb1f3f9edbb99d19e01c500b16ab86c46fca22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f770e4c1f2ce0a30a182fe6e6eb1f3f9edbb99d19e01c500b16ab86c46fca22a->enter($__internal_f770e4c1f2ce0a30a182fe6e6eb1f3f9edbb99d19e01c500b16ab86c46fca22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1b638f6a3baee9498a9baa37fd6affcd4a645e86852c7161047a6e7576793f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b638f6a3baee9498a9baa37fd6affcd4a645e86852c7161047a6e7576793f26->enter($__internal_1b638f6a3baee9498a9baa37fd6affcd4a645e86852c7161047a6e7576793f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_1b638f6a3baee9498a9baa37fd6affcd4a645e86852c7161047a6e7576793f26->leave($__internal_1b638f6a3baee9498a9baa37fd6affcd4a645e86852c7161047a6e7576793f26_prof);

        
        $__internal_f770e4c1f2ce0a30a182fe6e6eb1f3f9edbb99d19e01c500b16ab86c46fca22a->leave($__internal_f770e4c1f2ce0a30a182fe6e6eb1f3f9edbb99d19e01c500b16ab86c46fca22a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4d68dda5334397a71791b08cc4ef8d82d7e120396aae26d48cb42d2a245a7ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d68dda5334397a71791b08cc4ef8d82d7e120396aae26d48cb42d2a245a7ee7->enter($__internal_4d68dda5334397a71791b08cc4ef8d82d7e120396aae26d48cb42d2a245a7ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1407ea312a1d0ed8a04758d634290321d87f37842500d41534c122121a5a1a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1407ea312a1d0ed8a04758d634290321d87f37842500d41534c122121a5a1a97->enter($__internal_1407ea312a1d0ed8a04758d634290321d87f37842500d41534c122121a5a1a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1407ea312a1d0ed8a04758d634290321d87f37842500d41534c122121a5a1a97->leave($__internal_1407ea312a1d0ed8a04758d634290321d87f37842500d41534c122121a5a1a97_prof);

        
        $__internal_4d68dda5334397a71791b08cc4ef8d82d7e120396aae26d48cb42d2a245a7ee7->leave($__internal_4d68dda5334397a71791b08cc4ef8d82d7e120396aae26d48cb42d2a245a7ee7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f411e7461b0d856a9739342480394209968607c02ad23ad8985b7413400d6347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f411e7461b0d856a9739342480394209968607c02ad23ad8985b7413400d6347->enter($__internal_f411e7461b0d856a9739342480394209968607c02ad23ad8985b7413400d6347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c579ac8929e61e6881975a4a64d59fa9650d93b18bbc2d0172e6bff5ae58a22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c579ac8929e61e6881975a4a64d59fa9650d93b18bbc2d0172e6bff5ae58a22a->enter($__internal_c579ac8929e61e6881975a4a64d59fa9650d93b18bbc2d0172e6bff5ae58a22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c579ac8929e61e6881975a4a64d59fa9650d93b18bbc2d0172e6bff5ae58a22a->leave($__internal_c579ac8929e61e6881975a4a64d59fa9650d93b18bbc2d0172e6bff5ae58a22a_prof);

        
        $__internal_f411e7461b0d856a9739342480394209968607c02ad23ad8985b7413400d6347->leave($__internal_f411e7461b0d856a9739342480394209968607c02ad23ad8985b7413400d6347_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
