<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_98a5142c7d18e4f902cbf1560eca1411a549b89a1cba87dd4a7077cf49d7a975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_962a8571489bc87c6fdb518701a145fe1bff4c03b1853702346d9a0156572b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962a8571489bc87c6fdb518701a145fe1bff4c03b1853702346d9a0156572b33->enter($__internal_962a8571489bc87c6fdb518701a145fe1bff4c03b1853702346d9a0156572b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_9ac3ed5b13489223e5caceeb628387b4eb49df1f785f9664167491784f179e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac3ed5b13489223e5caceeb628387b4eb49df1f785f9664167491784f179e26->enter($__internal_9ac3ed5b13489223e5caceeb628387b4eb49df1f785f9664167491784f179e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_962a8571489bc87c6fdb518701a145fe1bff4c03b1853702346d9a0156572b33->leave($__internal_962a8571489bc87c6fdb518701a145fe1bff4c03b1853702346d9a0156572b33_prof);

        
        $__internal_9ac3ed5b13489223e5caceeb628387b4eb49df1f785f9664167491784f179e26->leave($__internal_9ac3ed5b13489223e5caceeb628387b4eb49df1f785f9664167491784f179e26_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc03b268b1448ac6a4a5b5bbf1f11122a009672d98cfa5aacedfa7f7172e3350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc03b268b1448ac6a4a5b5bbf1f11122a009672d98cfa5aacedfa7f7172e3350->enter($__internal_bc03b268b1448ac6a4a5b5bbf1f11122a009672d98cfa5aacedfa7f7172e3350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32046995d262f70d504e449cd4c674d89989adc1a7ac851d5c9b71c7bbc949e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32046995d262f70d504e449cd4c674d89989adc1a7ac851d5c9b71c7bbc949e3->enter($__internal_32046995d262f70d504e449cd4c674d89989adc1a7ac851d5c9b71c7bbc949e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_32046995d262f70d504e449cd4c674d89989adc1a7ac851d5c9b71c7bbc949e3->leave($__internal_32046995d262f70d504e449cd4c674d89989adc1a7ac851d5c9b71c7bbc949e3_prof);

        
        $__internal_bc03b268b1448ac6a4a5b5bbf1f11122a009672d98cfa5aacedfa7f7172e3350->leave($__internal_bc03b268b1448ac6a4a5b5bbf1f11122a009672d98cfa5aacedfa7f7172e3350_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
