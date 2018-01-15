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
        $__internal_ba03e08cd231ee7000b21e7abec4741dacd5052bfe65ac24755bbe8f0f4d76a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba03e08cd231ee7000b21e7abec4741dacd5052bfe65ac24755bbe8f0f4d76a8->enter($__internal_ba03e08cd231ee7000b21e7abec4741dacd5052bfe65ac24755bbe8f0f4d76a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ac82774bd673593c1d30e9dff24e52c0cc70ef684815344604b3bf58272a50b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac82774bd673593c1d30e9dff24e52c0cc70ef684815344604b3bf58272a50b9->enter($__internal_ac82774bd673593c1d30e9dff24e52c0cc70ef684815344604b3bf58272a50b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba03e08cd231ee7000b21e7abec4741dacd5052bfe65ac24755bbe8f0f4d76a8->leave($__internal_ba03e08cd231ee7000b21e7abec4741dacd5052bfe65ac24755bbe8f0f4d76a8_prof);

        
        $__internal_ac82774bd673593c1d30e9dff24e52c0cc70ef684815344604b3bf58272a50b9->leave($__internal_ac82774bd673593c1d30e9dff24e52c0cc70ef684815344604b3bf58272a50b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0262501f216b37fd72b207d29e4db627374f51e019e00eed0fd09e385b5e291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0262501f216b37fd72b207d29e4db627374f51e019e00eed0fd09e385b5e291->enter($__internal_a0262501f216b37fd72b207d29e4db627374f51e019e00eed0fd09e385b5e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edb1025a9c78a684af1ca2c33814935c8070e8ba2e494498a293d113c1ee5a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb1025a9c78a684af1ca2c33814935c8070e8ba2e494498a293d113c1ee5a98->enter($__internal_edb1025a9c78a684af1ca2c33814935c8070e8ba2e494498a293d113c1ee5a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_edb1025a9c78a684af1ca2c33814935c8070e8ba2e494498a293d113c1ee5a98->leave($__internal_edb1025a9c78a684af1ca2c33814935c8070e8ba2e494498a293d113c1ee5a98_prof);

        
        $__internal_a0262501f216b37fd72b207d29e4db627374f51e019e00eed0fd09e385b5e291->leave($__internal_a0262501f216b37fd72b207d29e4db627374f51e019e00eed0fd09e385b5e291_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f69013010b322334de87b2e7d28b0c74e27687196bf6d4881ca1629114d88a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f69013010b322334de87b2e7d28b0c74e27687196bf6d4881ca1629114d88a2->enter($__internal_8f69013010b322334de87b2e7d28b0c74e27687196bf6d4881ca1629114d88a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66276354a0eade6f73f0e1a76e1898b2e4f4e73cdcf7cbd032ff4e073253d69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66276354a0eade6f73f0e1a76e1898b2e4f4e73cdcf7cbd032ff4e073253d69f->enter($__internal_66276354a0eade6f73f0e1a76e1898b2e4f4e73cdcf7cbd032ff4e073253d69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66276354a0eade6f73f0e1a76e1898b2e4f4e73cdcf7cbd032ff4e073253d69f->leave($__internal_66276354a0eade6f73f0e1a76e1898b2e4f4e73cdcf7cbd032ff4e073253d69f_prof);

        
        $__internal_8f69013010b322334de87b2e7d28b0c74e27687196bf6d4881ca1629114d88a2->leave($__internal_8f69013010b322334de87b2e7d28b0c74e27687196bf6d4881ca1629114d88a2_prof);

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
