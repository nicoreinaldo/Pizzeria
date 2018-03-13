<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14d3d8ba891d22e8095fdf5e384162de2c41e69ac79c94734c896b2ad67e0f47 extends Twig_Template
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
        $__internal_5c6a0c81c698d263a4f9ee38cae593b8c028e0fe48dd481a04f2aee92f780606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6a0c81c698d263a4f9ee38cae593b8c028e0fe48dd481a04f2aee92f780606->enter($__internal_5c6a0c81c698d263a4f9ee38cae593b8c028e0fe48dd481a04f2aee92f780606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_18643d8d900fcf665e4de15d302076fd29a79b8339f957753ba310a4848c6067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18643d8d900fcf665e4de15d302076fd29a79b8339f957753ba310a4848c6067->enter($__internal_18643d8d900fcf665e4de15d302076fd29a79b8339f957753ba310a4848c6067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6a0c81c698d263a4f9ee38cae593b8c028e0fe48dd481a04f2aee92f780606->leave($__internal_5c6a0c81c698d263a4f9ee38cae593b8c028e0fe48dd481a04f2aee92f780606_prof);

        
        $__internal_18643d8d900fcf665e4de15d302076fd29a79b8339f957753ba310a4848c6067->leave($__internal_18643d8d900fcf665e4de15d302076fd29a79b8339f957753ba310a4848c6067_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_615a23175af53d282caf459ce68ff718e986b129784c72c0558d1ab920cf4371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615a23175af53d282caf459ce68ff718e986b129784c72c0558d1ab920cf4371->enter($__internal_615a23175af53d282caf459ce68ff718e986b129784c72c0558d1ab920cf4371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86305ca3791496d97192c32e678a53d66f5a064f3f893ea2dc5c129e38de12f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86305ca3791496d97192c32e678a53d66f5a064f3f893ea2dc5c129e38de12f4->enter($__internal_86305ca3791496d97192c32e678a53d66f5a064f3f893ea2dc5c129e38de12f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_86305ca3791496d97192c32e678a53d66f5a064f3f893ea2dc5c129e38de12f4->leave($__internal_86305ca3791496d97192c32e678a53d66f5a064f3f893ea2dc5c129e38de12f4_prof);

        
        $__internal_615a23175af53d282caf459ce68ff718e986b129784c72c0558d1ab920cf4371->leave($__internal_615a23175af53d282caf459ce68ff718e986b129784c72c0558d1ab920cf4371_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_18db172772f0b11ba592d3d7016d47268364721802af74f09903bdbf2ca196d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18db172772f0b11ba592d3d7016d47268364721802af74f09903bdbf2ca196d7->enter($__internal_18db172772f0b11ba592d3d7016d47268364721802af74f09903bdbf2ca196d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c785df3ae5eaee273de37bc524a900f3ee87ae0a858697a24e24b28dd7f8db27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c785df3ae5eaee273de37bc524a900f3ee87ae0a858697a24e24b28dd7f8db27->enter($__internal_c785df3ae5eaee273de37bc524a900f3ee87ae0a858697a24e24b28dd7f8db27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c785df3ae5eaee273de37bc524a900f3ee87ae0a858697a24e24b28dd7f8db27->leave($__internal_c785df3ae5eaee273de37bc524a900f3ee87ae0a858697a24e24b28dd7f8db27_prof);

        
        $__internal_18db172772f0b11ba592d3d7016d47268364721802af74f09903bdbf2ca196d7->leave($__internal_18db172772f0b11ba592d3d7016d47268364721802af74f09903bdbf2ca196d7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f34940b56d4a3eb4dd706ebf98ffc3aec1d4fc914eaea7b213af62ac532783da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34940b56d4a3eb4dd706ebf98ffc3aec1d4fc914eaea7b213af62ac532783da->enter($__internal_f34940b56d4a3eb4dd706ebf98ffc3aec1d4fc914eaea7b213af62ac532783da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d7cf0e694b252514ce697fe880fad8914a4f0af17cd43a5f748c7c9b5b63d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7cf0e694b252514ce697fe880fad8914a4f0af17cd43a5f748c7c9b5b63d38->enter($__internal_1d7cf0e694b252514ce697fe880fad8914a4f0af17cd43a5f748c7c9b5b63d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1d7cf0e694b252514ce697fe880fad8914a4f0af17cd43a5f748c7c9b5b63d38->leave($__internal_1d7cf0e694b252514ce697fe880fad8914a4f0af17cd43a5f748c7c9b5b63d38_prof);

        
        $__internal_f34940b56d4a3eb4dd706ebf98ffc3aec1d4fc914eaea7b213af62ac532783da->leave($__internal_f34940b56d4a3eb4dd706ebf98ffc3aec1d4fc914eaea7b213af62ac532783da_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/nico/pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
