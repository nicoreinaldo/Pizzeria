<?php

/* pizza/new.html.twig */
class __TwigTemplate_be3408cd043613c100e59ca942e72d31cbb39b9b935e402e7e5dc3e1c6cca834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pizza/new.html.twig", 1);
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
        $__internal_e8176689a0cb10820405e1e7a632f75f40ad19bc2523fcb9e8508813fba65be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8176689a0cb10820405e1e7a632f75f40ad19bc2523fcb9e8508813fba65be0->enter($__internal_e8176689a0cb10820405e1e7a632f75f40ad19bc2523fcb9e8508813fba65be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/new.html.twig"));

        $__internal_bd65faca7903103f6717292f5f6d993f9249d68730426b8ece3fcce1e71280a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd65faca7903103f6717292f5f6d993f9249d68730426b8ece3fcce1e71280a8->enter($__internal_bd65faca7903103f6717292f5f6d993f9249d68730426b8ece3fcce1e71280a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pizza/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8176689a0cb10820405e1e7a632f75f40ad19bc2523fcb9e8508813fba65be0->leave($__internal_e8176689a0cb10820405e1e7a632f75f40ad19bc2523fcb9e8508813fba65be0_prof);

        
        $__internal_bd65faca7903103f6717292f5f6d993f9249d68730426b8ece3fcce1e71280a8->leave($__internal_bd65faca7903103f6717292f5f6d993f9249d68730426b8ece3fcce1e71280a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f8809b05a5c977be06d4eda28e37ddceda740d9b66de4122aa3956f7bce5e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8809b05a5c977be06d4eda28e37ddceda740d9b66de4122aa3956f7bce5e3d->enter($__internal_1f8809b05a5c977be06d4eda28e37ddceda740d9b66de4122aa3956f7bce5e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2473e41c60ed61257376fc4e74ed1a32f31841e36446bcab40969b0f52bd7a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2473e41c60ed61257376fc4e74ed1a32f31841e36446bcab40969b0f52bd7a05->enter($__internal_2473e41c60ed61257376fc4e74ed1a32f31841e36446bcab40969b0f52bd7a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2473e41c60ed61257376fc4e74ed1a32f31841e36446bcab40969b0f52bd7a05->leave($__internal_2473e41c60ed61257376fc4e74ed1a32f31841e36446bcab40969b0f52bd7a05_prof);

        
        $__internal_1f8809b05a5c977be06d4eda28e37ddceda740d9b66de4122aa3956f7bce5e3d->leave($__internal_1f8809b05a5c977be06d4eda28e37ddceda740d9b66de4122aa3956f7bce5e3d_prof);

    }

    public function getTemplateName()
    {
        return "pizza/new.html.twig";
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
", "pizza/new.html.twig", "/home/nico/pizzeria/app/Resources/views/pizza/new.html.twig");
    }
}
