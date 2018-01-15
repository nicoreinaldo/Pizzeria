<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_24e62c8957e70264d426d0f32dc603c35fe0902952cc42297c66d914d978faba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e62c8957e70264d426d0f32dc603c35fe0902952cc42297c66d914d978faba->enter($__internal_24e62c8957e70264d426d0f32dc603c35fe0902952cc42297c66d914d978faba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5ac376702005d0395dea009c784be446ddf785effd4c4107b9dd94a2d95a2e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac376702005d0395dea009c784be446ddf785effd4c4107b9dd94a2d95a2e54->enter($__internal_5ac376702005d0395dea009c784be446ddf785effd4c4107b9dd94a2d95a2e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e62c8957e70264d426d0f32dc603c35fe0902952cc42297c66d914d978faba->leave($__internal_24e62c8957e70264d426d0f32dc603c35fe0902952cc42297c66d914d978faba_prof);

        
        $__internal_5ac376702005d0395dea009c784be446ddf785effd4c4107b9dd94a2d95a2e54->leave($__internal_5ac376702005d0395dea009c784be446ddf785effd4c4107b9dd94a2d95a2e54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07b0874b95d79ae45f467663b9ca5f7e66a228618d91f30302ab99f464f2165a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b0874b95d79ae45f467663b9ca5f7e66a228618d91f30302ab99f464f2165a->enter($__internal_07b0874b95d79ae45f467663b9ca5f7e66a228618d91f30302ab99f464f2165a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e105f1a3696ccb7f2e36d8c307657b5bf73a9fc30738278b68579cd7912dfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e105f1a3696ccb7f2e36d8c307657b5bf73a9fc30738278b68579cd7912dfcc->enter($__internal_3e105f1a3696ccb7f2e36d8c307657b5bf73a9fc30738278b68579cd7912dfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3e105f1a3696ccb7f2e36d8c307657b5bf73a9fc30738278b68579cd7912dfcc->leave($__internal_3e105f1a3696ccb7f2e36d8c307657b5bf73a9fc30738278b68579cd7912dfcc_prof);

        
        $__internal_07b0874b95d79ae45f467663b9ca5f7e66a228618d91f30302ab99f464f2165a->leave($__internal_07b0874b95d79ae45f467663b9ca5f7e66a228618d91f30302ab99f464f2165a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_416a1de50329533cff1f9bba266c9b2382669b909994689cacd6ad5404f4b6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416a1de50329533cff1f9bba266c9b2382669b909994689cacd6ad5404f4b6df->enter($__internal_416a1de50329533cff1f9bba266c9b2382669b909994689cacd6ad5404f4b6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c79373d7b93d7315588ad6e7f1bf24024bd248678159693e1c64a93c40c64b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c79373d7b93d7315588ad6e7f1bf24024bd248678159693e1c64a93c40c64b4->enter($__internal_8c79373d7b93d7315588ad6e7f1bf24024bd248678159693e1c64a93c40c64b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c79373d7b93d7315588ad6e7f1bf24024bd248678159693e1c64a93c40c64b4->leave($__internal_8c79373d7b93d7315588ad6e7f1bf24024bd248678159693e1c64a93c40c64b4_prof);

        
        $__internal_416a1de50329533cff1f9bba266c9b2382669b909994689cacd6ad5404f4b6df->leave($__internal_416a1de50329533cff1f9bba266c9b2382669b909994689cacd6ad5404f4b6df_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_010cd29eca4657417a8bda66b761233b0630b12e71257a8370eb4fb25c8f98a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010cd29eca4657417a8bda66b761233b0630b12e71257a8370eb4fb25c8f98a3->enter($__internal_010cd29eca4657417a8bda66b761233b0630b12e71257a8370eb4fb25c8f98a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_870917cda155de5f5cd881c7fecd9e14d4f1c023b8045e6343f44780bb83cac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870917cda155de5f5cd881c7fecd9e14d4f1c023b8045e6343f44780bb83cac6->enter($__internal_870917cda155de5f5cd881c7fecd9e14d4f1c023b8045e6343f44780bb83cac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_870917cda155de5f5cd881c7fecd9e14d4f1c023b8045e6343f44780bb83cac6->leave($__internal_870917cda155de5f5cd881c7fecd9e14d4f1c023b8045e6343f44780bb83cac6_prof);

        
        $__internal_010cd29eca4657417a8bda66b761233b0630b12e71257a8370eb4fb25c8f98a3->leave($__internal_010cd29eca4657417a8bda66b761233b0630b12e71257a8370eb4fb25c8f98a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
