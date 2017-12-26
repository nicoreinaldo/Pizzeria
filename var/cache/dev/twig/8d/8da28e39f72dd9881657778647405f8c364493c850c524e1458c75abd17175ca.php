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
        $__internal_30d697520dd1b6f05b25bde71ac3350fb7eb3800d0f478a3ebbfe276f0ad1d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d697520dd1b6f05b25bde71ac3350fb7eb3800d0f478a3ebbfe276f0ad1d04->enter($__internal_30d697520dd1b6f05b25bde71ac3350fb7eb3800d0f478a3ebbfe276f0ad1d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8c260e9d71fea2914bc6f9349a9857c79ee2cc6798b255c302de041a1b7ae5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c260e9d71fea2914bc6f9349a9857c79ee2cc6798b255c302de041a1b7ae5f4->enter($__internal_8c260e9d71fea2914bc6f9349a9857c79ee2cc6798b255c302de041a1b7ae5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_30d697520dd1b6f05b25bde71ac3350fb7eb3800d0f478a3ebbfe276f0ad1d04->leave($__internal_30d697520dd1b6f05b25bde71ac3350fb7eb3800d0f478a3ebbfe276f0ad1d04_prof);

        
        $__internal_8c260e9d71fea2914bc6f9349a9857c79ee2cc6798b255c302de041a1b7ae5f4->leave($__internal_8c260e9d71fea2914bc6f9349a9857c79ee2cc6798b255c302de041a1b7ae5f4_prof);

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
