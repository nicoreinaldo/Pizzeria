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
        $__internal_fe307bb8f36a9ad88944eefb619806d17a232c963596aea533a6aed8559b7c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe307bb8f36a9ad88944eefb619806d17a232c963596aea533a6aed8559b7c62->enter($__internal_fe307bb8f36a9ad88944eefb619806d17a232c963596aea533a6aed8559b7c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8a98758564ded345abcfde1ae4a48e54986617ec1b0365528221e612e5ab027c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a98758564ded345abcfde1ae4a48e54986617ec1b0365528221e612e5ab027c->enter($__internal_8a98758564ded345abcfde1ae4a48e54986617ec1b0365528221e612e5ab027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe307bb8f36a9ad88944eefb619806d17a232c963596aea533a6aed8559b7c62->leave($__internal_fe307bb8f36a9ad88944eefb619806d17a232c963596aea533a6aed8559b7c62_prof);

        
        $__internal_8a98758564ded345abcfde1ae4a48e54986617ec1b0365528221e612e5ab027c->leave($__internal_8a98758564ded345abcfde1ae4a48e54986617ec1b0365528221e612e5ab027c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39f8d0a4c1af3714090908f3e6662e131c748c4893f3cd27ba235fbdffc69bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f8d0a4c1af3714090908f3e6662e131c748c4893f3cd27ba235fbdffc69bca->enter($__internal_39f8d0a4c1af3714090908f3e6662e131c748c4893f3cd27ba235fbdffc69bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37f53b1661542034e66c4b096e92d786434b9c96685baec6afe33bdb098636a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f53b1661542034e66c4b096e92d786434b9c96685baec6afe33bdb098636a3->enter($__internal_37f53b1661542034e66c4b096e92d786434b9c96685baec6afe33bdb098636a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37f53b1661542034e66c4b096e92d786434b9c96685baec6afe33bdb098636a3->leave($__internal_37f53b1661542034e66c4b096e92d786434b9c96685baec6afe33bdb098636a3_prof);

        
        $__internal_39f8d0a4c1af3714090908f3e6662e131c748c4893f3cd27ba235fbdffc69bca->leave($__internal_39f8d0a4c1af3714090908f3e6662e131c748c4893f3cd27ba235fbdffc69bca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c89056dbb9beb40d2641138845bfbda50448a561d105de85b811f97a1cbd8b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89056dbb9beb40d2641138845bfbda50448a561d105de85b811f97a1cbd8b53->enter($__internal_c89056dbb9beb40d2641138845bfbda50448a561d105de85b811f97a1cbd8b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f82d83483582b3600742b2042849bbbedab1a97cf350adba959fa5f78484f993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82d83483582b3600742b2042849bbbedab1a97cf350adba959fa5f78484f993->enter($__internal_f82d83483582b3600742b2042849bbbedab1a97cf350adba959fa5f78484f993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f82d83483582b3600742b2042849bbbedab1a97cf350adba959fa5f78484f993->leave($__internal_f82d83483582b3600742b2042849bbbedab1a97cf350adba959fa5f78484f993_prof);

        
        $__internal_c89056dbb9beb40d2641138845bfbda50448a561d105de85b811f97a1cbd8b53->leave($__internal_c89056dbb9beb40d2641138845bfbda50448a561d105de85b811f97a1cbd8b53_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97db2e072030e56de01da58d2c3de6159d71547f17c5e281da414a3347031e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97db2e072030e56de01da58d2c3de6159d71547f17c5e281da414a3347031e64->enter($__internal_97db2e072030e56de01da58d2c3de6159d71547f17c5e281da414a3347031e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_142fe97ea71b891da8854aa75331f1c59ac19301650509fa95609045e82f5fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142fe97ea71b891da8854aa75331f1c59ac19301650509fa95609045e82f5fa9->enter($__internal_142fe97ea71b891da8854aa75331f1c59ac19301650509fa95609045e82f5fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_142fe97ea71b891da8854aa75331f1c59ac19301650509fa95609045e82f5fa9->leave($__internal_142fe97ea71b891da8854aa75331f1c59ac19301650509fa95609045e82f5fa9_prof);

        
        $__internal_97db2e072030e56de01da58d2c3de6159d71547f17c5e281da414a3347031e64->leave($__internal_97db2e072030e56de01da58d2c3de6159d71547f17c5e281da414a3347031e64_prof);

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
