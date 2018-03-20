<?php

/* pedido/index.html.twig */
class __TwigTemplate_ba976efdde91dcbef1664916639a2570f15d765eef4c9534f06c792fe87a5d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"content-header\">
<h1>
    Pedidos
    <small>Lista de todos los pedidos realizados</small>
</h1>
<ol class=\"breadcrumb\">
    <div class=\"margin pull-right\">
        <div class=\"btn-group\">
            <a href=\"/pizza\" class=\"btn btn-warning\">Crear un nuevo pedido</a>
        </div>
    </div>
</ol>
</section>
<br>
<section class=\"content\">
<div class=\"row\">
<div class=\"col-xs-12\">
    <div class=\"box\">
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Direccion de envio</th>
                <th>Fecha Pedido</th>
                <th>Estado</th>
                <th>Pizza</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>


        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pedidos"] ?? $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 39
            echo "
            <tr>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idpedido", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pedido"], "idCliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pedido"], "idCliente", array()), "direccion", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            if ($this->getAttribute($context["pedido"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
                ";
            }
            // line 46
            echo "            </td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idEstadoPedido", array()), "html", null, true);
            echo "</td>
            <td>
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pizzapedidos"] ?? $this->getContext($context, "pizzapedidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["pizzapedido"]) {
                // line 50
                echo "                ";
                if (($this->getAttribute($context["pedido"], "idpedido", array()) == $this->getAttribute($this->getAttribute($context["pizzapedido"], "pedido", array()), "idPedido", array()))) {
                    // line 51
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pizzapedido"], "Pizza", array()), "nombre", array()), "html", null, true);
                    echo "
                    <br>
                ";
                }
                // line 54
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizzapedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </td>
            <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("idpedido" => $this->getAttribute($context["pedido"], "idpedido", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a></td>      
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
        </table>
    </div>
    </div>
</div>
</div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pedido/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  142 => 56,  139 => 55,  133 => 54,  126 => 51,  123 => 50,  119 => 49,  114 => 47,  111 => 46,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 39,  85 => 38,  49 => 4,  40 => 3,  11 => 1,);
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
<section class=\"content-header\">
<h1>
    Pedidos
    <small>Lista de todos los pedidos realizados</small>
</h1>
<ol class=\"breadcrumb\">
    <div class=\"margin pull-right\">
        <div class=\"btn-group\">
            <a href=\"/pizza\" class=\"btn btn-warning\">Crear un nuevo pedido</a>
        </div>
    </div>
</ol>
</section>
<br>
<section class=\"content\">
<div class=\"row\">
<div class=\"col-xs-12\">
    <div class=\"box\">
    <div class=\"box-body\">
        <table id=\"example1\" class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Direccion de envio</th>
                <th>Fecha Pedido</th>
                <th>Estado</th>
                <th>Pizza</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>


        {% for pedido in pedidos %}

            <tr>
            <td>{{ pedido.idpedido }}</td>
            <td>{{ pedido.idCliente.nombre }}</td>
            <td>{{ pedido.idCliente.direccion}}</td>
            <td>{% if  pedido.fecha %}{{ pedido.fecha|date(\"Y-m-d H:i:s\")}}
                {% endif %}
            </td>
            <td>{{ pedido.idEstadoPedido}}</td>
            <td>
            {% for pizzapedido in pizzapedidos %}
                {% if pedido.idpedido == pizzapedido.pedido.idPedido %}
                        {{ pizzapedido.Pizza.nombre }}
                    <br>
                {% endif %}
            {% endfor %}
            </td>
            <td><a href=\"{{ path('pedido_edit', { 'idpedido': pedido.idpedido }) }}\" class=\"btn btn-warning\">Editar</a></td>      
            </tr>
        {% endfor %}
        </tbody>
        </table>
    </div>
    </div>
</div>
</div>
</section>

{% endblock %}
", "pedido/index.html.twig", "/home/nico/pizzeria/app/Resources/views/pedido/index.html.twig");
    }
}
