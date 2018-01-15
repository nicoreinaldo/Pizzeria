<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_106381100ca096094ec19a76bf49b8a44bc896a72f685beb71be075e7b303da6 extends Twig_Template
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
        $__internal_b38a60b513fa132daf0b4a0296371a480b203f7ef643b9beea65937d78bf0c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38a60b513fa132daf0b4a0296371a480b203f7ef643b9beea65937d78bf0c23->enter($__internal_b38a60b513fa132daf0b4a0296371a480b203f7ef643b9beea65937d78bf0c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9fa5ffde005aebedb4deb37b76ece9266e60d01a0021a2a1f0ce599d197dbf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa5ffde005aebedb4deb37b76ece9266e60d01a0021a2a1f0ce599d197dbf59->enter($__internal_9fa5ffde005aebedb4deb37b76ece9266e60d01a0021a2a1f0ce599d197dbf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b38a60b513fa132daf0b4a0296371a480b203f7ef643b9beea65937d78bf0c23->leave($__internal_b38a60b513fa132daf0b4a0296371a480b203f7ef643b9beea65937d78bf0c23_prof);

        
        $__internal_9fa5ffde005aebedb4deb37b76ece9266e60d01a0021a2a1f0ce599d197dbf59->leave($__internal_9fa5ffde005aebedb4deb37b76ece9266e60d01a0021a2a1f0ce599d197dbf59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
