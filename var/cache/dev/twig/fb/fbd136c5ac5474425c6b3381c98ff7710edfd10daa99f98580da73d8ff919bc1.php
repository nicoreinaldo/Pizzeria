<?php

/* :cliente:index.html.twig */
class __TwigTemplate_d39aa625efabe914126fe48dc482044749226cb3a9edd5f5178d660d68176ac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:index.html.twig", 1);
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
        $__internal_b3f85d4ff3161cbe1efffa3bc91260212c531955ce7e9bfc1985233ae717a744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f85d4ff3161cbe1efffa3bc91260212c531955ce7e9bfc1985233ae717a744->enter($__internal_b3f85d4ff3161cbe1efffa3bc91260212c531955ce7e9bfc1985233ae717a744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:index.html.twig"));

        $__internal_9fa22def70684d9d97c1a059b38a0b1f59beeeb906333ff8cd122c747344e4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa22def70684d9d97c1a059b38a0b1f59beeeb906333ff8cd122c747344e4ba->enter($__internal_9fa22def70684d9d97c1a059b38a0b1f59beeeb906333ff8cd122c747344e4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f85d4ff3161cbe1efffa3bc91260212c531955ce7e9bfc1985233ae717a744->leave($__internal_b3f85d4ff3161cbe1efffa3bc91260212c531955ce7e9bfc1985233ae717a744_prof);

        
        $__internal_9fa22def70684d9d97c1a059b38a0b1f59beeeb906333ff8cd122c747344e4ba->leave($__internal_9fa22def70684d9d97c1a059b38a0b1f59beeeb906333ff8cd122c747344e4ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_621e31d0e1f1d2f1a41d322edf4a2c56803d995c18b2cdd6b11dc8796d572df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621e31d0e1f1d2f1a41d322edf4a2c56803d995c18b2cdd6b11dc8796d572df4->enter($__internal_621e31d0e1f1d2f1a41d322edf4a2c56803d995c18b2cdd6b11dc8796d572df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_953a061055c36249c4c3c5f9919bdc763cdb716af84d8d5897d57914f8271d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953a061055c36249c4c3c5f9919bdc763cdb716af84d8d5897d57914f8271d2d->enter($__internal_953a061055c36249c4c3c5f9919bdc763cdb716af84d8d5897d57914f8271d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Clientes list</h1>

    <table>
        <thead>
            <tr>
                <th>Idcliente</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_show", array("idcliente" => $this->getAttribute($context["cliente"], "idcliente", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "idcliente", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_show", array("idcliente" => $this->getAttribute($context["cliente"], "idcliente", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("idcliente" => $this->getAttribute($context["cliente"], "idcliente", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_new");
        echo "\">Create a new cliente</a>
        </li>
    </ul>
";
        
        $__internal_953a061055c36249c4c3c5f9919bdc763cdb716af84d8d5897d57914f8271d2d->leave($__internal_953a061055c36249c4c3c5f9919bdc763cdb716af84d8d5897d57914f8271d2d_prof);

        
        $__internal_621e31d0e1f1d2f1a41d322edf4a2c56803d995c18b2cdd6b11dc8796d572df4->leave($__internal_621e31d0e1f1d2f1a41d322edf4a2c56803d995c18b2cdd6b11dc8796d572df4_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Clientes list</h1>

    <table>
        <thead>
            <tr>
                <th>Idcliente</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for cliente in clientes %}
            <tr>
                <td><a href=\"{{ path('cliente_show', { 'idcliente': cliente.idcliente }) }}\">{{ cliente.idcliente }}</a></td>
                <td>{{ cliente.nombre }}</td>
                <td>{{ cliente.direccion }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('cliente_show', { 'idcliente': cliente.idcliente }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cliente_edit', { 'idcliente': cliente.idcliente }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cliente_new') }}\">Create a new cliente</a>
        </li>
    </ul>
{% endblock %}
", ":cliente:index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/index.html.twig");
    }
}
