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
        $__internal_5d4f4bde96a7691c27519306a7627776e72cc1e59297a8967b2f12ce39e4d185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4f4bde96a7691c27519306a7627776e72cc1e59297a8967b2f12ce39e4d185->enter($__internal_5d4f4bde96a7691c27519306a7627776e72cc1e59297a8967b2f12ce39e4d185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_881cb29cf464aa30a9ad25960c7dae3a96cf1d5ec188dd5c96ced4244af4f5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881cb29cf464aa30a9ad25960c7dae3a96cf1d5ec188dd5c96ced4244af4f5a6->enter($__internal_881cb29cf464aa30a9ad25960c7dae3a96cf1d5ec188dd5c96ced4244af4f5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4f4bde96a7691c27519306a7627776e72cc1e59297a8967b2f12ce39e4d185->leave($__internal_5d4f4bde96a7691c27519306a7627776e72cc1e59297a8967b2f12ce39e4d185_prof);

        
        $__internal_881cb29cf464aa30a9ad25960c7dae3a96cf1d5ec188dd5c96ced4244af4f5a6->leave($__internal_881cb29cf464aa30a9ad25960c7dae3a96cf1d5ec188dd5c96ced4244af4f5a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20c234532f97389d1a9304ace1cf56a2bd2a074bb42b91548a50191a43a81084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c234532f97389d1a9304ace1cf56a2bd2a074bb42b91548a50191a43a81084->enter($__internal_20c234532f97389d1a9304ace1cf56a2bd2a074bb42b91548a50191a43a81084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f773204b4fcbbbab80032d6d4122c26dd9a57c11e605c4738d8be40bcc2495c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f773204b4fcbbbab80032d6d4122c26dd9a57c11e605c4738d8be40bcc2495c5->enter($__internal_f773204b4fcbbbab80032d6d4122c26dd9a57c11e605c4738d8be40bcc2495c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f773204b4fcbbbab80032d6d4122c26dd9a57c11e605c4738d8be40bcc2495c5->leave($__internal_f773204b4fcbbbab80032d6d4122c26dd9a57c11e605c4738d8be40bcc2495c5_prof);

        
        $__internal_20c234532f97389d1a9304ace1cf56a2bd2a074bb42b91548a50191a43a81084->leave($__internal_20c234532f97389d1a9304ace1cf56a2bd2a074bb42b91548a50191a43a81084_prof);

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
", ":cliente:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/new.html.twig");
    }
}
