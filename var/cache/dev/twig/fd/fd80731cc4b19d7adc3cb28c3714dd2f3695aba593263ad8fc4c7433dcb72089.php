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
        $__internal_5057f31c22d18184c781fa96da390661a6a73847fbb459f071ffe2e4517961a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5057f31c22d18184c781fa96da390661a6a73847fbb459f071ffe2e4517961a1->enter($__internal_5057f31c22d18184c781fa96da390661a6a73847fbb459f071ffe2e4517961a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0556f4523feefd17ec69c3af51174da3b99e74bb8f2219ea95b41be8b505eb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0556f4523feefd17ec69c3af51174da3b99e74bb8f2219ea95b41be8b505eb55->enter($__internal_0556f4523feefd17ec69c3af51174da3b99e74bb8f2219ea95b41be8b505eb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_5057f31c22d18184c781fa96da390661a6a73847fbb459f071ffe2e4517961a1->leave($__internal_5057f31c22d18184c781fa96da390661a6a73847fbb459f071ffe2e4517961a1_prof);

        
        $__internal_0556f4523feefd17ec69c3af51174da3b99e74bb8f2219ea95b41be8b505eb55->leave($__internal_0556f4523feefd17ec69c3af51174da3b99e74bb8f2219ea95b41be8b505eb55_prof);

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
