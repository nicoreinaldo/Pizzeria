<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_84f553a763e2d2a8854d50d18c912847bf98a4f2a5fbf971eae47548489b48b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a8f6216a150f71a43f5867bb23df67a129fa170fce2238dff04d1065fa63b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a8f6216a150f71a43f5867bb23df67a129fa170fce2238dff04d1065fa63b5->enter($__internal_09a8f6216a150f71a43f5867bb23df67a129fa170fce2238dff04d1065fa63b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_671e0ab3066df9506df4485b86e8c1cab75f9aab0db12f50ed4f9bbea07aba46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671e0ab3066df9506df4485b86e8c1cab75f9aab0db12f50ed4f9bbea07aba46->enter($__internal_671e0ab3066df9506df4485b86e8c1cab75f9aab0db12f50ed4f9bbea07aba46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a8f6216a150f71a43f5867bb23df67a129fa170fce2238dff04d1065fa63b5->leave($__internal_09a8f6216a150f71a43f5867bb23df67a129fa170fce2238dff04d1065fa63b5_prof);

        
        $__internal_671e0ab3066df9506df4485b86e8c1cab75f9aab0db12f50ed4f9bbea07aba46->leave($__internal_671e0ab3066df9506df4485b86e8c1cab75f9aab0db12f50ed4f9bbea07aba46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22c45066ed237cf91c7de96d67970a33728a791afd7c223f0334294e097b35b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c45066ed237cf91c7de96d67970a33728a791afd7c223f0334294e097b35b5->enter($__internal_22c45066ed237cf91c7de96d67970a33728a791afd7c223f0334294e097b35b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ba3d2753eeccd1979eaf62af2166afba4ebb5c6483d3cadc2056212845cd45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba3d2753eeccd1979eaf62af2166afba4ebb5c6483d3cadc2056212845cd45a->enter($__internal_3ba3d2753eeccd1979eaf62af2166afba4ebb5c6483d3cadc2056212845cd45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3ba3d2753eeccd1979eaf62af2166afba4ebb5c6483d3cadc2056212845cd45a->leave($__internal_3ba3d2753eeccd1979eaf62af2166afba4ebb5c6483d3cadc2056212845cd45a_prof);

        
        $__internal_22c45066ed237cf91c7de96d67970a33728a791afd7c223f0334294e097b35b5->leave($__internal_22c45066ed237cf91c7de96d67970a33728a791afd7c223f0334294e097b35b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
