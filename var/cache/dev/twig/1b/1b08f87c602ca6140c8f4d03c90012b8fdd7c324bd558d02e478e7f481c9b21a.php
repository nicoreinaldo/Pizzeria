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
        $__internal_013077250d215e3de8c0c99aa70715a6dffa99d557b145c0057c437a4dfceeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013077250d215e3de8c0c99aa70715a6dffa99d557b145c0057c437a4dfceeca->enter($__internal_013077250d215e3de8c0c99aa70715a6dffa99d557b145c0057c437a4dfceeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3856461d468927bfb1a6d4ecb336453aae0aec2912e3c35ce00d7a2bd9ee03bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3856461d468927bfb1a6d4ecb336453aae0aec2912e3c35ce00d7a2bd9ee03bc->enter($__internal_3856461d468927bfb1a6d4ecb336453aae0aec2912e3c35ce00d7a2bd9ee03bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_013077250d215e3de8c0c99aa70715a6dffa99d557b145c0057c437a4dfceeca->leave($__internal_013077250d215e3de8c0c99aa70715a6dffa99d557b145c0057c437a4dfceeca_prof);

        
        $__internal_3856461d468927bfb1a6d4ecb336453aae0aec2912e3c35ce00d7a2bd9ee03bc->leave($__internal_3856461d468927bfb1a6d4ecb336453aae0aec2912e3c35ce00d7a2bd9ee03bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8701aa609b8bbab1ac5dfe69bf6973794f3d396de8cacc4fe1f64cdcb2d595b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8701aa609b8bbab1ac5dfe69bf6973794f3d396de8cacc4fe1f64cdcb2d595b7->enter($__internal_8701aa609b8bbab1ac5dfe69bf6973794f3d396de8cacc4fe1f64cdcb2d595b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f34c6dd40425f4593f9c17e65306186db67c81782a165c22e1ff0e63765db57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f34c6dd40425f4593f9c17e65306186db67c81782a165c22e1ff0e63765db57->enter($__internal_4f34c6dd40425f4593f9c17e65306186db67c81782a165c22e1ff0e63765db57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4f34c6dd40425f4593f9c17e65306186db67c81782a165c22e1ff0e63765db57->leave($__internal_4f34c6dd40425f4593f9c17e65306186db67c81782a165c22e1ff0e63765db57_prof);

        
        $__internal_8701aa609b8bbab1ac5dfe69bf6973794f3d396de8cacc4fe1f64cdcb2d595b7->leave($__internal_8701aa609b8bbab1ac5dfe69bf6973794f3d396de8cacc4fe1f64cdcb2d595b7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d9bb4df20d8da5e4d1c3a4e7ed64336c71cc29ce7893f7414c2e6aab0e3269d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9bb4df20d8da5e4d1c3a4e7ed64336c71cc29ce7893f7414c2e6aab0e3269d->enter($__internal_5d9bb4df20d8da5e4d1c3a4e7ed64336c71cc29ce7893f7414c2e6aab0e3269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2f7ca4d3523e746cb00ea2b1264314f9e23c6dd63564ebb20c9d7739f1890db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f7ca4d3523e746cb00ea2b1264314f9e23c6dd63564ebb20c9d7739f1890db->enter($__internal_d2f7ca4d3523e746cb00ea2b1264314f9e23c6dd63564ebb20c9d7739f1890db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2f7ca4d3523e746cb00ea2b1264314f9e23c6dd63564ebb20c9d7739f1890db->leave($__internal_d2f7ca4d3523e746cb00ea2b1264314f9e23c6dd63564ebb20c9d7739f1890db_prof);

        
        $__internal_5d9bb4df20d8da5e4d1c3a4e7ed64336c71cc29ce7893f7414c2e6aab0e3269d->leave($__internal_5d9bb4df20d8da5e4d1c3a4e7ed64336c71cc29ce7893f7414c2e6aab0e3269d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e120296e28eba0e10891d33a4a99798b00b173e1cedac187392c3f188870bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e120296e28eba0e10891d33a4a99798b00b173e1cedac187392c3f188870bfa->enter($__internal_4e120296e28eba0e10891d33a4a99798b00b173e1cedac187392c3f188870bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ad1649d7825168cafd50d0f0155596c4535fc4b7983c6cc3612180d80f4c146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad1649d7825168cafd50d0f0155596c4535fc4b7983c6cc3612180d80f4c146->enter($__internal_1ad1649d7825168cafd50d0f0155596c4535fc4b7983c6cc3612180d80f4c146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1ad1649d7825168cafd50d0f0155596c4535fc4b7983c6cc3612180d80f4c146->leave($__internal_1ad1649d7825168cafd50d0f0155596c4535fc4b7983c6cc3612180d80f4c146_prof);

        
        $__internal_4e120296e28eba0e10891d33a4a99798b00b173e1cedac187392c3f188870bfa->leave($__internal_4e120296e28eba0e10891d33a4a99798b00b173e1cedac187392c3f188870bfa_prof);

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
