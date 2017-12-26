<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2e366d753fa19c767eb719a9bdec877ec3bcc387f06a26830fc81bf76364037d extends Twig_Template
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
        $__internal_80041afea74f34ded7d505516d4082e876f280c46d15ef65b53facc8461160dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80041afea74f34ded7d505516d4082e876f280c46d15ef65b53facc8461160dc->enter($__internal_80041afea74f34ded7d505516d4082e876f280c46d15ef65b53facc8461160dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_512b8f15d205525fe658547a968416291021bc189807fb5cdbe4c8c58c9a7071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512b8f15d205525fe658547a968416291021bc189807fb5cdbe4c8c58c9a7071->enter($__internal_512b8f15d205525fe658547a968416291021bc189807fb5cdbe4c8c58c9a7071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80041afea74f34ded7d505516d4082e876f280c46d15ef65b53facc8461160dc->leave($__internal_80041afea74f34ded7d505516d4082e876f280c46d15ef65b53facc8461160dc_prof);

        
        $__internal_512b8f15d205525fe658547a968416291021bc189807fb5cdbe4c8c58c9a7071->leave($__internal_512b8f15d205525fe658547a968416291021bc189807fb5cdbe4c8c58c9a7071_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56685ca070d41e007012f74fd99fb6851d6560163237150a81e96aae040d64cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56685ca070d41e007012f74fd99fb6851d6560163237150a81e96aae040d64cf->enter($__internal_56685ca070d41e007012f74fd99fb6851d6560163237150a81e96aae040d64cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1b1f392cee96fe1939c7f98ff86460e2c8715e5248354caf2306118a2be8dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b1f392cee96fe1939c7f98ff86460e2c8715e5248354caf2306118a2be8dd4->enter($__internal_e1b1f392cee96fe1939c7f98ff86460e2c8715e5248354caf2306118a2be8dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e1b1f392cee96fe1939c7f98ff86460e2c8715e5248354caf2306118a2be8dd4->leave($__internal_e1b1f392cee96fe1939c7f98ff86460e2c8715e5248354caf2306118a2be8dd4_prof);

        
        $__internal_56685ca070d41e007012f74fd99fb6851d6560163237150a81e96aae040d64cf->leave($__internal_56685ca070d41e007012f74fd99fb6851d6560163237150a81e96aae040d64cf_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
