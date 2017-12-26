<?php

/* :tamanopizza:new.html.twig */
class __TwigTemplate_4d9a7556a79f1597416ad94fc03f91aa8c1622bf2bd0c8bbda7d04897ae0473f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tamanopizza:new.html.twig", 1);
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
        $__internal_e63cc51fb928d26ea4fd7531e8f1db44f7d118d373034e62ef5d14ac8879ea78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63cc51fb928d26ea4fd7531e8f1db44f7d118d373034e62ef5d14ac8879ea78->enter($__internal_e63cc51fb928d26ea4fd7531e8f1db44f7d118d373034e62ef5d14ac8879ea78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:new.html.twig"));

        $__internal_5e7db03c16480b8e10cb2514b2f8417d21929c1ec90990523fd2f5e15b89edb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7db03c16480b8e10cb2514b2f8417d21929c1ec90990523fd2f5e15b89edb5->enter($__internal_5e7db03c16480b8e10cb2514b2f8417d21929c1ec90990523fd2f5e15b89edb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tamanopizza:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63cc51fb928d26ea4fd7531e8f1db44f7d118d373034e62ef5d14ac8879ea78->leave($__internal_e63cc51fb928d26ea4fd7531e8f1db44f7d118d373034e62ef5d14ac8879ea78_prof);

        
        $__internal_5e7db03c16480b8e10cb2514b2f8417d21929c1ec90990523fd2f5e15b89edb5->leave($__internal_5e7db03c16480b8e10cb2514b2f8417d21929c1ec90990523fd2f5e15b89edb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_050160ceb09ff01d69c9718280d9e391a2a227b7e01db2125df427bc54977089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050160ceb09ff01d69c9718280d9e391a2a227b7e01db2125df427bc54977089->enter($__internal_050160ceb09ff01d69c9718280d9e391a2a227b7e01db2125df427bc54977089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e86d38c24e47a2eedbb0db05f20b2a9f236dfba48ce4cdc95edffe82712fa1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86d38c24e47a2eedbb0db05f20b2a9f236dfba48ce4cdc95edffe82712fa1dd->enter($__internal_e86d38c24e47a2eedbb0db05f20b2a9f236dfba48ce4cdc95edffe82712fa1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tamanopizza creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tamanopizza_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e86d38c24e47a2eedbb0db05f20b2a9f236dfba48ce4cdc95edffe82712fa1dd->leave($__internal_e86d38c24e47a2eedbb0db05f20b2a9f236dfba48ce4cdc95edffe82712fa1dd_prof);

        
        $__internal_050160ceb09ff01d69c9718280d9e391a2a227b7e01db2125df427bc54977089->leave($__internal_050160ceb09ff01d69c9718280d9e391a2a227b7e01db2125df427bc54977089_prof);

    }

    public function getTemplateName()
    {
        return ":tamanopizza:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tamanopizza creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('tamanopizza_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":tamanopizza:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/tamanopizza/new.html.twig");
    }
}
