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
        $__internal_285bf1e416898c1b500e40790eebb0a4736062f9bc0976a740374ab09709d032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285bf1e416898c1b500e40790eebb0a4736062f9bc0976a740374ab09709d032->enter($__internal_285bf1e416898c1b500e40790eebb0a4736062f9bc0976a740374ab09709d032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ee71eee811fa2a3f0eefa8b6b62d7f8de9f40b5c4d7973bab46ad321dc38ea58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee71eee811fa2a3f0eefa8b6b62d7f8de9f40b5c4d7973bab46ad321dc38ea58->enter($__internal_ee71eee811fa2a3f0eefa8b6b62d7f8de9f40b5c4d7973bab46ad321dc38ea58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_285bf1e416898c1b500e40790eebb0a4736062f9bc0976a740374ab09709d032->leave($__internal_285bf1e416898c1b500e40790eebb0a4736062f9bc0976a740374ab09709d032_prof);

        
        $__internal_ee71eee811fa2a3f0eefa8b6b62d7f8de9f40b5c4d7973bab46ad321dc38ea58->leave($__internal_ee71eee811fa2a3f0eefa8b6b62d7f8de9f40b5c4d7973bab46ad321dc38ea58_prof);

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
