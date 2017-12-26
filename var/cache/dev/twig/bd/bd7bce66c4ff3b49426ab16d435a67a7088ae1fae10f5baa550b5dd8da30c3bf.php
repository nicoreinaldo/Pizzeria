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
        $__internal_19ca5d6f81f1ed3b718287383213fa3b030b5faad0486ea047eeb8968d4d2175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ca5d6f81f1ed3b718287383213fa3b030b5faad0486ea047eeb8968d4d2175->enter($__internal_19ca5d6f81f1ed3b718287383213fa3b030b5faad0486ea047eeb8968d4d2175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5cd88290b5955bd3ef94c331b8c4cc5e5531b40f37215ce2b93cc494efe13c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd88290b5955bd3ef94c331b8c4cc5e5531b40f37215ce2b93cc494efe13c7e->enter($__internal_5cd88290b5955bd3ef94c331b8c4cc5e5531b40f37215ce2b93cc494efe13c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ca5d6f81f1ed3b718287383213fa3b030b5faad0486ea047eeb8968d4d2175->leave($__internal_19ca5d6f81f1ed3b718287383213fa3b030b5faad0486ea047eeb8968d4d2175_prof);

        
        $__internal_5cd88290b5955bd3ef94c331b8c4cc5e5531b40f37215ce2b93cc494efe13c7e->leave($__internal_5cd88290b5955bd3ef94c331b8c4cc5e5531b40f37215ce2b93cc494efe13c7e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_438911f9849453b01b648331e9e968ea6c8fd420a5c919c1c768d009cef56f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438911f9849453b01b648331e9e968ea6c8fd420a5c919c1c768d009cef56f28->enter($__internal_438911f9849453b01b648331e9e968ea6c8fd420a5c919c1c768d009cef56f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_13be51c718403992c0086a9704048bd457255eb9387e315b77b9e4ba125ec546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13be51c718403992c0086a9704048bd457255eb9387e315b77b9e4ba125ec546->enter($__internal_13be51c718403992c0086a9704048bd457255eb9387e315b77b9e4ba125ec546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_13be51c718403992c0086a9704048bd457255eb9387e315b77b9e4ba125ec546->leave($__internal_13be51c718403992c0086a9704048bd457255eb9387e315b77b9e4ba125ec546_prof);

        
        $__internal_438911f9849453b01b648331e9e968ea6c8fd420a5c919c1c768d009cef56f28->leave($__internal_438911f9849453b01b648331e9e968ea6c8fd420a5c919c1c768d009cef56f28_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bbc02d7645c0cdb4381734ab5c84d5a938a6ad79f990c0046f2e4eb885f78d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc02d7645c0cdb4381734ab5c84d5a938a6ad79f990c0046f2e4eb885f78d48->enter($__internal_bbc02d7645c0cdb4381734ab5c84d5a938a6ad79f990c0046f2e4eb885f78d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd3bfe5f168d882ee51565b056f6a42771c15a35068b4f9cb402daddb91297cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3bfe5f168d882ee51565b056f6a42771c15a35068b4f9cb402daddb91297cb->enter($__internal_dd3bfe5f168d882ee51565b056f6a42771c15a35068b4f9cb402daddb91297cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dd3bfe5f168d882ee51565b056f6a42771c15a35068b4f9cb402daddb91297cb->leave($__internal_dd3bfe5f168d882ee51565b056f6a42771c15a35068b4f9cb402daddb91297cb_prof);

        
        $__internal_bbc02d7645c0cdb4381734ab5c84d5a938a6ad79f990c0046f2e4eb885f78d48->leave($__internal_bbc02d7645c0cdb4381734ab5c84d5a938a6ad79f990c0046f2e4eb885f78d48_prof);

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
