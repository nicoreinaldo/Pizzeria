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
        $__internal_6c9f5d94326975f7cb15f4daa6a5a915fe57518d118fa8b4a03a1c4fd911dd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9f5d94326975f7cb15f4daa6a5a915fe57518d118fa8b4a03a1c4fd911dd17->enter($__internal_6c9f5d94326975f7cb15f4daa6a5a915fe57518d118fa8b4a03a1c4fd911dd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:index.html.twig"));

        $__internal_b87e51a7f7c49c0bf7fb5e182dec05bd009cb721c31b82b1b71bb00bb2c41abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87e51a7f7c49c0bf7fb5e182dec05bd009cb721c31b82b1b71bb00bb2c41abd->enter($__internal_b87e51a7f7c49c0bf7fb5e182dec05bd009cb721c31b82b1b71bb00bb2c41abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c9f5d94326975f7cb15f4daa6a5a915fe57518d118fa8b4a03a1c4fd911dd17->leave($__internal_6c9f5d94326975f7cb15f4daa6a5a915fe57518d118fa8b4a03a1c4fd911dd17_prof);

        
        $__internal_b87e51a7f7c49c0bf7fb5e182dec05bd009cb721c31b82b1b71bb00bb2c41abd->leave($__internal_b87e51a7f7c49c0bf7fb5e182dec05bd009cb721c31b82b1b71bb00bb2c41abd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b68a4f6c7d346b75207a637326c65e8d7e8bff69ea53a1ba8893ec2dbfe5c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b68a4f6c7d346b75207a637326c65e8d7e8bff69ea53a1ba8893ec2dbfe5c3e->enter($__internal_2b68a4f6c7d346b75207a637326c65e8d7e8bff69ea53a1ba8893ec2dbfe5c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d575c01897f6b4e8c51d21bd670411b65f4c039ef7dfa9f216f79097f2aa24b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d575c01897f6b4e8c51d21bd670411b65f4c039ef7dfa9f216f79097f2aa24b4->enter($__internal_d575c01897f6b4e8c51d21bd670411b65f4c039ef7dfa9f216f79097f2aa24b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d575c01897f6b4e8c51d21bd670411b65f4c039ef7dfa9f216f79097f2aa24b4->leave($__internal_d575c01897f6b4e8c51d21bd670411b65f4c039ef7dfa9f216f79097f2aa24b4_prof);

        
        $__internal_2b68a4f6c7d346b75207a637326c65e8d7e8bff69ea53a1ba8893ec2dbfe5c3e->leave($__internal_2b68a4f6c7d346b75207a637326c65e8d7e8bff69ea53a1ba8893ec2dbfe5c3e_prof);

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
