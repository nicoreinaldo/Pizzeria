<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c9c310ed2d4989158f4c6fbe19b3b79a4b292f41f53c8f2595fb6aa0ab9782a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2f534ab374f20e45c56193ce33701249d927b63251c0358c0d77765bd6e1596c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f534ab374f20e45c56193ce33701249d927b63251c0358c0d77765bd6e1596c->enter($__internal_2f534ab374f20e45c56193ce33701249d927b63251c0358c0d77765bd6e1596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_eeb99ec37462df3f5bf31db5d3cef914912ed8b69e18da8f860ad2a69e4a1f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb99ec37462df3f5bf31db5d3cef914912ed8b69e18da8f860ad2a69e4a1f01->enter($__internal_eeb99ec37462df3f5bf31db5d3cef914912ed8b69e18da8f860ad2a69e4a1f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f534ab374f20e45c56193ce33701249d927b63251c0358c0d77765bd6e1596c->leave($__internal_2f534ab374f20e45c56193ce33701249d927b63251c0358c0d77765bd6e1596c_prof);

        
        $__internal_eeb99ec37462df3f5bf31db5d3cef914912ed8b69e18da8f860ad2a69e4a1f01->leave($__internal_eeb99ec37462df3f5bf31db5d3cef914912ed8b69e18da8f860ad2a69e4a1f01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_669eb4e18fb50383c2618b94192349a5d47b67e9e01e5840d96334961dab4357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669eb4e18fb50383c2618b94192349a5d47b67e9e01e5840d96334961dab4357->enter($__internal_669eb4e18fb50383c2618b94192349a5d47b67e9e01e5840d96334961dab4357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c48ea4e6c07d0b525ab04a9d7bd7443c60c4ba5f38c2e6cba26c9b1e89daeec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48ea4e6c07d0b525ab04a9d7bd7443c60c4ba5f38c2e6cba26c9b1e89daeec4->enter($__internal_c48ea4e6c07d0b525ab04a9d7bd7443c60c4ba5f38c2e6cba26c9b1e89daeec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c48ea4e6c07d0b525ab04a9d7bd7443c60c4ba5f38c2e6cba26c9b1e89daeec4->leave($__internal_c48ea4e6c07d0b525ab04a9d7bd7443c60c4ba5f38c2e6cba26c9b1e89daeec4_prof);

        
        $__internal_669eb4e18fb50383c2618b94192349a5d47b67e9e01e5840d96334961dab4357->leave($__internal_669eb4e18fb50383c2618b94192349a5d47b67e9e01e5840d96334961dab4357_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
