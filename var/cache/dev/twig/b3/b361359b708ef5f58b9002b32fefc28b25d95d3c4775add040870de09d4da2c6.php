<?php

/* :pizza:edit.html.twig */
class __TwigTemplate_bd487526dd6c99e60148233416f812789ceae415f4518711899968f3e39fc12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizza:edit.html.twig", 1);
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
        $__internal_1406d262c5fbabcc47d9c89b9b6395ba291d26aec89e3c1317d9d39483e9c010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1406d262c5fbabcc47d9c89b9b6395ba291d26aec89e3c1317d9d39483e9c010->enter($__internal_1406d262c5fbabcc47d9c89b9b6395ba291d26aec89e3c1317d9d39483e9c010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:edit.html.twig"));

        $__internal_f68e7e0fceab7540b2a2b7a0ea8756a393dad2600e100cef8d85b066920cc418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68e7e0fceab7540b2a2b7a0ea8756a393dad2600e100cef8d85b066920cc418->enter($__internal_f68e7e0fceab7540b2a2b7a0ea8756a393dad2600e100cef8d85b066920cc418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1406d262c5fbabcc47d9c89b9b6395ba291d26aec89e3c1317d9d39483e9c010->leave($__internal_1406d262c5fbabcc47d9c89b9b6395ba291d26aec89e3c1317d9d39483e9c010_prof);

        
        $__internal_f68e7e0fceab7540b2a2b7a0ea8756a393dad2600e100cef8d85b066920cc418->leave($__internal_f68e7e0fceab7540b2a2b7a0ea8756a393dad2600e100cef8d85b066920cc418_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0da479c273e6a8c48226b36ea47bdbe0086b95fc7c91c6de9ad9295cf591fc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da479c273e6a8c48226b36ea47bdbe0086b95fc7c91c6de9ad9295cf591fc90->enter($__internal_0da479c273e6a8c48226b36ea47bdbe0086b95fc7c91c6de9ad9295cf591fc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad7317af4da096bd65b1758f0c0a59aa9988ad39258a581eb2eb42b6ffe6bcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7317af4da096bd65b1758f0c0a59aa9988ad39258a581eb2eb42b6ffe6bcb4->enter($__internal_ad7317af4da096bd65b1758f0c0a59aa9988ad39258a581eb2eb42b6ffe6bcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Editar variedad
            <small>Editar una pizza existente</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\" class=\"btn btn-warning\">Volver</a>
                </div>

                <div class=\"btn-group\">
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div>
            </div>
        </ol>
        <br>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Guardar\"  />
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </section>

";
        
        $__internal_ad7317af4da096bd65b1758f0c0a59aa9988ad39258a581eb2eb42b6ffe6bcb4->leave($__internal_ad7317af4da096bd65b1758f0c0a59aa9988ad39258a581eb2eb42b6ffe6bcb4_prof);

        
        $__internal_0da479c273e6a8c48226b36ea47bdbe0086b95fc7c91c6de9ad9295cf591fc90->leave($__internal_0da479c273e6a8c48226b36ea47bdbe0086b95fc7c91c6de9ad9295cf591fc90_prof);

    }

    public function getTemplateName()
    {
        return ":pizza:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  88 => 29,  84 => 28,  71 => 18,  66 => 16,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
            Editar variedad
            <small>Editar una pizza existente</small>
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pizza_index') }}\" class=\"btn btn-warning\">Volver</a>
                </div>

                <div class=\"btn-group\">
                    {{ form_start(delete_form) }}
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </div>
            </div>
        </ol>
        <br>
    </section>

    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <input type=\"submit\" value=\"Guardar\"  />
                {{ form_end(edit_form) }}
            </div>
        </div>
    </section>

{% endblock %}
", ":pizza:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizza/edit.html.twig");
    }
}
