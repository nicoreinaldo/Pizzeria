<?php

/* :pedido:edit.html.twig */
class __TwigTemplate_b20d08e8a8b728e5d657f5e6bd092c0f7bbe346e94b5f73453fbcd105b87b39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:edit.html.twig", 1);
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
        $__internal_3b004869c35e9c0d14ed9b7b644f395921a2f76fe86b3a13547aa0796c00b86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b004869c35e9c0d14ed9b7b644f395921a2f76fe86b3a13547aa0796c00b86e->enter($__internal_3b004869c35e9c0d14ed9b7b644f395921a2f76fe86b3a13547aa0796c00b86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $__internal_1570cef823f1e43a7844f6a794dd10008dbf038e22d7d6bde845b79a497efcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1570cef823f1e43a7844f6a794dd10008dbf038e22d7d6bde845b79a497efcef->enter($__internal_1570cef823f1e43a7844f6a794dd10008dbf038e22d7d6bde845b79a497efcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b004869c35e9c0d14ed9b7b644f395921a2f76fe86b3a13547aa0796c00b86e->leave($__internal_3b004869c35e9c0d14ed9b7b644f395921a2f76fe86b3a13547aa0796c00b86e_prof);

        
        $__internal_1570cef823f1e43a7844f6a794dd10008dbf038e22d7d6bde845b79a497efcef->leave($__internal_1570cef823f1e43a7844f6a794dd10008dbf038e22d7d6bde845b79a497efcef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b9307812a628400facd0a1487b20ee1f2f6fcf46ff9d89eccdc79c23f13cb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9307812a628400facd0a1487b20ee1f2f6fcf46ff9d89eccdc79c23f13cb2d->enter($__internal_2b9307812a628400facd0a1487b20ee1f2f6fcf46ff9d89eccdc79c23f13cb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d87c9542a546442394fb12f798709d3eded22739b9057219487a9620d483f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d87c9542a546442394fb12f798709d3eded22739b9057219487a9620d483f43->enter($__internal_6d87c9542a546442394fb12f798709d3eded22739b9057219487a9620d483f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Editar pedido
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\" class=\"btn btn-warning\">Back to the list</a>

                </div>
            </div>
        </ol>
    </section>
    <br>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
                        <input type=\"submit\" value=\"Edit\" />
                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        <ul>
                            <li>
                                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                <input type=\"submit\" value=\"Delete\">
                                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



";
        
        $__internal_6d87c9542a546442394fb12f798709d3eded22739b9057219487a9620d483f43->leave($__internal_6d87c9542a546442394fb12f798709d3eded22739b9057219487a9620d483f43_prof);

        
        $__internal_2b9307812a628400facd0a1487b20ee1f2f6fcf46ff9d89eccdc79c23f13cb2d->leave($__internal_2b9307812a628400facd0a1487b20ee1f2f6fcf46ff9d89eccdc79c23f13cb2d_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  88 => 29,  82 => 26,  77 => 24,  73 => 23,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            Editar pedido
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pedido_index') }}\" class=\"btn btn-warning\">Back to the list</a>

                </div>
            </div>
        </ol>
    </section>
    <br>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        {{ form_start(edit_form) }}
                        {{ form_widget(edit_form) }}
                        <input type=\"submit\" value=\"Edit\" />
                        {{ form_end(edit_form) }}
                        <ul>
                            <li>
                                {{ form_start(delete_form) }}
                                <input type=\"submit\" value=\"Delete\">
                                {{ form_end(delete_form) }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



{% endblock %}
", ":pedido:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pedido/edit.html.twig");
    }
}
