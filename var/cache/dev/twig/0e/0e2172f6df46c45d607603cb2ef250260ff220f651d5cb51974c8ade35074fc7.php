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
        $__internal_06a6d764eba045f9827e510a8cdcfa4a066386b0904bd9ea394606e4e7144f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a6d764eba045f9827e510a8cdcfa4a066386b0904bd9ea394606e4e7144f7a->enter($__internal_06a6d764eba045f9827e510a8cdcfa4a066386b0904bd9ea394606e4e7144f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:new.html.twig"));

        $__internal_5e6af349276c4811e631cfc8460eab4c9853d7092276442ca21009c7122b409c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6af349276c4811e631cfc8460eab4c9853d7092276442ca21009c7122b409c->enter($__internal_5e6af349276c4811e631cfc8460eab4c9853d7092276442ca21009c7122b409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadopedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06a6d764eba045f9827e510a8cdcfa4a066386b0904bd9ea394606e4e7144f7a->leave($__internal_06a6d764eba045f9827e510a8cdcfa4a066386b0904bd9ea394606e4e7144f7a_prof);

        
        $__internal_5e6af349276c4811e631cfc8460eab4c9853d7092276442ca21009c7122b409c->leave($__internal_5e6af349276c4811e631cfc8460eab4c9853d7092276442ca21009c7122b409c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd0d1b1aa1a30a5dd7980555da8421ec583cc8a75056c011c3a70b791c319e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0d1b1aa1a30a5dd7980555da8421ec583cc8a75056c011c3a70b791c319e5d->enter($__internal_fd0d1b1aa1a30a5dd7980555da8421ec583cc8a75056c011c3a70b791c319e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bb996ea8b614b7ce6292b3ea8bd51ba3a865ffa2f97f5f03fca147758004127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb996ea8b614b7ce6292b3ea8bd51ba3a865ffa2f97f5f03fca147758004127->enter($__internal_5bb996ea8b614b7ce6292b3ea8bd51ba3a865ffa2f97f5f03fca147758004127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5bb996ea8b614b7ce6292b3ea8bd51ba3a865ffa2f97f5f03fca147758004127->leave($__internal_5bb996ea8b614b7ce6292b3ea8bd51ba3a865ffa2f97f5f03fca147758004127_prof);

        
        $__internal_fd0d1b1aa1a30a5dd7980555da8421ec583cc8a75056c011c3a70b791c319e5d->leave($__internal_fd0d1b1aa1a30a5dd7980555da8421ec583cc8a75056c011c3a70b791c319e5d_prof);

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
