<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0fb52d8c000ae7e5ccfad1d249388356a24ac2d10fdd9f79c1d8ddbed3bcba73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_28b6c91cf82c51032aa15efed6cda102e8fdc177a1fb7566136d69905ad21379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b6c91cf82c51032aa15efed6cda102e8fdc177a1fb7566136d69905ad21379->enter($__internal_28b6c91cf82c51032aa15efed6cda102e8fdc177a1fb7566136d69905ad21379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0ddf85a7d0cb8babe0211ad1e9b541eb7ad407129981c91424c6583188760f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddf85a7d0cb8babe0211ad1e9b541eb7ad407129981c91424c6583188760f25->enter($__internal_0ddf85a7d0cb8babe0211ad1e9b541eb7ad407129981c91424c6583188760f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28b6c91cf82c51032aa15efed6cda102e8fdc177a1fb7566136d69905ad21379->leave($__internal_28b6c91cf82c51032aa15efed6cda102e8fdc177a1fb7566136d69905ad21379_prof);

        
        $__internal_0ddf85a7d0cb8babe0211ad1e9b541eb7ad407129981c91424c6583188760f25->leave($__internal_0ddf85a7d0cb8babe0211ad1e9b541eb7ad407129981c91424c6583188760f25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a147b926cc3c7008cab479b0a8d7e2e7921c788411a98b73d86ba7473b537c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a147b926cc3c7008cab479b0a8d7e2e7921c788411a98b73d86ba7473b537c62->enter($__internal_a147b926cc3c7008cab479b0a8d7e2e7921c788411a98b73d86ba7473b537c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_771cabe78b277abb854a5e310fa61cf430cc948743f4be557c67c6c1fcc9a3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771cabe78b277abb854a5e310fa61cf430cc948743f4be557c67c6c1fcc9a3ad->enter($__internal_771cabe78b277abb854a5e310fa61cf430cc948743f4be557c67c6c1fcc9a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_771cabe78b277abb854a5e310fa61cf430cc948743f4be557c67c6c1fcc9a3ad->leave($__internal_771cabe78b277abb854a5e310fa61cf430cc948743f4be557c67c6c1fcc9a3ad_prof);

        
        $__internal_a147b926cc3c7008cab479b0a8d7e2e7921c788411a98b73d86ba7473b537c62->leave($__internal_a147b926cc3c7008cab479b0a8d7e2e7921c788411a98b73d86ba7473b537c62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
