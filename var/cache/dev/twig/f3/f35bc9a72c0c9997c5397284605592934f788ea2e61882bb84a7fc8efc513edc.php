<?php

/* :cliente:new.html.twig */
class __TwigTemplate_7768299e09186d8f582e64a8bf702008806199c343b10c38ef611f4de9476a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:new.html.twig", 1);
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
        $__internal_1745d8a5a4c53e3838c38244efaa70b5a0abe4a30a0ca81ff80f9da006bc6022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1745d8a5a4c53e3838c38244efaa70b5a0abe4a30a0ca81ff80f9da006bc6022->enter($__internal_1745d8a5a4c53e3838c38244efaa70b5a0abe4a30a0ca81ff80f9da006bc6022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_1e9159395488c7995e1b642a451eedd0b236a841ba65baf2d79d2bac87333dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9159395488c7995e1b642a451eedd0b236a841ba65baf2d79d2bac87333dc5->enter($__internal_1e9159395488c7995e1b642a451eedd0b236a841ba65baf2d79d2bac87333dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1745d8a5a4c53e3838c38244efaa70b5a0abe4a30a0ca81ff80f9da006bc6022->leave($__internal_1745d8a5a4c53e3838c38244efaa70b5a0abe4a30a0ca81ff80f9da006bc6022_prof);

        
        $__internal_1e9159395488c7995e1b642a451eedd0b236a841ba65baf2d79d2bac87333dc5->leave($__internal_1e9159395488c7995e1b642a451eedd0b236a841ba65baf2d79d2bac87333dc5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed4b344304e863a87738f92978960837b083c13735f5176c80b5a663d76a0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed4b344304e863a87738f92978960837b083c13735f5176c80b5a663d76a0f5->enter($__internal_1ed4b344304e863a87738f92978960837b083c13735f5176c80b5a663d76a0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b4ae8c22e79466f23f242b7887625cecdbdb0e1ce26da9db72eb96f58b49a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4ae8c22e79466f23f242b7887625cecdbdb0e1ce26da9db72eb96f58b49a6d->enter($__internal_6b4ae8c22e79466f23f242b7887625cecdbdb0e1ce26da9db72eb96f58b49a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6b4ae8c22e79466f23f242b7887625cecdbdb0e1ce26da9db72eb96f58b49a6d->leave($__internal_6b4ae8c22e79466f23f242b7887625cecdbdb0e1ce26da9db72eb96f58b49a6d_prof);

        
        $__internal_1ed4b344304e863a87738f92978960837b083c13735f5176c80b5a663d76a0f5->leave($__internal_1ed4b344304e863a87738f92978960837b083c13735f5176c80b5a663d76a0f5_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cliente creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":cliente:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/new.html.twig");
    }
}
