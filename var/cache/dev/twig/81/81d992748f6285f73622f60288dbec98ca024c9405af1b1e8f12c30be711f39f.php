<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_d523efede470d4f9ec357d48776d44bfdc8a5b7d19694cf73531d79870dd0137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d523efede470d4f9ec357d48776d44bfdc8a5b7d19694cf73531d79870dd0137->enter($__internal_d523efede470d4f9ec357d48776d44bfdc8a5b7d19694cf73531d79870dd0137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e8a4384ded698ae8ad2f97868c44833596b7b3f230a5135dfdfa153bfddde4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a4384ded698ae8ad2f97868c44833596b7b3f230a5135dfdfa153bfddde4c5->enter($__internal_e8a4384ded698ae8ad2f97868c44833596b7b3f230a5135dfdfa153bfddde4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d523efede470d4f9ec357d48776d44bfdc8a5b7d19694cf73531d79870dd0137->leave($__internal_d523efede470d4f9ec357d48776d44bfdc8a5b7d19694cf73531d79870dd0137_prof);

        
        $__internal_e8a4384ded698ae8ad2f97868c44833596b7b3f230a5135dfdfa153bfddde4c5->leave($__internal_e8a4384ded698ae8ad2f97868c44833596b7b3f230a5135dfdfa153bfddde4c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
