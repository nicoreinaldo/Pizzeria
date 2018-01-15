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
        $__internal_febc64fb5a8552c930af4552542c28843c2b55b434445fd5979ce6952c660c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febc64fb5a8552c930af4552542c28843c2b55b434445fd5979ce6952c660c2e->enter($__internal_febc64fb5a8552c930af4552542c28843c2b55b434445fd5979ce6952c660c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7c89461a5d2d3cc121d4482bfdd6bf55b95bd14718ff75aad0bd1fdbe7110e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c89461a5d2d3cc121d4482bfdd6bf55b95bd14718ff75aad0bd1fdbe7110e9e->enter($__internal_7c89461a5d2d3cc121d4482bfdd6bf55b95bd14718ff75aad0bd1fdbe7110e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_febc64fb5a8552c930af4552542c28843c2b55b434445fd5979ce6952c660c2e->leave($__internal_febc64fb5a8552c930af4552542c28843c2b55b434445fd5979ce6952c660c2e_prof);

        
        $__internal_7c89461a5d2d3cc121d4482bfdd6bf55b95bd14718ff75aad0bd1fdbe7110e9e->leave($__internal_7c89461a5d2d3cc121d4482bfdd6bf55b95bd14718ff75aad0bd1fdbe7110e9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_180d2076fd0504504749b72c9fe9943d27ba0ae8cd0b51d13b9f5f952bb4ff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180d2076fd0504504749b72c9fe9943d27ba0ae8cd0b51d13b9f5f952bb4ff07->enter($__internal_180d2076fd0504504749b72c9fe9943d27ba0ae8cd0b51d13b9f5f952bb4ff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89278b4b7c27b5fe1b97659332f7d2a79faf95a063b3a65e0cffcbe4e54303c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89278b4b7c27b5fe1b97659332f7d2a79faf95a063b3a65e0cffcbe4e54303c9->enter($__internal_89278b4b7c27b5fe1b97659332f7d2a79faf95a063b3a65e0cffcbe4e54303c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_89278b4b7c27b5fe1b97659332f7d2a79faf95a063b3a65e0cffcbe4e54303c9->leave($__internal_89278b4b7c27b5fe1b97659332f7d2a79faf95a063b3a65e0cffcbe4e54303c9_prof);

        
        $__internal_180d2076fd0504504749b72c9fe9943d27ba0ae8cd0b51d13b9f5f952bb4ff07->leave($__internal_180d2076fd0504504749b72c9fe9943d27ba0ae8cd0b51d13b9f5f952bb4ff07_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_06573260c19e45df58fed5221a74632e1bfe071d97bbe1615272ec141cd2eeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06573260c19e45df58fed5221a74632e1bfe071d97bbe1615272ec141cd2eeb3->enter($__internal_06573260c19e45df58fed5221a74632e1bfe071d97bbe1615272ec141cd2eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_866b96ecfc8e5955972dfaa28b5582d18feda9afeadf084e523ca2abf3eaa972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866b96ecfc8e5955972dfaa28b5582d18feda9afeadf084e523ca2abf3eaa972->enter($__internal_866b96ecfc8e5955972dfaa28b5582d18feda9afeadf084e523ca2abf3eaa972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_866b96ecfc8e5955972dfaa28b5582d18feda9afeadf084e523ca2abf3eaa972->leave($__internal_866b96ecfc8e5955972dfaa28b5582d18feda9afeadf084e523ca2abf3eaa972_prof);

        
        $__internal_06573260c19e45df58fed5221a74632e1bfe071d97bbe1615272ec141cd2eeb3->leave($__internal_06573260c19e45df58fed5221a74632e1bfe071d97bbe1615272ec141cd2eeb3_prof);

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
