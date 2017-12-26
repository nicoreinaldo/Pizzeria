<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1c6822d9a8f4fdf939a4db024ebaa2dff418ef3630b0e8273f1ea2238b65b93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5e97784ced157f9a642d17ea2a2c44cf9eff8ce558c55e4eb31598eb81304a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e97784ced157f9a642d17ea2a2c44cf9eff8ce558c55e4eb31598eb81304a31->enter($__internal_5e97784ced157f9a642d17ea2a2c44cf9eff8ce558c55e4eb31598eb81304a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_4f0e08274bf1a396824e914771a468f25881e4e0478172e32011c2958d162bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0e08274bf1a396824e914771a468f25881e4e0478172e32011c2958d162bd2->enter($__internal_4f0e08274bf1a396824e914771a468f25881e4e0478172e32011c2958d162bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e97784ced157f9a642d17ea2a2c44cf9eff8ce558c55e4eb31598eb81304a31->leave($__internal_5e97784ced157f9a642d17ea2a2c44cf9eff8ce558c55e4eb31598eb81304a31_prof);

        
        $__internal_4f0e08274bf1a396824e914771a468f25881e4e0478172e32011c2958d162bd2->leave($__internal_4f0e08274bf1a396824e914771a468f25881e4e0478172e32011c2958d162bd2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_698dda277c855bdd4fea4aacc520d67f887d720330b58f954e4e4c3bd191cdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698dda277c855bdd4fea4aacc520d67f887d720330b58f954e4e4c3bd191cdd1->enter($__internal_698dda277c855bdd4fea4aacc520d67f887d720330b58f954e4e4c3bd191cdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6cafcafc5cd063fb06510f207b2287dc658361c31e6498eec2058dd1f8d38435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cafcafc5cd063fb06510f207b2287dc658361c31e6498eec2058dd1f8d38435->enter($__internal_6cafcafc5cd063fb06510f207b2287dc658361c31e6498eec2058dd1f8d38435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6cafcafc5cd063fb06510f207b2287dc658361c31e6498eec2058dd1f8d38435->leave($__internal_6cafcafc5cd063fb06510f207b2287dc658361c31e6498eec2058dd1f8d38435_prof);

        
        $__internal_698dda277c855bdd4fea4aacc520d67f887d720330b58f954e4e4c3bd191cdd1->leave($__internal_698dda277c855bdd4fea4aacc520d67f887d720330b58f954e4e4c3bd191cdd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
