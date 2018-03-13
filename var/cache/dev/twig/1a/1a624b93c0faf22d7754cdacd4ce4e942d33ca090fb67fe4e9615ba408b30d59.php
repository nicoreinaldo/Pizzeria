<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7b6ea27a706f66da5d28251b52981f743c9c125fbbb648e38b994e383742fa9c extends Twig_Template
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
        $__internal_adfb4354a4281489a6c040d372055f59288f9f43ba29314cdb113aa0803946c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfb4354a4281489a6c040d372055f59288f9f43ba29314cdb113aa0803946c2->enter($__internal_adfb4354a4281489a6c040d372055f59288f9f43ba29314cdb113aa0803946c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6c7201c286587008d1caabd064b346428b78a0c1d14598547d7ba1fb0851c18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7201c286587008d1caabd064b346428b78a0c1d14598547d7ba1fb0851c18a->enter($__internal_6c7201c286587008d1caabd064b346428b78a0c1d14598547d7ba1fb0851c18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_adfb4354a4281489a6c040d372055f59288f9f43ba29314cdb113aa0803946c2->leave($__internal_adfb4354a4281489a6c040d372055f59288f9f43ba29314cdb113aa0803946c2_prof);

        
        $__internal_6c7201c286587008d1caabd064b346428b78a0c1d14598547d7ba1fb0851c18a->leave($__internal_6c7201c286587008d1caabd064b346428b78a0c1d14598547d7ba1fb0851c18a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbaa0ac4952246c9087243613fd9822e40282f1fb5988cc2b921dae90dd63219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaa0ac4952246c9087243613fd9822e40282f1fb5988cc2b921dae90dd63219->enter($__internal_fbaa0ac4952246c9087243613fd9822e40282f1fb5988cc2b921dae90dd63219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f206a8387e08ef375cf756d8a2c672c9d30b8942aeeaca0e9213eed5ea7aded5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f206a8387e08ef375cf756d8a2c672c9d30b8942aeeaca0e9213eed5ea7aded5->enter($__internal_f206a8387e08ef375cf756d8a2c672c9d30b8942aeeaca0e9213eed5ea7aded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f206a8387e08ef375cf756d8a2c672c9d30b8942aeeaca0e9213eed5ea7aded5->leave($__internal_f206a8387e08ef375cf756d8a2c672c9d30b8942aeeaca0e9213eed5ea7aded5_prof);

        
        $__internal_fbaa0ac4952246c9087243613fd9822e40282f1fb5988cc2b921dae90dd63219->leave($__internal_fbaa0ac4952246c9087243613fd9822e40282f1fb5988cc2b921dae90dd63219_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_140d3d75c71abf9aa450d57a6e7f571d9c4615abe1a87a8360a69fe92dd804ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140d3d75c71abf9aa450d57a6e7f571d9c4615abe1a87a8360a69fe92dd804ae->enter($__internal_140d3d75c71abf9aa450d57a6e7f571d9c4615abe1a87a8360a69fe92dd804ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3bd87152712da3e83f57ff9c0227f4760be81969085167a79ba77b3fab7dbd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd87152712da3e83f57ff9c0227f4760be81969085167a79ba77b3fab7dbd69->enter($__internal_3bd87152712da3e83f57ff9c0227f4760be81969085167a79ba77b3fab7dbd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3bd87152712da3e83f57ff9c0227f4760be81969085167a79ba77b3fab7dbd69->leave($__internal_3bd87152712da3e83f57ff9c0227f4760be81969085167a79ba77b3fab7dbd69_prof);

        
        $__internal_140d3d75c71abf9aa450d57a6e7f571d9c4615abe1a87a8360a69fe92dd804ae->leave($__internal_140d3d75c71abf9aa450d57a6e7f571d9c4615abe1a87a8360a69fe92dd804ae_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_84b2e1eebd728f25d5fea25dac762a1d35a047e970d4588adc24c47b35d0c27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b2e1eebd728f25d5fea25dac762a1d35a047e970d4588adc24c47b35d0c27e->enter($__internal_84b2e1eebd728f25d5fea25dac762a1d35a047e970d4588adc24c47b35d0c27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8747ff7a243bcc58ab47a07e782a0f04a4124aa13313eaeac1511dad681ddf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8747ff7a243bcc58ab47a07e782a0f04a4124aa13313eaeac1511dad681ddf1c->enter($__internal_8747ff7a243bcc58ab47a07e782a0f04a4124aa13313eaeac1511dad681ddf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8747ff7a243bcc58ab47a07e782a0f04a4124aa13313eaeac1511dad681ddf1c->leave($__internal_8747ff7a243bcc58ab47a07e782a0f04a4124aa13313eaeac1511dad681ddf1c_prof);

        
        $__internal_84b2e1eebd728f25d5fea25dac762a1d35a047e970d4588adc24c47b35d0c27e->leave($__internal_84b2e1eebd728f25d5fea25dac762a1d35a047e970d4588adc24c47b35d0c27e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/home/nico/pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
