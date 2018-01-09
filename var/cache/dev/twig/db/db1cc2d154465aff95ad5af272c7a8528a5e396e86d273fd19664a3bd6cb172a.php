<?php

/* :pizzapedido:index.html.twig */
class __TwigTemplate_51c611974792fedcbcda96019e755926441b885ede5f48001064ea7d99cba710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:index.html.twig", 1);
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
        $__internal_0cca9594a21c14b0507f9b527f502003ca43c58d30b3eb40a10eb2b435642b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cca9594a21c14b0507f9b527f502003ca43c58d30b3eb40a10eb2b435642b85->enter($__internal_0cca9594a21c14b0507f9b527f502003ca43c58d30b3eb40a10eb2b435642b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:index.html.twig"));

        $__internal_e5985358666c8e0abbd6284e44020eee5b79349ca9a19cbf3de1ccd82800c4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5985358666c8e0abbd6284e44020eee5b79349ca9a19cbf3de1ccd82800c4a6->enter($__internal_e5985358666c8e0abbd6284e44020eee5b79349ca9a19cbf3de1ccd82800c4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cca9594a21c14b0507f9b527f502003ca43c58d30b3eb40a10eb2b435642b85->leave($__internal_0cca9594a21c14b0507f9b527f502003ca43c58d30b3eb40a10eb2b435642b85_prof);

        
        $__internal_e5985358666c8e0abbd6284e44020eee5b79349ca9a19cbf3de1ccd82800c4a6->leave($__internal_e5985358666c8e0abbd6284e44020eee5b79349ca9a19cbf3de1ccd82800c4a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f8122ddfa34121426454208d22a130a58615d6f18c59372532f10600afa675c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8122ddfa34121426454208d22a130a58615d6f18c59372532f10600afa675c->enter($__internal_3f8122ddfa34121426454208d22a130a58615d6f18c59372532f10600afa675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19ddffa0a28c3f5b81c0022b1cfaf685cdc2fbb255a78c13bc435b459da8f7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ddffa0a28c3f5b81c0022b1cfaf685cdc2fbb255a78c13bc435b459da8f7e9->enter($__internal_19ddffa0a28c3f5b81c0022b1cfaf685cdc2fbb255a78c13bc435b459da8f7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedidos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idpizzapedido</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pizzapedidos"] ?? $this->getContext($context, "pizzapedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizzapedido"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPedido", array()), "idPedido", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pizzapedido"], "idPizza", array()), "nombre", array()), "html", null, true);
            echo "</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_show", array("idpizzapedido" => $this->getAttribute($context["pizzapedido"], "idpizzapedido", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_edit", array("idpizzapedido" => $this->getAttribute($context["pizzapedido"], "idpizzapedido", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizzapedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_new");
        echo "\">Create a new pizzapedido</a>
        </li>
    </ul>
";
        
        $__internal_19ddffa0a28c3f5b81c0022b1cfaf685cdc2fbb255a78c13bc435b459da8f7e9->leave($__internal_19ddffa0a28c3f5b81c0022b1cfaf685cdc2fbb255a78c13bc435b459da8f7e9_prof);

        
        $__internal_3f8122ddfa34121426454208d22a130a58615d6f18c59372532f10600afa675c->leave($__internal_3f8122ddfa34121426454208d22a130a58615d6f18c59372532f10600afa675c_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 37,  99 => 32,  87 => 26,  81 => 23,  73 => 18,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pizzapedidos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idpizzapedido</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for pizzapedido in pizzapedidos %}
            <tr>
                <td>{{ pizzapedido.idPedido.idPedido }}</td>

                <td>{{ pizzapedido.idPizza.nombre }}</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('pizzapedido_show', { 'idpizzapedido': pizzapedido.idpizzapedido }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('pizzapedido_edit', { 'idpizzapedido': pizzapedido.idpizzapedido }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_new') }}\">Create a new pizzapedido</a>
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/index.html.twig");
    }
}
