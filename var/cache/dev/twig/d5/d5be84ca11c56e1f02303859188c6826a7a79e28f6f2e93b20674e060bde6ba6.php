<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_434170396bb6628ab33d7d8d7e4ef797768e2c6b84aca2f88fe1e9e3e5fbfd50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434170396bb6628ab33d7d8d7e4ef797768e2c6b84aca2f88fe1e9e3e5fbfd50->enter($__internal_434170396bb6628ab33d7d8d7e4ef797768e2c6b84aca2f88fe1e9e3e5fbfd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bd0efef987aceba8e9c2601c8cc07ed8429c513edf5ff80fe0843ca56ea4516c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0efef987aceba8e9c2601c8cc07ed8429c513edf5ff80fe0843ca56ea4516c->enter($__internal_bd0efef987aceba8e9c2601c8cc07ed8429c513edf5ff80fe0843ca56ea4516c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434170396bb6628ab33d7d8d7e4ef797768e2c6b84aca2f88fe1e9e3e5fbfd50->leave($__internal_434170396bb6628ab33d7d8d7e4ef797768e2c6b84aca2f88fe1e9e3e5fbfd50_prof);

        
        $__internal_bd0efef987aceba8e9c2601c8cc07ed8429c513edf5ff80fe0843ca56ea4516c->leave($__internal_bd0efef987aceba8e9c2601c8cc07ed8429c513edf5ff80fe0843ca56ea4516c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87e0acbb7c710c271fbbc118ef0b73b473be2ae388145683f8dadd370722c239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e0acbb7c710c271fbbc118ef0b73b473be2ae388145683f8dadd370722c239->enter($__internal_87e0acbb7c710c271fbbc118ef0b73b473be2ae388145683f8dadd370722c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae7bc2db07755f3477e2d868bc8a9fa31b84593662e8ff537c99986b88dfaba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7bc2db07755f3477e2d868bc8a9fa31b84593662e8ff537c99986b88dfaba4->enter($__internal_ae7bc2db07755f3477e2d868bc8a9fa31b84593662e8ff537c99986b88dfaba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ae7bc2db07755f3477e2d868bc8a9fa31b84593662e8ff537c99986b88dfaba4->leave($__internal_ae7bc2db07755f3477e2d868bc8a9fa31b84593662e8ff537c99986b88dfaba4_prof);

        
        $__internal_87e0acbb7c710c271fbbc118ef0b73b473be2ae388145683f8dadd370722c239->leave($__internal_87e0acbb7c710c271fbbc118ef0b73b473be2ae388145683f8dadd370722c239_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7c4d8fbb8d61e4ef6fbf0eff740e832f1e2f17ce4b21aa903dbe084d8528234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c4d8fbb8d61e4ef6fbf0eff740e832f1e2f17ce4b21aa903dbe084d8528234->enter($__internal_b7c4d8fbb8d61e4ef6fbf0eff740e832f1e2f17ce4b21aa903dbe084d8528234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b54d50f564a8aa8ec2b52334778d173f5ce8c60d76acae1760a45d580726f1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54d50f564a8aa8ec2b52334778d173f5ce8c60d76acae1760a45d580726f1c0->enter($__internal_b54d50f564a8aa8ec2b52334778d173f5ce8c60d76acae1760a45d580726f1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b54d50f564a8aa8ec2b52334778d173f5ce8c60d76acae1760a45d580726f1c0->leave($__internal_b54d50f564a8aa8ec2b52334778d173f5ce8c60d76acae1760a45d580726f1c0_prof);

        
        $__internal_b7c4d8fbb8d61e4ef6fbf0eff740e832f1e2f17ce4b21aa903dbe084d8528234->leave($__internal_b7c4d8fbb8d61e4ef6fbf0eff740e832f1e2f17ce4b21aa903dbe084d8528234_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1d61593ceffb19cc1aed5f060c3837b83801d8bd51163944790173ce1b5b297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d61593ceffb19cc1aed5f060c3837b83801d8bd51163944790173ce1b5b297->enter($__internal_c1d61593ceffb19cc1aed5f060c3837b83801d8bd51163944790173ce1b5b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45c0f71c5698a80e75b26fa7f92709ea2ee9f779de5e5ab4d683f38a6224f89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c0f71c5698a80e75b26fa7f92709ea2ee9f779de5e5ab4d683f38a6224f89d->enter($__internal_45c0f71c5698a80e75b26fa7f92709ea2ee9f779de5e5ab4d683f38a6224f89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_45c0f71c5698a80e75b26fa7f92709ea2ee9f779de5e5ab4d683f38a6224f89d->leave($__internal_45c0f71c5698a80e75b26fa7f92709ea2ee9f779de5e5ab4d683f38a6224f89d_prof);

        
        $__internal_c1d61593ceffb19cc1aed5f060c3837b83801d8bd51163944790173ce1b5b297->leave($__internal_c1d61593ceffb19cc1aed5f060c3837b83801d8bd51163944790173ce1b5b297_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/nico/pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
