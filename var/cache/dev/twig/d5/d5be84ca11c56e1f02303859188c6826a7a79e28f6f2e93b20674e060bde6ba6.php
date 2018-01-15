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
        $__internal_22660650befb2ab3e5a5a87506b089a69943a7c4fd35a7f010088d7f1d048ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22660650befb2ab3e5a5a87506b089a69943a7c4fd35a7f010088d7f1d048ac1->enter($__internal_22660650befb2ab3e5a5a87506b089a69943a7c4fd35a7f010088d7f1d048ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5fbf284f3f34396811cbbf2f4576285a06a042cd5c6ab5a382fd457a2cfb8468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbf284f3f34396811cbbf2f4576285a06a042cd5c6ab5a382fd457a2cfb8468->enter($__internal_5fbf284f3f34396811cbbf2f4576285a06a042cd5c6ab5a382fd457a2cfb8468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22660650befb2ab3e5a5a87506b089a69943a7c4fd35a7f010088d7f1d048ac1->leave($__internal_22660650befb2ab3e5a5a87506b089a69943a7c4fd35a7f010088d7f1d048ac1_prof);

        
        $__internal_5fbf284f3f34396811cbbf2f4576285a06a042cd5c6ab5a382fd457a2cfb8468->leave($__internal_5fbf284f3f34396811cbbf2f4576285a06a042cd5c6ab5a382fd457a2cfb8468_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20360e047a50b0a73ac6bca3848c100bc185a887fcb25700318535386d6d08d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20360e047a50b0a73ac6bca3848c100bc185a887fcb25700318535386d6d08d0->enter($__internal_20360e047a50b0a73ac6bca3848c100bc185a887fcb25700318535386d6d08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cccdb4b5120f2675d5258c5f58499915b6ee4de35dfac4fbb3da521a0fbd21d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccdb4b5120f2675d5258c5f58499915b6ee4de35dfac4fbb3da521a0fbd21d7->enter($__internal_cccdb4b5120f2675d5258c5f58499915b6ee4de35dfac4fbb3da521a0fbd21d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cccdb4b5120f2675d5258c5f58499915b6ee4de35dfac4fbb3da521a0fbd21d7->leave($__internal_cccdb4b5120f2675d5258c5f58499915b6ee4de35dfac4fbb3da521a0fbd21d7_prof);

        
        $__internal_20360e047a50b0a73ac6bca3848c100bc185a887fcb25700318535386d6d08d0->leave($__internal_20360e047a50b0a73ac6bca3848c100bc185a887fcb25700318535386d6d08d0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ec9a2612d43f06da9b0383e64abb476c09d0df1e90d8ee43c1b7b8047018b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec9a2612d43f06da9b0383e64abb476c09d0df1e90d8ee43c1b7b8047018b1c->enter($__internal_7ec9a2612d43f06da9b0383e64abb476c09d0df1e90d8ee43c1b7b8047018b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8921d49337fd8e365cee9fff9d285f8ef5bdb4c16431dd4edaf72aa83048b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8921d49337fd8e365cee9fff9d285f8ef5bdb4c16431dd4edaf72aa83048b99->enter($__internal_d8921d49337fd8e365cee9fff9d285f8ef5bdb4c16431dd4edaf72aa83048b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d8921d49337fd8e365cee9fff9d285f8ef5bdb4c16431dd4edaf72aa83048b99->leave($__internal_d8921d49337fd8e365cee9fff9d285f8ef5bdb4c16431dd4edaf72aa83048b99_prof);

        
        $__internal_7ec9a2612d43f06da9b0383e64abb476c09d0df1e90d8ee43c1b7b8047018b1c->leave($__internal_7ec9a2612d43f06da9b0383e64abb476c09d0df1e90d8ee43c1b7b8047018b1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95706d303a184a7911749a5d5182cb4cf738fe81c954511edd4815cd3c53e7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95706d303a184a7911749a5d5182cb4cf738fe81c954511edd4815cd3c53e7e9->enter($__internal_95706d303a184a7911749a5d5182cb4cf738fe81c954511edd4815cd3c53e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b83c803248fa35df3147a29289fc5c5b3a50d7faa953248549d91b55d47f650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b83c803248fa35df3147a29289fc5c5b3a50d7faa953248549d91b55d47f650->enter($__internal_3b83c803248fa35df3147a29289fc5c5b3a50d7faa953248549d91b55d47f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3b83c803248fa35df3147a29289fc5c5b3a50d7faa953248549d91b55d47f650->leave($__internal_3b83c803248fa35df3147a29289fc5c5b3a50d7faa953248549d91b55d47f650_prof);

        
        $__internal_95706d303a184a7911749a5d5182cb4cf738fe81c954511edd4815cd3c53e7e9->leave($__internal_95706d303a184a7911749a5d5182cb4cf738fe81c954511edd4815cd3c53e7e9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/manuel/symfony/Pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
