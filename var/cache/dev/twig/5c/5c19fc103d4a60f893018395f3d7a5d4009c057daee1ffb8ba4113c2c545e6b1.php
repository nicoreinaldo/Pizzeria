<?php

/* :tamanopizza:edit.html.twig */
class __TwigTemplate_b674147e32692702736b7226aa15e7ec84751984d60c1d431ac5586c35c5477f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tamanopizza:edit.html.twig", 1);
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
        $__internal_104df75f0ed9e651c350828beda1b69d6b0b0f1332f6d1bda6ca2bad42287860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104df75f0ed9e651c350828beda1b69d6b0b0f1332f6d1bda6ca2bad42287860->enter($__internal_104df75f0ed9e651c350828beda1b69d6b0b0f1332f6d1bda6ca2bad42287860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:edit.html.twig"));

        $__internal_2fad6a352c8615e550b110b9ffada89d21a2dd0daf22a9f69636164a948429a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fad6a352c8615e550b110b9ffada89d21a2dd0daf22a9f69636164a948429a4->enter($__internal_2fad6a352c8615e550b110b9ffada89d21a2dd0daf22a9f69636164a948429a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_104df75f0ed9e651c350828beda1b69d6b0b0f1332f6d1bda6ca2bad42287860->leave($__internal_104df75f0ed9e651c350828beda1b69d6b0b0f1332f6d1bda6ca2bad42287860_prof);

        
        $__internal_2fad6a352c8615e550b110b9ffada89d21a2dd0daf22a9f69636164a948429a4->leave($__internal_2fad6a352c8615e550b110b9ffada89d21a2dd0daf22a9f69636164a948429a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08fdfc24849a2b787618594ab59a97627d7220d991e7314624bc90d9ae7b038c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fdfc24849a2b787618594ab59a97627d7220d991e7314624bc90d9ae7b038c->enter($__internal_08fdfc24849a2b787618594ab59a97627d7220d991e7314624bc90d9ae7b038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce48a60b111980b5070853c3875aa52e3f401d545f56efbae54af188547b728f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce48a60b111980b5070853c3875aa52e3f401d545f56efbae54af188547b728f->enter($__internal_ce48a60b111980b5070853c3875aa52e3f401d545f56efbae54af188547b728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tamanopizza edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_index");
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
        
        $__internal_ce48a60b111980b5070853c3875aa52e3f401d545f56efbae54af188547b728f->leave($__internal_ce48a60b111980b5070853c3875aa52e3f401d545f56efbae54af188547b728f_prof);

        
        $__internal_08fdfc24849a2b787618594ab59a97627d7220d991e7314624bc90d9ae7b038c->leave($__internal_08fdfc24849a2b787618594ab59a97627d7220d991e7314624bc90d9ae7b038c_prof);

    }

    public function getTemplateName()
    {
        return ":tamanopizza:edit.html.twig";
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
    <h1>Tamanopizza edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tamanopizza_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":tamanopizza:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/tamanopizza/edit.html.twig");
    }
}
