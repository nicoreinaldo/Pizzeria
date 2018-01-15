<?php

/* @Twig/layout.html.twig */
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
        $__internal_15a102f5b253694f8be9dc0351ebda54d812cb0270c9f4cb72243c361fc138c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a102f5b253694f8be9dc0351ebda54d812cb0270c9f4cb72243c361fc138c0->enter($__internal_15a102f5b253694f8be9dc0351ebda54d812cb0270c9f4cb72243c361fc138c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_162a9ee3676589483ab676d986e99a32f6dfa850fad1570fd8ed5f79e4b9f68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162a9ee3676589483ab676d986e99a32f6dfa850fad1570fd8ed5f79e4b9f68a->enter($__internal_162a9ee3676589483ab676d986e99a32f6dfa850fad1570fd8ed5f79e4b9f68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_15a102f5b253694f8be9dc0351ebda54d812cb0270c9f4cb72243c361fc138c0->leave($__internal_15a102f5b253694f8be9dc0351ebda54d812cb0270c9f4cb72243c361fc138c0_prof);

        
        $__internal_162a9ee3676589483ab676d986e99a32f6dfa850fad1570fd8ed5f79e4b9f68a->leave($__internal_162a9ee3676589483ab676d986e99a32f6dfa850fad1570fd8ed5f79e4b9f68a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a2ebcccbb01d30f4e603fb40936e7d2c5f243808b93cc27b3da377d3fabf47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2ebcccbb01d30f4e603fb40936e7d2c5f243808b93cc27b3da377d3fabf47f->enter($__internal_4a2ebcccbb01d30f4e603fb40936e7d2c5f243808b93cc27b3da377d3fabf47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_295e12b227641618c2759e0bfeacf31085fed9244adf43bc766a67dc4892c839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295e12b227641618c2759e0bfeacf31085fed9244adf43bc766a67dc4892c839->enter($__internal_295e12b227641618c2759e0bfeacf31085fed9244adf43bc766a67dc4892c839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_295e12b227641618c2759e0bfeacf31085fed9244adf43bc766a67dc4892c839->leave($__internal_295e12b227641618c2759e0bfeacf31085fed9244adf43bc766a67dc4892c839_prof);

        
        $__internal_4a2ebcccbb01d30f4e603fb40936e7d2c5f243808b93cc27b3da377d3fabf47f->leave($__internal_4a2ebcccbb01d30f4e603fb40936e7d2c5f243808b93cc27b3da377d3fabf47f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8434e0929aed9fc0ba45df51eb2868c4d3f04da60f7ba13a2d111aad55381171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8434e0929aed9fc0ba45df51eb2868c4d3f04da60f7ba13a2d111aad55381171->enter($__internal_8434e0929aed9fc0ba45df51eb2868c4d3f04da60f7ba13a2d111aad55381171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_088ef49b265e88905ba28e4b9ebf9cb4b4a747a27140119b0b6b707d5ab9e53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088ef49b265e88905ba28e4b9ebf9cb4b4a747a27140119b0b6b707d5ab9e53a->enter($__internal_088ef49b265e88905ba28e4b9ebf9cb4b4a747a27140119b0b6b707d5ab9e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_088ef49b265e88905ba28e4b9ebf9cb4b4a747a27140119b0b6b707d5ab9e53a->leave($__internal_088ef49b265e88905ba28e4b9ebf9cb4b4a747a27140119b0b6b707d5ab9e53a_prof);

        
        $__internal_8434e0929aed9fc0ba45df51eb2868c4d3f04da60f7ba13a2d111aad55381171->leave($__internal_8434e0929aed9fc0ba45df51eb2868c4d3f04da60f7ba13a2d111aad55381171_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e78a62479633b6e30e73f8a31e86ebab3cbe88091866e658f8bdc84f6efdfff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e78a62479633b6e30e73f8a31e86ebab3cbe88091866e658f8bdc84f6efdfff->enter($__internal_8e78a62479633b6e30e73f8a31e86ebab3cbe88091866e658f8bdc84f6efdfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f72ad3b8f7c53b7143b834bdd567d284b50024ec67e1f5d526766adde734f56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72ad3b8f7c53b7143b834bdd567d284b50024ec67e1f5d526766adde734f56a->enter($__internal_f72ad3b8f7c53b7143b834bdd567d284b50024ec67e1f5d526766adde734f56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f72ad3b8f7c53b7143b834bdd567d284b50024ec67e1f5d526766adde734f56a->leave($__internal_f72ad3b8f7c53b7143b834bdd567d284b50024ec67e1f5d526766adde734f56a_prof);

        
        $__internal_8e78a62479633b6e30e73f8a31e86ebab3cbe88091866e658f8bdc84f6efdfff->leave($__internal_8e78a62479633b6e30e73f8a31e86ebab3cbe88091866e658f8bdc84f6efdfff_prof);

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
", "@Twig/layout.html.twig", "/home/manuel/symfony/Pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
