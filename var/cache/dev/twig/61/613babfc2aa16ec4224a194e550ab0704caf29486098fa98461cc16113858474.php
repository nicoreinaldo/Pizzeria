<?php

/* pedido/index.html.twig */
class __TwigTemplate_f0808ffe13fa8c2d775f112a01ae01ad8a3d3cd5de8b1d496a4c3182375fb678 extends Twig_Template
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
        $__internal_e3b7c5ae4774c050fbe600f63e7c12257865fcdb41bb8808263aaa7ba542363c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b7c5ae4774c050fbe600f63e7c12257865fcdb41bb8808263aaa7ba542363c->enter($__internal_e3b7c5ae4774c050fbe600f63e7c12257865fcdb41bb8808263aaa7ba542363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $__internal_efa9d73d85ea8ac7d84ad772bd4463f68268a7d397a8aef0ab544ddff4cb2f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa9d73d85ea8ac7d84ad772bd4463f68268a7d397a8aef0ab544ddff4cb2f38->enter($__internal_efa9d73d85ea8ac7d84ad772bd4463f68268a7d397a8aef0ab544ddff4cb2f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b7c5ae4774c050fbe600f63e7c12257865fcdb41bb8808263aaa7ba542363c->leave($__internal_e3b7c5ae4774c050fbe600f63e7c12257865fcdb41bb8808263aaa7ba542363c_prof);

        
        $__internal_efa9d73d85ea8ac7d84ad772bd4463f68268a7d397a8aef0ab544ddff4cb2f38->leave($__internal_efa9d73d85ea8ac7d84ad772bd4463f68268a7d397a8aef0ab544ddff4cb2f38_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48330b68b393c77a91334224c9e91979ba42b69ff533d627c9e642c8feb378d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48330b68b393c77a91334224c9e91979ba42b69ff533d627c9e642c8feb378d4->enter($__internal_48330b68b393c77a91334224c9e91979ba42b69ff533d627c9e642c8feb378d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fec524bc8d9a8869c0e48195f50f67034515f7cba4b3c2126f97f47932bc935c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec524bc8d9a8869c0e48195f50f67034515f7cba4b3c2126f97f47932bc935c->enter($__internal_fec524bc8d9a8869c0e48195f50f67034515f7cba4b3c2126f97f47932bc935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Idpedido</th>
                <th>Cliente</th>
                <th>Direccion de envio</th>
                <th>Fecha</th>
";
        // line 33
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pedidos"] ?? $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 37
            echo "            <tr>
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
                ";
            // line 51
            echo "                </td>";
            // line 57
            echo "            </tr>
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
        
        $__internal_fec524bc8d9a8869c0e48195f50f67034515f7cba4b3c2126f97f47932bc935c->leave($__internal_fec524bc8d9a8869c0e48195f50f67034515f7cba4b3c2126f97f47932bc935c_prof);

        
        $__internal_48330b68b393c77a91334224c9e91979ba42b69ff533d627c9e642c8feb378d4->leave($__internal_48330b68b393c77a91334224c9e91979ba42b69ff533d627c9e642c8feb378d4_prof);

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
        return array (  112 => 59,  105 => 57,  103 => 51,  97 => 41,  89 => 38,  86 => 37,  82 => 36,  77 => 33,  49 => 4,  40 => 3,  11 => 1,);
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
{#                 <th>Estado</th> #}
{#                 <th>Detalle</th>
                <th>Accion</th> #}
            </tr>
        </thead>
        <tbody>
        {% for pedido in pedidos %}
            <tr>
                <td><a href=\"{{ path('pedido_show', { 'idpedido': pedido.idpedido }) }}\">{{ pedido.idpedido }}</a></td>
                <td> NULL</td>
                <td> NULL</td>
                <td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>
                {# <td>{{ pedido.idEstadoPedido.nombre }}</td> #}
{#                 <td>
                    {% for pizzapedido in pizzapedidos %}
                        {% if pedido.idpedido == pizzapedido.idPedido.idPedido %}
                                {{ pizzapedido.idPizza.nombre }}
                            <br>
                        {% endif %}
                    {% endfor %}
                </td> #}
                </td>{# 
                    <td>
                        <ul>
                            <a href=\"{{ path('pedido_edit', { 'idpedido': pedido.idpedido }) }}\" class=\"btn btn-warning\">Editar</a>
                        </ul>
                    </td> #}
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
", "pedido/index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pedido/index.html.twig");
    }
}
