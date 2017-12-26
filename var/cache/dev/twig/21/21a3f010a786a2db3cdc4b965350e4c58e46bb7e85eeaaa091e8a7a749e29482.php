<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c829506cf48267cb1d646a9d34aa840e57512fb7acd2129f17e43cfcdd2ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c829506cf48267cb1d646a9d34aa840e57512fb7acd2129f17e43cfcdd2ee4->enter($__internal_54c829506cf48267cb1d646a9d34aa840e57512fb7acd2129f17e43cfcdd2ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9b8df48d492172f350517c41c6657b3dff8903e8c912a6084acd3b4b4d4af91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8df48d492172f350517c41c6657b3dff8903e8c912a6084acd3b4b4d4af91e->enter($__internal_9b8df48d492172f350517c41c6657b3dff8903e8c912a6084acd3b4b4d4af91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c829506cf48267cb1d646a9d34aa840e57512fb7acd2129f17e43cfcdd2ee4->leave($__internal_54c829506cf48267cb1d646a9d34aa840e57512fb7acd2129f17e43cfcdd2ee4_prof);

        
        $__internal_9b8df48d492172f350517c41c6657b3dff8903e8c912a6084acd3b4b4d4af91e->leave($__internal_9b8df48d492172f350517c41c6657b3dff8903e8c912a6084acd3b4b4d4af91e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5941b3ab72679e2b8c066aa2fdf6069d4c6203f40611ea986c5e601d2cce54d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5941b3ab72679e2b8c066aa2fdf6069d4c6203f40611ea986c5e601d2cce54d5->enter($__internal_5941b3ab72679e2b8c066aa2fdf6069d4c6203f40611ea986c5e601d2cce54d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f06a4018229c97cefcfdcc1905c3caef30105e21a928a6f40701cdf0fc4ec96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f06a4018229c97cefcfdcc1905c3caef30105e21a928a6f40701cdf0fc4ec96->enter($__internal_8f06a4018229c97cefcfdcc1905c3caef30105e21a928a6f40701cdf0fc4ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8f06a4018229c97cefcfdcc1905c3caef30105e21a928a6f40701cdf0fc4ec96->leave($__internal_8f06a4018229c97cefcfdcc1905c3caef30105e21a928a6f40701cdf0fc4ec96_prof);

        
        $__internal_5941b3ab72679e2b8c066aa2fdf6069d4c6203f40611ea986c5e601d2cce54d5->leave($__internal_5941b3ab72679e2b8c066aa2fdf6069d4c6203f40611ea986c5e601d2cce54d5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aaa65d534191085eb9e9f164aeab062007037b23759509b6979a7faf8a7d9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaa65d534191085eb9e9f164aeab062007037b23759509b6979a7faf8a7d9f4->enter($__internal_0aaa65d534191085eb9e9f164aeab062007037b23759509b6979a7faf8a7d9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90b2fa3df21689ac68d72efcdd303ed48d44458b7a1cfbd2d5e3140108abd207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b2fa3df21689ac68d72efcdd303ed48d44458b7a1cfbd2d5e3140108abd207->enter($__internal_90b2fa3df21689ac68d72efcdd303ed48d44458b7a1cfbd2d5e3140108abd207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_90b2fa3df21689ac68d72efcdd303ed48d44458b7a1cfbd2d5e3140108abd207->leave($__internal_90b2fa3df21689ac68d72efcdd303ed48d44458b7a1cfbd2d5e3140108abd207_prof);

        
        $__internal_0aaa65d534191085eb9e9f164aeab062007037b23759509b6979a7faf8a7d9f4->leave($__internal_0aaa65d534191085eb9e9f164aeab062007037b23759509b6979a7faf8a7d9f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
