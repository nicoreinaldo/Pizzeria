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
        $__internal_7ced2b81a478b06d78b1828c858e10358ccb8b08029571d72560a23a2dc46da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ced2b81a478b06d78b1828c858e10358ccb8b08029571d72560a23a2dc46da1->enter($__internal_7ced2b81a478b06d78b1828c858e10358ccb8b08029571d72560a23a2dc46da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:index.html.twig"));

        $__internal_ff55fd839b1506e95be44488dd4c3f3b67a18f62eaee87e95ff06a76110fc39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff55fd839b1506e95be44488dd4c3f3b67a18f62eaee87e95ff06a76110fc39f->enter($__internal_ff55fd839b1506e95be44488dd4c3f3b67a18f62eaee87e95ff06a76110fc39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ced2b81a478b06d78b1828c858e10358ccb8b08029571d72560a23a2dc46da1->leave($__internal_7ced2b81a478b06d78b1828c858e10358ccb8b08029571d72560a23a2dc46da1_prof);

        
        $__internal_ff55fd839b1506e95be44488dd4c3f3b67a18f62eaee87e95ff06a76110fc39f->leave($__internal_ff55fd839b1506e95be44488dd4c3f3b67a18f62eaee87e95ff06a76110fc39f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb1dd68ead03bbd88a71c1899c8e949e560637e8dbabd3972cfce17acf0f148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb1dd68ead03bbd88a71c1899c8e949e560637e8dbabd3972cfce17acf0f148->enter($__internal_8fb1dd68ead03bbd88a71c1899c8e949e560637e8dbabd3972cfce17acf0f148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca8ba4f15c7346a6efaa140060d0efed21c686016c508cf323fc3f943056f010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8ba4f15c7346a6efaa140060d0efed21c686016c508cf323fc3f943056f010->enter($__internal_ca8ba4f15c7346a6efaa140060d0efed21c686016c508cf323fc3f943056f010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca8ba4f15c7346a6efaa140060d0efed21c686016c508cf323fc3f943056f010->leave($__internal_ca8ba4f15c7346a6efaa140060d0efed21c686016c508cf323fc3f943056f010_prof);

        
        $__internal_8fb1dd68ead03bbd88a71c1899c8e949e560637e8dbabd3972cfce17acf0f148->leave($__internal_8fb1dd68ead03bbd88a71c1899c8e949e560637e8dbabd3972cfce17acf0f148_prof);

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
