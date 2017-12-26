<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ed1ea50deb9bf49bff05b426ddb07b353b2544cfde4eefbf66bdcde8bf7a8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed1ea50deb9bf49bff05b426ddb07b353b2544cfde4eefbf66bdcde8bf7a8b0->enter($__internal_5ed1ea50deb9bf49bff05b426ddb07b353b2544cfde4eefbf66bdcde8bf7a8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2ff4a90814d950ee21eb1a3fd69e2146aa50ac07e71ffb236c2c40d40fd3f445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff4a90814d950ee21eb1a3fd69e2146aa50ac07e71ffb236c2c40d40fd3f445->enter($__internal_2ff4a90814d950ee21eb1a3fd69e2146aa50ac07e71ffb236c2c40d40fd3f445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed1ea50deb9bf49bff05b426ddb07b353b2544cfde4eefbf66bdcde8bf7a8b0->leave($__internal_5ed1ea50deb9bf49bff05b426ddb07b353b2544cfde4eefbf66bdcde8bf7a8b0_prof);

        
        $__internal_2ff4a90814d950ee21eb1a3fd69e2146aa50ac07e71ffb236c2c40d40fd3f445->leave($__internal_2ff4a90814d950ee21eb1a3fd69e2146aa50ac07e71ffb236c2c40d40fd3f445_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3248cf85cc4878b367b9b17843d702d46a8720c20c40c5bee6bb941ca6778f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3248cf85cc4878b367b9b17843d702d46a8720c20c40c5bee6bb941ca6778f63->enter($__internal_3248cf85cc4878b367b9b17843d702d46a8720c20c40c5bee6bb941ca6778f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51e5c0dab55a861a606d33017ceac87b0d87e49ed8e09f01947a99bba6fbcb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e5c0dab55a861a606d33017ceac87b0d87e49ed8e09f01947a99bba6fbcb8d->enter($__internal_51e5c0dab55a861a606d33017ceac87b0d87e49ed8e09f01947a99bba6fbcb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_51e5c0dab55a861a606d33017ceac87b0d87e49ed8e09f01947a99bba6fbcb8d->leave($__internal_51e5c0dab55a861a606d33017ceac87b0d87e49ed8e09f01947a99bba6fbcb8d_prof);

        
        $__internal_3248cf85cc4878b367b9b17843d702d46a8720c20c40c5bee6bb941ca6778f63->leave($__internal_3248cf85cc4878b367b9b17843d702d46a8720c20c40c5bee6bb941ca6778f63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56f1bb6913f0e4553d9c941ec91621ef184e115400b1310e83040db5e0983279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f1bb6913f0e4553d9c941ec91621ef184e115400b1310e83040db5e0983279->enter($__internal_56f1bb6913f0e4553d9c941ec91621ef184e115400b1310e83040db5e0983279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8900642ae5633d74ce0886017289159cca1913e43806a5cff3621e77d3c80a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8900642ae5633d74ce0886017289159cca1913e43806a5cff3621e77d3c80a7->enter($__internal_f8900642ae5633d74ce0886017289159cca1913e43806a5cff3621e77d3c80a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f8900642ae5633d74ce0886017289159cca1913e43806a5cff3621e77d3c80a7->leave($__internal_f8900642ae5633d74ce0886017289159cca1913e43806a5cff3621e77d3c80a7_prof);

        
        $__internal_56f1bb6913f0e4553d9c941ec91621ef184e115400b1310e83040db5e0983279->leave($__internal_56f1bb6913f0e4553d9c941ec91621ef184e115400b1310e83040db5e0983279_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
