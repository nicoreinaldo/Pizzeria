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
        $__internal_465c516965f44f22809a295570dfaf3df981b654f923ab7ca426115c78adf7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465c516965f44f22809a295570dfaf3df981b654f923ab7ca426115c78adf7c1->enter($__internal_465c516965f44f22809a295570dfaf3df981b654f923ab7ca426115c78adf7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dba2f7cb96bec6553bee4826fe0c6e8af525c025bf1f02855f5a948c62d3b6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba2f7cb96bec6553bee4826fe0c6e8af525c025bf1f02855f5a948c62d3b6f8->enter($__internal_dba2f7cb96bec6553bee4826fe0c6e8af525c025bf1f02855f5a948c62d3b6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_465c516965f44f22809a295570dfaf3df981b654f923ab7ca426115c78adf7c1->leave($__internal_465c516965f44f22809a295570dfaf3df981b654f923ab7ca426115c78adf7c1_prof);

        
        $__internal_dba2f7cb96bec6553bee4826fe0c6e8af525c025bf1f02855f5a948c62d3b6f8->leave($__internal_dba2f7cb96bec6553bee4826fe0c6e8af525c025bf1f02855f5a948c62d3b6f8_prof);

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
