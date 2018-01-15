<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_a25ecf7f3fa92f0d52a6dca5d2fe94a4ceaed64209a94ba0a2e095b97ff20953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25ecf7f3fa92f0d52a6dca5d2fe94a4ceaed64209a94ba0a2e095b97ff20953->enter($__internal_a25ecf7f3fa92f0d52a6dca5d2fe94a4ceaed64209a94ba0a2e095b97ff20953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_02041600281a05b3a78f3916b2777a201f87b5a6dd3437400ab8f2aafb593f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02041600281a05b3a78f3916b2777a201f87b5a6dd3437400ab8f2aafb593f36->enter($__internal_02041600281a05b3a78f3916b2777a201f87b5a6dd3437400ab8f2aafb593f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a25ecf7f3fa92f0d52a6dca5d2fe94a4ceaed64209a94ba0a2e095b97ff20953->leave($__internal_a25ecf7f3fa92f0d52a6dca5d2fe94a4ceaed64209a94ba0a2e095b97ff20953_prof);

        
        $__internal_02041600281a05b3a78f3916b2777a201f87b5a6dd3437400ab8f2aafb593f36->leave($__internal_02041600281a05b3a78f3916b2777a201f87b5a6dd3437400ab8f2aafb593f36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
