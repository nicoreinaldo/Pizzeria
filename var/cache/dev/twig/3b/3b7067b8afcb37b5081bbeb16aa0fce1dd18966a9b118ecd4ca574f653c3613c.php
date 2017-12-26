<?php

/* :tamanopizza:show.html.twig */
class __TwigTemplate_49efabcc5cd7b6db451e4fbe791c30384208df260cb029244355d8f3120002cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tamanopizza:show.html.twig", 1);
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
        $__internal_e86d6974ec436054577c394ee148e3781b148eda172e1814cdbadd9b4eec5992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86d6974ec436054577c394ee148e3781b148eda172e1814cdbadd9b4eec5992->enter($__internal_e86d6974ec436054577c394ee148e3781b148eda172e1814cdbadd9b4eec5992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:show.html.twig"));

        $__internal_e6aad7a88311ed1580e932ee76640a815d5d3a95e72ca375dc7756763c427eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6aad7a88311ed1580e932ee76640a815d5d3a95e72ca375dc7756763c427eca->enter($__internal_e6aad7a88311ed1580e932ee76640a815d5d3a95e72ca375dc7756763c427eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e86d6974ec436054577c394ee148e3781b148eda172e1814cdbadd9b4eec5992->leave($__internal_e86d6974ec436054577c394ee148e3781b148eda172e1814cdbadd9b4eec5992_prof);

        
        $__internal_e6aad7a88311ed1580e932ee76640a815d5d3a95e72ca375dc7756763c427eca->leave($__internal_e6aad7a88311ed1580e932ee76640a815d5d3a95e72ca375dc7756763c427eca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d393929325ed5727622c1c1342cebfb86e85311457ae7fb6aae3f7c70b13de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d393929325ed5727622c1c1342cebfb86e85311457ae7fb6aae3f7c70b13de5->enter($__internal_3d393929325ed5727622c1c1342cebfb86e85311457ae7fb6aae3f7c70b13de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_828e5ab747d61255fa10b96941ac35d2790dda48ac1b3113b3afef101a6a0f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828e5ab747d61255fa10b96941ac35d2790dda48ac1b3113b3afef101a6a0f17->enter($__internal_828e5ab747d61255fa10b96941ac35d2790dda48ac1b3113b3afef101a6a0f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tamanopizza</h1>

    <table>
        <tbody>
            <tr>
                <th>Idtamanopizza</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tamanopizza"] ?? $this->getContext($context, "tamanopizza")), "idtamanopizza", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tamanopizza"] ?? $this->getContext($context, "tamanopizza")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantporciones</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tamanopizza"] ?? $this->getContext($context, "tamanopizza")), "cantporciones", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_edit", array("idtamanopizza" => $this->getAttribute(($context["tamanopizza"] ?? $this->getContext($context, "tamanopizza")), "idtamanopizza", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_828e5ab747d61255fa10b96941ac35d2790dda48ac1b3113b3afef101a6a0f17->leave($__internal_828e5ab747d61255fa10b96941ac35d2790dda48ac1b3113b3afef101a6a0f17_prof);

        
        $__internal_3d393929325ed5727622c1c1342cebfb86e85311457ae7fb6aae3f7c70b13de5->leave($__internal_3d393929325ed5727622c1c1342cebfb86e85311457ae7fb6aae3f7c70b13de5_prof);

    }

    public function getTemplateName()
    {
        return ":tamanopizza:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tamanopizza</h1>

    <table>
        <tbody>
            <tr>
                <th>Idtamanopizza</th>
                <td>{{ tamanopizza.idtamanopizza }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ tamanopizza.nombre }}</td>
            </tr>
            <tr>
                <th>Cantporciones</th>
                <td>{{ tamanopizza.cantporciones }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tamanopizza_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('tamanopizza_edit', { 'idtamanopizza': tamanopizza.idtamanopizza }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":tamanopizza:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/tamanopizza/show.html.twig");
    }
}
