<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_420662ea07c7eb31eafbc2e4c79560047a4af17b2eea2a28471cad821cd71dc7 extends Twig_Template
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
        $__internal_f881bec21f9eb70909ac9ec046690dfc38ce9dec90ca5ef04a1360931c11c03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f881bec21f9eb70909ac9ec046690dfc38ce9dec90ca5ef04a1360931c11c03f->enter($__internal_f881bec21f9eb70909ac9ec046690dfc38ce9dec90ca5ef04a1360931c11c03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a253ca037fab9b368f59c1a521db7be8e6d8afedac0b9e623bf0799518d3b213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a253ca037fab9b368f59c1a521db7be8e6d8afedac0b9e623bf0799518d3b213->enter($__internal_a253ca037fab9b368f59c1a521db7be8e6d8afedac0b9e623bf0799518d3b213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f881bec21f9eb70909ac9ec046690dfc38ce9dec90ca5ef04a1360931c11c03f->leave($__internal_f881bec21f9eb70909ac9ec046690dfc38ce9dec90ca5ef04a1360931c11c03f_prof);

        
        $__internal_a253ca037fab9b368f59c1a521db7be8e6d8afedac0b9e623bf0799518d3b213->leave($__internal_a253ca037fab9b368f59c1a521db7be8e6d8afedac0b9e623bf0799518d3b213_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
