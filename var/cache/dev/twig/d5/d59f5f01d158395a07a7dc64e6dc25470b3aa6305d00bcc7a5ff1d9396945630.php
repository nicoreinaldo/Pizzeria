<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d14898bd304dc1ee7d4c6c73ffadc9c93ccf0a453528bcac8bbb8f52c1840750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_5a9d3c18f894f7f920651017ae4116bd3b4f257a1e1fb905a62255ba9046f14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9d3c18f894f7f920651017ae4116bd3b4f257a1e1fb905a62255ba9046f14e->enter($__internal_5a9d3c18f894f7f920651017ae4116bd3b4f257a1e1fb905a62255ba9046f14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_77fb0587abdbb84720a1f09ea44535530f46c58173966a769e3d3aacf0b1e0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fb0587abdbb84720a1f09ea44535530f46c58173966a769e3d3aacf0b1e0cf->enter($__internal_77fb0587abdbb84720a1f09ea44535530f46c58173966a769e3d3aacf0b1e0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a9d3c18f894f7f920651017ae4116bd3b4f257a1e1fb905a62255ba9046f14e->leave($__internal_5a9d3c18f894f7f920651017ae4116bd3b4f257a1e1fb905a62255ba9046f14e_prof);

        
        $__internal_77fb0587abdbb84720a1f09ea44535530f46c58173966a769e3d3aacf0b1e0cf->leave($__internal_77fb0587abdbb84720a1f09ea44535530f46c58173966a769e3d3aacf0b1e0cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ce5125ef994b49dbff382b61f0214fe1c47ce792deb5ad11e69bd021552191d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce5125ef994b49dbff382b61f0214fe1c47ce792deb5ad11e69bd021552191d->enter($__internal_2ce5125ef994b49dbff382b61f0214fe1c47ce792deb5ad11e69bd021552191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a983d455fe8bc7af190d85221083b4e786c5511988f8779e99bc4e9e35310639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a983d455fe8bc7af190d85221083b4e786c5511988f8779e99bc4e9e35310639->enter($__internal_a983d455fe8bc7af190d85221083b4e786c5511988f8779e99bc4e9e35310639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a983d455fe8bc7af190d85221083b4e786c5511988f8779e99bc4e9e35310639->leave($__internal_a983d455fe8bc7af190d85221083b4e786c5511988f8779e99bc4e9e35310639_prof);

        
        $__internal_2ce5125ef994b49dbff382b61f0214fe1c47ce792deb5ad11e69bd021552191d->leave($__internal_2ce5125ef994b49dbff382b61f0214fe1c47ce792deb5ad11e69bd021552191d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
