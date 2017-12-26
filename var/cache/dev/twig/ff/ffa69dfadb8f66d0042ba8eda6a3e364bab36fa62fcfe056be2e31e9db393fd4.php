<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9586c5b41febdf69cd92abc2540bcf376113f2beacff16022822930825abf76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9586c5b41febdf69cd92abc2540bcf376113f2beacff16022822930825abf76->enter($__internal_d9586c5b41febdf69cd92abc2540bcf376113f2beacff16022822930825abf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_a213f8fae12c55159bcd2e985eda4d8cc40cf46c0781b7011350eae32418ed8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a213f8fae12c55159bcd2e985eda4d8cc40cf46c0781b7011350eae32418ed8c->enter($__internal_a213f8fae12c55159bcd2e985eda4d8cc40cf46c0781b7011350eae32418ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d9586c5b41febdf69cd92abc2540bcf376113f2beacff16022822930825abf76->leave($__internal_d9586c5b41febdf69cd92abc2540bcf376113f2beacff16022822930825abf76_prof);

        
        $__internal_a213f8fae12c55159bcd2e985eda4d8cc40cf46c0781b7011350eae32418ed8c->leave($__internal_a213f8fae12c55159bcd2e985eda4d8cc40cf46c0781b7011350eae32418ed8c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10ea8ef0819904a749c580d5ff847ce47b79c234f87dfeaaaf662c606b3f143d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ea8ef0819904a749c580d5ff847ce47b79c234f87dfeaaaf662c606b3f143d->enter($__internal_10ea8ef0819904a749c580d5ff847ce47b79c234f87dfeaaaf662c606b3f143d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ccc231bac6c2fb65828b52cdcb4815ddb3cbb6c5494dbb09259e723cc6e2d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccc231bac6c2fb65828b52cdcb4815ddb3cbb6c5494dbb09259e723cc6e2d98->enter($__internal_6ccc231bac6c2fb65828b52cdcb4815ddb3cbb6c5494dbb09259e723cc6e2d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6ccc231bac6c2fb65828b52cdcb4815ddb3cbb6c5494dbb09259e723cc6e2d98->leave($__internal_6ccc231bac6c2fb65828b52cdcb4815ddb3cbb6c5494dbb09259e723cc6e2d98_prof);

        
        $__internal_10ea8ef0819904a749c580d5ff847ce47b79c234f87dfeaaaf662c606b3f143d->leave($__internal_10ea8ef0819904a749c580d5ff847ce47b79c234f87dfeaaaf662c606b3f143d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_27b7211b0b3311cadfbddb8b3f3bff0f735c779342d9bca6a383a8b6d7a5f7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b7211b0b3311cadfbddb8b3f3bff0f735c779342d9bca6a383a8b6d7a5f7a1->enter($__internal_27b7211b0b3311cadfbddb8b3f3bff0f735c779342d9bca6a383a8b6d7a5f7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_febcdd8c286bc3eda3cc775c52a0c7e002d938c51b05166fb4c626e4f6cfec9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febcdd8c286bc3eda3cc775c52a0c7e002d938c51b05166fb4c626e4f6cfec9c->enter($__internal_febcdd8c286bc3eda3cc775c52a0c7e002d938c51b05166fb4c626e4f6cfec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_febcdd8c286bc3eda3cc775c52a0c7e002d938c51b05166fb4c626e4f6cfec9c->leave($__internal_febcdd8c286bc3eda3cc775c52a0c7e002d938c51b05166fb4c626e4f6cfec9c_prof);

        
        $__internal_27b7211b0b3311cadfbddb8b3f3bff0f735c779342d9bca6a383a8b6d7a5f7a1->leave($__internal_27b7211b0b3311cadfbddb8b3f3bff0f735c779342d9bca6a383a8b6d7a5f7a1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c09196aa95af6210385cbd41fe9f235a6ddc7f7f2629b5724eb5d8738e67da8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09196aa95af6210385cbd41fe9f235a6ddc7f7f2629b5724eb5d8738e67da8b->enter($__internal_c09196aa95af6210385cbd41fe9f235a6ddc7f7f2629b5724eb5d8738e67da8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c996cf73840134797a5ed31ce3f57e99658340c2305a78b686020d565381e425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c996cf73840134797a5ed31ce3f57e99658340c2305a78b686020d565381e425->enter($__internal_c996cf73840134797a5ed31ce3f57e99658340c2305a78b686020d565381e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c996cf73840134797a5ed31ce3f57e99658340c2305a78b686020d565381e425->leave($__internal_c996cf73840134797a5ed31ce3f57e99658340c2305a78b686020d565381e425_prof);

        
        $__internal_c09196aa95af6210385cbd41fe9f235a6ddc7f7f2629b5724eb5d8738e67da8b->leave($__internal_c09196aa95af6210385cbd41fe9f235a6ddc7f7f2629b5724eb5d8738e67da8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
