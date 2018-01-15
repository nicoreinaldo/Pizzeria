<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_da440a8ff2e4ae82fff485d47a1f0b509ae8d730fb5001d47109fc287f0f7ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da440a8ff2e4ae82fff485d47a1f0b509ae8d730fb5001d47109fc287f0f7ff1->enter($__internal_da440a8ff2e4ae82fff485d47a1f0b509ae8d730fb5001d47109fc287f0f7ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1b38f639551b205391736c13fc302b2bd16923585b346e652361cc750f9d201e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b38f639551b205391736c13fc302b2bd16923585b346e652361cc750f9d201e->enter($__internal_1b38f639551b205391736c13fc302b2bd16923585b346e652361cc750f9d201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da440a8ff2e4ae82fff485d47a1f0b509ae8d730fb5001d47109fc287f0f7ff1->leave($__internal_da440a8ff2e4ae82fff485d47a1f0b509ae8d730fb5001d47109fc287f0f7ff1_prof);

        
        $__internal_1b38f639551b205391736c13fc302b2bd16923585b346e652361cc750f9d201e->leave($__internal_1b38f639551b205391736c13fc302b2bd16923585b346e652361cc750f9d201e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7160d2358715f282e70abc777a98e2c8dd33b541c043667abac62dbb97a88cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7160d2358715f282e70abc777a98e2c8dd33b541c043667abac62dbb97a88cb7->enter($__internal_7160d2358715f282e70abc777a98e2c8dd33b541c043667abac62dbb97a88cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30a32a73586ebdecbecdfee2d84af027e71917d16688ea5768059ae0d6034fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a32a73586ebdecbecdfee2d84af027e71917d16688ea5768059ae0d6034fc2->enter($__internal_30a32a73586ebdecbecdfee2d84af027e71917d16688ea5768059ae0d6034fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_30a32a73586ebdecbecdfee2d84af027e71917d16688ea5768059ae0d6034fc2->leave($__internal_30a32a73586ebdecbecdfee2d84af027e71917d16688ea5768059ae0d6034fc2_prof);

        
        $__internal_7160d2358715f282e70abc777a98e2c8dd33b541c043667abac62dbb97a88cb7->leave($__internal_7160d2358715f282e70abc777a98e2c8dd33b541c043667abac62dbb97a88cb7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc9b17192e1a1e8e202e3c32a2746c78442a3f141f99c5b0199d0b0347136942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9b17192e1a1e8e202e3c32a2746c78442a3f141f99c5b0199d0b0347136942->enter($__internal_fc9b17192e1a1e8e202e3c32a2746c78442a3f141f99c5b0199d0b0347136942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b15832c13eb5518292b0690cfc44571e784b5d539e89435b8334c48d9f7d4e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15832c13eb5518292b0690cfc44571e784b5d539e89435b8334c48d9f7d4e2f->enter($__internal_b15832c13eb5518292b0690cfc44571e784b5d539e89435b8334c48d9f7d4e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b15832c13eb5518292b0690cfc44571e784b5d539e89435b8334c48d9f7d4e2f->leave($__internal_b15832c13eb5518292b0690cfc44571e784b5d539e89435b8334c48d9f7d4e2f_prof);

        
        $__internal_fc9b17192e1a1e8e202e3c32a2746c78442a3f141f99c5b0199d0b0347136942->leave($__internal_fc9b17192e1a1e8e202e3c32a2746c78442a3f141f99c5b0199d0b0347136942_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e68d3c69a49145b0d16e993767ad7b47ea0110f3250237e51d1accaf03188abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68d3c69a49145b0d16e993767ad7b47ea0110f3250237e51d1accaf03188abd->enter($__internal_e68d3c69a49145b0d16e993767ad7b47ea0110f3250237e51d1accaf03188abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0ac259d50f550d9ba18c8f898e73ff8f341dd838991ae2355d169c624b5df64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ac259d50f550d9ba18c8f898e73ff8f341dd838991ae2355d169c624b5df64->enter($__internal_c0ac259d50f550d9ba18c8f898e73ff8f341dd838991ae2355d169c624b5df64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c0ac259d50f550d9ba18c8f898e73ff8f341dd838991ae2355d169c624b5df64->leave($__internal_c0ac259d50f550d9ba18c8f898e73ff8f341dd838991ae2355d169c624b5df64_prof);

        
        $__internal_e68d3c69a49145b0d16e993767ad7b47ea0110f3250237e51d1accaf03188abd->leave($__internal_e68d3c69a49145b0d16e993767ad7b47ea0110f3250237e51d1accaf03188abd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/manuel/symfony/Pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
