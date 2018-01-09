<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_14273924f1836c78b5e8bf03aeb04b1e02d1b9275423f652166a03e881bb57d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14273924f1836c78b5e8bf03aeb04b1e02d1b9275423f652166a03e881bb57d0->enter($__internal_14273924f1836c78b5e8bf03aeb04b1e02d1b9275423f652166a03e881bb57d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d291a0e643f5a41450af1d7e025f46e61e6bb81fd36acdd0b784e066cf47b3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d291a0e643f5a41450af1d7e025f46e61e6bb81fd36acdd0b784e066cf47b3e2->enter($__internal_d291a0e643f5a41450af1d7e025f46e61e6bb81fd36acdd0b784e066cf47b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_14273924f1836c78b5e8bf03aeb04b1e02d1b9275423f652166a03e881bb57d0->leave($__internal_14273924f1836c78b5e8bf03aeb04b1e02d1b9275423f652166a03e881bb57d0_prof);

        
        $__internal_d291a0e643f5a41450af1d7e025f46e61e6bb81fd36acdd0b784e066cf47b3e2->leave($__internal_d291a0e643f5a41450af1d7e025f46e61e6bb81fd36acdd0b784e066cf47b3e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
