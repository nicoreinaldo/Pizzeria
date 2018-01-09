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
        $__internal_e4b9aec2b11b00abbf51c37c114734380098d98e0a7df665296d21f410c70ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b9aec2b11b00abbf51c37c114734380098d98e0a7df665296d21f410c70ffc->enter($__internal_e4b9aec2b11b00abbf51c37c114734380098d98e0a7df665296d21f410c70ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_e10407d3ec7d315056b25018b2100c84e6561295f96887e227a6b3dfc1bc69ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10407d3ec7d315056b25018b2100c84e6561295f96887e227a6b3dfc1bc69ff->enter($__internal_e10407d3ec7d315056b25018b2100c84e6561295f96887e227a6b3dfc1bc69ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b9aec2b11b00abbf51c37c114734380098d98e0a7df665296d21f410c70ffc->leave($__internal_e4b9aec2b11b00abbf51c37c114734380098d98e0a7df665296d21f410c70ffc_prof);

        
        $__internal_e10407d3ec7d315056b25018b2100c84e6561295f96887e227a6b3dfc1bc69ff->leave($__internal_e10407d3ec7d315056b25018b2100c84e6561295f96887e227a6b3dfc1bc69ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9d8a57e5073f21c03a1eb72b24b262b1dc828206d6301f71c3c5f18e96c5cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d8a57e5073f21c03a1eb72b24b262b1dc828206d6301f71c3c5f18e96c5cfc->enter($__internal_d9d8a57e5073f21c03a1eb72b24b262b1dc828206d6301f71c3c5f18e96c5cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ce37ce1b0f47ec1c514d15488e2924b0ac5125547267b23fb212941e11d6175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce37ce1b0f47ec1c514d15488e2924b0ac5125547267b23fb212941e11d6175->enter($__internal_1ce37ce1b0f47ec1c514d15488e2924b0ac5125547267b23fb212941e11d6175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1ce37ce1b0f47ec1c514d15488e2924b0ac5125547267b23fb212941e11d6175->leave($__internal_1ce37ce1b0f47ec1c514d15488e2924b0ac5125547267b23fb212941e11d6175_prof);

        
        $__internal_d9d8a57e5073f21c03a1eb72b24b262b1dc828206d6301f71c3c5f18e96c5cfc->leave($__internal_d9d8a57e5073f21c03a1eb72b24b262b1dc828206d6301f71c3c5f18e96c5cfc_prof);

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
