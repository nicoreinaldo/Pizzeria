<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c609787acd24ec0b4b1a361d4531bbba377252f376fc0c3641ca193572b7906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_994513206ce75d298bdf38d3cd0a37c0d0ba8faa9e9c27a8221a8c632ded3800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994513206ce75d298bdf38d3cd0a37c0d0ba8faa9e9c27a8221a8c632ded3800->enter($__internal_994513206ce75d298bdf38d3cd0a37c0d0ba8faa9e9c27a8221a8c632ded3800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_d19fc910baf2baaf88b475108598c450bf4db2a4bbd8b5ab97c9d9d14cca354e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19fc910baf2baaf88b475108598c450bf4db2a4bbd8b5ab97c9d9d14cca354e->enter($__internal_d19fc910baf2baaf88b475108598c450bf4db2a4bbd8b5ab97c9d9d14cca354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994513206ce75d298bdf38d3cd0a37c0d0ba8faa9e9c27a8221a8c632ded3800->leave($__internal_994513206ce75d298bdf38d3cd0a37c0d0ba8faa9e9c27a8221a8c632ded3800_prof);

        
        $__internal_d19fc910baf2baaf88b475108598c450bf4db2a4bbd8b5ab97c9d9d14cca354e->leave($__internal_d19fc910baf2baaf88b475108598c450bf4db2a4bbd8b5ab97c9d9d14cca354e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_897aff4e56a3b165d5d5a41059cde408142a68c37817e295877645c3b7a56ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897aff4e56a3b165d5d5a41059cde408142a68c37817e295877645c3b7a56ee2->enter($__internal_897aff4e56a3b165d5d5a41059cde408142a68c37817e295877645c3b7a56ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4482c814bddd49ea1d6ecfd906c5139f9d9586f906dd56a41a8437bc51e468ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4482c814bddd49ea1d6ecfd906c5139f9d9586f906dd56a41a8437bc51e468ac->enter($__internal_4482c814bddd49ea1d6ecfd906c5139f9d9586f906dd56a41a8437bc51e468ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4482c814bddd49ea1d6ecfd906c5139f9d9586f906dd56a41a8437bc51e468ac->leave($__internal_4482c814bddd49ea1d6ecfd906c5139f9d9586f906dd56a41a8437bc51e468ac_prof);

        
        $__internal_897aff4e56a3b165d5d5a41059cde408142a68c37817e295877645c3b7a56ee2->leave($__internal_897aff4e56a3b165d5d5a41059cde408142a68c37817e295877645c3b7a56ee2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
