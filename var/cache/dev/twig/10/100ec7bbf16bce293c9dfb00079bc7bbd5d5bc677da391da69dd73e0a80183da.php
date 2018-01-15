<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_185465045c6dc15145cc74432053d972c640213f9859b623a87d06d8b4f0eb98 extends Twig_Template
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
        $__internal_f1ebdba0ce632f9b4a37ca547889bed141737f515efa0f69e6d32a148f7d2118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ebdba0ce632f9b4a37ca547889bed141737f515efa0f69e6d32a148f7d2118->enter($__internal_f1ebdba0ce632f9b4a37ca547889bed141737f515efa0f69e6d32a148f7d2118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2a7b8fe37400ea945e50b5d2bc5ddea0af0bcde2b40917491741fa973371ff26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7b8fe37400ea945e50b5d2bc5ddea0af0bcde2b40917491741fa973371ff26->enter($__internal_2a7b8fe37400ea945e50b5d2bc5ddea0af0bcde2b40917491741fa973371ff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f1ebdba0ce632f9b4a37ca547889bed141737f515efa0f69e6d32a148f7d2118->leave($__internal_f1ebdba0ce632f9b4a37ca547889bed141737f515efa0f69e6d32a148f7d2118_prof);

        
        $__internal_2a7b8fe37400ea945e50b5d2bc5ddea0af0bcde2b40917491741fa973371ff26->leave($__internal_2a7b8fe37400ea945e50b5d2bc5ddea0af0bcde2b40917491741fa973371ff26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
