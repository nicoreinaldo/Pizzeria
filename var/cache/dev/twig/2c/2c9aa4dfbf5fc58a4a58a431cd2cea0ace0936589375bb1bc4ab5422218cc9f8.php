<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92d657529e967bb2b7f04eb8caef789c129aa3745d5322bb0850ce65cce5cb11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d2bc52da8ad1e01d99310edabf3f4522e8e2b91758f57bba918e4a1d251b86ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bc52da8ad1e01d99310edabf3f4522e8e2b91758f57bba918e4a1d251b86ea->enter($__internal_d2bc52da8ad1e01d99310edabf3f4522e8e2b91758f57bba918e4a1d251b86ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_bc24bfec7bf13d4fb61b8fbfdf2c15f5e840794c917c2989df946ce08810e8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc24bfec7bf13d4fb61b8fbfdf2c15f5e840794c917c2989df946ce08810e8f0->enter($__internal_bc24bfec7bf13d4fb61b8fbfdf2c15f5e840794c917c2989df946ce08810e8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2bc52da8ad1e01d99310edabf3f4522e8e2b91758f57bba918e4a1d251b86ea->leave($__internal_d2bc52da8ad1e01d99310edabf3f4522e8e2b91758f57bba918e4a1d251b86ea_prof);

        
        $__internal_bc24bfec7bf13d4fb61b8fbfdf2c15f5e840794c917c2989df946ce08810e8f0->leave($__internal_bc24bfec7bf13d4fb61b8fbfdf2c15f5e840794c917c2989df946ce08810e8f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_901e9160b24973f42dae59473e4ee4debf08b360848a7e547872fa6b17f779b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901e9160b24973f42dae59473e4ee4debf08b360848a7e547872fa6b17f779b2->enter($__internal_901e9160b24973f42dae59473e4ee4debf08b360848a7e547872fa6b17f779b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8afa61799496dd504aebaeca37a62ebaccfcdc9c0f07831affa12ff643e17ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afa61799496dd504aebaeca37a62ebaccfcdc9c0f07831affa12ff643e17ad9->enter($__internal_8afa61799496dd504aebaeca37a62ebaccfcdc9c0f07831affa12ff643e17ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8afa61799496dd504aebaeca37a62ebaccfcdc9c0f07831affa12ff643e17ad9->leave($__internal_8afa61799496dd504aebaeca37a62ebaccfcdc9c0f07831affa12ff643e17ad9_prof);

        
        $__internal_901e9160b24973f42dae59473e4ee4debf08b360848a7e547872fa6b17f779b2->leave($__internal_901e9160b24973f42dae59473e4ee4debf08b360848a7e547872fa6b17f779b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
