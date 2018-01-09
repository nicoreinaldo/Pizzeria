<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_5f024c32fac78c250a2f850bd2f52e637985913a72a37ffb5dd64c17bf620eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f024c32fac78c250a2f850bd2f52e637985913a72a37ffb5dd64c17bf620eb1->enter($__internal_5f024c32fac78c250a2f850bd2f52e637985913a72a37ffb5dd64c17bf620eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1df7dbb95dc7d24035f67f5f471090ddc54008366282232aff3d84b9f0560f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df7dbb95dc7d24035f67f5f471090ddc54008366282232aff3d84b9f0560f44->enter($__internal_1df7dbb95dc7d24035f67f5f471090ddc54008366282232aff3d84b9f0560f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5f024c32fac78c250a2f850bd2f52e637985913a72a37ffb5dd64c17bf620eb1->leave($__internal_5f024c32fac78c250a2f850bd2f52e637985913a72a37ffb5dd64c17bf620eb1_prof);

        
        $__internal_1df7dbb95dc7d24035f67f5f471090ddc54008366282232aff3d84b9f0560f44->leave($__internal_1df7dbb95dc7d24035f67f5f471090ddc54008366282232aff3d84b9f0560f44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
