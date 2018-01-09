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
        $__internal_562285fbb65c7e01f3fec585e4fddfad4bc9dfb60f64170abd763688be4367c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562285fbb65c7e01f3fec585e4fddfad4bc9dfb60f64170abd763688be4367c9->enter($__internal_562285fbb65c7e01f3fec585e4fddfad4bc9dfb60f64170abd763688be4367c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f00b02f465b191adb45312e3dfd845a97a12d3b493711e82953903016cee9c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00b02f465b191adb45312e3dfd845a97a12d3b493711e82953903016cee9c12->enter($__internal_f00b02f465b191adb45312e3dfd845a97a12d3b493711e82953903016cee9c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_562285fbb65c7e01f3fec585e4fddfad4bc9dfb60f64170abd763688be4367c9->leave($__internal_562285fbb65c7e01f3fec585e4fddfad4bc9dfb60f64170abd763688be4367c9_prof);

        
        $__internal_f00b02f465b191adb45312e3dfd845a97a12d3b493711e82953903016cee9c12->leave($__internal_f00b02f465b191adb45312e3dfd845a97a12d3b493711e82953903016cee9c12_prof);

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
