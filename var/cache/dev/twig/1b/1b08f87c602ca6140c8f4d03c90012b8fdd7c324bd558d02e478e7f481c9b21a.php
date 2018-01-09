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
        $__internal_2dae2409f0b65b4a986d8d396888351c2a426fb364e51b21d35f459c844f33c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dae2409f0b65b4a986d8d396888351c2a426fb364e51b21d35f459c844f33c7->enter($__internal_2dae2409f0b65b4a986d8d396888351c2a426fb364e51b21d35f459c844f33c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9594d3674a2bbc307c0e9eee9460fe68b73d567930bad5c392c4a067b079c90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9594d3674a2bbc307c0e9eee9460fe68b73d567930bad5c392c4a067b079c90a->enter($__internal_9594d3674a2bbc307c0e9eee9460fe68b73d567930bad5c392c4a067b079c90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dae2409f0b65b4a986d8d396888351c2a426fb364e51b21d35f459c844f33c7->leave($__internal_2dae2409f0b65b4a986d8d396888351c2a426fb364e51b21d35f459c844f33c7_prof);

        
        $__internal_9594d3674a2bbc307c0e9eee9460fe68b73d567930bad5c392c4a067b079c90a->leave($__internal_9594d3674a2bbc307c0e9eee9460fe68b73d567930bad5c392c4a067b079c90a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dc16614ac87b7a99861101730acfa35b60f2885b23c641d793f35f80db4b89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc16614ac87b7a99861101730acfa35b60f2885b23c641d793f35f80db4b89c->enter($__internal_1dc16614ac87b7a99861101730acfa35b60f2885b23c641d793f35f80db4b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9319ae1c313c61427847f7e5876741d823e4cea2887c8254529e75f1d55fb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9319ae1c313c61427847f7e5876741d823e4cea2887c8254529e75f1d55fb29->enter($__internal_d9319ae1c313c61427847f7e5876741d823e4cea2887c8254529e75f1d55fb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d9319ae1c313c61427847f7e5876741d823e4cea2887c8254529e75f1d55fb29->leave($__internal_d9319ae1c313c61427847f7e5876741d823e4cea2887c8254529e75f1d55fb29_prof);

        
        $__internal_1dc16614ac87b7a99861101730acfa35b60f2885b23c641d793f35f80db4b89c->leave($__internal_1dc16614ac87b7a99861101730acfa35b60f2885b23c641d793f35f80db4b89c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_01cdf8761362c4272d66a94c6157c12e831ff4b58d7b8f67d432393fc400a7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cdf8761362c4272d66a94c6157c12e831ff4b58d7b8f67d432393fc400a7f2->enter($__internal_01cdf8761362c4272d66a94c6157c12e831ff4b58d7b8f67d432393fc400a7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cfc7adfcc46a33a3382dbc828186714f9afda268e528d02639fc75d1853c653b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc7adfcc46a33a3382dbc828186714f9afda268e528d02639fc75d1853c653b->enter($__internal_cfc7adfcc46a33a3382dbc828186714f9afda268e528d02639fc75d1853c653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfc7adfcc46a33a3382dbc828186714f9afda268e528d02639fc75d1853c653b->leave($__internal_cfc7adfcc46a33a3382dbc828186714f9afda268e528d02639fc75d1853c653b_prof);

        
        $__internal_01cdf8761362c4272d66a94c6157c12e831ff4b58d7b8f67d432393fc400a7f2->leave($__internal_01cdf8761362c4272d66a94c6157c12e831ff4b58d7b8f67d432393fc400a7f2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c18028cf175c48853eddd627b8d9d22028ebadca4d3717626642e4c7341ae0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18028cf175c48853eddd627b8d9d22028ebadca4d3717626642e4c7341ae0f2->enter($__internal_c18028cf175c48853eddd627b8d9d22028ebadca4d3717626642e4c7341ae0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81b6abdeb84581d6480cab021618bcbe50f8ad5fccbbf2e55dc822de1bb24def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b6abdeb84581d6480cab021618bcbe50f8ad5fccbbf2e55dc822de1bb24def->enter($__internal_81b6abdeb84581d6480cab021618bcbe50f8ad5fccbbf2e55dc822de1bb24def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_81b6abdeb84581d6480cab021618bcbe50f8ad5fccbbf2e55dc822de1bb24def->leave($__internal_81b6abdeb84581d6480cab021618bcbe50f8ad5fccbbf2e55dc822de1bb24def_prof);

        
        $__internal_c18028cf175c48853eddd627b8d9d22028ebadca4d3717626642e4c7341ae0f2->leave($__internal_c18028cf175c48853eddd627b8d9d22028ebadca4d3717626642e4c7341ae0f2_prof);

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
