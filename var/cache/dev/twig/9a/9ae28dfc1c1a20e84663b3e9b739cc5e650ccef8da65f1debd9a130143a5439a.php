<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_6dce1c0ab64067e75d64e3f301c13b4f69a5e38a87f31748dcbefbcd1a620350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0389896ae295e5ab572bebd18f885796bf9e1e51ad7e9a4252d0a59fef8da46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0389896ae295e5ab572bebd18f885796bf9e1e51ad7e9a4252d0a59fef8da46d->enter($__internal_0389896ae295e5ab572bebd18f885796bf9e1e51ad7e9a4252d0a59fef8da46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_c3ed1ba7266bac7aa6ae473fee9430e6ed768436aca46899e3a1d21512cc33f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ed1ba7266bac7aa6ae473fee9430e6ed768436aca46899e3a1d21512cc33f9->enter($__internal_c3ed1ba7266bac7aa6ae473fee9430e6ed768436aca46899e3a1d21512cc33f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0389896ae295e5ab572bebd18f885796bf9e1e51ad7e9a4252d0a59fef8da46d->leave($__internal_0389896ae295e5ab572bebd18f885796bf9e1e51ad7e9a4252d0a59fef8da46d_prof);

        
        $__internal_c3ed1ba7266bac7aa6ae473fee9430e6ed768436aca46899e3a1d21512cc33f9->leave($__internal_c3ed1ba7266bac7aa6ae473fee9430e6ed768436aca46899e3a1d21512cc33f9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cad56c9f061193628b3363e41d9e56f5abe9fe2e0f1c17279bbf44aa80f1623a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad56c9f061193628b3363e41d9e56f5abe9fe2e0f1c17279bbf44aa80f1623a->enter($__internal_cad56c9f061193628b3363e41d9e56f5abe9fe2e0f1c17279bbf44aa80f1623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a55a7c299d942bb7d5310722069e31f29419b3326f285c9c32b1c4a37dcffd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55a7c299d942bb7d5310722069e31f29419b3326f285c9c32b1c4a37dcffd4a->enter($__internal_a55a7c299d942bb7d5310722069e31f29419b3326f285c9c32b1c4a37dcffd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a55a7c299d942bb7d5310722069e31f29419b3326f285c9c32b1c4a37dcffd4a->leave($__internal_a55a7c299d942bb7d5310722069e31f29419b3326f285c9c32b1c4a37dcffd4a_prof);

        
        $__internal_cad56c9f061193628b3363e41d9e56f5abe9fe2e0f1c17279bbf44aa80f1623a->leave($__internal_cad56c9f061193628b3363e41d9e56f5abe9fe2e0f1c17279bbf44aa80f1623a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
