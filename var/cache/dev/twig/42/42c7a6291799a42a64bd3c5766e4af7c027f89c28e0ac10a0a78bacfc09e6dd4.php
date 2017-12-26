<?php

/* :pedido:show.html.twig */
class __TwigTemplate_22b7f9a467942f873bf7e135b03472cb858e23759e538067725482d18840f421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:show.html.twig", 1);
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
        $__internal_7cf1096c9ac9ac810b8bda468f3ce951052963a3e6abc4ae8277901378d85f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf1096c9ac9ac810b8bda468f3ce951052963a3e6abc4ae8277901378d85f85->enter($__internal_7cf1096c9ac9ac810b8bda468f3ce951052963a3e6abc4ae8277901378d85f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $__internal_4522b4addb0d3f5f8318a44a620d455846f5f429a4157d0ee7c481d5dd1c446a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4522b4addb0d3f5f8318a44a620d455846f5f429a4157d0ee7c481d5dd1c446a->enter($__internal_4522b4addb0d3f5f8318a44a620d455846f5f429a4157d0ee7c481d5dd1c446a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf1096c9ac9ac810b8bda468f3ce951052963a3e6abc4ae8277901378d85f85->leave($__internal_7cf1096c9ac9ac810b8bda468f3ce951052963a3e6abc4ae8277901378d85f85_prof);

        
        $__internal_4522b4addb0d3f5f8318a44a620d455846f5f429a4157d0ee7c481d5dd1c446a->leave($__internal_4522b4addb0d3f5f8318a44a620d455846f5f429a4157d0ee7c481d5dd1c446a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad9ff6d2dd5fe19dcb72f1ee54d126ed29a439ed0d976383245dc36a38af66f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9ff6d2dd5fe19dcb72f1ee54d126ed29a439ed0d976383245dc36a38af66f8->enter($__internal_ad9ff6d2dd5fe19dcb72f1ee54d126ed29a439ed0d976383245dc36a38af66f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7e4dc6b328299fd9fee23ce7bb07fdcf71337a835cb3811d631edf9b4af25b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e4dc6b328299fd9fee23ce7bb07fdcf71337a835cb3811d631edf9b4af25b7->enter($__internal_a7e4dc6b328299fd9fee23ce7bb07fdcf71337a835cb3811d631edf9b4af25b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpedido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "idpedido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "fecha", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("idpedido" => $this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "idpedido", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a7e4dc6b328299fd9fee23ce7bb07fdcf71337a835cb3811d631edf9b4af25b7->leave($__internal_a7e4dc6b328299fd9fee23ce7bb07fdcf71337a835cb3811d631edf9b4af25b7_prof);

        
        $__internal_ad9ff6d2dd5fe19dcb72f1ee54d126ed29a439ed0d976383245dc36a38af66f8->leave($__internal_ad9ff6d2dd5fe19dcb72f1ee54d126ed29a439ed0d976383245dc36a38af66f8_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  88 => 27,  82 => 24,  76 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpedido</th>
                <td>{{ pedido.idpedido }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('pedido_edit', { 'idpedido': pedido.idpedido }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pedido:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pedido/show.html.twig");
    }
}
