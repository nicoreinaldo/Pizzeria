<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
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
        $__internal_f440ec6583be25e8c969ebaf38c7708c000a9416066e0b20db5451a0591796ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f440ec6583be25e8c969ebaf38c7708c000a9416066e0b20db5451a0591796ef->enter($__internal_f440ec6583be25e8c969ebaf38c7708c000a9416066e0b20db5451a0591796ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d1b3ef558c0810f6a2f9c48019f4e7784caa5a0c51ad0010f68269cfc7b4478d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b3ef558c0810f6a2f9c48019f4e7784caa5a0c51ad0010f68269cfc7b4478d->enter($__internal_d1b3ef558c0810f6a2f9c48019f4e7784caa5a0c51ad0010f68269cfc7b4478d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f440ec6583be25e8c969ebaf38c7708c000a9416066e0b20db5451a0591796ef->leave($__internal_f440ec6583be25e8c969ebaf38c7708c000a9416066e0b20db5451a0591796ef_prof);

        
        $__internal_d1b3ef558c0810f6a2f9c48019f4e7784caa5a0c51ad0010f68269cfc7b4478d->leave($__internal_d1b3ef558c0810f6a2f9c48019f4e7784caa5a0c51ad0010f68269cfc7b4478d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b52516b7f21d3ddbc63810e4f2a5e113be4f95b448dd5fce0e808d5d531abc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52516b7f21d3ddbc63810e4f2a5e113be4f95b448dd5fce0e808d5d531abc1e->enter($__internal_b52516b7f21d3ddbc63810e4f2a5e113be4f95b448dd5fce0e808d5d531abc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98690b277845ff43f282339f314c1bf5d31d6ad0479ac5f3bda7e73d792b14ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98690b277845ff43f282339f314c1bf5d31d6ad0479ac5f3bda7e73d792b14ab->enter($__internal_98690b277845ff43f282339f314c1bf5d31d6ad0479ac5f3bda7e73d792b14ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98690b277845ff43f282339f314c1bf5d31d6ad0479ac5f3bda7e73d792b14ab->leave($__internal_98690b277845ff43f282339f314c1bf5d31d6ad0479ac5f3bda7e73d792b14ab_prof);

        
        $__internal_b52516b7f21d3ddbc63810e4f2a5e113be4f95b448dd5fce0e808d5d531abc1e->leave($__internal_b52516b7f21d3ddbc63810e4f2a5e113be4f95b448dd5fce0e808d5d531abc1e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e41310766992df58b2962d8acf08b5858d340a9b3c502535772a6a15ad181c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41310766992df58b2962d8acf08b5858d340a9b3c502535772a6a15ad181c10->enter($__internal_e41310766992df58b2962d8acf08b5858d340a9b3c502535772a6a15ad181c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2530b37421761341b5f8239ca98a8058face230408f1af40225ecf6bb1c6e97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2530b37421761341b5f8239ca98a8058face230408f1af40225ecf6bb1c6e97b->enter($__internal_2530b37421761341b5f8239ca98a8058face230408f1af40225ecf6bb1c6e97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2530b37421761341b5f8239ca98a8058face230408f1af40225ecf6bb1c6e97b->leave($__internal_2530b37421761341b5f8239ca98a8058face230408f1af40225ecf6bb1c6e97b_prof);

        
        $__internal_e41310766992df58b2962d8acf08b5858d340a9b3c502535772a6a15ad181c10->leave($__internal_e41310766992df58b2962d8acf08b5858d340a9b3c502535772a6a15ad181c10_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a007b388a3091f3aa74df3f520a083a3543d5f58e0a992f6e5f05149e631fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a007b388a3091f3aa74df3f520a083a3543d5f58e0a992f6e5f05149e631fbd->enter($__internal_4a007b388a3091f3aa74df3f520a083a3543d5f58e0a992f6e5f05149e631fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ef5297a4c2e0a99ff8dbf2e1da473a22943d01900e293e880e530a4e70f49f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef5297a4c2e0a99ff8dbf2e1da473a22943d01900e293e880e530a4e70f49f2->enter($__internal_4ef5297a4c2e0a99ff8dbf2e1da473a22943d01900e293e880e530a4e70f49f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4ef5297a4c2e0a99ff8dbf2e1da473a22943d01900e293e880e530a4e70f49f2->leave($__internal_4ef5297a4c2e0a99ff8dbf2e1da473a22943d01900e293e880e530a4e70f49f2_prof);

        
        $__internal_4a007b388a3091f3aa74df3f520a083a3543d5f58e0a992f6e5f05149e631fbd->leave($__internal_4a007b388a3091f3aa74df3f520a083a3543d5f58e0a992f6e5f05149e631fbd_prof);

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
