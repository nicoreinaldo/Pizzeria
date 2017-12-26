<?php

/* :pizzapedido:cart.html.twig */
class __TwigTemplate_1b358de38220390615cc7b12eb7d1e09eb13a50dc7073426a6967435e9540d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:cart.html.twig", 1);
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
        $__internal_89c41513d87a6e6be5d701fbf97bee4d96b3ce0e64b0acc78b1769e5de9a371d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c41513d87a6e6be5d701fbf97bee4d96b3ce0e64b0acc78b1769e5de9a371d->enter($__internal_89c41513d87a6e6be5d701fbf97bee4d96b3ce0e64b0acc78b1769e5de9a371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:cart.html.twig"));

        $__internal_d3444b8cf2918076ea9e7b2903179c0a6ec57cc064e89a6eeae81f3d6d457a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3444b8cf2918076ea9e7b2903179c0a6ec57cc064e89a6eeae81f3d6d457a1c->enter($__internal_d3444b8cf2918076ea9e7b2903179c0a6ec57cc064e89a6eeae81f3d6d457a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89c41513d87a6e6be5d701fbf97bee4d96b3ce0e64b0acc78b1769e5de9a371d->leave($__internal_89c41513d87a6e6be5d701fbf97bee4d96b3ce0e64b0acc78b1769e5de9a371d_prof);

        
        $__internal_d3444b8cf2918076ea9e7b2903179c0a6ec57cc064e89a6eeae81f3d6d457a1c->leave($__internal_d3444b8cf2918076ea9e7b2903179c0a6ec57cc064e89a6eeae81f3d6d457a1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c05dbd7a6ad6377a8be79a2dc283c757024450432b9acee1a0ae87030bbaefaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05dbd7a6ad6377a8be79a2dc283c757024450432b9acee1a0ae87030bbaefaf->enter($__internal_c05dbd7a6ad6377a8be79a2dc283c757024450432b9acee1a0ae87030bbaefaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee2c98342b1bd19c84f38eb1607504ed5f81fad5ae6dae0f6b06aecf1aef3a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2c98342b1bd19c84f38eb1607504ed5f81fad5ae6dae0f6b06aecf1aef3a01->enter($__internal_ee2c98342b1bd19c84f38eb1607504ed5f81fad5ae6dae0f6b06aecf1aef3a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Carrito</h1>
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? $this->getContext($context, "cart")));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 16
            echo "            <tr>
                <td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "nombre", array()), "html", null, true);
            echo "</td>

                <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "descripcion", array()), "html", null, true);
            echo "</td>

                <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["pizza"], "precio", array()), "html", null, true);
            echo "</td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>


    <ul>
        <li>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver</a>
        </li>
    </ul>
";
        
        $__internal_ee2c98342b1bd19c84f38eb1607504ed5f81fad5ae6dae0f6b06aecf1aef3a01->leave($__internal_ee2c98342b1bd19c84f38eb1607504ed5f81fad5ae6dae0f6b06aecf1aef3a01_prof);

        
        $__internal_c05dbd7a6ad6377a8be79a2dc283c757024450432b9acee1a0ae87030bbaefaf->leave($__internal_c05dbd7a6ad6377a8be79a2dc283c757024450432b9acee1a0ae87030bbaefaf_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  90 => 26,  79 => 21,  74 => 19,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Carrito</h1>
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>

        </tr>
        </thead>
        <tbody>
        {% for pizza in cart %}
            <tr>
                <td> {{ pizza.nombre }}</td>

                <td> {{ pizza.descripcion }}</td>

                <td> {{ pizza.precio }}</td>


            </tr>
        {% endfor %}
        </tbody>
    </table>


    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver</a>
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:cart.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/cart.html.twig");
    }
}
