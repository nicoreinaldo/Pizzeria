<?php

/* :cliente:show.html.twig */
class __TwigTemplate_1a656aa41d1c793f8903c04ec9cc683f51f4f7251d8e88faaee2c9d14d8f5167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:show.html.twig", 1);
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
        $__internal_92da9268d57a9f79a6d39d71618a561c3eda408e2636d2803841a1457b1490c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92da9268d57a9f79a6d39d71618a561c3eda408e2636d2803841a1457b1490c8->enter($__internal_92da9268d57a9f79a6d39d71618a561c3eda408e2636d2803841a1457b1490c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $__internal_7f36f3efc592a137d8e046e88658d78fef36163a4006363e4fb291f3540bbba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f36f3efc592a137d8e046e88658d78fef36163a4006363e4fb291f3540bbba1->enter($__internal_7f36f3efc592a137d8e046e88658d78fef36163a4006363e4fb291f3540bbba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92da9268d57a9f79a6d39d71618a561c3eda408e2636d2803841a1457b1490c8->leave($__internal_92da9268d57a9f79a6d39d71618a561c3eda408e2636d2803841a1457b1490c8_prof);

        
        $__internal_7f36f3efc592a137d8e046e88658d78fef36163a4006363e4fb291f3540bbba1->leave($__internal_7f36f3efc592a137d8e046e88658d78fef36163a4006363e4fb291f3540bbba1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ef22c5d5d67803ef2c301df9f25f384062a54488059fc5eaa250c0d91b418d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ef22c5d5d67803ef2c301df9f25f384062a54488059fc5eaa250c0d91b418d->enter($__internal_06ef22c5d5d67803ef2c301df9f25f384062a54488059fc5eaa250c0d91b418d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_302c67dce29eb0d09eff7873b5cf56eff386fac56489095bdbdda16c68bea4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302c67dce29eb0d09eff7873b5cf56eff386fac56489095bdbdda16c68bea4c3->enter($__internal_302c67dce29eb0d09eff7873b5cf56eff386fac56489095bdbdda16c68bea4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcliente</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "idcliente", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("idcliente" => $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "idcliente", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        ";
        // line 35
        echo "    </ul>
";
        
        $__internal_302c67dce29eb0d09eff7873b5cf56eff386fac56489095bdbdda16c68bea4c3->leave($__internal_302c67dce29eb0d09eff7873b5cf56eff386fac56489095bdbdda16c68bea4c3_prof);

        
        $__internal_06ef22c5d5d67803ef2c301df9f25f384062a54488059fc5eaa250c0d91b418d->leave($__internal_06ef22c5d5d67803ef2c301df9f25f384062a54488059fc5eaa250c0d91b418d_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Cliente</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcliente</th>
                <td>{{ cliente.idcliente }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ cliente.nombre }}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ cliente.direccion }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver</a>
        </li>
        <li>
            <a href=\"{{ path('cliente_edit', { 'idcliente': cliente.idcliente }) }}\">Edit</a>
        </li>
        {# <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li> #}
    </ul>
{% endblock %}
", ":cliente:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/show.html.twig");
    }
}
