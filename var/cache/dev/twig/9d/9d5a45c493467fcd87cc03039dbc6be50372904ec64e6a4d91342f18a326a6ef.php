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
        $__internal_af5f39030523f63cb7f8c17bf7ad67881d0db3a13d8bb166eb2f7e5f700da499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5f39030523f63cb7f8c17bf7ad67881d0db3a13d8bb166eb2f7e5f700da499->enter($__internal_af5f39030523f63cb7f8c17bf7ad67881d0db3a13d8bb166eb2f7e5f700da499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $__internal_cd53e810ca27b4f3284b8a16d1b9094970b6248859a34fd42359a5dda5b64d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd53e810ca27b4f3284b8a16d1b9094970b6248859a34fd42359a5dda5b64d20->enter($__internal_cd53e810ca27b4f3284b8a16d1b9094970b6248859a34fd42359a5dda5b64d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5f39030523f63cb7f8c17bf7ad67881d0db3a13d8bb166eb2f7e5f700da499->leave($__internal_af5f39030523f63cb7f8c17bf7ad67881d0db3a13d8bb166eb2f7e5f700da499_prof);

        
        $__internal_cd53e810ca27b4f3284b8a16d1b9094970b6248859a34fd42359a5dda5b64d20->leave($__internal_cd53e810ca27b4f3284b8a16d1b9094970b6248859a34fd42359a5dda5b64d20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0395794e918bc28c6fde28fa4ae3d3664ea52059497dc2b1cfa5f68add18e3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0395794e918bc28c6fde28fa4ae3d3664ea52059497dc2b1cfa5f68add18e3c3->enter($__internal_0395794e918bc28c6fde28fa4ae3d3664ea52059497dc2b1cfa5f68add18e3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef6d5c1721ee908b4013304db1e5c58353385657949cce8fcad0006fb58972ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6d5c1721ee908b4013304db1e5c58353385657949cce8fcad0006fb58972ba->enter($__internal_ef6d5c1721ee908b4013304db1e5c58353385657949cce8fcad0006fb58972ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef6d5c1721ee908b4013304db1e5c58353385657949cce8fcad0006fb58972ba->leave($__internal_ef6d5c1721ee908b4013304db1e5c58353385657949cce8fcad0006fb58972ba_prof);

        
        $__internal_0395794e918bc28c6fde28fa4ae3d3664ea52059497dc2b1cfa5f68add18e3c3->leave($__internal_0395794e918bc28c6fde28fa4ae3d3664ea52059497dc2b1cfa5f68add18e3c3_prof);

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
