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
        $__internal_7fe88a5d88cf381886c90056ccc448c6ec4dcfd3cc31e1e467f28f5d3bf2ae42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe88a5d88cf381886c90056ccc448c6ec4dcfd3cc31e1e467f28f5d3bf2ae42->enter($__internal_7fe88a5d88cf381886c90056ccc448c6ec4dcfd3cc31e1e467f28f5d3bf2ae42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_466e19b1f70e3c7959f7ee74151fbf386ffe424a4ad35e8cfaad0168bf4cf2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466e19b1f70e3c7959f7ee74151fbf386ffe424a4ad35e8cfaad0168bf4cf2b0->enter($__internal_466e19b1f70e3c7959f7ee74151fbf386ffe424a4ad35e8cfaad0168bf4cf2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_7fe88a5d88cf381886c90056ccc448c6ec4dcfd3cc31e1e467f28f5d3bf2ae42->leave($__internal_7fe88a5d88cf381886c90056ccc448c6ec4dcfd3cc31e1e467f28f5d3bf2ae42_prof);

        
        $__internal_466e19b1f70e3c7959f7ee74151fbf386ffe424a4ad35e8cfaad0168bf4cf2b0->leave($__internal_466e19b1f70e3c7959f7ee74151fbf386ffe424a4ad35e8cfaad0168bf4cf2b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb5f60cd3fb95bd76e3faa1383805f59242e2948295291ee180e2d77ca0bc1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5f60cd3fb95bd76e3faa1383805f59242e2948295291ee180e2d77ca0bc1a3->enter($__internal_eb5f60cd3fb95bd76e3faa1383805f59242e2948295291ee180e2d77ca0bc1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4ead456e4658dc377deac11d484774acd0db9259fd78ce3d7dcce4757b46406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ead456e4658dc377deac11d484774acd0db9259fd78ce3d7dcce4757b46406->enter($__internal_e4ead456e4658dc377deac11d484774acd0db9259fd78ce3d7dcce4757b46406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e4ead456e4658dc377deac11d484774acd0db9259fd78ce3d7dcce4757b46406->leave($__internal_e4ead456e4658dc377deac11d484774acd0db9259fd78ce3d7dcce4757b46406_prof);

        
        $__internal_eb5f60cd3fb95bd76e3faa1383805f59242e2948295291ee180e2d77ca0bc1a3->leave($__internal_eb5f60cd3fb95bd76e3faa1383805f59242e2948295291ee180e2d77ca0bc1a3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_621f17eb5d7c9ad40e2b4941a2883e4c1e5f4e2f01585569407312422491db47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621f17eb5d7c9ad40e2b4941a2883e4c1e5f4e2f01585569407312422491db47->enter($__internal_621f17eb5d7c9ad40e2b4941a2883e4c1e5f4e2f01585569407312422491db47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a89ac04dd2040e07313594a8e07a68b9b746eff12165b62cf342a07cdbfcf39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89ac04dd2040e07313594a8e07a68b9b746eff12165b62cf342a07cdbfcf39c->enter($__internal_a89ac04dd2040e07313594a8e07a68b9b746eff12165b62cf342a07cdbfcf39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a89ac04dd2040e07313594a8e07a68b9b746eff12165b62cf342a07cdbfcf39c->leave($__internal_a89ac04dd2040e07313594a8e07a68b9b746eff12165b62cf342a07cdbfcf39c_prof);

        
        $__internal_621f17eb5d7c9ad40e2b4941a2883e4c1e5f4e2f01585569407312422491db47->leave($__internal_621f17eb5d7c9ad40e2b4941a2883e4c1e5f4e2f01585569407312422491db47_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e441a9f24c131acc4f23f0c98e75886aacb93dd2d440b4f25edbe0c62f2c1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e441a9f24c131acc4f23f0c98e75886aacb93dd2d440b4f25edbe0c62f2c1b5->enter($__internal_0e441a9f24c131acc4f23f0c98e75886aacb93dd2d440b4f25edbe0c62f2c1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d68fa808f962da64a5f45a422dd90a67df3d7bf98e02ec699af0943e0663dcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68fa808f962da64a5f45a422dd90a67df3d7bf98e02ec699af0943e0663dcb3->enter($__internal_d68fa808f962da64a5f45a422dd90a67df3d7bf98e02ec699af0943e0663dcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d68fa808f962da64a5f45a422dd90a67df3d7bf98e02ec699af0943e0663dcb3->leave($__internal_d68fa808f962da64a5f45a422dd90a67df3d7bf98e02ec699af0943e0663dcb3_prof);

        
        $__internal_0e441a9f24c131acc4f23f0c98e75886aacb93dd2d440b4f25edbe0c62f2c1b5->leave($__internal_0e441a9f24c131acc4f23f0c98e75886aacb93dd2d440b4f25edbe0c62f2c1b5_prof);

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
