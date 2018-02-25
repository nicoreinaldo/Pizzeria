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
        $__internal_cee233b35c12a4477e763ad7295576e3e46a6d92e255453ce2c068f736cd865f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee233b35c12a4477e763ad7295576e3e46a6d92e255453ce2c068f736cd865f->enter($__internal_cee233b35c12a4477e763ad7295576e3e46a6d92e255453ce2c068f736cd865f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $__internal_b0ac58af977543bd74287a3419ee22033709f5075e973e3d79d9abbc7dea9c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ac58af977543bd74287a3419ee22033709f5075e973e3d79d9abbc7dea9c33->enter($__internal_b0ac58af977543bd74287a3419ee22033709f5075e973e3d79d9abbc7dea9c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee233b35c12a4477e763ad7295576e3e46a6d92e255453ce2c068f736cd865f->leave($__internal_cee233b35c12a4477e763ad7295576e3e46a6d92e255453ce2c068f736cd865f_prof);

        
        $__internal_b0ac58af977543bd74287a3419ee22033709f5075e973e3d79d9abbc7dea9c33->leave($__internal_b0ac58af977543bd74287a3419ee22033709f5075e973e3d79d9abbc7dea9c33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af59c10d71a34e9ce0ef757a3ad7e5a5afe8c8784c565adeea35888d517e91f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af59c10d71a34e9ce0ef757a3ad7e5a5afe8c8784c565adeea35888d517e91f3->enter($__internal_af59c10d71a34e9ce0ef757a3ad7e5a5afe8c8784c565adeea35888d517e91f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_536c27c94c8df19d9e1cfa41e694f3e037367dee3266d1405ae29751ccc8b572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536c27c94c8df19d9e1cfa41e694f3e037367dee3266d1405ae29751ccc8b572->enter($__internal_536c27c94c8df19d9e1cfa41e694f3e037367dee3266d1405ae29751ccc8b572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_new");
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
        
        $__internal_536c27c94c8df19d9e1cfa41e694f3e037367dee3266d1405ae29751ccc8b572->leave($__internal_536c27c94c8df19d9e1cfa41e694f3e037367dee3266d1405ae29751ccc8b572_prof);

        
        $__internal_af59c10d71a34e9ce0ef757a3ad7e5a5afe8c8784c565adeea35888d517e91f3->leave($__internal_af59c10d71a34e9ce0ef757a3ad7e5a5afe8c8784c565adeea35888d517e91f3_prof);

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

            <li><a href=\"{{ path('cliente_new') }}\">Realizar Pedido</a>
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
