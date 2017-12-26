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
        $__internal_87b710f8b307de4d89921dd882cefc19ea4a5619cc52b71e42fdb40e3a4c33ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b710f8b307de4d89921dd882cefc19ea4a5619cc52b71e42fdb40e3a4c33ee->enter($__internal_87b710f8b307de4d89921dd882cefc19ea4a5619cc52b71e42fdb40e3a4c33ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_47448cbc3efab6252b92508af346426a936026c6b5d4b094d34d6e06418addef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47448cbc3efab6252b92508af346426a936026c6b5d4b094d34d6e06418addef->enter($__internal_47448cbc3efab6252b92508af346426a936026c6b5d4b094d34d6e06418addef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_87b710f8b307de4d89921dd882cefc19ea4a5619cc52b71e42fdb40e3a4c33ee->leave($__internal_87b710f8b307de4d89921dd882cefc19ea4a5619cc52b71e42fdb40e3a4c33ee_prof);

        
        $__internal_47448cbc3efab6252b92508af346426a936026c6b5d4b094d34d6e06418addef->leave($__internal_47448cbc3efab6252b92508af346426a936026c6b5d4b094d34d6e06418addef_prof);

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
