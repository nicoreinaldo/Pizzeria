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
        $__internal_b83f571945b3a303bbabb624faf037b29687ee2f04e3e376fa570fe6563c0d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83f571945b3a303bbabb624faf037b29687ee2f04e3e376fa570fe6563c0d02->enter($__internal_b83f571945b3a303bbabb624faf037b29687ee2f04e3e376fa570fe6563c0d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $__internal_5349b89e79916512011feff4339d1c01a256db7451cbc13e620589269d72fade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5349b89e79916512011feff4339d1c01a256db7451cbc13e620589269d72fade->enter($__internal_5349b89e79916512011feff4339d1c01a256db7451cbc13e620589269d72fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b83f571945b3a303bbabb624faf037b29687ee2f04e3e376fa570fe6563c0d02->leave($__internal_b83f571945b3a303bbabb624faf037b29687ee2f04e3e376fa570fe6563c0d02_prof);

        
        $__internal_5349b89e79916512011feff4339d1c01a256db7451cbc13e620589269d72fade->leave($__internal_5349b89e79916512011feff4339d1c01a256db7451cbc13e620589269d72fade_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_197b9ea86268773b7fb0f3c9e1ac25e6695956878be9795a37566a7218817879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197b9ea86268773b7fb0f3c9e1ac25e6695956878be9795a37566a7218817879->enter($__internal_197b9ea86268773b7fb0f3c9e1ac25e6695956878be9795a37566a7218817879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee75867fe4ff67e17516a41ed420a294ad03132a6ecf4a84f9516af311d3237a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee75867fe4ff67e17516a41ed420a294ad03132a6ecf4a84f9516af311d3237a->enter($__internal_ee75867fe4ff67e17516a41ed420a294ad03132a6ecf4a84f9516af311d3237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee75867fe4ff67e17516a41ed420a294ad03132a6ecf4a84f9516af311d3237a->leave($__internal_ee75867fe4ff67e17516a41ed420a294ad03132a6ecf4a84f9516af311d3237a_prof);

        
        $__internal_197b9ea86268773b7fb0f3c9e1ac25e6695956878be9795a37566a7218817879->leave($__internal_197b9ea86268773b7fb0f3c9e1ac25e6695956878be9795a37566a7218817879_prof);

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
