<?php

/* :tamanopizza:index.html.twig */
class __TwigTemplate_33f71564e60ff193932a1f412d6b4f8cc54b3638cd1f39ccd6cfdddc26b14f21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tamanopizza:index.html.twig", 1);
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
        $__internal_64ad012003e9f1c6b49350e51d0b4d8a5c75500eac0d8ea282b7a2d4309f6175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ad012003e9f1c6b49350e51d0b4d8a5c75500eac0d8ea282b7a2d4309f6175->enter($__internal_64ad012003e9f1c6b49350e51d0b4d8a5c75500eac0d8ea282b7a2d4309f6175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:index.html.twig"));

        $__internal_b3ac5e6cef3249356098f10fb6785a8a6ddeb59c158a967fa68e2f29394b5c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ac5e6cef3249356098f10fb6785a8a6ddeb59c158a967fa68e2f29394b5c3c->enter($__internal_b3ac5e6cef3249356098f10fb6785a8a6ddeb59c158a967fa68e2f29394b5c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64ad012003e9f1c6b49350e51d0b4d8a5c75500eac0d8ea282b7a2d4309f6175->leave($__internal_64ad012003e9f1c6b49350e51d0b4d8a5c75500eac0d8ea282b7a2d4309f6175_prof);

        
        $__internal_b3ac5e6cef3249356098f10fb6785a8a6ddeb59c158a967fa68e2f29394b5c3c->leave($__internal_b3ac5e6cef3249356098f10fb6785a8a6ddeb59c158a967fa68e2f29394b5c3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37e1c2ae679ce37253f2a8dc6ac7d132b0ec5a6feb5b80ccad63d78e54df964d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e1c2ae679ce37253f2a8dc6ac7d132b0ec5a6feb5b80ccad63d78e54df964d->enter($__internal_37e1c2ae679ce37253f2a8dc6ac7d132b0ec5a6feb5b80ccad63d78e54df964d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eab8ac294255b02ae7a2e16c5b2b0900d82df7cb666d1d3243058870b6f845ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab8ac294255b02ae7a2e16c5b2b0900d82df7cb666d1d3243058870b6f845ec->enter($__internal_eab8ac294255b02ae7a2e16c5b2b0900d82df7cb666d1d3243058870b6f845ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tamanopizzas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idtamanopizza</th>
                <th>Nombre</th>
                <th>Cantporciones</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tamanopizzas"] ?? $this->getContext($context, "tamanopizzas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tamanopizza"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_show", array("idtamanopizza" => $this->getAttribute($context["tamanopizza"], "idtamanopizza", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tamanopizza"], "idtamanopizza", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tamanopizza"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tamanopizza"], "cantporciones", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_show", array("idtamanopizza" => $this->getAttribute($context["tamanopizza"], "idtamanopizza", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_edit", array("idtamanopizza" => $this->getAttribute($context["tamanopizza"], "idtamanopizza", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tamanopizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_new");
        echo "\">Create a new tamanopizza</a>
        </li>
    </ul>
";
        
        $__internal_eab8ac294255b02ae7a2e16c5b2b0900d82df7cb666d1d3243058870b6f845ec->leave($__internal_eab8ac294255b02ae7a2e16c5b2b0900d82df7cb666d1d3243058870b6f845ec_prof);

        
        $__internal_37e1c2ae679ce37253f2a8dc6ac7d132b0ec5a6feb5b80ccad63d78e54df964d->leave($__internal_37e1c2ae679ce37253f2a8dc6ac7d132b0ec5a6feb5b80ccad63d78e54df964d_prof);

    }

    public function getTemplateName()
    {
        return ":tamanopizza:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tamanopizzas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idtamanopizza</th>
                <th>Nombre</th>
                <th>Cantporciones</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for tamanopizza in tamanopizzas %}
            <tr>
                <td><a href=\"{{ path('tamanopizza_show', { 'idtamanopizza': tamanopizza.idtamanopizza }) }}\">{{ tamanopizza.idtamanopizza }}</a></td>
                <td>{{ tamanopizza.nombre }}</td>
                <td>{{ tamanopizza.cantporciones }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('tamanopizza_show', { 'idtamanopizza': tamanopizza.idtamanopizza }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('tamanopizza_edit', { 'idtamanopizza': tamanopizza.idtamanopizza }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tamanopizza_new') }}\">Create a new tamanopizza</a>
        </li>
    </ul>
{% endblock %}
", ":tamanopizza:index.html.twig", "/home/nico/pizzerianostra/app/Resources/views/tamanopizza/index.html.twig");
    }
}
