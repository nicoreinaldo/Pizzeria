<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_5d016be83f591c6446da396b6daea95276c57c9d985bb83d0222e979d2bca1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d016be83f591c6446da396b6daea95276c57c9d985bb83d0222e979d2bca1c8->enter($__internal_5d016be83f591c6446da396b6daea95276c57c9d985bb83d0222e979d2bca1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8730688007f4318ce7d9e74b32a0cbcad67712fcd36622c5b2eb7b22fc685ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8730688007f4318ce7d9e74b32a0cbcad67712fcd36622c5b2eb7b22fc685ae7->enter($__internal_8730688007f4318ce7d9e74b32a0cbcad67712fcd36622c5b2eb7b22fc685ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5d016be83f591c6446da396b6daea95276c57c9d985bb83d0222e979d2bca1c8->leave($__internal_5d016be83f591c6446da396b6daea95276c57c9d985bb83d0222e979d2bca1c8_prof);

        
        $__internal_8730688007f4318ce7d9e74b32a0cbcad67712fcd36622c5b2eb7b22fc685ae7->leave($__internal_8730688007f4318ce7d9e74b32a0cbcad67712fcd36622c5b2eb7b22fc685ae7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
