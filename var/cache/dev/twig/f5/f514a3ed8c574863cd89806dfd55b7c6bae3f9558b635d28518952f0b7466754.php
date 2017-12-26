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
        $__internal_a7d4f9eeb9e1891fb2dd50d9cfa4d4350e8d5b6cc3ba1d74189010fb920e3173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d4f9eeb9e1891fb2dd50d9cfa4d4350e8d5b6cc3ba1d74189010fb920e3173->enter($__internal_a7d4f9eeb9e1891fb2dd50d9cfa4d4350e8d5b6cc3ba1d74189010fb920e3173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:edit.html.twig"));

        $__internal_22b6f9cc57c059b53b814f2ffa0de8b7f92919256f1561674ab41605bda8f1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b6f9cc57c059b53b814f2ffa0de8b7f92919256f1561674ab41605bda8f1d6->enter($__internal_22b6f9cc57c059b53b814f2ffa0de8b7f92919256f1561674ab41605bda8f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7d4f9eeb9e1891fb2dd50d9cfa4d4350e8d5b6cc3ba1d74189010fb920e3173->leave($__internal_a7d4f9eeb9e1891fb2dd50d9cfa4d4350e8d5b6cc3ba1d74189010fb920e3173_prof);

        
        $__internal_22b6f9cc57c059b53b814f2ffa0de8b7f92919256f1561674ab41605bda8f1d6->leave($__internal_22b6f9cc57c059b53b814f2ffa0de8b7f92919256f1561674ab41605bda8f1d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_134702a52d652a4b981129cfb17a793a1a5a3d535f6e19120ce0c267a38092cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134702a52d652a4b981129cfb17a793a1a5a3d535f6e19120ce0c267a38092cf->enter($__internal_134702a52d652a4b981129cfb17a793a1a5a3d535f6e19120ce0c267a38092cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04ce616ea07966ee59978836b7d4b8d9f2f3e3480b7066d59ccb77c42dc2bd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ce616ea07966ee59978836b7d4b8d9f2f3e3480b7066d59ccb77c42dc2bd81->enter($__internal_04ce616ea07966ee59978836b7d4b8d9f2f3e3480b7066d59ccb77c42dc2bd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04ce616ea07966ee59978836b7d4b8d9f2f3e3480b7066d59ccb77c42dc2bd81->leave($__internal_04ce616ea07966ee59978836b7d4b8d9f2f3e3480b7066d59ccb77c42dc2bd81_prof);

        
        $__internal_134702a52d652a4b981129cfb17a793a1a5a3d535f6e19120ce0c267a38092cf->leave($__internal_134702a52d652a4b981129cfb17a793a1a5a3d535f6e19120ce0c267a38092cf_prof);

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
