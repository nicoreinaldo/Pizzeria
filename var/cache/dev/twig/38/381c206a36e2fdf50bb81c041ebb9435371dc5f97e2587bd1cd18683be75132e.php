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
        $__internal_09ae01d55930e9f7c5c7164a7684e7542ceee0a4cd0ade269a42bdda6f28a1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ae01d55930e9f7c5c7164a7684e7542ceee0a4cd0ade269a42bdda6f28a1b9->enter($__internal_09ae01d55930e9f7c5c7164a7684e7542ceee0a4cd0ade269a42bdda6f28a1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $__internal_91e48c62931f472e393e86962fd457597fc3d819f9a8905ba616957e8c870609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e48c62931f472e393e86962fd457597fc3d819f9a8905ba616957e8c870609->enter($__internal_91e48c62931f472e393e86962fd457597fc3d819f9a8905ba616957e8c870609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizzapedido/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ae01d55930e9f7c5c7164a7684e7542ceee0a4cd0ade269a42bdda6f28a1b9->leave($__internal_09ae01d55930e9f7c5c7164a7684e7542ceee0a4cd0ade269a42bdda6f28a1b9_prof);

        
        $__internal_91e48c62931f472e393e86962fd457597fc3d819f9a8905ba616957e8c870609->leave($__internal_91e48c62931f472e393e86962fd457597fc3d819f9a8905ba616957e8c870609_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92903df820060164e4ec129845961387f92d0c8cb76199ac3e0c2b31d9b64dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92903df820060164e4ec129845961387f92d0c8cb76199ac3e0c2b31d9b64dd->enter($__internal_e92903df820060164e4ec129845961387f92d0c8cb76199ac3e0c2b31d9b64dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_753545313c09ad14729f9a74404d689f93d132bba4b5edb52096dd2a3995c7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753545313c09ad14729f9a74404d689f93d132bba4b5edb52096dd2a3995c7e9->enter($__internal_753545313c09ad14729f9a74404d689f93d132bba4b5edb52096dd2a3995c7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "
            <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_new");
            echo "\">Realizar Pedido</a>
            </li>
        ";
        } else {
            // line 41
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Realizar pedido</a>
        ";
        }
        // line 43
        echo "        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver</a>
        </li>
    </ul>
";
        
        $__internal_753545313c09ad14729f9a74404d689f93d132bba4b5edb52096dd2a3995c7e9->leave($__internal_753545313c09ad14729f9a74404d689f93d132bba4b5edb52096dd2a3995c7e9_prof);

        
        $__internal_e92903df820060164e4ec129845961387f92d0c8cb76199ac3e0c2b31d9b64dd->leave($__internal_e92903df820060164e4ec129845961387f92d0c8cb76199ac3e0c2b31d9b64dd_prof);

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
        return array (  122 => 44,  119 => 43,  113 => 41,  107 => 38,  104 => 37,  102 => 36,  93 => 29,  82 => 24,  77 => 22,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
", "pizzapedido/cart.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/views/pizzapedido/cart.html.twig");
    }
}
