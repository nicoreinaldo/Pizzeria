<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1a7fd2a3da7b53b8fe318ca359a31e9bfa9d928236123d7d38e625027f7dc1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c804879bffe21b4dab642ee997bb2b64f452d94e0e9d2d7a77818d5eb9a0b6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c804879bffe21b4dab642ee997bb2b64f452d94e0e9d2d7a77818d5eb9a0b6ae->enter($__internal_c804879bffe21b4dab642ee997bb2b64f452d94e0e9d2d7a77818d5eb9a0b6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_096f1313b29acc209ef03e183bce8f855277f80d70e438a450824f2b8876ec33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096f1313b29acc209ef03e183bce8f855277f80d70e438a450824f2b8876ec33->enter($__internal_096f1313b29acc209ef03e183bce8f855277f80d70e438a450824f2b8876ec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_c804879bffe21b4dab642ee997bb2b64f452d94e0e9d2d7a77818d5eb9a0b6ae->leave($__internal_c804879bffe21b4dab642ee997bb2b64f452d94e0e9d2d7a77818d5eb9a0b6ae_prof);

        
        $__internal_096f1313b29acc209ef03e183bce8f855277f80d70e438a450824f2b8876ec33->leave($__internal_096f1313b29acc209ef03e183bce8f855277f80d70e438a450824f2b8876ec33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
