<?php

/* :pedido:index.html.twig */
class __TwigTemplate_f0808ffe13fa8c2d775f112a01ae01ad8a3d3cd5de8b1d496a4c3182375fb678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:index.html.twig", 1);
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
        $__internal_e823196aa73ebc04fa3032822e122889c10beb5a9c59d3cf35118556e52ce842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e823196aa73ebc04fa3032822e122889c10beb5a9c59d3cf35118556e52ce842->enter($__internal_e823196aa73ebc04fa3032822e122889c10beb5a9c59d3cf35118556e52ce842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $__internal_a2123930dbfcf50721021ee9afc61072430257ff116de28dde40618c0bb24ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2123930dbfcf50721021ee9afc61072430257ff116de28dde40618c0bb24ac1->enter($__internal_a2123930dbfcf50721021ee9afc61072430257ff116de28dde40618c0bb24ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e823196aa73ebc04fa3032822e122889c10beb5a9c59d3cf35118556e52ce842->leave($__internal_e823196aa73ebc04fa3032822e122889c10beb5a9c59d3cf35118556e52ce842_prof);

        
        $__internal_a2123930dbfcf50721021ee9afc61072430257ff116de28dde40618c0bb24ac1->leave($__internal_a2123930dbfcf50721021ee9afc61072430257ff116de28dde40618c0bb24ac1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d30c51cd397883307734623944c2834be309a20be2254bd3b039ddec2d1dd7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d30c51cd397883307734623944c2834be309a20be2254bd3b039ddec2d1dd7c2->enter($__internal_d30c51cd397883307734623944c2834be309a20be2254bd3b039ddec2d1dd7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62bec0d05e21f7e769927461548bdea85828817b9e32208e7a9e02addaff8303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bec0d05e21f7e769927461548bdea85828817b9e32208e7a9e02addaff8303->enter($__internal_62bec0d05e21f7e769927461548bdea85828817b9e32208e7a9e02addaff8303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
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
                                    <th>Idpedido</th>
                                    <th>Cliente</th>
                                    <th>Direccion de envio</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Detalle</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pedidos"] ?? $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 37
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_show", array("idpedido" => $this->getAttribute($context["pedido"], "idpedido", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idpedido", array()), "html", null, true);
            echo "</a></td>
                                        <td> NULL</td>
                                        <td> NULL</td>
                                        <td>";
            // line 41
            if ($this->getAttribute($context["pedido"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pedido"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pedido"], "idEstadoPedido", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pizzapedidos"] ?? $this->getContext($context, "pizzapedidos")));
            foreach ($context['_seq'] as $context["_key"] => $context["pizzapedido"]) {
                // line 45
                echo "                                                ";
                if (($this->getAttribute($context["pedido"], "idpedido", array()) == $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPedido", array()), "idPedido", array()))) {
                    // line 46
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPizza", array()), "nombre", array()), "html", null, true);
                    echo "
                                                    <br>
                                                ";
                }
                // line 49
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizzapedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                        </td>
                                        </td>
                                            <td>
                                                <ul>
                                                        ";
            // line 55
            echo "
                                                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("idpedido" => $this->getAttribute($context["pedido"], "idpedido", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a>

                                                </ul>
                                            </td>
                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_62bec0d05e21f7e769927461548bdea85828817b9e32208e7a9e02addaff8303->leave($__internal_62bec0d05e21f7e769927461548bdea85828817b9e32208e7a9e02addaff8303_prof);

        
        $__internal_d30c51cd397883307734623944c2834be309a20be2254bd3b039ddec2d1dd7c2->leave($__internal_d30c51cd397883307734623944c2834be309a20be2254bd3b039ddec2d1dd7c2_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  138 => 56,  135 => 55,  129 => 50,  123 => 49,  116 => 46,  113 => 45,  109 => 44,  104 => 42,  98 => 41,  90 => 38,  87 => 37,  83 => 36,  49 => 4,  40 => 3,  11 => 1,);
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
                                    <th>Idpedido</th>
                                    <th>Cliente</th>
                                    <th>Direccion de envio</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Detalle</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for pedido in pedidos %}
                                    <tr>
                                        <td><a href=\"{{ path('pedido_show', { 'idpedido': pedido.idpedido }) }}\">{{ pedido.idpedido }}</a></td>
                                        <td> NULL</td>
                                        <td> NULL</td>
                                        <td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>
                                        <td>{{ pedido.idEstadoPedido.nombre }}</td>
                                        <td>
                                            {% for pizzapedido in pizzapedidos %}
                                                {% if pedido.idpedido == pizzapedido.idPedido.idPedido %}
                                                        {{ pizzapedido.idPizza.nombre }}
                                                    <br>
                                                {% endif %}
                                            {% endfor %}
                                        </td>
                                        </td>
                                            <td>
                                                <ul>
                                                        {#<a href=\"{{ path('pedido_show', { 'idpedido': pedido.idpedido }) }}\" class=\"btn btn-warning\">Ver</a>#}

                                                        <a href=\"{{ path('pedido_edit', { 'idpedido': pedido.idpedido }) }}\" class=\"btn btn-warning\">Editar</a>

                                                </ul>
                                            </td>
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
", ":pedido:index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pedido/index.html.twig");
    }
}
