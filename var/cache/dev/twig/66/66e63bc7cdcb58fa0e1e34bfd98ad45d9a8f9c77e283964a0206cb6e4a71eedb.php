<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_74c0a6667a4a53b346a53a665e42bd1466048158b440fd60dfc2728ef9bd51e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c0a6667a4a53b346a53a665e42bd1466048158b440fd60dfc2728ef9bd51e7->enter($__internal_74c0a6667a4a53b346a53a665e42bd1466048158b440fd60dfc2728ef9bd51e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_443a6e267364cc736961bd8c1cf8eb15268324adda17a1010b39be61032cc42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443a6e267364cc736961bd8c1cf8eb15268324adda17a1010b39be61032cc42b->enter($__internal_443a6e267364cc736961bd8c1cf8eb15268324adda17a1010b39be61032cc42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_74c0a6667a4a53b346a53a665e42bd1466048158b440fd60dfc2728ef9bd51e7->leave($__internal_74c0a6667a4a53b346a53a665e42bd1466048158b440fd60dfc2728ef9bd51e7_prof);

        
        $__internal_443a6e267364cc736961bd8c1cf8eb15268324adda17a1010b39be61032cc42b->leave($__internal_443a6e267364cc736961bd8c1cf8eb15268324adda17a1010b39be61032cc42b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
