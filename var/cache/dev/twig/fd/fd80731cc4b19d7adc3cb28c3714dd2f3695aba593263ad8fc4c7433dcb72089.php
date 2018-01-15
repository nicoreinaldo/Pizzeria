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
        $__internal_dce5e59079474ec158516a4f30b55a557ac362b62bf39a95aa0fdc9954e8f6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce5e59079474ec158516a4f30b55a557ac362b62bf39a95aa0fdc9954e8f6f6->enter($__internal_dce5e59079474ec158516a4f30b55a557ac362b62bf39a95aa0fdc9954e8f6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_00432fc2feacd43304b4dd595319e9c5c81ff0523d6998ccc5c0414940551462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00432fc2feacd43304b4dd595319e9c5c81ff0523d6998ccc5c0414940551462->enter($__internal_00432fc2feacd43304b4dd595319e9c5c81ff0523d6998ccc5c0414940551462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_dce5e59079474ec158516a4f30b55a557ac362b62bf39a95aa0fdc9954e8f6f6->leave($__internal_dce5e59079474ec158516a4f30b55a557ac362b62bf39a95aa0fdc9954e8f6f6_prof);

        
        $__internal_00432fc2feacd43304b4dd595319e9c5c81ff0523d6998ccc5c0414940551462->leave($__internal_00432fc2feacd43304b4dd595319e9c5c81ff0523d6998ccc5c0414940551462_prof);

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
