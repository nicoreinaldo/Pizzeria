<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_20e3f87f3a57fcc57b1914bdcffdaa45eba9fc163f53a2772c9293d09a2f7717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_52a89dcc863d867a081dd6156d6340016def7d09b26572042a7441cf617ebff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a89dcc863d867a081dd6156d6340016def7d09b26572042a7441cf617ebff3->enter($__internal_52a89dcc863d867a081dd6156d6340016def7d09b26572042a7441cf617ebff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_36a45930ffbd3258a87955c2c1ba14536e9a7fbb94ae8bc244b3cce95748e5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a45930ffbd3258a87955c2c1ba14536e9a7fbb94ae8bc244b3cce95748e5a2->enter($__internal_36a45930ffbd3258a87955c2c1ba14536e9a7fbb94ae8bc244b3cce95748e5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a89dcc863d867a081dd6156d6340016def7d09b26572042a7441cf617ebff3->leave($__internal_52a89dcc863d867a081dd6156d6340016def7d09b26572042a7441cf617ebff3_prof);

        
        $__internal_36a45930ffbd3258a87955c2c1ba14536e9a7fbb94ae8bc244b3cce95748e5a2->leave($__internal_36a45930ffbd3258a87955c2c1ba14536e9a7fbb94ae8bc244b3cce95748e5a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab7833519c7bfb4b8d2626009f5954ac0816a8268908b4a366bf233df1acbcb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7833519c7bfb4b8d2626009f5954ac0816a8268908b4a366bf233df1acbcb6->enter($__internal_ab7833519c7bfb4b8d2626009f5954ac0816a8268908b4a366bf233df1acbcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7aab2ca0f2fa06590334997433e1a8f917e246f0fa1e1585dd0da3aa49c3c94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aab2ca0f2fa06590334997433e1a8f917e246f0fa1e1585dd0da3aa49c3c94a->enter($__internal_7aab2ca0f2fa06590334997433e1a8f917e246f0fa1e1585dd0da3aa49c3c94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7aab2ca0f2fa06590334997433e1a8f917e246f0fa1e1585dd0da3aa49c3c94a->leave($__internal_7aab2ca0f2fa06590334997433e1a8f917e246f0fa1e1585dd0da3aa49c3c94a_prof);

        
        $__internal_ab7833519c7bfb4b8d2626009f5954ac0816a8268908b4a366bf233df1acbcb6->leave($__internal_ab7833519c7bfb4b8d2626009f5954ac0816a8268908b4a366bf233df1acbcb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
