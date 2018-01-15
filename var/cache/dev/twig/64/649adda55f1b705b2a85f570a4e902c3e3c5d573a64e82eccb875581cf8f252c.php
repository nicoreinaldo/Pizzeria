<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f412eb6a721165ea093f1982f078658a33f6985f91bedf09f8ba0c2794ef362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f412eb6a721165ea093f1982f078658a33f6985f91bedf09f8ba0c2794ef362->enter($__internal_8f412eb6a721165ea093f1982f078658a33f6985f91bedf09f8ba0c2794ef362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_dee90efbce31c6eda916dc28216c63a23df197c020f445b2bf953d8354e90a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee90efbce31c6eda916dc28216c63a23df197c020f445b2bf953d8354e90a7f->enter($__internal_dee90efbce31c6eda916dc28216c63a23df197c020f445b2bf953d8354e90a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f412eb6a721165ea093f1982f078658a33f6985f91bedf09f8ba0c2794ef362->leave($__internal_8f412eb6a721165ea093f1982f078658a33f6985f91bedf09f8ba0c2794ef362_prof);

        
        $__internal_dee90efbce31c6eda916dc28216c63a23df197c020f445b2bf953d8354e90a7f->leave($__internal_dee90efbce31c6eda916dc28216c63a23df197c020f445b2bf953d8354e90a7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29fc7089ecee45e0fb992e6727d71e3fdb745125e985f450b9ff5ddd7f8c91c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fc7089ecee45e0fb992e6727d71e3fdb745125e985f450b9ff5ddd7f8c91c5->enter($__internal_29fc7089ecee45e0fb992e6727d71e3fdb745125e985f450b9ff5ddd7f8c91c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6acfcb604f1f6336ad896d635b12205246ab6d1fda8649ecf419f75cfd8c369c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acfcb604f1f6336ad896d635b12205246ab6d1fda8649ecf419f75cfd8c369c->enter($__internal_6acfcb604f1f6336ad896d635b12205246ab6d1fda8649ecf419f75cfd8c369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6acfcb604f1f6336ad896d635b12205246ab6d1fda8649ecf419f75cfd8c369c->leave($__internal_6acfcb604f1f6336ad896d635b12205246ab6d1fda8649ecf419f75cfd8c369c_prof);

        
        $__internal_29fc7089ecee45e0fb992e6727d71e3fdb745125e985f450b9ff5ddd7f8c91c5->leave($__internal_29fc7089ecee45e0fb992e6727d71e3fdb745125e985f450b9ff5ddd7f8c91c5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11c2b2d7458d5fe91c9413ace462b1060e46f59ba23a9feae722baac993f5427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c2b2d7458d5fe91c9413ace462b1060e46f59ba23a9feae722baac993f5427->enter($__internal_11c2b2d7458d5fe91c9413ace462b1060e46f59ba23a9feae722baac993f5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7dc24909ba2482bb8cb2b40ce1bcd2c022f7b3be6e220fa41630c229f8f9d6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc24909ba2482bb8cb2b40ce1bcd2c022f7b3be6e220fa41630c229f8f9d6bd->enter($__internal_7dc24909ba2482bb8cb2b40ce1bcd2c022f7b3be6e220fa41630c229f8f9d6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7dc24909ba2482bb8cb2b40ce1bcd2c022f7b3be6e220fa41630c229f8f9d6bd->leave($__internal_7dc24909ba2482bb8cb2b40ce1bcd2c022f7b3be6e220fa41630c229f8f9d6bd_prof);

        
        $__internal_11c2b2d7458d5fe91c9413ace462b1060e46f59ba23a9feae722baac993f5427->leave($__internal_11c2b2d7458d5fe91c9413ace462b1060e46f59ba23a9feae722baac993f5427_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d1ed4a27186616172ec6d887a129f959598af8c0cef3f16a081efb4f046cc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1ed4a27186616172ec6d887a129f959598af8c0cef3f16a081efb4f046cc92->enter($__internal_8d1ed4a27186616172ec6d887a129f959598af8c0cef3f16a081efb4f046cc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79d0dd75fc3f902ea62a700f33d55325301a540a42fb060611f5221817c54ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d0dd75fc3f902ea62a700f33d55325301a540a42fb060611f5221817c54ed6->enter($__internal_79d0dd75fc3f902ea62a700f33d55325301a540a42fb060611f5221817c54ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79d0dd75fc3f902ea62a700f33d55325301a540a42fb060611f5221817c54ed6->leave($__internal_79d0dd75fc3f902ea62a700f33d55325301a540a42fb060611f5221817c54ed6_prof);

        
        $__internal_8d1ed4a27186616172ec6d887a129f959598af8c0cef3f16a081efb4f046cc92->leave($__internal_8d1ed4a27186616172ec6d887a129f959598af8c0cef3f16a081efb4f046cc92_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
