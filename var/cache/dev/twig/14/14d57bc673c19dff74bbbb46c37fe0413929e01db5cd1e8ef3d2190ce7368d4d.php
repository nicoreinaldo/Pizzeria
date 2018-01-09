<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d869e02ebe7ac1413ca1b3439af31062ac38da710dcf5e3eb1f6a50ee31ebba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db07a31ab6b9ca284b8b47c80949729972f371825402cef5a39fc0fa08abec70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db07a31ab6b9ca284b8b47c80949729972f371825402cef5a39fc0fa08abec70->enter($__internal_db07a31ab6b9ca284b8b47c80949729972f371825402cef5a39fc0fa08abec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3199253931014b6a58161340d3eafdbe3ca3b8bb0f13f4635afcc01d35926c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3199253931014b6a58161340d3eafdbe3ca3b8bb0f13f4635afcc01d35926c86->enter($__internal_3199253931014b6a58161340d3eafdbe3ca3b8bb0f13f4635afcc01d35926c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db07a31ab6b9ca284b8b47c80949729972f371825402cef5a39fc0fa08abec70->leave($__internal_db07a31ab6b9ca284b8b47c80949729972f371825402cef5a39fc0fa08abec70_prof);

        
        $__internal_3199253931014b6a58161340d3eafdbe3ca3b8bb0f13f4635afcc01d35926c86->leave($__internal_3199253931014b6a58161340d3eafdbe3ca3b8bb0f13f4635afcc01d35926c86_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59c8f94d858e44243396931b63742e45305920cce0745f1abb096595e1dd9fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c8f94d858e44243396931b63742e45305920cce0745f1abb096595e1dd9fc5->enter($__internal_59c8f94d858e44243396931b63742e45305920cce0745f1abb096595e1dd9fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8ad8086ed813174c23c3fad8974365c7e56cd10576ef1de1a2ee1ade78649db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ad8086ed813174c23c3fad8974365c7e56cd10576ef1de1a2ee1ade78649db->enter($__internal_b8ad8086ed813174c23c3fad8974365c7e56cd10576ef1de1a2ee1ade78649db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b8ad8086ed813174c23c3fad8974365c7e56cd10576ef1de1a2ee1ade78649db->leave($__internal_b8ad8086ed813174c23c3fad8974365c7e56cd10576ef1de1a2ee1ade78649db_prof);

        
        $__internal_59c8f94d858e44243396931b63742e45305920cce0745f1abb096595e1dd9fc5->leave($__internal_59c8f94d858e44243396931b63742e45305920cce0745f1abb096595e1dd9fc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
