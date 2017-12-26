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
        $__internal_cdc4bd5db96a4a4c25e6cbba8234a303a0776ba379ae5dd5cd778aa4041ff847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc4bd5db96a4a4c25e6cbba8234a303a0776ba379ae5dd5cd778aa4041ff847->enter($__internal_cdc4bd5db96a4a4c25e6cbba8234a303a0776ba379ae5dd5cd778aa4041ff847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:index.html.twig"));

        $__internal_398ba033cfd794c4498aff8fb7478c1e4519a3cdc16869a3e1b29bb5613afa39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ba033cfd794c4498aff8fb7478c1e4519a3cdc16869a3e1b29bb5613afa39->enter($__internal_398ba033cfd794c4498aff8fb7478c1e4519a3cdc16869a3e1b29bb5613afa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc4bd5db96a4a4c25e6cbba8234a303a0776ba379ae5dd5cd778aa4041ff847->leave($__internal_cdc4bd5db96a4a4c25e6cbba8234a303a0776ba379ae5dd5cd778aa4041ff847_prof);

        
        $__internal_398ba033cfd794c4498aff8fb7478c1e4519a3cdc16869a3e1b29bb5613afa39->leave($__internal_398ba033cfd794c4498aff8fb7478c1e4519a3cdc16869a3e1b29bb5613afa39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5354bbbf746149ed955335bd0ba4cb9aaf1c668898e8e67e7e77e5e93de00f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5354bbbf746149ed955335bd0ba4cb9aaf1c668898e8e67e7e77e5e93de00f7->enter($__internal_f5354bbbf746149ed955335bd0ba4cb9aaf1c668898e8e67e7e77e5e93de00f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76fc24955a721f4eb5fac115b5c0b6d7c79b631e9d827af0754c81c0ec336c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fc24955a721f4eb5fac115b5c0b6d7c79b631e9d827af0754c81c0ec336c7d->enter($__internal_76fc24955a721f4eb5fac115b5c0b6d7c79b631e9d827af0754c81c0ec336c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76fc24955a721f4eb5fac115b5c0b6d7c79b631e9d827af0754c81c0ec336c7d->leave($__internal_76fc24955a721f4eb5fac115b5c0b6d7c79b631e9d827af0754c81c0ec336c7d_prof);

        
        $__internal_f5354bbbf746149ed955335bd0ba4cb9aaf1c668898e8e67e7e77e5e93de00f7->leave($__internal_f5354bbbf746149ed955335bd0ba4cb9aaf1c668898e8e67e7e77e5e93de00f7_prof);

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
