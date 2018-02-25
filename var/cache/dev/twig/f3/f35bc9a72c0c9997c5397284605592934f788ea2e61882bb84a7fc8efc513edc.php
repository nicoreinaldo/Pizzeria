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
        $__internal_cebf9c5eee99cc84f1505c92006d480a42a823ed51c9a6c818c33abbbd95e9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebf9c5eee99cc84f1505c92006d480a42a823ed51c9a6c818c33abbbd95e9ac->enter($__internal_cebf9c5eee99cc84f1505c92006d480a42a823ed51c9a6c818c33abbbd95e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $__internal_f12d41b217e09e3c537e31642fbc4f097b0ec1bc680e643cb307a33e54a51ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12d41b217e09e3c537e31642fbc4f097b0ec1bc680e643cb307a33e54a51ab7->enter($__internal_f12d41b217e09e3c537e31642fbc4f097b0ec1bc680e643cb307a33e54a51ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebf9c5eee99cc84f1505c92006d480a42a823ed51c9a6c818c33abbbd95e9ac->leave($__internal_cebf9c5eee99cc84f1505c92006d480a42a823ed51c9a6c818c33abbbd95e9ac_prof);

        
        $__internal_f12d41b217e09e3c537e31642fbc4f097b0ec1bc680e643cb307a33e54a51ab7->leave($__internal_f12d41b217e09e3c537e31642fbc4f097b0ec1bc680e643cb307a33e54a51ab7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a533ca1a73f8c403be33bc910b384d662efdbf7587131f75c5869bad6cea085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a533ca1a73f8c403be33bc910b384d662efdbf7587131f75c5869bad6cea085->enter($__internal_8a533ca1a73f8c403be33bc910b384d662efdbf7587131f75c5869bad6cea085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d1efca0c9eb8e92ea7a2e2d85a86ea5731592dd606ffb9dfec9195cf6122fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1efca0c9eb8e92ea7a2e2d85a86ea5731592dd606ffb9dfec9195cf6122fe3->enter($__internal_8d1efca0c9eb8e92ea7a2e2d85a86ea5731592dd606ffb9dfec9195cf6122fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_inicio");
        echo "\" type=\"submit\" value=\"Guardar\" />
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
        
        $__internal_8d1efca0c9eb8e92ea7a2e2d85a86ea5731592dd606ffb9dfec9195cf6122fe3->leave($__internal_8d1efca0c9eb8e92ea7a2e2d85a86ea5731592dd606ffb9dfec9195cf6122fe3_prof);

        
        $__internal_8a533ca1a73f8c403be33bc910b384d662efdbf7587131f75c5869bad6cea085->leave($__internal_8a533ca1a73f8c403be33bc910b384d662efdbf7587131f75c5869bad6cea085_prof);

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
        return array (  73 => 14,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
        <input href=\"{{ path('pizza_inicio') }}\" type=\"submit\" value=\"Guardar\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver</a>
        </li>
    </ul>
    </dir>
{% endblock %}
", "cliente/new.html.twig", "/home/nico/pizzeria/app/Resources/views/cliente/new.html.twig");
    }
}
