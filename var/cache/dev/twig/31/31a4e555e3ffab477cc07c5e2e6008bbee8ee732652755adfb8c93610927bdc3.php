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
        $__internal_b5ae6241cb4c5b8e15bcdba1658b1f871c1075a84127627ef043710efe1f7baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ae6241cb4c5b8e15bcdba1658b1f871c1075a84127627ef043710efe1f7baa->enter($__internal_b5ae6241cb4c5b8e15bcdba1658b1f871c1075a84127627ef043710efe1f7baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_33e3a399e27658ff52170dfd8522a035245213a8fc99b1c6918abe1116e4cb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e3a399e27658ff52170dfd8522a035245213a8fc99b1c6918abe1116e4cb90->enter($__internal_33e3a399e27658ff52170dfd8522a035245213a8fc99b1c6918abe1116e4cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b5ae6241cb4c5b8e15bcdba1658b1f871c1075a84127627ef043710efe1f7baa->leave($__internal_b5ae6241cb4c5b8e15bcdba1658b1f871c1075a84127627ef043710efe1f7baa_prof);

        
        $__internal_33e3a399e27658ff52170dfd8522a035245213a8fc99b1c6918abe1116e4cb90->leave($__internal_33e3a399e27658ff52170dfd8522a035245213a8fc99b1c6918abe1116e4cb90_prof);

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
