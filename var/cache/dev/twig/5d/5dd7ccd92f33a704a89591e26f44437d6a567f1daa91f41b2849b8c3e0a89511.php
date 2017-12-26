<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_50765ea9f3b79110318ff17402f2becdc00499c3164d30aa3fa085ff94ccd376 extends Twig_Template
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
        $__internal_89365e2456bb11a7a93cae82d19fca4498d2b75bdf7c01f428fa81c80efc89cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89365e2456bb11a7a93cae82d19fca4498d2b75bdf7c01f428fa81c80efc89cc->enter($__internal_89365e2456bb11a7a93cae82d19fca4498d2b75bdf7c01f428fa81c80efc89cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d002a65224ce5b4c10f9abae47ab43e6b18c747b0644a190b0b43ded784be6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d002a65224ce5b4c10f9abae47ab43e6b18c747b0644a190b0b43ded784be6a5->enter($__internal_d002a65224ce5b4c10f9abae47ab43e6b18c747b0644a190b0b43ded784be6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89365e2456bb11a7a93cae82d19fca4498d2b75bdf7c01f428fa81c80efc89cc->leave($__internal_89365e2456bb11a7a93cae82d19fca4498d2b75bdf7c01f428fa81c80efc89cc_prof);

        
        $__internal_d002a65224ce5b4c10f9abae47ab43e6b18c747b0644a190b0b43ded784be6a5->leave($__internal_d002a65224ce5b4c10f9abae47ab43e6b18c747b0644a190b0b43ded784be6a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9f56285653f307ba2078656d9e7c9093b34d67ff2c2bd2f92e08cf3170ab2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f56285653f307ba2078656d9e7c9093b34d67ff2c2bd2f92e08cf3170ab2ef->enter($__internal_c9f56285653f307ba2078656d9e7c9093b34d67ff2c2bd2f92e08cf3170ab2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7df5242e3592039d293869fe96755dd26eda0c3a808e22612097bf10893e8f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df5242e3592039d293869fe96755dd26eda0c3a808e22612097bf10893e8f70->enter($__internal_7df5242e3592039d293869fe96755dd26eda0c3a808e22612097bf10893e8f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7df5242e3592039d293869fe96755dd26eda0c3a808e22612097bf10893e8f70->leave($__internal_7df5242e3592039d293869fe96755dd26eda0c3a808e22612097bf10893e8f70_prof);

        
        $__internal_c9f56285653f307ba2078656d9e7c9093b34d67ff2c2bd2f92e08cf3170ab2ef->leave($__internal_c9f56285653f307ba2078656d9e7c9093b34d67ff2c2bd2f92e08cf3170ab2ef_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
