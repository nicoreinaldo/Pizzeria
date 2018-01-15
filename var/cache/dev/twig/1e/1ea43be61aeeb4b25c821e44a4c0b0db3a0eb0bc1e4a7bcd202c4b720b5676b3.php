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
        $__internal_03fd49c0999d4358b421e4848a7deac9aef1e32d1544e25608f8bc7b24277d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fd49c0999d4358b421e4848a7deac9aef1e32d1544e25608f8bc7b24277d1d->enter($__internal_03fd49c0999d4358b421e4848a7deac9aef1e32d1544e25608f8bc7b24277d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:new.html.twig"));

        $__internal_7c61c55d667866aa9e544da4d43675595d9d808597e1621cbb1e3b8a71500a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c61c55d667866aa9e544da4d43675595d9d808597e1621cbb1e3b8a71500a32->enter($__internal_7c61c55d667866aa9e544da4d43675595d9d808597e1621cbb1e3b8a71500a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizza:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fd49c0999d4358b421e4848a7deac9aef1e32d1544e25608f8bc7b24277d1d->leave($__internal_03fd49c0999d4358b421e4848a7deac9aef1e32d1544e25608f8bc7b24277d1d_prof);

        
        $__internal_7c61c55d667866aa9e544da4d43675595d9d808597e1621cbb1e3b8a71500a32->leave($__internal_7c61c55d667866aa9e544da4d43675595d9d808597e1621cbb1e3b8a71500a32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59cd9f014f91b58d74731ff977ab8bf702e9aa4e533ad8b81c6f3e0f9e7c0a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59cd9f014f91b58d74731ff977ab8bf702e9aa4e533ad8b81c6f3e0f9e7c0a3f->enter($__internal_59cd9f014f91b58d74731ff977ab8bf702e9aa4e533ad8b81c6f3e0f9e7c0a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb91075252469de78b2c4354f316164a48b4cd6d075e7c22f278f9d8f716f28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb91075252469de78b2c4354f316164a48b4cd6d075e7c22f278f9d8f716f28d->enter($__internal_eb91075252469de78b2c4354f316164a48b4cd6d075e7c22f278f9d8f716f28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb91075252469de78b2c4354f316164a48b4cd6d075e7c22f278f9d8f716f28d->leave($__internal_eb91075252469de78b2c4354f316164a48b4cd6d075e7c22f278f9d8f716f28d_prof);

        
        $__internal_59cd9f014f91b58d74731ff977ab8bf702e9aa4e533ad8b81c6f3e0f9e7c0a3f->leave($__internal_59cd9f014f91b58d74731ff977ab8bf702e9aa4e533ad8b81c6f3e0f9e7c0a3f_prof);

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
