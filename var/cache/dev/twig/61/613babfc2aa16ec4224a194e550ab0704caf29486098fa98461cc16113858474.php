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
        $__internal_69ade4beb5170a7a747cef56bd491bcaf3cd740d750820cf518af3d6f07e57dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ade4beb5170a7a747cef56bd491bcaf3cd740d750820cf518af3d6f07e57dd->enter($__internal_69ade4beb5170a7a747cef56bd491bcaf3cd740d750820cf518af3d6f07e57dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $__internal_c17ec2976f2cafdfbb9d7ad10d408396cfb38d8453b6c5343806dfe1aa780374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17ec2976f2cafdfbb9d7ad10d408396cfb38d8453b6c5343806dfe1aa780374->enter($__internal_c17ec2976f2cafdfbb9d7ad10d408396cfb38d8453b6c5343806dfe1aa780374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ade4beb5170a7a747cef56bd491bcaf3cd740d750820cf518af3d6f07e57dd->leave($__internal_69ade4beb5170a7a747cef56bd491bcaf3cd740d750820cf518af3d6f07e57dd_prof);

        
        $__internal_c17ec2976f2cafdfbb9d7ad10d408396cfb38d8453b6c5343806dfe1aa780374->leave($__internal_c17ec2976f2cafdfbb9d7ad10d408396cfb38d8453b6c5343806dfe1aa780374_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_289a81248c53154e474b12b13324a1a38f3092c4ad4b42235428ce26131de110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289a81248c53154e474b12b13324a1a38f3092c4ad4b42235428ce26131de110->enter($__internal_289a81248c53154e474b12b13324a1a38f3092c4ad4b42235428ce26131de110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_803b36af3a7ae9fda9ef1cbcb64f32389e09fe2243a6991c6b753ad29b815866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803b36af3a7ae9fda9ef1cbcb64f32389e09fe2243a6991c6b753ad29b815866->enter($__internal_803b36af3a7ae9fda9ef1cbcb64f32389e09fe2243a6991c6b753ad29b815866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_803b36af3a7ae9fda9ef1cbcb64f32389e09fe2243a6991c6b753ad29b815866->leave($__internal_803b36af3a7ae9fda9ef1cbcb64f32389e09fe2243a6991c6b753ad29b815866_prof);

        
        $__internal_289a81248c53154e474b12b13324a1a38f3092c4ad4b42235428ce26131de110->leave($__internal_289a81248c53154e474b12b13324a1a38f3092c4ad4b42235428ce26131de110_prof);

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
