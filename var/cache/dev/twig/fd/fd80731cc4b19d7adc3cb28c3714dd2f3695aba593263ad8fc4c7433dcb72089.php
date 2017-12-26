<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_56027a76fb0cbc8231a447146ad120952aab48b1e01687a0b6292b9f65aa1dba extends Twig_Template
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
        $__internal_5f7db3cae0a20845db390e5b43189e99904a46d6b6cb48ee73caa5bd5c748fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7db3cae0a20845db390e5b43189e99904a46d6b6cb48ee73caa5bd5c748fdc->enter($__internal_5f7db3cae0a20845db390e5b43189e99904a46d6b6cb48ee73caa5bd5c748fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6bf9115174f9d7ed8f1b54870c09533da53c340e4f5928a16b14e2686daa9e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf9115174f9d7ed8f1b54870c09533da53c340e4f5928a16b14e2686daa9e2b->enter($__internal_6bf9115174f9d7ed8f1b54870c09533da53c340e4f5928a16b14e2686daa9e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5f7db3cae0a20845db390e5b43189e99904a46d6b6cb48ee73caa5bd5c748fdc->leave($__internal_5f7db3cae0a20845db390e5b43189e99904a46d6b6cb48ee73caa5bd5c748fdc_prof);

        
        $__internal_6bf9115174f9d7ed8f1b54870c09533da53c340e4f5928a16b14e2686daa9e2b->leave($__internal_6bf9115174f9d7ed8f1b54870c09533da53c340e4f5928a16b14e2686daa9e2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
