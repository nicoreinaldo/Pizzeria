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
        $__internal_fe17cc2cb468c30832044b45056aaaabcddc0aa661e1446270737957a201ff60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe17cc2cb468c30832044b45056aaaabcddc0aa661e1446270737957a201ff60->enter($__internal_fe17cc2cb468c30832044b45056aaaabcddc0aa661e1446270737957a201ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:edit.html.twig"));

        $__internal_9a48c4f1991423eb56b401ef669c2295696974b27a77ba724f8ff71fb1329750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a48c4f1991423eb56b401ef669c2295696974b27a77ba724f8ff71fb1329750->enter($__internal_9a48c4f1991423eb56b401ef669c2295696974b27a77ba724f8ff71fb1329750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe17cc2cb468c30832044b45056aaaabcddc0aa661e1446270737957a201ff60->leave($__internal_fe17cc2cb468c30832044b45056aaaabcddc0aa661e1446270737957a201ff60_prof);

        
        $__internal_9a48c4f1991423eb56b401ef669c2295696974b27a77ba724f8ff71fb1329750->leave($__internal_9a48c4f1991423eb56b401ef669c2295696974b27a77ba724f8ff71fb1329750_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd2c087f03146d1099c2bdc4b7cfb0e926cdd994dab7ca8936153b93611bb025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2c087f03146d1099c2bdc4b7cfb0e926cdd994dab7ca8936153b93611bb025->enter($__internal_cd2c087f03146d1099c2bdc4b7cfb0e926cdd994dab7ca8936153b93611bb025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f68c3b1440ccb00fb6898df680c76cba504bb8494330610465665a8403de20da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68c3b1440ccb00fb6898df680c76cba504bb8494330610465665a8403de20da->enter($__internal_f68c3b1440ccb00fb6898df680c76cba504bb8494330610465665a8403de20da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f68c3b1440ccb00fb6898df680c76cba504bb8494330610465665a8403de20da->leave($__internal_f68c3b1440ccb00fb6898df680c76cba504bb8494330610465665a8403de20da_prof);

        
        $__internal_cd2c087f03146d1099c2bdc4b7cfb0e926cdd994dab7ca8936153b93611bb025->leave($__internal_cd2c087f03146d1099c2bdc4b7cfb0e926cdd994dab7ca8936153b93611bb025_prof);

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
