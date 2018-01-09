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
        $__internal_cba39bf0d7bb81b7f83e1fdddd63734ffc9183a96b16802681b390c688eded94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba39bf0d7bb81b7f83e1fdddd63734ffc9183a96b16802681b390c688eded94->enter($__internal_cba39bf0d7bb81b7f83e1fdddd63734ffc9183a96b16802681b390c688eded94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2e8be599672a81f466db1796c2d32f56e07b3db4269f13526ee9458b46254028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8be599672a81f466db1796c2d32f56e07b3db4269f13526ee9458b46254028->enter($__internal_2e8be599672a81f466db1796c2d32f56e07b3db4269f13526ee9458b46254028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba39bf0d7bb81b7f83e1fdddd63734ffc9183a96b16802681b390c688eded94->leave($__internal_cba39bf0d7bb81b7f83e1fdddd63734ffc9183a96b16802681b390c688eded94_prof);

        
        $__internal_2e8be599672a81f466db1796c2d32f56e07b3db4269f13526ee9458b46254028->leave($__internal_2e8be599672a81f466db1796c2d32f56e07b3db4269f13526ee9458b46254028_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_468a521b01ae06de64c1d5e6352b03eaedb40fea3c9b650ea48db938feef63bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468a521b01ae06de64c1d5e6352b03eaedb40fea3c9b650ea48db938feef63bc->enter($__internal_468a521b01ae06de64c1d5e6352b03eaedb40fea3c9b650ea48db938feef63bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9329be520ba49cff37f90c5bd23a2773d39ff5c2891b7f01bfc6b5f556f83225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9329be520ba49cff37f90c5bd23a2773d39ff5c2891b7f01bfc6b5f556f83225->enter($__internal_9329be520ba49cff37f90c5bd23a2773d39ff5c2891b7f01bfc6b5f556f83225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_9329be520ba49cff37f90c5bd23a2773d39ff5c2891b7f01bfc6b5f556f83225->leave($__internal_9329be520ba49cff37f90c5bd23a2773d39ff5c2891b7f01bfc6b5f556f83225_prof);

        
        $__internal_468a521b01ae06de64c1d5e6352b03eaedb40fea3c9b650ea48db938feef63bc->leave($__internal_468a521b01ae06de64c1d5e6352b03eaedb40fea3c9b650ea48db938feef63bc_prof);

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
", "@FOSUser/Registration/register.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
