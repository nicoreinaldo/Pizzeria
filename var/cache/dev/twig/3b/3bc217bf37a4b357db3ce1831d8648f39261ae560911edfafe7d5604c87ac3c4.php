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
        $__internal_1a770081013d8dc5a1da3afbf2863a2451304832277542269614fd5b94e066c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a770081013d8dc5a1da3afbf2863a2451304832277542269614fd5b94e066c9->enter($__internal_1a770081013d8dc5a1da3afbf2863a2451304832277542269614fd5b94e066c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $__internal_d32cb0543609ba97c7e9d7824235ed61d05e7fe957315a5238c888542bf54fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32cb0543609ba97c7e9d7824235ed61d05e7fe957315a5238c888542bf54fab->enter($__internal_d32cb0543609ba97c7e9d7824235ed61d05e7fe957315a5238c888542bf54fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a770081013d8dc5a1da3afbf2863a2451304832277542269614fd5b94e066c9->leave($__internal_1a770081013d8dc5a1da3afbf2863a2451304832277542269614fd5b94e066c9_prof);

        
        $__internal_d32cb0543609ba97c7e9d7824235ed61d05e7fe957315a5238c888542bf54fab->leave($__internal_d32cb0543609ba97c7e9d7824235ed61d05e7fe957315a5238c888542bf54fab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17088c9d9c7b314eb4df1615001268293c554df4e6736922504efc4cc4915cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17088c9d9c7b314eb4df1615001268293c554df4e6736922504efc4cc4915cfa->enter($__internal_17088c9d9c7b314eb4df1615001268293c554df4e6736922504efc4cc4915cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05b0a16a2c49725b69f707f0ee626b9981a74914787d38235474485dee20e5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b0a16a2c49725b69f707f0ee626b9981a74914787d38235474485dee20e5f9->enter($__internal_05b0a16a2c49725b69f707f0ee626b9981a74914787d38235474485dee20e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_edit", array("idcliente" => $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "idcliente", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_05b0a16a2c49725b69f707f0ee626b9981a74914787d38235474485dee20e5f9->leave($__internal_05b0a16a2c49725b69f707f0ee626b9981a74914787d38235474485dee20e5f9_prof);

        
        $__internal_17088c9d9c7b314eb4df1615001268293c554df4e6736922504efc4cc4915cfa->leave($__internal_17088c9d9c7b314eb4df1615001268293c554df4e6736922504efc4cc4915cfa_prof);

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
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('cliente_edit', { 'idcliente': cliente.idcliente }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":cliente:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/show.html.twig");
    }
}
