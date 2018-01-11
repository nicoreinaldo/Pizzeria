<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_d869e02ebe7ac1413ca1b3439af31062ac38da710dcf5e3eb1f6a50ee31ebba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::baseFos.html.twig", "@FOSUser/Registration/confirmed.html.twig", 3);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseFos.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e0143e284c20006c7d9300dd1a49173d456301bf5941e6a3c25fd33ff5dbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e0143e284c20006c7d9300dd1a49173d456301bf5941e6a3c25fd33ff5dbd2->enter($__internal_a1e0143e284c20006c7d9300dd1a49173d456301bf5941e6a3c25fd33ff5dbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0de16bee3c5e4011eba36908c1aa2a2654a7714b19db0f78e1676614ab569ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de16bee3c5e4011eba36908c1aa2a2654a7714b19db0f78e1676614ab569ca6->enter($__internal_0de16bee3c5e4011eba36908c1aa2a2654a7714b19db0f78e1676614ab569ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e0143e284c20006c7d9300dd1a49173d456301bf5941e6a3c25fd33ff5dbd2->leave($__internal_a1e0143e284c20006c7d9300dd1a49173d456301bf5941e6a3c25fd33ff5dbd2_prof);

        
        $__internal_0de16bee3c5e4011eba36908c1aa2a2654a7714b19db0f78e1676614ab569ca6->leave($__internal_0de16bee3c5e4011eba36908c1aa2a2654a7714b19db0f78e1676614ab569ca6_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_666b5046c159902a266c1b40f71e21f30418d1b8724b82ce950149d0c1efa4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666b5046c159902a266c1b40f71e21f30418d1b8724b82ce950149d0c1efa4ef->enter($__internal_666b5046c159902a266c1b40f71e21f30418d1b8724b82ce950149d0c1efa4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d582cd31a4bcbf23988f87c52af063af7a0e4dfa79fd856f8fb6b45374de4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d582cd31a4bcbf23988f87c52af063af7a0e4dfa79fd856f8fb6b45374de4a5->enter($__internal_9d582cd31a4bcbf23988f87c52af063af7a0e4dfa79fd856f8fb6b45374de4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 6
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 7
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9d582cd31a4bcbf23988f87c52af063af7a0e4dfa79fd856f8fb6b45374de4a5->leave($__internal_9d582cd31a4bcbf23988f87c52af063af7a0e4dfa79fd856f8fb6b45374de4a5_prof);

        
        $__internal_666b5046c159902a266c1b40f71e21f30418d1b8724b82ce950149d0c1efa4ef->leave($__internal_666b5046c159902a266c1b40f71e21f30418d1b8724b82ce950149d0c1efa4ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  54 => 6,  49 => 5,  40 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}
{% extends \"::baseFos.html.twig\" %}
{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
