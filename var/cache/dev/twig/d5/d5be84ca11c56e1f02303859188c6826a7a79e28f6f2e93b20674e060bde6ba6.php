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
        $__internal_f82eec81013874c57af9b0716f56fdf4911beb4766bdf34937cfc56701ad2d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82eec81013874c57af9b0716f56fdf4911beb4766bdf34937cfc56701ad2d96->enter($__internal_f82eec81013874c57af9b0716f56fdf4911beb4766bdf34937cfc56701ad2d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_892fe5af5c131e68e605a98934f0a68eecefc30817d1540cc473ebfc3c0e52ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892fe5af5c131e68e605a98934f0a68eecefc30817d1540cc473ebfc3c0e52ea->enter($__internal_892fe5af5c131e68e605a98934f0a68eecefc30817d1540cc473ebfc3c0e52ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82eec81013874c57af9b0716f56fdf4911beb4766bdf34937cfc56701ad2d96->leave($__internal_f82eec81013874c57af9b0716f56fdf4911beb4766bdf34937cfc56701ad2d96_prof);

        
        $__internal_892fe5af5c131e68e605a98934f0a68eecefc30817d1540cc473ebfc3c0e52ea->leave($__internal_892fe5af5c131e68e605a98934f0a68eecefc30817d1540cc473ebfc3c0e52ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_851b60e166713e9a70d529cfc1180aa4a2c67a108ed5519fe6b0158f078ccb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851b60e166713e9a70d529cfc1180aa4a2c67a108ed5519fe6b0158f078ccb16->enter($__internal_851b60e166713e9a70d529cfc1180aa4a2c67a108ed5519fe6b0158f078ccb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd429f849bf4b35c65e14d458dd2c8e4628eccc88908db36088415b890b65911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd429f849bf4b35c65e14d458dd2c8e4628eccc88908db36088415b890b65911->enter($__internal_fd429f849bf4b35c65e14d458dd2c8e4628eccc88908db36088415b890b65911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fd429f849bf4b35c65e14d458dd2c8e4628eccc88908db36088415b890b65911->leave($__internal_fd429f849bf4b35c65e14d458dd2c8e4628eccc88908db36088415b890b65911_prof);

        
        $__internal_851b60e166713e9a70d529cfc1180aa4a2c67a108ed5519fe6b0158f078ccb16->leave($__internal_851b60e166713e9a70d529cfc1180aa4a2c67a108ed5519fe6b0158f078ccb16_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b03c5130df216fb5a83a74283b6b803a38bfb694901b42f039d4b5a70ae45388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03c5130df216fb5a83a74283b6b803a38bfb694901b42f039d4b5a70ae45388->enter($__internal_b03c5130df216fb5a83a74283b6b803a38bfb694901b42f039d4b5a70ae45388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7fb42e538a7bba93b0f278d5bdeba3609c538a185b4fd58a637ab68aa2e83a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb42e538a7bba93b0f278d5bdeba3609c538a185b4fd58a637ab68aa2e83a6c->enter($__internal_7fb42e538a7bba93b0f278d5bdeba3609c538a185b4fd58a637ab68aa2e83a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7fb42e538a7bba93b0f278d5bdeba3609c538a185b4fd58a637ab68aa2e83a6c->leave($__internal_7fb42e538a7bba93b0f278d5bdeba3609c538a185b4fd58a637ab68aa2e83a6c_prof);

        
        $__internal_b03c5130df216fb5a83a74283b6b803a38bfb694901b42f039d4b5a70ae45388->leave($__internal_b03c5130df216fb5a83a74283b6b803a38bfb694901b42f039d4b5a70ae45388_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f6b9a7392030221b1ec9333364dcb4c23065bad251ad4ec45e52a0cb94e6ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6b9a7392030221b1ec9333364dcb4c23065bad251ad4ec45e52a0cb94e6ba7->enter($__internal_9f6b9a7392030221b1ec9333364dcb4c23065bad251ad4ec45e52a0cb94e6ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0cd6fd4b35341691dfa8089335d967b91c553642e32f093e693cfc733c256ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd6fd4b35341691dfa8089335d967b91c553642e32f093e693cfc733c256ea1->enter($__internal_0cd6fd4b35341691dfa8089335d967b91c553642e32f093e693cfc733c256ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0cd6fd4b35341691dfa8089335d967b91c553642e32f093e693cfc733c256ea1->leave($__internal_0cd6fd4b35341691dfa8089335d967b91c553642e32f093e693cfc733c256ea1_prof);

        
        $__internal_9f6b9a7392030221b1ec9333364dcb4c23065bad251ad4ec45e52a0cb94e6ba7->leave($__internal_9f6b9a7392030221b1ec9333364dcb4c23065bad251ad4ec45e52a0cb94e6ba7_prof);

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
