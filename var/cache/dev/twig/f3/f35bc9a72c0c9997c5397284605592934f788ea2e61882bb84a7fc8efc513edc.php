<?php

/* cliente/new.html.twig */
class __TwigTemplate_7768299e09186d8f582e64a8bf702008806199c343b10c38ef611f4de9476a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e5614a9844a78c958b1ce4720c008787d12201680292821946ee4832fe30bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5614a9844a78c958b1ce4720c008787d12201680292821946ee4832fe30bed->enter($__internal_3e5614a9844a78c958b1ce4720c008787d12201680292821946ee4832fe30bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $__internal_8a2147539c12f8a696bdc4cec1f5f87feefc6d5c750fe85bcc9a3fb514ed6894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2147539c12f8a696bdc4cec1f5f87feefc6d5c750fe85bcc9a3fb514ed6894->enter($__internal_8a2147539c12f8a696bdc4cec1f5f87feefc6d5c750fe85bcc9a3fb514ed6894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5614a9844a78c958b1ce4720c008787d12201680292821946ee4832fe30bed->leave($__internal_3e5614a9844a78c958b1ce4720c008787d12201680292821946ee4832fe30bed_prof);

        
        $__internal_8a2147539c12f8a696bdc4cec1f5f87feefc6d5c750fe85bcc9a3fb514ed6894->leave($__internal_8a2147539c12f8a696bdc4cec1f5f87feefc6d5c750fe85bcc9a3fb514ed6894_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a461b112800961ace26388140ba51c41ee22a15f8d05a1618fa9ea9ad5b03e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a461b112800961ace26388140ba51c41ee22a15f8d05a1618fa9ea9ad5b03e75->enter($__internal_a461b112800961ace26388140ba51c41ee22a15f8d05a1618fa9ea9ad5b03e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e653c31d9339dc21a77b05d54ae5fe7385552796f9275bc2db740a7fab8f786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e653c31d9339dc21a77b05d54ae5fe7385552796f9275bc2db740a7fab8f786->enter($__internal_7e653c31d9339dc21a77b05d54ae5fe7385552796f9275bc2db740a7fab8f786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <dir class=\"content\">
    <h3>Mi Perfil</h3><br>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Guardar\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver</a>
        </li>
    </ul>
    </dir>
";
        
        $__internal_7e653c31d9339dc21a77b05d54ae5fe7385552796f9275bc2db740a7fab8f786->leave($__internal_7e653c31d9339dc21a77b05d54ae5fe7385552796f9275bc2db740a7fab8f786_prof);

        
        $__internal_a461b112800961ace26388140ba51c41ee22a15f8d05a1618fa9ea9ad5b03e75->leave($__internal_a461b112800961ace26388140ba51c41ee22a15f8d05a1618fa9ea9ad5b03e75_prof);

    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  63 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <dir class=\"content\">
    <h3>Mi Perfil</h3><br>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Guardar\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver</a>
        </li>
    </ul>
    </dir>
{% endblock %}
", "cliente/new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/new.html.twig");
    }
}
