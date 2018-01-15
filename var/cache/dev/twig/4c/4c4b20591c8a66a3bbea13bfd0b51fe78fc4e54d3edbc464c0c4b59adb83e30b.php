<?php

/* :cliente:edit.html.twig */
class __TwigTemplate_2fa30acac48cdbbcb08c52ee3230bcb78377aa07644548fe4751484e3a502a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:edit.html.twig", 1);
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
        $__internal_d7f3b9682e54ff2e1bd02d5c005a27a7122f037298aec67ece9bdaf7fcda39e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f3b9682e54ff2e1bd02d5c005a27a7122f037298aec67ece9bdaf7fcda39e4->enter($__internal_d7f3b9682e54ff2e1bd02d5c005a27a7122f037298aec67ece9bdaf7fcda39e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $__internal_36fab1f9d915fbc4ca3d9c44ef9f7ffed3b570a8348a4ec0c06445c52aecf750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fab1f9d915fbc4ca3d9c44ef9f7ffed3b570a8348a4ec0c06445c52aecf750->enter($__internal_36fab1f9d915fbc4ca3d9c44ef9f7ffed3b570a8348a4ec0c06445c52aecf750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7f3b9682e54ff2e1bd02d5c005a27a7122f037298aec67ece9bdaf7fcda39e4->leave($__internal_d7f3b9682e54ff2e1bd02d5c005a27a7122f037298aec67ece9bdaf7fcda39e4_prof);

        
        $__internal_36fab1f9d915fbc4ca3d9c44ef9f7ffed3b570a8348a4ec0c06445c52aecf750->leave($__internal_36fab1f9d915fbc4ca3d9c44ef9f7ffed3b570a8348a4ec0c06445c52aecf750_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b5800281cbe256bacf14db1015b699cd3014bbdaa796ec4d5859c289b25f652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5800281cbe256bacf14db1015b699cd3014bbdaa796ec4d5859c289b25f652->enter($__internal_8b5800281cbe256bacf14db1015b699cd3014bbdaa796ec4d5859c289b25f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4262b0561c65aaa15bbf356c63dcc091c3e3973f9fdb808ad568d9b35636bfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4262b0561c65aaa15bbf356c63dcc091c3e3973f9fdb808ad568d9b35636bfd9->enter($__internal_4262b0561c65aaa15bbf356c63dcc091c3e3973f9fdb808ad568d9b35636bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_index");
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
        
        $__internal_4262b0561c65aaa15bbf356c63dcc091c3e3973f9fdb808ad568d9b35636bfd9->leave($__internal_4262b0561c65aaa15bbf356c63dcc091c3e3973f9fdb808ad568d9b35636bfd9_prof);

        
        $__internal_8b5800281cbe256bacf14db1015b699cd3014bbdaa796ec4d5859c289b25f652->leave($__internal_8b5800281cbe256bacf14db1015b699cd3014bbdaa796ec4d5859c289b25f652_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:edit.html.twig";
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
    <h1>Cliente edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cliente_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":cliente:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/cliente/edit.html.twig");
    }
}
