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
        $__internal_97107ee185595438b838b7f9c0083682a82d4b666d5b81a6926a36de10d48642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97107ee185595438b838b7f9c0083682a82d4b666d5b81a6926a36de10d48642->enter($__internal_97107ee185595438b838b7f9c0083682a82d4b666d5b81a6926a36de10d48642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_59e9a23c5b803f4594b59b900e99f34134e135e2b0b2430ba0ea9145dddcafc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e9a23c5b803f4594b59b900e99f34134e135e2b0b2430ba0ea9145dddcafc6->enter($__internal_59e9a23c5b803f4594b59b900e99f34134e135e2b0b2430ba0ea9145dddcafc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97107ee185595438b838b7f9c0083682a82d4b666d5b81a6926a36de10d48642->leave($__internal_97107ee185595438b838b7f9c0083682a82d4b666d5b81a6926a36de10d48642_prof);

        
        $__internal_59e9a23c5b803f4594b59b900e99f34134e135e2b0b2430ba0ea9145dddcafc6->leave($__internal_59e9a23c5b803f4594b59b900e99f34134e135e2b0b2430ba0ea9145dddcafc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de1ce7ce336f146ba7db85878bf507cbcc95834c30f022b2a19d6ca6f8904407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1ce7ce336f146ba7db85878bf507cbcc95834c30f022b2a19d6ca6f8904407->enter($__internal_de1ce7ce336f146ba7db85878bf507cbcc95834c30f022b2a19d6ca6f8904407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f99e3d3b7b1d07fcfc98714bcff3a0c5a53283c498da80e92838d3de328017b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99e3d3b7b1d07fcfc98714bcff3a0c5a53283c498da80e92838d3de328017b8->enter($__internal_f99e3d3b7b1d07fcfc98714bcff3a0c5a53283c498da80e92838d3de328017b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f99e3d3b7b1d07fcfc98714bcff3a0c5a53283c498da80e92838d3de328017b8->leave($__internal_f99e3d3b7b1d07fcfc98714bcff3a0c5a53283c498da80e92838d3de328017b8_prof);

        
        $__internal_de1ce7ce336f146ba7db85878bf507cbcc95834c30f022b2a19d6ca6f8904407->leave($__internal_de1ce7ce336f146ba7db85878bf507cbcc95834c30f022b2a19d6ca6f8904407_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4303adb81383f7cb9adfde6553cd98e0a38efd91b91109958be961bd5ee3e7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4303adb81383f7cb9adfde6553cd98e0a38efd91b91109958be961bd5ee3e7f4->enter($__internal_4303adb81383f7cb9adfde6553cd98e0a38efd91b91109958be961bd5ee3e7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49445baa931984ab5caa3ed43a9ce6eabef5712742c4cd1a65a41c761e288391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49445baa931984ab5caa3ed43a9ce6eabef5712742c4cd1a65a41c761e288391->enter($__internal_49445baa931984ab5caa3ed43a9ce6eabef5712742c4cd1a65a41c761e288391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49445baa931984ab5caa3ed43a9ce6eabef5712742c4cd1a65a41c761e288391->leave($__internal_49445baa931984ab5caa3ed43a9ce6eabef5712742c4cd1a65a41c761e288391_prof);

        
        $__internal_4303adb81383f7cb9adfde6553cd98e0a38efd91b91109958be961bd5ee3e7f4->leave($__internal_4303adb81383f7cb9adfde6553cd98e0a38efd91b91109958be961bd5ee3e7f4_prof);

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
