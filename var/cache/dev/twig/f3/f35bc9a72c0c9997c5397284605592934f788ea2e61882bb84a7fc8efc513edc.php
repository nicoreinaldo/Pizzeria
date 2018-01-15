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
        $__internal_46746707b4a5a2e350454bd726063d549cb034dc5abe1e073dd9429202df231b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46746707b4a5a2e350454bd726063d549cb034dc5abe1e073dd9429202df231b->enter($__internal_46746707b4a5a2e350454bd726063d549cb034dc5abe1e073dd9429202df231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $__internal_30353f5175ba1c4e0028ce26614da3aa5c04d76001819a6a48fc1ccd19fb5cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30353f5175ba1c4e0028ce26614da3aa5c04d76001819a6a48fc1ccd19fb5cd6->enter($__internal_30353f5175ba1c4e0028ce26614da3aa5c04d76001819a6a48fc1ccd19fb5cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46746707b4a5a2e350454bd726063d549cb034dc5abe1e073dd9429202df231b->leave($__internal_46746707b4a5a2e350454bd726063d549cb034dc5abe1e073dd9429202df231b_prof);

        
        $__internal_30353f5175ba1c4e0028ce26614da3aa5c04d76001819a6a48fc1ccd19fb5cd6->leave($__internal_30353f5175ba1c4e0028ce26614da3aa5c04d76001819a6a48fc1ccd19fb5cd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2186f1f4730aa527ee701f78693e8c0462d625ebc8b8f5b2431d0972f7af1a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2186f1f4730aa527ee701f78693e8c0462d625ebc8b8f5b2431d0972f7af1a24->enter($__internal_2186f1f4730aa527ee701f78693e8c0462d625ebc8b8f5b2431d0972f7af1a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_410fef6153c62ab8d6d1d8ece561caa96f1311a76ebe652329d021e174bf77c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410fef6153c62ab8d6d1d8ece561caa96f1311a76ebe652329d021e174bf77c5->enter($__internal_410fef6153c62ab8d6d1d8ece561caa96f1311a76ebe652329d021e174bf77c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <dir class=\"content\">
    <h3>Crear Perfil</h3><br>

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
        
        $__internal_410fef6153c62ab8d6d1d8ece561caa96f1311a76ebe652329d021e174bf77c5->leave($__internal_410fef6153c62ab8d6d1d8ece561caa96f1311a76ebe652329d021e174bf77c5_prof);

        
        $__internal_2186f1f4730aa527ee701f78693e8c0462d625ebc8b8f5b2431d0972f7af1a24->leave($__internal_2186f1f4730aa527ee701f78693e8c0462d625ebc8b8f5b2431d0972f7af1a24_prof);

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
    <h3>Crear Perfil</h3><br>

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
", "cliente/new.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/cliente/new.html.twig");
    }
}
