<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_53c0c3ecb0d43fe392f22492c319c47e3dde117d9247c505a3cb0d6ed7ca3231 extends Twig_Template
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
        $__internal_76cefd47ee3d98750157db346cb45a3c7578da83045938e5582f4f155a77c94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76cefd47ee3d98750157db346cb45a3c7578da83045938e5582f4f155a77c94c->enter($__internal_76cefd47ee3d98750157db346cb45a3c7578da83045938e5582f4f155a77c94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_0895b5d8056b42dc8d4876fe6a8a52ef807be65082bc7895631367d76e665a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0895b5d8056b42dc8d4876fe6a8a52ef807be65082bc7895631367d76e665a84->enter($__internal_0895b5d8056b42dc8d4876fe6a8a52ef807be65082bc7895631367d76e665a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_76cefd47ee3d98750157db346cb45a3c7578da83045938e5582f4f155a77c94c->leave($__internal_76cefd47ee3d98750157db346cb45a3c7578da83045938e5582f4f155a77c94c_prof);

        
        $__internal_0895b5d8056b42dc8d4876fe6a8a52ef807be65082bc7895631367d76e665a84->leave($__internal_0895b5d8056b42dc8d4876fe6a8a52ef807be65082bc7895631367d76e665a84_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5030785d80f9b813a104a3515de2c748dfe1eacdad21779a9f06334fdf81e2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5030785d80f9b813a104a3515de2c748dfe1eacdad21779a9f06334fdf81e2cd->enter($__internal_5030785d80f9b813a104a3515de2c748dfe1eacdad21779a9f06334fdf81e2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d248a3e8c3c13fa6347da6fd098a5456098fac3faf07b622338f26ca24d13413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d248a3e8c3c13fa6347da6fd098a5456098fac3faf07b622338f26ca24d13413->enter($__internal_d248a3e8c3c13fa6347da6fd098a5456098fac3faf07b622338f26ca24d13413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d248a3e8c3c13fa6347da6fd098a5456098fac3faf07b622338f26ca24d13413->leave($__internal_d248a3e8c3c13fa6347da6fd098a5456098fac3faf07b622338f26ca24d13413_prof);

        
        $__internal_5030785d80f9b813a104a3515de2c748dfe1eacdad21779a9f06334fdf81e2cd->leave($__internal_5030785d80f9b813a104a3515de2c748dfe1eacdad21779a9f06334fdf81e2cd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_96c80aad4ee046dbc33a6436b80ef3c000880bc6a1f4155b95f174768f0a4e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c80aad4ee046dbc33a6436b80ef3c000880bc6a1f4155b95f174768f0a4e6a->enter($__internal_96c80aad4ee046dbc33a6436b80ef3c000880bc6a1f4155b95f174768f0a4e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6d2daa7dbd7492187954ba47648b48076f6028ddb03d267fb7dc158ed081524e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2daa7dbd7492187954ba47648b48076f6028ddb03d267fb7dc158ed081524e->enter($__internal_6d2daa7dbd7492187954ba47648b48076f6028ddb03d267fb7dc158ed081524e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6d2daa7dbd7492187954ba47648b48076f6028ddb03d267fb7dc158ed081524e->leave($__internal_6d2daa7dbd7492187954ba47648b48076f6028ddb03d267fb7dc158ed081524e_prof);

        
        $__internal_96c80aad4ee046dbc33a6436b80ef3c000880bc6a1f4155b95f174768f0a4e6a->leave($__internal_96c80aad4ee046dbc33a6436b80ef3c000880bc6a1f4155b95f174768f0a4e6a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_38ef49b79221edc9ea340a7cd22b37ade556ad2e3ea16370552d7863995595be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ef49b79221edc9ea340a7cd22b37ade556ad2e3ea16370552d7863995595be->enter($__internal_38ef49b79221edc9ea340a7cd22b37ade556ad2e3ea16370552d7863995595be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c3a1737da10ba65c4adcf87f4b0722719fc15394a71776e918ddc4a7676d7da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a1737da10ba65c4adcf87f4b0722719fc15394a71776e918ddc4a7676d7da1->enter($__internal_c3a1737da10ba65c4adcf87f4b0722719fc15394a71776e918ddc4a7676d7da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c3a1737da10ba65c4adcf87f4b0722719fc15394a71776e918ddc4a7676d7da1->leave($__internal_c3a1737da10ba65c4adcf87f4b0722719fc15394a71776e918ddc4a7676d7da1_prof);

        
        $__internal_38ef49b79221edc9ea340a7cd22b37ade556ad2e3ea16370552d7863995595be->leave($__internal_38ef49b79221edc9ea340a7cd22b37ade556ad2e3ea16370552d7863995595be_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
