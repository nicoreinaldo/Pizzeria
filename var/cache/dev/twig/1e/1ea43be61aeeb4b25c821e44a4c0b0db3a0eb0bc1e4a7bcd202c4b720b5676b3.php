<?php

/* :pizza:new.html.twig */
class __TwigTemplate_be3408cd043613c100e59ca942e72d31cbb39b9b935e402e7e5dc3e1c6cca834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizza:new.html.twig", 1);
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
        $__internal_c913e582dab10760459fdc8b8db7d951ec59e74078efa76f6201c53a83babc97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c913e582dab10760459fdc8b8db7d951ec59e74078efa76f6201c53a83babc97->enter($__internal_c913e582dab10760459fdc8b8db7d951ec59e74078efa76f6201c53a83babc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:new.html.twig"));

        $__internal_4fb956667d4a5bcac8052e6ffa7b04be609ae85e52692c339f170db015b065bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb956667d4a5bcac8052e6ffa7b04be609ae85e52692c339f170db015b065bb->enter($__internal_4fb956667d4a5bcac8052e6ffa7b04be609ae85e52692c339f170db015b065bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c913e582dab10760459fdc8b8db7d951ec59e74078efa76f6201c53a83babc97->leave($__internal_c913e582dab10760459fdc8b8db7d951ec59e74078efa76f6201c53a83babc97_prof);

        
        $__internal_4fb956667d4a5bcac8052e6ffa7b04be609ae85e52692c339f170db015b065bb->leave($__internal_4fb956667d4a5bcac8052e6ffa7b04be609ae85e52692c339f170db015b065bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43549eed3f7855a5fec64e2100795c08b9d8390c8884404e26dc7902fdfa91ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43549eed3f7855a5fec64e2100795c08b9d8390c8884404e26dc7902fdfa91ee->enter($__internal_43549eed3f7855a5fec64e2100795c08b9d8390c8884404e26dc7902fdfa91ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_488cfeed0ef08c8a2ddd09890a68d5514ead9f7c2244ab523dcd13d509b8ddbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488cfeed0ef08c8a2ddd09890a68d5514ead9f7c2244ab523dcd13d509b8ddbf->enter($__internal_488cfeed0ef08c8a2ddd09890a68d5514ead9f7c2244ab523dcd13d509b8ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>Agregar Nueva variedad de Pizza</h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Crear\" />
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Volver a la Carta</a>
        </li>
    </ul>
";
        
        $__internal_488cfeed0ef08c8a2ddd09890a68d5514ead9f7c2244ab523dcd13d509b8ddbf->leave($__internal_488cfeed0ef08c8a2ddd09890a68d5514ead9f7c2244ab523dcd13d509b8ddbf_prof);

        
        $__internal_43549eed3f7855a5fec64e2100795c08b9d8390c8884404e26dc7902fdfa91ee->leave($__internal_43549eed3f7855a5fec64e2100795c08b9d8390c8884404e26dc7902fdfa91ee_prof);

    }

    public function getTemplateName()
    {
        return ":pizza:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  68 => 15,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <section class=\"content-header\">
        <h1>Agregar Nueva variedad de Pizza</h1>
    </section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-1\">
            {{ form_start(form) }}
                {{ form_widget(form) }}
            <br>
                <input class=\"btn btn-warning\" type=\"submit\" value=\"Crear\" />
            {{ form_end(form) }}
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"{{ path('pizza_index') }}\">Volver a la Carta</a>
        </li>
    </ul>
{% endblock %}
", ":pizza:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizza/new.html.twig");
    }
}
