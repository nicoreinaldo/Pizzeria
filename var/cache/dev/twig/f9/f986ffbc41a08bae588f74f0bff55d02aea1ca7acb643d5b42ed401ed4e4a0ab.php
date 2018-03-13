<?php

/* pizzapedido/cart.html.twig */
class __TwigTemplate_568959386379b0810ef655e2aedec1da4bb9211082d65b61c99ee11f9cce3ad0 extends Twig_Template
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
        $__internal_45a8b64d534a6bd4b3c13b7d4073f02a7599daa5af24b96e0dc169afe9cea772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a8b64d534a6bd4b3c13b7d4073f02a7599daa5af24b96e0dc169afe9cea772->enter($__internal_45a8b64d534a6bd4b3c13b7d4073f02a7599daa5af24b96e0dc169afe9cea772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $__internal_8994b97c2ab005cf8068190c9be99bfa5f9cda23689fc484bf336e6b9cf3200a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8994b97c2ab005cf8068190c9be99bfa5f9cda23689fc484bf336e6b9cf3200a->enter($__internal_8994b97c2ab005cf8068190c9be99bfa5f9cda23689fc484bf336e6b9cf3200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a8b64d534a6bd4b3c13b7d4073f02a7599daa5af24b96e0dc169afe9cea772->leave($__internal_45a8b64d534a6bd4b3c13b7d4073f02a7599daa5af24b96e0dc169afe9cea772_prof);

        
        $__internal_8994b97c2ab005cf8068190c9be99bfa5f9cda23689fc484bf336e6b9cf3200a->leave($__internal_8994b97c2ab005cf8068190c9be99bfa5f9cda23689fc484bf336e6b9cf3200a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7288d1e78645c7affb95f23b8f0a30440e1b9a3d5f0e1bdb75474000b0922336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7288d1e78645c7affb95f23b8f0a30440e1b9a3d5f0e1bdb75474000b0922336->enter($__internal_7288d1e78645c7affb95f23b8f0a30440e1b9a3d5f0e1bdb75474000b0922336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a0b1c3ea3d1b982288a509b416f554b2967d0174b7471d30d088cdd0fde9d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0b1c3ea3d1b982288a509b416f554b2967d0174b7471d30d088cdd0fde9d32->enter($__internal_1a0b1c3ea3d1b982288a509b416f554b2967d0174b7471d30d088cdd0fde9d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                <td>
                    <button type=\"button\" class=\"btn btn-danger\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_delete", array("idpizza" => $this->getAttribute($context["pizza"], "idpizza", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </button>
                </td>
            </tr>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </table>
        </tbody>



    <ul>

        ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "
            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_confirma");
            echo "\">Realizar Pedido</a>
            </li>
        ";
        } else {
            // line 47
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Realizar pedido</a>
        ";
        }
        // line 49
        echo "        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver</a>
        </li>
    </ul>
";
        
        $__internal_1a0b1c3ea3d1b982288a509b416f554b2967d0174b7471d30d088cdd0fde9d32->leave($__internal_1a0b1c3ea3d1b982288a509b416f554b2967d0174b7471d30d088cdd0fde9d32_prof);

        
        $__internal_7288d1e78645c7affb95f23b8f0a30440e1b9a3d5f0e1bdb75474000b0922336->leave($__internal_7288d1e78645c7affb95f23b8f0a30440e1b9a3d5f0e1bdb75474000b0922336_prof);

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
        return array (  131 => 50,  128 => 49,  122 => 47,  116 => 44,  113 => 43,  111 => 42,  102 => 35,  88 => 27,  82 => 24,  77 => 22,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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

                <td>
                    <button type=\"button\" class=\"btn btn-danger\" href=\"{{ path('pizzapedido_delete', { 'idpizza': pizza.idpizza }) }}\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </button>
                </td>
            </tr>
            </div>
        </div>
        {% endfor %}
    </table>
        </tbody>



    <ul>

        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

            <li><a href=\"{{ path('pizzapedido_confirma') }}\">Realizar Pedido</a>
            </li>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">Realizar pedido</a>
        {% endif %}
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver</a>
        </li>
    </ul>
{% endblock %}
", "pizzapedido/cart.html.twig", "/home/nico/pizzeria/app/Resources/views/pizzapedido/cart.html.twig");
    }
}
