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
        $__internal_3c1b6e2c189a16cc3be16c2184e71b4891654c415d16cb86a3eb874b3a35dbc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1b6e2c189a16cc3be16c2184e71b4891654c415d16cb86a3eb874b3a35dbc1->enter($__internal_3c1b6e2c189a16cc3be16c2184e71b4891654c415d16cb86a3eb874b3a35dbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_b65f4165de14bb55da763f131114f5d169c3ebc732c42e609d5e0fa447ceb797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65f4165de14bb55da763f131114f5d169c3ebc732c42e609d5e0fa447ceb797->enter($__internal_b65f4165de14bb55da763f131114f5d169c3ebc732c42e609d5e0fa447ceb797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c1b6e2c189a16cc3be16c2184e71b4891654c415d16cb86a3eb874b3a35dbc1->leave($__internal_3c1b6e2c189a16cc3be16c2184e71b4891654c415d16cb86a3eb874b3a35dbc1_prof);

        
        $__internal_b65f4165de14bb55da763f131114f5d169c3ebc732c42e609d5e0fa447ceb797->leave($__internal_b65f4165de14bb55da763f131114f5d169c3ebc732c42e609d5e0fa447ceb797_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40ba2e938b1c21aa009b4539d18e5a908208edb345c0ac1be739cfa449598bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ba2e938b1c21aa009b4539d18e5a908208edb345c0ac1be739cfa449598bde->enter($__internal_40ba2e938b1c21aa009b4539d18e5a908208edb345c0ac1be739cfa449598bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4439da588b6164a1e5252ae01d006535f7c6e18dbb81c4e29dc6566fc83446a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4439da588b6164a1e5252ae01d006535f7c6e18dbb81c4e29dc6566fc83446a0->enter($__internal_4439da588b6164a1e5252ae01d006535f7c6e18dbb81c4e29dc6566fc83446a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4439da588b6164a1e5252ae01d006535f7c6e18dbb81c4e29dc6566fc83446a0->leave($__internal_4439da588b6164a1e5252ae01d006535f7c6e18dbb81c4e29dc6566fc83446a0_prof);

        
        $__internal_40ba2e938b1c21aa009b4539d18e5a908208edb345c0ac1be739cfa449598bde->leave($__internal_40ba2e938b1c21aa009b4539d18e5a908208edb345c0ac1be739cfa449598bde_prof);

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
", "@FOSUser/Registration/register.html.twig", "/home/manuel/symfony/Pizzeria/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
