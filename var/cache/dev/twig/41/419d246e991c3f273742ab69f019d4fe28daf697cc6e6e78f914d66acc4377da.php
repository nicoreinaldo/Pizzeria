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
        $__internal_2a45a2f1bc90eb4ade96962b99604076021f18c4bc3352b745b95d3cda223be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a45a2f1bc90eb4ade96962b99604076021f18c4bc3352b745b95d3cda223be0->enter($__internal_2a45a2f1bc90eb4ade96962b99604076021f18c4bc3352b745b95d3cda223be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_34dbf74dc24f384e3e82edc8f0680cecb6ea5ae472b783faee6c07e6673c5657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dbf74dc24f384e3e82edc8f0680cecb6ea5ae472b783faee6c07e6673c5657->enter($__internal_34dbf74dc24f384e3e82edc8f0680cecb6ea5ae472b783faee6c07e6673c5657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2a45a2f1bc90eb4ade96962b99604076021f18c4bc3352b745b95d3cda223be0->leave($__internal_2a45a2f1bc90eb4ade96962b99604076021f18c4bc3352b745b95d3cda223be0_prof);

        
        $__internal_34dbf74dc24f384e3e82edc8f0680cecb6ea5ae472b783faee6c07e6673c5657->leave($__internal_34dbf74dc24f384e3e82edc8f0680cecb6ea5ae472b783faee6c07e6673c5657_prof);

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
