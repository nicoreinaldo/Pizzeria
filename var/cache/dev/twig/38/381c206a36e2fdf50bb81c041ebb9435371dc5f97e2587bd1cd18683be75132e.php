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
        $__internal_44cf6ddf411daa439a7d096662bf1869e04e9fcae71ccbe6bcf0a253558d69fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cf6ddf411daa439a7d096662bf1869e04e9fcae71ccbe6bcf0a253558d69fe->enter($__internal_44cf6ddf411daa439a7d096662bf1869e04e9fcae71ccbe6bcf0a253558d69fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:cart.html.twig"));

        $__internal_4988f61da807b74366319325e1b25b8b5d676dda474caf4a807a25c23e37637f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4988f61da807b74366319325e1b25b8b5d676dda474caf4a807a25c23e37637f->enter($__internal_4988f61da807b74366319325e1b25b8b5d676dda474caf4a807a25c23e37637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44cf6ddf411daa439a7d096662bf1869e04e9fcae71ccbe6bcf0a253558d69fe->leave($__internal_44cf6ddf411daa439a7d096662bf1869e04e9fcae71ccbe6bcf0a253558d69fe_prof);

        
        $__internal_4988f61da807b74366319325e1b25b8b5d676dda474caf4a807a25c23e37637f->leave($__internal_4988f61da807b74366319325e1b25b8b5d676dda474caf4a807a25c23e37637f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fd4f0fb16f7f826df1865ce2d093e322a6eca24aaf2ea5714ae353a1fb82f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd4f0fb16f7f826df1865ce2d093e322a6eca24aaf2ea5714ae353a1fb82f8e->enter($__internal_8fd4f0fb16f7f826df1865ce2d093e322a6eca24aaf2ea5714ae353a1fb82f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fc2374e6f96a113c87dda3c01cf7d7779968bd3b971287cf566d63b5cd88007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc2374e6f96a113c87dda3c01cf7d7779968bd3b971287cf566d63b5cd88007->enter($__internal_0fc2374e6f96a113c87dda3c01cf7d7779968bd3b971287cf566d63b5cd88007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver</a>
        </li>
    </ul>
";
        
        $__internal_0fc2374e6f96a113c87dda3c01cf7d7779968bd3b971287cf566d63b5cd88007->leave($__internal_0fc2374e6f96a113c87dda3c01cf7d7779968bd3b971287cf566d63b5cd88007_prof);

        
        $__internal_8fd4f0fb16f7f826df1865ce2d093e322a6eca24aaf2ea5714ae353a1fb82f8e->leave($__internal_8fd4f0fb16f7f826df1865ce2d093e322a6eca24aaf2ea5714ae353a1fb82f8e_prof);

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
        return array (  102 => 36,  93 => 29,  82 => 24,  77 => 22,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver</a>
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:cart.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/cart.html.twig");
    }
}
