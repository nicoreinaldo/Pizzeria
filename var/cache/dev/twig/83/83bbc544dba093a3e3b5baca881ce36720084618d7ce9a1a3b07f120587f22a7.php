<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_365409018ab92ace7889f7fea05429b7a6fb5dfa71fa90abcca0f5b97c4c6c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed74e793684f76b8e9cc5f04ee4a2928dbe1be91745bf5636fb7fed5a7e8087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed74e793684f76b8e9cc5f04ee4a2928dbe1be91745bf5636fb7fed5a7e8087->enter($__internal_bed74e793684f76b8e9cc5f04ee4a2928dbe1be91745bf5636fb7fed5a7e8087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_1d4080d47f1892529d7a4e87a3dc90a6e6c71c3ab7049ffa96d7b3a15868b9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4080d47f1892529d7a4e87a3dc90a6e6c71c3ab7049ffa96d7b3a15868b9c4->enter($__internal_1d4080d47f1892529d7a4e87a3dc90a6e6c71c3ab7049ffa96d7b3a15868b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_bed74e793684f76b8e9cc5f04ee4a2928dbe1be91745bf5636fb7fed5a7e8087->leave($__internal_bed74e793684f76b8e9cc5f04ee4a2928dbe1be91745bf5636fb7fed5a7e8087_prof);

        
        $__internal_1d4080d47f1892529d7a4e87a3dc90a6e6c71c3ab7049ffa96d7b3a15868b9c4->leave($__internal_1d4080d47f1892529d7a4e87a3dc90a6e6c71c3ab7049ffa96d7b3a15868b9c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
