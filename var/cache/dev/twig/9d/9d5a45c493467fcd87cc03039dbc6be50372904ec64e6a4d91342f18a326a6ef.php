<?php

/* :pedido:new.html.twig */
class __TwigTemplate_0aec2f129a95d196052d3070b8f9d017d40097fdbdaa6b9297bcb30c019487b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:new.html.twig", 1);
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
        $__internal_bddb5f7cd1572e244c308cf1a27487f0dd3398b5780e897d93470dea3b1dbec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddb5f7cd1572e244c308cf1a27487f0dd3398b5780e897d93470dea3b1dbec3->enter($__internal_bddb5f7cd1572e244c308cf1a27487f0dd3398b5780e897d93470dea3b1dbec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $__internal_3f5e10f773112187cd6079cc68295ded013af436065512be5ff872759b4882ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5e10f773112187cd6079cc68295ded013af436065512be5ff872759b4882ab->enter($__internal_3f5e10f773112187cd6079cc68295ded013af436065512be5ff872759b4882ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bddb5f7cd1572e244c308cf1a27487f0dd3398b5780e897d93470dea3b1dbec3->leave($__internal_bddb5f7cd1572e244c308cf1a27487f0dd3398b5780e897d93470dea3b1dbec3_prof);

        
        $__internal_3f5e10f773112187cd6079cc68295ded013af436065512be5ff872759b4882ab->leave($__internal_3f5e10f773112187cd6079cc68295ded013af436065512be5ff872759b4882ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8d0d1822e0602d8e0bc949debb3c7602b0300a35764654ee10311cba9c4e311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d0d1822e0602d8e0bc949debb3c7602b0300a35764654ee10311cba9c4e311->enter($__internal_d8d0d1822e0602d8e0bc949debb3c7602b0300a35764654ee10311cba9c4e311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07e317211c6810655432f0332bc79e914ef2496e23cc7292d5331df94b8ed24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e317211c6810655432f0332bc79e914ef2496e23cc7292d5331df94b8ed24c->enter($__internal_07e317211c6810655432f0332bc79e914ef2496e23cc7292d5331df94b8ed24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pedido creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_07e317211c6810655432f0332bc79e914ef2496e23cc7292d5331df94b8ed24c->leave($__internal_07e317211c6810655432f0332bc79e914ef2496e23cc7292d5331df94b8ed24c_prof);

        
        $__internal_d8d0d1822e0602d8e0bc949debb3c7602b0300a35764654ee10311cba9c4e311->leave($__internal_d8d0d1822e0602d8e0bc949debb3c7602b0300a35764654ee10311cba9c4e311_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:new.html.twig";
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
    <h1>Pedido creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pedido_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":pedido:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pedido/new.html.twig");
    }
}
