<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6fee036cb0d8c0f40c4092e13e471d3627b7439960e874cb4032f4d9918f6a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_048a5c4d4af7e1e5bdd13a1dbc68f32488eee816c54c8f968882fb28140cf829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048a5c4d4af7e1e5bdd13a1dbc68f32488eee816c54c8f968882fb28140cf829->enter($__internal_048a5c4d4af7e1e5bdd13a1dbc68f32488eee816c54c8f968882fb28140cf829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ef63cca3360912cc87dbb2505fee4f73e0e5780e11c44a8fa8fd47b3c575bb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef63cca3360912cc87dbb2505fee4f73e0e5780e11c44a8fa8fd47b3c575bb35->enter($__internal_ef63cca3360912cc87dbb2505fee4f73e0e5780e11c44a8fa8fd47b3c575bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_048a5c4d4af7e1e5bdd13a1dbc68f32488eee816c54c8f968882fb28140cf829->leave($__internal_048a5c4d4af7e1e5bdd13a1dbc68f32488eee816c54c8f968882fb28140cf829_prof);

        
        $__internal_ef63cca3360912cc87dbb2505fee4f73e0e5780e11c44a8fa8fd47b3c575bb35->leave($__internal_ef63cca3360912cc87dbb2505fee4f73e0e5780e11c44a8fa8fd47b3c575bb35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52c96704b0aeef870f20a46097bd48d7e56921bb2659d52ff11be45ccc0dc542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c96704b0aeef870f20a46097bd48d7e56921bb2659d52ff11be45ccc0dc542->enter($__internal_52c96704b0aeef870f20a46097bd48d7e56921bb2659d52ff11be45ccc0dc542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b82d6c8c2e21bcdc6a362e6f53fc223d4e36111d7ee4ac6331f989260cfb368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b82d6c8c2e21bcdc6a362e6f53fc223d4e36111d7ee4ac6331f989260cfb368->enter($__internal_2b82d6c8c2e21bcdc6a362e6f53fc223d4e36111d7ee4ac6331f989260cfb368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2b82d6c8c2e21bcdc6a362e6f53fc223d4e36111d7ee4ac6331f989260cfb368->leave($__internal_2b82d6c8c2e21bcdc6a362e6f53fc223d4e36111d7ee4ac6331f989260cfb368_prof);

        
        $__internal_52c96704b0aeef870f20a46097bd48d7e56921bb2659d52ff11be45ccc0dc542->leave($__internal_52c96704b0aeef870f20a46097bd48d7e56921bb2659d52ff11be45ccc0dc542_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/nico/pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
