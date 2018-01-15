<?php

/* cliente/index.html.twig */
class __TwigTemplate_d39aa625efabe914126fe48dc482044749226cb3a9edd5f5178d660d68176ac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        $__internal_1841b18fa5d380b6108f0dae22781d75cc5b3964835e61fae807781586eecfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1841b18fa5d380b6108f0dae22781d75cc5b3964835e61fae807781586eecfa8->enter($__internal_1841b18fa5d380b6108f0dae22781d75cc5b3964835e61fae807781586eecfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_d127eb3bd479d76c1bc3ac29c197d2d5343cb5ed8e46fe999e3d4d0663ce1fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d127eb3bd479d76c1bc3ac29c197d2d5343cb5ed8e46fe999e3d4d0663ce1fb0->enter($__internal_d127eb3bd479d76c1bc3ac29c197d2d5343cb5ed8e46fe999e3d4d0663ce1fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1841b18fa5d380b6108f0dae22781d75cc5b3964835e61fae807781586eecfa8->leave($__internal_1841b18fa5d380b6108f0dae22781d75cc5b3964835e61fae807781586eecfa8_prof);

        
        $__internal_d127eb3bd479d76c1bc3ac29c197d2d5343cb5ed8e46fe999e3d4d0663ce1fb0->leave($__internal_d127eb3bd479d76c1bc3ac29c197d2d5343cb5ed8e46fe999e3d4d0663ce1fb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6861735c1c7a059797504cbd263435106dc84af8d5bb1632cc77fd373d56fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6861735c1c7a059797504cbd263435106dc84af8d5bb1632cc77fd373d56fd3->enter($__internal_a6861735c1c7a059797504cbd263435106dc84af8d5bb1632cc77fd373d56fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9eb63564e3cd4923d5c59da033ab3d45d10edcd2d23c26dec671a3ff42044fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb63564e3cd4923d5c59da033ab3d45d10edcd2d23c26dec671a3ff42044fb5->enter($__internal_9eb63564e3cd4923d5c59da033ab3d45d10edcd2d23c26dec671a3ff42044fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9eb63564e3cd4923d5c59da033ab3d45d10edcd2d23c26dec671a3ff42044fb5->leave($__internal_9eb63564e3cd4923d5c59da033ab3d45d10edcd2d23c26dec671a3ff42044fb5_prof);

        
        $__internal_a6861735c1c7a059797504cbd263435106dc84af8d5bb1632cc77fd373d56fd3->leave($__internal_a6861735c1c7a059797504cbd263435106dc84af8d5bb1632cc77fd373d56fd3_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
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
", "cliente/index.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/cliente/index.html.twig");
    }
}
