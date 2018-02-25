<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ad73c98149553abdb1a1e8a7ae4dd4b1aa05c8ec3b12e4b3213f34e837d36c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_a1538dfb6ee9de379d1c52e23e1b426363b98b4f1d4013952f9d70283e07a648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1538dfb6ee9de379d1c52e23e1b426363b98b4f1d4013952f9d70283e07a648->enter($__internal_a1538dfb6ee9de379d1c52e23e1b426363b98b4f1d4013952f9d70283e07a648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_e22b1f1a9e8cdb2d4ad47214695904d1323104154dea4329afeb5482a39b6d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22b1f1a9e8cdb2d4ad47214695904d1323104154dea4329afeb5482a39b6d22->enter($__internal_e22b1f1a9e8cdb2d4ad47214695904d1323104154dea4329afeb5482a39b6d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1538dfb6ee9de379d1c52e23e1b426363b98b4f1d4013952f9d70283e07a648->leave($__internal_a1538dfb6ee9de379d1c52e23e1b426363b98b4f1d4013952f9d70283e07a648_prof);

        
        $__internal_e22b1f1a9e8cdb2d4ad47214695904d1323104154dea4329afeb5482a39b6d22->leave($__internal_e22b1f1a9e8cdb2d4ad47214695904d1323104154dea4329afeb5482a39b6d22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8180915732c58ba1710609b62493d38fb52dedb67ed2d2d68c8bb2a717e64915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8180915732c58ba1710609b62493d38fb52dedb67ed2d2d68c8bb2a717e64915->enter($__internal_8180915732c58ba1710609b62493d38fb52dedb67ed2d2d68c8bb2a717e64915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2eea0322448b72d5b8bc4eb11e370a5c8c33067b5184077a5bd7917b6f2c3f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eea0322448b72d5b8bc4eb11e370a5c8c33067b5184077a5bd7917b6f2c3f4f->enter($__internal_2eea0322448b72d5b8bc4eb11e370a5c8c33067b5184077a5bd7917b6f2c3f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2eea0322448b72d5b8bc4eb11e370a5c8c33067b5184077a5bd7917b6f2c3f4f->leave($__internal_2eea0322448b72d5b8bc4eb11e370a5c8c33067b5184077a5bd7917b6f2c3f4f_prof);

        
        $__internal_8180915732c58ba1710609b62493d38fb52dedb67ed2d2d68c8bb2a717e64915->leave($__internal_8180915732c58ba1710609b62493d38fb52dedb67ed2d2d68c8bb2a717e64915_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/nico/pizzeria/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
