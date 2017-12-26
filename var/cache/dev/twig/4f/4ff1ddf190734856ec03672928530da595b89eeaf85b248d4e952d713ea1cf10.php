<?php

/* :pizza:show.html.twig */
class __TwigTemplate_9771bf2107d8cf1fce0874bf23eb3366a83dacf1535f184982e23595f29f79e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizza:show.html.twig", 1);
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
        $__internal_666e59c78b231ec9f12ae029b033e785a1059d6a694cf0866872b6149054734b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666e59c78b231ec9f12ae029b033e785a1059d6a694cf0866872b6149054734b->enter($__internal_666e59c78b231ec9f12ae029b033e785a1059d6a694cf0866872b6149054734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:show.html.twig"));

        $__internal_80fedea2666fdcc8ae2a43b4e5ebe56b73ce2747eeb55bac78f77b4fb34a2d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fedea2666fdcc8ae2a43b4e5ebe56b73ce2747eeb55bac78f77b4fb34a2d43->enter($__internal_80fedea2666fdcc8ae2a43b4e5ebe56b73ce2747eeb55bac78f77b4fb34a2d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666e59c78b231ec9f12ae029b033e785a1059d6a694cf0866872b6149054734b->leave($__internal_666e59c78b231ec9f12ae029b033e785a1059d6a694cf0866872b6149054734b_prof);

        
        $__internal_80fedea2666fdcc8ae2a43b4e5ebe56b73ce2747eeb55bac78f77b4fb34a2d43->leave($__internal_80fedea2666fdcc8ae2a43b4e5ebe56b73ce2747eeb55bac78f77b4fb34a2d43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be85b8d55df4bb015c9e8630ba4439b8e6d278a8d5d41e46ea187612b9847791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be85b8d55df4bb015c9e8630ba4439b8e6d278a8d5d41e46ea187612b9847791->enter($__internal_be85b8d55df4bb015c9e8630ba4439b8e6d278a8d5d41e46ea187612b9847791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d394c180f89becfffed37dfcceabc31e9ef3cfe242f8e9475daefc61010bef57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d394c180f89becfffed37dfcceabc31e9ef3cfe242f8e9475daefc61010bef57->enter($__internal_d394c180f89becfffed37dfcceabc31e9ef3cfe242f8e9475daefc61010bef57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Pizza ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pizza"] ?? $this->getContext($context, "pizza")), "nombre", array()), "html", null, true);
        echo "
            <small>Descripcion</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_edit", array("idpizza" => $this->getAttribute(($context["pizza"] ?? $this->getContext($context, "pizza")), "idpizza", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Editar</a>

                </div>

                <div class=\"btn-group\">
                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div>
            </div>
        </ol>
        <br>
    </section>


    <div class=\"col-xs-6\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <tr>
                    <th style=\"width:50%\">ID:</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pizza"] ?? $this->getContext($context, "pizza")), "idpizza", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nombre variedad:</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pizza"] ?? $this->getContext($context, "pizza")), "nombre", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Precio:</th>
                    <td>\$ ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pizza"] ?? $this->getContext($context, "pizza")), "precio", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pizza"] ?? $this->getContext($context, "pizza")), "descripcion", array()), "html", null, true);
        echo "</td>
                </tr>


            </table>

        </div>
    </div>


";
        
        $__internal_d394c180f89becfffed37dfcceabc31e9ef3cfe242f8e9475daefc61010bef57->leave($__internal_d394c180f89becfffed37dfcceabc31e9ef3cfe242f8e9475daefc61010bef57_prof);

        
        $__internal_be85b8d55df4bb015c9e8630ba4439b8e6d278a8d5d41e46ea187612b9847791->leave($__internal_be85b8d55df4bb015c9e8630ba4439b8e6d278a8d5d41e46ea187612b9847791_prof);

    }

    public function getTemplateName()
    {
        return ":pizza:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  105 => 40,  98 => 36,  91 => 32,  75 => 19,  70 => 17,  62 => 12,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <h1>
            Pizza {{ pizza.nombre }}
            <small>Descripcion</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizza_edit', { 'idpizza': pizza.idpizza }) }}\" class=\"btn btn-primary\">Editar</a>

                </div>

                <div class=\"btn-group\">
                    {{ form_start(delete_form) }}
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </div>
            </div>
        </ol>
        <br>
    </section>


    <div class=\"col-xs-6\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <tr>
                    <th style=\"width:50%\">ID:</th>
                    <td>{{ pizza.idpizza }}</td>
                </tr>
                <tr>
                    <th>Nombre variedad:</th>
                    <td>{{ pizza.nombre }}</td>
                </tr>
                <tr>
                    <th>Precio:</th>
                    <td>\$ {{ pizza.precio }}</td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td>{{ pizza.descripcion }}</td>
                </tr>


            </table>

        </div>
    </div>


{% endblock %}
", ":pizza:show.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizza/show.html.twig");
    }
}
