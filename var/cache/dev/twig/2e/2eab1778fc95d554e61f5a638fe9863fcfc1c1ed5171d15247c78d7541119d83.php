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
        $__internal_6ba76911c6c481f2de3826eced99e4bf663a71c83fcba39a9d15ef1d717f0992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba76911c6c481f2de3826eced99e4bf663a71c83fcba39a9d15ef1d717f0992->enter($__internal_6ba76911c6c481f2de3826eced99e4bf663a71c83fcba39a9d15ef1d717f0992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_bb9f5d684dbdc74ae5dc59f07516a18f36039fb3851023e94e6e66cc98bb4d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9f5d684dbdc74ae5dc59f07516a18f36039fb3851023e94e6e66cc98bb4d52->enter($__internal_bb9f5d684dbdc74ae5dc59f07516a18f36039fb3851023e94e6e66cc98bb4d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6ba76911c6c481f2de3826eced99e4bf663a71c83fcba39a9d15ef1d717f0992->leave($__internal_6ba76911c6c481f2de3826eced99e4bf663a71c83fcba39a9d15ef1d717f0992_prof);

        
        $__internal_bb9f5d684dbdc74ae5dc59f07516a18f36039fb3851023e94e6e66cc98bb4d52->leave($__internal_bb9f5d684dbdc74ae5dc59f07516a18f36039fb3851023e94e6e66cc98bb4d52_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7da7abb3db102013d98d3e805e39804f169cf9b14151eb98aad09e32a0de54d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da7abb3db102013d98d3e805e39804f169cf9b14151eb98aad09e32a0de54d4->enter($__internal_7da7abb3db102013d98d3e805e39804f169cf9b14151eb98aad09e32a0de54d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_117d4ef24c870628ce9a74ac7be0a4725449e72456a8332ec4757d7c5cb6708a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117d4ef24c870628ce9a74ac7be0a4725449e72456a8332ec4757d7c5cb6708a->enter($__internal_117d4ef24c870628ce9a74ac7be0a4725449e72456a8332ec4757d7c5cb6708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_117d4ef24c870628ce9a74ac7be0a4725449e72456a8332ec4757d7c5cb6708a->leave($__internal_117d4ef24c870628ce9a74ac7be0a4725449e72456a8332ec4757d7c5cb6708a_prof);

        
        $__internal_7da7abb3db102013d98d3e805e39804f169cf9b14151eb98aad09e32a0de54d4->leave($__internal_7da7abb3db102013d98d3e805e39804f169cf9b14151eb98aad09e32a0de54d4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_97ddceef0b85c158852cb49ebe9301d3a8e7b1db2d88ca20a1a65218089f5892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ddceef0b85c158852cb49ebe9301d3a8e7b1db2d88ca20a1a65218089f5892->enter($__internal_97ddceef0b85c158852cb49ebe9301d3a8e7b1db2d88ca20a1a65218089f5892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e137c07bb0c45a727f9126a864fa78dd81561f9dac515ef99c53f5dfc5dd65dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e137c07bb0c45a727f9126a864fa78dd81561f9dac515ef99c53f5dfc5dd65dd->enter($__internal_e137c07bb0c45a727f9126a864fa78dd81561f9dac515ef99c53f5dfc5dd65dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e137c07bb0c45a727f9126a864fa78dd81561f9dac515ef99c53f5dfc5dd65dd->leave($__internal_e137c07bb0c45a727f9126a864fa78dd81561f9dac515ef99c53f5dfc5dd65dd_prof);

        
        $__internal_97ddceef0b85c158852cb49ebe9301d3a8e7b1db2d88ca20a1a65218089f5892->leave($__internal_97ddceef0b85c158852cb49ebe9301d3a8e7b1db2d88ca20a1a65218089f5892_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cbe2e40727653c56f31da686106e488e45db4a2b2659766691286a534b091cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe2e40727653c56f31da686106e488e45db4a2b2659766691286a534b091cbf->enter($__internal_cbe2e40727653c56f31da686106e488e45db4a2b2659766691286a534b091cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_90563c5fc7da251771379f59245a061bd784aa7bd1a83cbd09b23b5585836898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90563c5fc7da251771379f59245a061bd784aa7bd1a83cbd09b23b5585836898->enter($__internal_90563c5fc7da251771379f59245a061bd784aa7bd1a83cbd09b23b5585836898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_90563c5fc7da251771379f59245a061bd784aa7bd1a83cbd09b23b5585836898->leave($__internal_90563c5fc7da251771379f59245a061bd784aa7bd1a83cbd09b23b5585836898_prof);

        
        $__internal_cbe2e40727653c56f31da686106e488e45db4a2b2659766691286a534b091cbf->leave($__internal_cbe2e40727653c56f31da686106e488e45db4a2b2659766691286a534b091cbf_prof);

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
