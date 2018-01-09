<?php

/* :estadopedido:edit.html.twig */
class __TwigTemplate_149fad0bd3e5dd5efc8130a3c0ffcf5e783580e38a0346094643f6b4b5cbb5e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estadopedido:edit.html.twig", 1);
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
        $__internal_9edc3d726a29c67702b6e8a9e89b653bc721eacc7cf65f89c8889172427428d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edc3d726a29c67702b6e8a9e89b653bc721eacc7cf65f89c8889172427428d5->enter($__internal_9edc3d726a29c67702b6e8a9e89b653bc721eacc7cf65f89c8889172427428d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:edit.html.twig"));

        $__internal_1b0ec3ac630416d637731361588297af3e378e4484b4146b662ed8c4b6c2d05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0ec3ac630416d637731361588297af3e378e4484b4146b662ed8c4b6c2d05a->enter($__internal_1b0ec3ac630416d637731361588297af3e378e4484b4146b662ed8c4b6c2d05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9edc3d726a29c67702b6e8a9e89b653bc721eacc7cf65f89c8889172427428d5->leave($__internal_9edc3d726a29c67702b6e8a9e89b653bc721eacc7cf65f89c8889172427428d5_prof);

        
        $__internal_1b0ec3ac630416d637731361588297af3e378e4484b4146b662ed8c4b6c2d05a->leave($__internal_1b0ec3ac630416d637731361588297af3e378e4484b4146b662ed8c4b6c2d05a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319831ea5c4456ecfd6a1f6e0f8c78ce5941b9610b7b7a60631645b7ef25fd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319831ea5c4456ecfd6a1f6e0f8c78ce5941b9610b7b7a60631645b7ef25fd6e->enter($__internal_319831ea5c4456ecfd6a1f6e0f8c78ce5941b9610b7b7a60631645b7ef25fd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e6c2a75b384c955153e8725102cdd878903b126532713fb718bcabf88901171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6c2a75b384c955153e8725102cdd878903b126532713fb718bcabf88901171->enter($__internal_7e6c2a75b384c955153e8725102cdd878903b126532713fb718bcabf88901171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadopedido edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7e6c2a75b384c955153e8725102cdd878903b126532713fb718bcabf88901171->leave($__internal_7e6c2a75b384c955153e8725102cdd878903b126532713fb718bcabf88901171_prof);

        
        $__internal_319831ea5c4456ecfd6a1f6e0f8c78ce5941b9610b7b7a60631645b7ef25fd6e->leave($__internal_319831ea5c4456ecfd6a1f6e0f8c78ce5941b9610b7b7a60631645b7ef25fd6e_prof);

    }

    public function getTemplateName()
    {
        return ":estadopedido:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Estadopedido edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('estadopedido_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":estadopedido:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/estadopedido/edit.html.twig");
    }
}
