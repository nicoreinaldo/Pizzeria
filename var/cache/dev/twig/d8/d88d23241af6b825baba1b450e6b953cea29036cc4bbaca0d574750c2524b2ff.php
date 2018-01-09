<?php

/* :estadopedido:index.html.twig */
class __TwigTemplate_efd71ce2fcfd3579e0127b01f2ad72e82581194539304dd7f94a0f3ed8b7a97e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estadopedido:index.html.twig", 1);
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
        $__internal_2022a42363eb75f2d01d07a4cb9aae8ded9280f40da53cb26f5967e36b9afeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2022a42363eb75f2d01d07a4cb9aae8ded9280f40da53cb26f5967e36b9afeaf->enter($__internal_2022a42363eb75f2d01d07a4cb9aae8ded9280f40da53cb26f5967e36b9afeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:index.html.twig"));

        $__internal_5ac0c9fb7dc73d31664375d7ff430864cd50d84f1e8474b6630369cc1a862571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac0c9fb7dc73d31664375d7ff430864cd50d84f1e8474b6630369cc1a862571->enter($__internal_5ac0c9fb7dc73d31664375d7ff430864cd50d84f1e8474b6630369cc1a862571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2022a42363eb75f2d01d07a4cb9aae8ded9280f40da53cb26f5967e36b9afeaf->leave($__internal_2022a42363eb75f2d01d07a4cb9aae8ded9280f40da53cb26f5967e36b9afeaf_prof);

        
        $__internal_5ac0c9fb7dc73d31664375d7ff430864cd50d84f1e8474b6630369cc1a862571->leave($__internal_5ac0c9fb7dc73d31664375d7ff430864cd50d84f1e8474b6630369cc1a862571_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb663ef3e628e92748e02b6cb89a1afc050b81562950837219da3c70edcd675d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb663ef3e628e92748e02b6cb89a1afc050b81562950837219da3c70edcd675d->enter($__internal_eb663ef3e628e92748e02b6cb89a1afc050b81562950837219da3c70edcd675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91c6a55946fd72495b90be6b8b2c5269392b1e78e72d466b704be3f287655437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c6a55946fd72495b90be6b8b2c5269392b1e78e72d466b704be3f287655437->enter($__internal_91c6a55946fd72495b90be6b8b2c5269392b1e78e72d466b704be3f287655437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadopedidos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idestadopedido</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estadopedidos"] ?? $this->getContext($context, "estadopedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["estadopedido"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_show", array("idestadopedido" => $this->getAttribute($context["estadopedido"], "idestadopedido", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estadopedido"], "idestadopedido", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["estadopedido"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_show", array("idestadopedido" => $this->getAttribute($context["estadopedido"], "idestadopedido", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_edit", array("idestadopedido" => $this->getAttribute($context["estadopedido"], "idestadopedido", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estadopedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_new");
        echo "\">Create a new estadopedido</a>
        </li>
    </ul>
";
        
        $__internal_91c6a55946fd72495b90be6b8b2c5269392b1e78e72d466b704be3f287655437->leave($__internal_91c6a55946fd72495b90be6b8b2c5269392b1e78e72d466b704be3f287655437_prof);

        
        $__internal_eb663ef3e628e92748e02b6cb89a1afc050b81562950837219da3c70edcd675d->leave($__internal_eb663ef3e628e92748e02b6cb89a1afc050b81562950837219da3c70edcd675d_prof);

    }

    public function getTemplateName()
    {
        return ":estadopedido:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Estadopedidos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idestadopedido</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for estadopedido in estadopedidos %}
            <tr>
                <td><a href=\"{{ path('estadopedido_show', { 'idestadopedido': estadopedido.idestadopedido }) }}\">{{ estadopedido.idestadopedido }}</a></td>
                <td>{{ estadopedido.nombre }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('estadopedido_show', { 'idestadopedido': estadopedido.idestadopedido }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('estadopedido_edit', { 'idestadopedido': estadopedido.idestadopedido }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('estadopedido_new') }}\">Create a new estadopedido</a>
        </li>
    </ul>
{% endblock %}
", ":estadopedido:index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/estadopedido/index.html.twig");
    }
}
