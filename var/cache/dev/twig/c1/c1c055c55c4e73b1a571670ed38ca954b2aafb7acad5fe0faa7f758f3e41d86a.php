<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_877508cad7d200fcf78773b6eb6f491100e7815a9640bc823c2181189114503d extends Twig_Template
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
        $__internal_513f4e3d7d4fcd5bc1bc45c14a8cb52c63f1b3e7925ff05041636f9ccb7c5f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513f4e3d7d4fcd5bc1bc45c14a8cb52c63f1b3e7925ff05041636f9ccb7c5f47->enter($__internal_513f4e3d7d4fcd5bc1bc45c14a8cb52c63f1b3e7925ff05041636f9ccb7c5f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_eb0bcd34801203a128ea925e92e7eabd045a1ecf37939920923f4e864656a320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0bcd34801203a128ea925e92e7eabd045a1ecf37939920923f4e864656a320->enter($__internal_eb0bcd34801203a128ea925e92e7eabd045a1ecf37939920923f4e864656a320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_513f4e3d7d4fcd5bc1bc45c14a8cb52c63f1b3e7925ff05041636f9ccb7c5f47->leave($__internal_513f4e3d7d4fcd5bc1bc45c14a8cb52c63f1b3e7925ff05041636f9ccb7c5f47_prof);

        
        $__internal_eb0bcd34801203a128ea925e92e7eabd045a1ecf37939920923f4e864656a320->leave($__internal_eb0bcd34801203a128ea925e92e7eabd045a1ecf37939920923f4e864656a320_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
