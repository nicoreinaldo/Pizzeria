<?php

/* pizzapedido/cart.html.twig */
class __TwigTemplate_1b358de38220390615cc7b12eb7d1e09eb13a50dc7073426a6967435e9540d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizzapedido/cart.html.twig", 1);
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
        $__internal_c641b426a2f79bd6e4cc7d6aa165d6d4ff1934738630db74299fce3afaa925d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c641b426a2f79bd6e4cc7d6aa165d6d4ff1934738630db74299fce3afaa925d8->enter($__internal_c641b426a2f79bd6e4cc7d6aa165d6d4ff1934738630db74299fce3afaa925d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $__internal_672a1d4cf09435ef9882d1453c34f0e92a9bc989d9a540316b040efe55722df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672a1d4cf09435ef9882d1453c34f0e92a9bc989d9a540316b040efe55722df2->enter($__internal_672a1d4cf09435ef9882d1453c34f0e92a9bc989d9a540316b040efe55722df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c641b426a2f79bd6e4cc7d6aa165d6d4ff1934738630db74299fce3afaa925d8->leave($__internal_c641b426a2f79bd6e4cc7d6aa165d6d4ff1934738630db74299fce3afaa925d8_prof);

        
        $__internal_672a1d4cf09435ef9882d1453c34f0e92a9bc989d9a540316b040efe55722df2->leave($__internal_672a1d4cf09435ef9882d1453c34f0e92a9bc989d9a540316b040efe55722df2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee3bc60d386d4d1f1b80e6ba84c4f446e2cb78797bfa0b9e323c9fd2e61a9d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3bc60d386d4d1f1b80e6ba84c4f446e2cb78797bfa0b9e323c9fd2e61a9d34->enter($__internal_ee3bc60d386d4d1f1b80e6ba84c4f446e2cb78797bfa0b9e323c9fd2e61a9d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c721a40546d12e1dbf68cad2cd87a2bbca323f71e801f62bbdc47be7b1c259d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c721a40546d12e1dbf68cad2cd87a2bbca323f71e801f62bbdc47be7b1c259d7->enter($__internal_c721a40546d12e1dbf68cad2cd87a2bbca323f71e801f62bbdc47be7b1c259d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1> Carro de Compras</h1>
    </section>

    <table class=\"table\">
        <div class=\"col-xs-6\">
          <div class=\"table-responsive\">
            <tr>
                <th><strong>Nombre</strong></th>
                <th><strong>Descripcion</strong></th>
                <th><strong>Precio</strong></th>
            </tr>
            
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? $this->getContext($context, "cart")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 19
            echo "            <tr>
                <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</td>

                <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</td>

                <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</td>
            </tr>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
        </tbody>



    <ul>
        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
        echo "\">Realizar Pedido</a>
        </li>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver</a>
        </li>
    </ul>
";
        
        $__internal_c721a40546d12e1dbf68cad2cd87a2bbca323f71e801f62bbdc47be7b1c259d7->leave($__internal_c721a40546d12e1dbf68cad2cd87a2bbca323f71e801f62bbdc47be7b1c259d7_prof);

        
        $__internal_ee3bc60d386d4d1f1b80e6ba84c4f446e2cb78797bfa0b9e323c9fd2e61a9d34->leave($__internal_ee3bc60d386d4d1f1b80e6ba84c4f446e2cb78797bfa0b9e323c9fd2e61a9d34_prof);

    }

    public function getTemplateName()
    {
        return "pizzapedido/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  101 => 35,  93 => 29,  82 => 24,  77 => 22,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
        <h1> Carro de Compras</h1>
    </section>

    <table class=\"table\">
        <div class=\"col-xs-6\">
          <div class=\"table-responsive\">
            <tr>
                <th><strong>Nombre</strong></th>
                <th><strong>Descripcion</strong></th>
                <th><strong>Precio</strong></th>
            </tr>
            
        <tbody>
        {% for pizza in cart %}
            <tr>
                <td> {{ pizza.nombre }}</td>

                <td> {{ pizza.descripcion }}</td>

                <td> {{ pizza.precio }}</td>
            </tr>
            </div>
        </div>
        {% endfor %}
    </table>
        </tbody>



    <ul>
        <li><a href=\"{{ path('cliente_index') }}\">Realizar Pedido</a>
        </li>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver</a>
        </li>
    </ul>
{% endblock %}
", "pizzapedido/cart.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/cart.html.twig");
    }
}
