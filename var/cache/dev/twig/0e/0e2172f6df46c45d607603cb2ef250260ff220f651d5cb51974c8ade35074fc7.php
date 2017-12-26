<?php

/* :estadopedido:new.html.twig */
class __TwigTemplate_7946e15e4f72f85d1d746088db0c7e93df9ef3451e0d44d9ed9ba549bdae8625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estadopedido:new.html.twig", 1);
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
        $__internal_cbad834eacb4b84a065bdfc80da025a54b44eea9f34136f02375215acce77b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbad834eacb4b84a065bdfc80da025a54b44eea9f34136f02375215acce77b1b->enter($__internal_cbad834eacb4b84a065bdfc80da025a54b44eea9f34136f02375215acce77b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:new.html.twig"));

        $__internal_fab73bf4e68462032b2c7ae3081cba79b78804470234294b8e521f8327a80aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab73bf4e68462032b2c7ae3081cba79b78804470234294b8e521f8327a80aa0->enter($__internal_fab73bf4e68462032b2c7ae3081cba79b78804470234294b8e521f8327a80aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbad834eacb4b84a065bdfc80da025a54b44eea9f34136f02375215acce77b1b->leave($__internal_cbad834eacb4b84a065bdfc80da025a54b44eea9f34136f02375215acce77b1b_prof);

        
        $__internal_fab73bf4e68462032b2c7ae3081cba79b78804470234294b8e521f8327a80aa0->leave($__internal_fab73bf4e68462032b2c7ae3081cba79b78804470234294b8e521f8327a80aa0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6443ec1abcbad1d5e3e61de2e5cebf83edf2c4733568c1a139d8602ff8504815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6443ec1abcbad1d5e3e61de2e5cebf83edf2c4733568c1a139d8602ff8504815->enter($__internal_6443ec1abcbad1d5e3e61de2e5cebf83edf2c4733568c1a139d8602ff8504815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4aa11a6de7606883b2fbf9330f98be773975ba3e0b7eeb053c478d97f814c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4aa11a6de7606883b2fbf9330f98be773975ba3e0b7eeb053c478d97f814c2d->enter($__internal_f4aa11a6de7606883b2fbf9330f98be773975ba3e0b7eeb053c478d97f814c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadopedido creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("estadopedido_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f4aa11a6de7606883b2fbf9330f98be773975ba3e0b7eeb053c478d97f814c2d->leave($__internal_f4aa11a6de7606883b2fbf9330f98be773975ba3e0b7eeb053c478d97f814c2d_prof);

        
        $__internal_6443ec1abcbad1d5e3e61de2e5cebf83edf2c4733568c1a139d8602ff8504815->leave($__internal_6443ec1abcbad1d5e3e61de2e5cebf83edf2c4733568c1a139d8602ff8504815_prof);

    }

    public function getTemplateName()
    {
        return ":estadopedido:new.html.twig";
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
    <h1>Estadopedido creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('estadopedido_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":estadopedido:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/estadopedido/new.html.twig");
    }
}
