<?php

/* :pedido:show.html.twig */
class __TwigTemplate_22b7f9a467942f873bf7e135b03472cb858e23759e538067725482d18840f421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:show.html.twig", 1);
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
        $__internal_815877c9b53d7dc4ada35addfafb49f88a4c5837a88912dfca0201cc8ee890fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815877c9b53d7dc4ada35addfafb49f88a4c5837a88912dfca0201cc8ee890fd->enter($__internal_815877c9b53d7dc4ada35addfafb49f88a4c5837a88912dfca0201cc8ee890fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $__internal_acc2289eb89b560b6b3fde5feb5eb256a0645394da7dcd01c42d73594266f6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc2289eb89b560b6b3fde5feb5eb256a0645394da7dcd01c42d73594266f6f4->enter($__internal_acc2289eb89b560b6b3fde5feb5eb256a0645394da7dcd01c42d73594266f6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815877c9b53d7dc4ada35addfafb49f88a4c5837a88912dfca0201cc8ee890fd->leave($__internal_815877c9b53d7dc4ada35addfafb49f88a4c5837a88912dfca0201cc8ee890fd_prof);

        
        $__internal_acc2289eb89b560b6b3fde5feb5eb256a0645394da7dcd01c42d73594266f6f4->leave($__internal_acc2289eb89b560b6b3fde5feb5eb256a0645394da7dcd01c42d73594266f6f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ed6b1fb7bc53944b2e16fbcdb486aa0d8e5e94c102c8850d8659cdb3d24f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ed6b1fb7bc53944b2e16fbcdb486aa0d8e5e94c102c8850d8659cdb3d24f49->enter($__internal_d9ed6b1fb7bc53944b2e16fbcdb486aa0d8e5e94c102c8850d8659cdb3d24f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_867eb0915ffe385fab73890ff0c249364915a890f0b61794597c758d79d836c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867eb0915ffe385fab73890ff0c249364915a890f0b61794597c758d79d836c2->enter($__internal_867eb0915ffe385fab73890ff0c249364915a890f0b61794597c758d79d836c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpedido</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "idpedido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "fecha", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_edit", array("idpedido" => $this->getAttribute(($context["pedido"] ?? $this->getContext($context, "pedido")), "idpedido", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_867eb0915ffe385fab73890ff0c249364915a890f0b61794597c758d79d836c2->leave($__internal_867eb0915ffe385fab73890ff0c249364915a890f0b61794597c758d79d836c2_prof);

        
        $__internal_d9ed6b1fb7bc53944b2e16fbcdb486aa0d8e5e94c102c8850d8659cdb3d24f49->leave($__internal_d9ed6b1fb7bc53944b2e16fbcdb486aa0d8e5e94c102c8850d8659cdb3d24f49_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  88 => 27,  82 => 24,  76 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Pedido</h1>

    <table>
        <tbody>
            <tr>
                <th>Idpedido</th>
                <td>{{ pedido.idpedido }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{% if pedido.fecha %}{{ pedido.fecha|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('pedido_edit', { 'idpedido': pedido.idpedido }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pedido:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pedido/show.html.twig");
    }
}
