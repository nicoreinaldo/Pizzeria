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
        $__internal_80a15d4a587874b2e2e4eb2b323f90d6d4e027a04bb058fda060ed647979fffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a15d4a587874b2e2e4eb2b323f90d6d4e027a04bb058fda060ed647979fffa->enter($__internal_80a15d4a587874b2e2e4eb2b323f90d6d4e027a04bb058fda060ed647979fffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $__internal_6159f41f52fab10d5469d8135164b1da3a4163661bbc0dd73da334d10e164bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6159f41f52fab10d5469d8135164b1da3a4163661bbc0dd73da334d10e164bfb->enter($__internal_6159f41f52fab10d5469d8135164b1da3a4163661bbc0dd73da334d10e164bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a15d4a587874b2e2e4eb2b323f90d6d4e027a04bb058fda060ed647979fffa->leave($__internal_80a15d4a587874b2e2e4eb2b323f90d6d4e027a04bb058fda060ed647979fffa_prof);

        
        $__internal_6159f41f52fab10d5469d8135164b1da3a4163661bbc0dd73da334d10e164bfb->leave($__internal_6159f41f52fab10d5469d8135164b1da3a4163661bbc0dd73da334d10e164bfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b1437092151b6adb72ecb803d23b473d631ec1965d1ee1f38860d5a6852f953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1437092151b6adb72ecb803d23b473d631ec1965d1ee1f38860d5a6852f953->enter($__internal_4b1437092151b6adb72ecb803d23b473d631ec1965d1ee1f38860d5a6852f953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8f5a8143c80b34516c885886a2b10ad72d7f6283f766e17cbd70998958e084f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f5a8143c80b34516c885886a2b10ad72d7f6283f766e17cbd70998958e084f->enter($__internal_f8f5a8143c80b34516c885886a2b10ad72d7f6283f766e17cbd70998958e084f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8f5a8143c80b34516c885886a2b10ad72d7f6283f766e17cbd70998958e084f->leave($__internal_f8f5a8143c80b34516c885886a2b10ad72d7f6283f766e17cbd70998958e084f_prof);

        
        $__internal_4b1437092151b6adb72ecb803d23b473d631ec1965d1ee1f38860d5a6852f953->leave($__internal_4b1437092151b6adb72ecb803d23b473d631ec1965d1ee1f38860d5a6852f953_prof);

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
