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
        $__internal_7f3b402aa8da662272e260e8935599661c6ca09bd485e4490342c416a8527eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3b402aa8da662272e260e8935599661c6ca09bd485e4490342c416a8527eea->enter($__internal_7f3b402aa8da662272e260e8935599661c6ca09bd485e4490342c416a8527eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_52cb7d804dcab590822612575a373932e1d0761fe0cd0df7c261621eed79de49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cb7d804dcab590822612575a373932e1d0761fe0cd0df7c261621eed79de49->enter($__internal_52cb7d804dcab590822612575a373932e1d0761fe0cd0df7c261621eed79de49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3b402aa8da662272e260e8935599661c6ca09bd485e4490342c416a8527eea->leave($__internal_7f3b402aa8da662272e260e8935599661c6ca09bd485e4490342c416a8527eea_prof);

        
        $__internal_52cb7d804dcab590822612575a373932e1d0761fe0cd0df7c261621eed79de49->leave($__internal_52cb7d804dcab590822612575a373932e1d0761fe0cd0df7c261621eed79de49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e438610f6f28d3c44f183aef2e04269942d61d107dac4847e77858a0760c129d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e438610f6f28d3c44f183aef2e04269942d61d107dac4847e77858a0760c129d->enter($__internal_e438610f6f28d3c44f183aef2e04269942d61d107dac4847e77858a0760c129d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7b4ceea325bd05a81e6b0919611d77a9b1aefa2e69d33224283f6dc5dbbbbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b4ceea325bd05a81e6b0919611d77a9b1aefa2e69d33224283f6dc5dbbbbb9->enter($__internal_d7b4ceea325bd05a81e6b0919611d77a9b1aefa2e69d33224283f6dc5dbbbbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d7b4ceea325bd05a81e6b0919611d77a9b1aefa2e69d33224283f6dc5dbbbbb9->leave($__internal_d7b4ceea325bd05a81e6b0919611d77a9b1aefa2e69d33224283f6dc5dbbbbb9_prof);

        
        $__internal_e438610f6f28d3c44f183aef2e04269942d61d107dac4847e77858a0760c129d->leave($__internal_e438610f6f28d3c44f183aef2e04269942d61d107dac4847e77858a0760c129d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_30e569b2674f1ea75e808de4ce9af043812bc16c8a1f3e061dd0f660c9c65f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e569b2674f1ea75e808de4ce9af043812bc16c8a1f3e061dd0f660c9c65f47->enter($__internal_30e569b2674f1ea75e808de4ce9af043812bc16c8a1f3e061dd0f660c9c65f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c72be6ecacd44bb1d64d6ba2747a079e5201374ccedb7b10420bda4daf03e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c72be6ecacd44bb1d64d6ba2747a079e5201374ccedb7b10420bda4daf03e40->enter($__internal_3c72be6ecacd44bb1d64d6ba2747a079e5201374ccedb7b10420bda4daf03e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c72be6ecacd44bb1d64d6ba2747a079e5201374ccedb7b10420bda4daf03e40->leave($__internal_3c72be6ecacd44bb1d64d6ba2747a079e5201374ccedb7b10420bda4daf03e40_prof);

        
        $__internal_30e569b2674f1ea75e808de4ce9af043812bc16c8a1f3e061dd0f660c9c65f47->leave($__internal_30e569b2674f1ea75e808de4ce9af043812bc16c8a1f3e061dd0f660c9c65f47_prof);

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
