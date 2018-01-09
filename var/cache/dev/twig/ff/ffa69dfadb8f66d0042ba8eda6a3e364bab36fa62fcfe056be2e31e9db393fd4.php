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
        $__internal_f02cb0ca69cb17c9a576ccad75ff5428f04fdf03ff455f8f121479f160b03041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02cb0ca69cb17c9a576ccad75ff5428f04fdf03ff455f8f121479f160b03041->enter($__internal_f02cb0ca69cb17c9a576ccad75ff5428f04fdf03ff455f8f121479f160b03041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_59e616a51cd284ef738ba17ac96915abdf5bf188a746a5dc771db299a9fe4e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e616a51cd284ef738ba17ac96915abdf5bf188a746a5dc771db299a9fe4e65->enter($__internal_59e616a51cd284ef738ba17ac96915abdf5bf188a746a5dc771db299a9fe4e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_f02cb0ca69cb17c9a576ccad75ff5428f04fdf03ff455f8f121479f160b03041->leave($__internal_f02cb0ca69cb17c9a576ccad75ff5428f04fdf03ff455f8f121479f160b03041_prof);

        
        $__internal_59e616a51cd284ef738ba17ac96915abdf5bf188a746a5dc771db299a9fe4e65->leave($__internal_59e616a51cd284ef738ba17ac96915abdf5bf188a746a5dc771db299a9fe4e65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23fd369058e6d715cd930e89936202b9d99214a3f2efda88b2f1a5d59b6d714f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fd369058e6d715cd930e89936202b9d99214a3f2efda88b2f1a5d59b6d714f->enter($__internal_23fd369058e6d715cd930e89936202b9d99214a3f2efda88b2f1a5d59b6d714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1cd356106cc7a7c547542542ffa73255197ccdbc1e9ee918bb1e3d70d23664f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cd356106cc7a7c547542542ffa73255197ccdbc1e9ee918bb1e3d70d23664f->enter($__internal_e1cd356106cc7a7c547542542ffa73255197ccdbc1e9ee918bb1e3d70d23664f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e1cd356106cc7a7c547542542ffa73255197ccdbc1e9ee918bb1e3d70d23664f->leave($__internal_e1cd356106cc7a7c547542542ffa73255197ccdbc1e9ee918bb1e3d70d23664f_prof);

        
        $__internal_23fd369058e6d715cd930e89936202b9d99214a3f2efda88b2f1a5d59b6d714f->leave($__internal_23fd369058e6d715cd930e89936202b9d99214a3f2efda88b2f1a5d59b6d714f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdd03d09d137c4c21da336adc551a1fa2ea701276d7e0a6e13c7002abdbfeef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd03d09d137c4c21da336adc551a1fa2ea701276d7e0a6e13c7002abdbfeef8->enter($__internal_bdd03d09d137c4c21da336adc551a1fa2ea701276d7e0a6e13c7002abdbfeef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c2e6e8a399e3989c56047305e27d679a641af38808cea77a975340f0deb2f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2e6e8a399e3989c56047305e27d679a641af38808cea77a975340f0deb2f39->enter($__internal_0c2e6e8a399e3989c56047305e27d679a641af38808cea77a975340f0deb2f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0c2e6e8a399e3989c56047305e27d679a641af38808cea77a975340f0deb2f39->leave($__internal_0c2e6e8a399e3989c56047305e27d679a641af38808cea77a975340f0deb2f39_prof);

        
        $__internal_bdd03d09d137c4c21da336adc551a1fa2ea701276d7e0a6e13c7002abdbfeef8->leave($__internal_bdd03d09d137c4c21da336adc551a1fa2ea701276d7e0a6e13c7002abdbfeef8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f780a1e685d67bac288f2752670525d0e25f3c9d8fade5f0284fd5f645aebbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f780a1e685d67bac288f2752670525d0e25f3c9d8fade5f0284fd5f645aebbd->enter($__internal_7f780a1e685d67bac288f2752670525d0e25f3c9d8fade5f0284fd5f645aebbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69fce6545c54d7f4ee1028e3fd04764bfb38ae56d0b66097363d76f0dcb2169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fce6545c54d7f4ee1028e3fd04764bfb38ae56d0b66097363d76f0dcb2169b->enter($__internal_69fce6545c54d7f4ee1028e3fd04764bfb38ae56d0b66097363d76f0dcb2169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69fce6545c54d7f4ee1028e3fd04764bfb38ae56d0b66097363d76f0dcb2169b->leave($__internal_69fce6545c54d7f4ee1028e3fd04764bfb38ae56d0b66097363d76f0dcb2169b_prof);

        
        $__internal_7f780a1e685d67bac288f2752670525d0e25f3c9d8fade5f0284fd5f645aebbd->leave($__internal_7f780a1e685d67bac288f2752670525d0e25f3c9d8fade5f0284fd5f645aebbd_prof);

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
