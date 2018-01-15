<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4017e0c453393c7c1639c4d028409ba99332d11fd0165a9aea13b1d1fb88a51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4017e0c453393c7c1639c4d028409ba99332d11fd0165a9aea13b1d1fb88a51a->enter($__internal_4017e0c453393c7c1639c4d028409ba99332d11fd0165a9aea13b1d1fb88a51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_faead5c9a68b8a1e2324ec2eefb66ed534a3a95456b6049d521b8d1d29e4d024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faead5c9a68b8a1e2324ec2eefb66ed534a3a95456b6049d521b8d1d29e4d024->enter($__internal_faead5c9a68b8a1e2324ec2eefb66ed534a3a95456b6049d521b8d1d29e4d024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4017e0c453393c7c1639c4d028409ba99332d11fd0165a9aea13b1d1fb88a51a->leave($__internal_4017e0c453393c7c1639c4d028409ba99332d11fd0165a9aea13b1d1fb88a51a_prof);

        
        $__internal_faead5c9a68b8a1e2324ec2eefb66ed534a3a95456b6049d521b8d1d29e4d024->leave($__internal_faead5c9a68b8a1e2324ec2eefb66ed534a3a95456b6049d521b8d1d29e4d024_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d26d78bc893e2fa2ed79f743358304cbcc4b14775cffbd89b6ac4dc4a830dd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26d78bc893e2fa2ed79f743358304cbcc4b14775cffbd89b6ac4dc4a830dd69->enter($__internal_d26d78bc893e2fa2ed79f743358304cbcc4b14775cffbd89b6ac4dc4a830dd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_adfb9d5e36b0e1ed9ccfe0d9e41a5f3039d9941da72156e94168fa931ca2f2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfb9d5e36b0e1ed9ccfe0d9e41a5f3039d9941da72156e94168fa931ca2f2fe->enter($__internal_adfb9d5e36b0e1ed9ccfe0d9e41a5f3039d9941da72156e94168fa931ca2f2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_adfb9d5e36b0e1ed9ccfe0d9e41a5f3039d9941da72156e94168fa931ca2f2fe->leave($__internal_adfb9d5e36b0e1ed9ccfe0d9e41a5f3039d9941da72156e94168fa931ca2f2fe_prof);

        
        $__internal_d26d78bc893e2fa2ed79f743358304cbcc4b14775cffbd89b6ac4dc4a830dd69->leave($__internal_d26d78bc893e2fa2ed79f743358304cbcc4b14775cffbd89b6ac4dc4a830dd69_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eccb18f50b8c83a9a587ea41ed59a5be2767c52c6a2c60ba3c355d0f4545f7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccb18f50b8c83a9a587ea41ed59a5be2767c52c6a2c60ba3c355d0f4545f7de->enter($__internal_eccb18f50b8c83a9a587ea41ed59a5be2767c52c6a2c60ba3c355d0f4545f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44b0c179b803dea95de8955a9501b03f0dab4493acc210ef43616b8631f5c29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b0c179b803dea95de8955a9501b03f0dab4493acc210ef43616b8631f5c29c->enter($__internal_44b0c179b803dea95de8955a9501b03f0dab4493acc210ef43616b8631f5c29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_44b0c179b803dea95de8955a9501b03f0dab4493acc210ef43616b8631f5c29c->leave($__internal_44b0c179b803dea95de8955a9501b03f0dab4493acc210ef43616b8631f5c29c_prof);

        
        $__internal_eccb18f50b8c83a9a587ea41ed59a5be2767c52c6a2c60ba3c355d0f4545f7de->leave($__internal_eccb18f50b8c83a9a587ea41ed59a5be2767c52c6a2c60ba3c355d0f4545f7de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
