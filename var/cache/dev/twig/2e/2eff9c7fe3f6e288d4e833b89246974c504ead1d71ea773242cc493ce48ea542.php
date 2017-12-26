<?php

/* :pizzapedido:edit.html.twig */
class __TwigTemplate_7d7b26603307066423b0f622229c8111841ec51b5c812db8e47c427fcb080f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:edit.html.twig", 1);
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
        $__internal_a2762e5833f17224e207c608615349b7be017e5ed6ba2eb24fc8972bc17ffb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2762e5833f17224e207c608615349b7be017e5ed6ba2eb24fc8972bc17ffb3e->enter($__internal_a2762e5833f17224e207c608615349b7be017e5ed6ba2eb24fc8972bc17ffb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:edit.html.twig"));

        $__internal_59dc8943a258ee9a6d3ed8d7ecaf4d687f873437adbc5bac5396a92cd9b70c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dc8943a258ee9a6d3ed8d7ecaf4d687f873437adbc5bac5396a92cd9b70c9f->enter($__internal_59dc8943a258ee9a6d3ed8d7ecaf4d687f873437adbc5bac5396a92cd9b70c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2762e5833f17224e207c608615349b7be017e5ed6ba2eb24fc8972bc17ffb3e->leave($__internal_a2762e5833f17224e207c608615349b7be017e5ed6ba2eb24fc8972bc17ffb3e_prof);

        
        $__internal_59dc8943a258ee9a6d3ed8d7ecaf4d687f873437adbc5bac5396a92cd9b70c9f->leave($__internal_59dc8943a258ee9a6d3ed8d7ecaf4d687f873437adbc5bac5396a92cd9b70c9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d321c8d156e4ab8c6695f01fd9a46740a6312169afa7f077a4b1de7500c8c5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d321c8d156e4ab8c6695f01fd9a46740a6312169afa7f077a4b1de7500c8c5e3->enter($__internal_d321c8d156e4ab8c6695f01fd9a46740a6312169afa7f077a4b1de7500c8c5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebd42ddcaf099e5e456d2692c4dc3fb6d6e7ab9b936a121e8d669eb48f4a2e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd42ddcaf099e5e456d2692c4dc3fb6d6e7ab9b936a121e8d669eb48f4a2e4b->enter($__internal_ebd42ddcaf099e5e456d2692c4dc3fb6d6e7ab9b936a121e8d669eb48f4a2e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedido edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_index");
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
        
        $__internal_ebd42ddcaf099e5e456d2692c4dc3fb6d6e7ab9b936a121e8d669eb48f4a2e4b->leave($__internal_ebd42ddcaf099e5e456d2692c4dc3fb6d6e7ab9b936a121e8d669eb48f4a2e4b_prof);

        
        $__internal_d321c8d156e4ab8c6695f01fd9a46740a6312169afa7f077a4b1de7500c8c5e3->leave($__internal_d321c8d156e4ab8c6695f01fd9a46740a6312169afa7f077a4b1de7500c8c5e3_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:edit.html.twig";
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
    <h1>Pizzapedido edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/edit.html.twig");
    }
}
