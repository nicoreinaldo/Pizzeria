<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_2b1727ccf708dde05d64a7b21ae157a2b6c51316a686904a131ce4556dfae637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1727ccf708dde05d64a7b21ae157a2b6c51316a686904a131ce4556dfae637->enter($__internal_2b1727ccf708dde05d64a7b21ae157a2b6c51316a686904a131ce4556dfae637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e326700fa3e34101bd662a5b71bfd1ffcf8b5a78d98d0c01fdc3e4e4a0d3d26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e326700fa3e34101bd662a5b71bfd1ffcf8b5a78d98d0c01fdc3e4e4a0d3d26d->enter($__internal_e326700fa3e34101bd662a5b71bfd1ffcf8b5a78d98d0c01fdc3e4e4a0d3d26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1727ccf708dde05d64a7b21ae157a2b6c51316a686904a131ce4556dfae637->leave($__internal_2b1727ccf708dde05d64a7b21ae157a2b6c51316a686904a131ce4556dfae637_prof);

        
        $__internal_e326700fa3e34101bd662a5b71bfd1ffcf8b5a78d98d0c01fdc3e4e4a0d3d26d->leave($__internal_e326700fa3e34101bd662a5b71bfd1ffcf8b5a78d98d0c01fdc3e4e4a0d3d26d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_578470a6d644f387a8ff9db12eee29307c1e65b08b9ab6f5bec76f797b8e08bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578470a6d644f387a8ff9db12eee29307c1e65b08b9ab6f5bec76f797b8e08bc->enter($__internal_578470a6d644f387a8ff9db12eee29307c1e65b08b9ab6f5bec76f797b8e08bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f87f55737cdaa8ec55e8545bcd3d80805082173b72681517ec5980256218a62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87f55737cdaa8ec55e8545bcd3d80805082173b72681517ec5980256218a62f->enter($__internal_f87f55737cdaa8ec55e8545bcd3d80805082173b72681517ec5980256218a62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f87f55737cdaa8ec55e8545bcd3d80805082173b72681517ec5980256218a62f->leave($__internal_f87f55737cdaa8ec55e8545bcd3d80805082173b72681517ec5980256218a62f_prof);

        
        $__internal_578470a6d644f387a8ff9db12eee29307c1e65b08b9ab6f5bec76f797b8e08bc->leave($__internal_578470a6d644f387a8ff9db12eee29307c1e65b08b9ab6f5bec76f797b8e08bc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ed50753bc122523b2a35a76691bdb5381b3e7c548d2b6680e1201a3b136f8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed50753bc122523b2a35a76691bdb5381b3e7c548d2b6680e1201a3b136f8bf->enter($__internal_0ed50753bc122523b2a35a76691bdb5381b3e7c548d2b6680e1201a3b136f8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65e03bbfb71dc5affe8d175ac184410d9768dd1cd0606b55b3d42b4ea0dff5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e03bbfb71dc5affe8d175ac184410d9768dd1cd0606b55b3d42b4ea0dff5a0->enter($__internal_65e03bbfb71dc5affe8d175ac184410d9768dd1cd0606b55b3d42b4ea0dff5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_65e03bbfb71dc5affe8d175ac184410d9768dd1cd0606b55b3d42b4ea0dff5a0->leave($__internal_65e03bbfb71dc5affe8d175ac184410d9768dd1cd0606b55b3d42b4ea0dff5a0_prof);

        
        $__internal_0ed50753bc122523b2a35a76691bdb5381b3e7c548d2b6680e1201a3b136f8bf->leave($__internal_0ed50753bc122523b2a35a76691bdb5381b3e7c548d2b6680e1201a3b136f8bf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4ab567479cab9b29259d2d173080e7f112d2e1f59d8ffbbe6e2d556fd618715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ab567479cab9b29259d2d173080e7f112d2e1f59d8ffbbe6e2d556fd618715->enter($__internal_b4ab567479cab9b29259d2d173080e7f112d2e1f59d8ffbbe6e2d556fd618715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b64332c1f57cf932a324200f3bc99f0341879768f4779287a37e0ef69566403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b64332c1f57cf932a324200f3bc99f0341879768f4779287a37e0ef69566403->enter($__internal_9b64332c1f57cf932a324200f3bc99f0341879768f4779287a37e0ef69566403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9b64332c1f57cf932a324200f3bc99f0341879768f4779287a37e0ef69566403->leave($__internal_9b64332c1f57cf932a324200f3bc99f0341879768f4779287a37e0ef69566403_prof);

        
        $__internal_b4ab567479cab9b29259d2d173080e7f112d2e1f59d8ffbbe6e2d556fd618715->leave($__internal_b4ab567479cab9b29259d2d173080e7f112d2e1f59d8ffbbe6e2d556fd618715_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
