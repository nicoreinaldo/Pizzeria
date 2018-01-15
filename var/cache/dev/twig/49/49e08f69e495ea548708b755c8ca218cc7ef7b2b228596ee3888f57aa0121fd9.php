<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ad73c98149553abdb1a1e8a7ae4dd4b1aa05c8ec3b12e4b3213f34e837d36c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_22e76f0cd4153911db8123481293b00e8d58ed52016cd15c7b74cded040146f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e76f0cd4153911db8123481293b00e8d58ed52016cd15c7b74cded040146f7->enter($__internal_22e76f0cd4153911db8123481293b00e8d58ed52016cd15c7b74cded040146f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_120e8e1bfd3a3c6eaf055019e41a02e72ee1ae0a570cda9ead19bfbd7632e040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120e8e1bfd3a3c6eaf055019e41a02e72ee1ae0a570cda9ead19bfbd7632e040->enter($__internal_120e8e1bfd3a3c6eaf055019e41a02e72ee1ae0a570cda9ead19bfbd7632e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e76f0cd4153911db8123481293b00e8d58ed52016cd15c7b74cded040146f7->leave($__internal_22e76f0cd4153911db8123481293b00e8d58ed52016cd15c7b74cded040146f7_prof);

        
        $__internal_120e8e1bfd3a3c6eaf055019e41a02e72ee1ae0a570cda9ead19bfbd7632e040->leave($__internal_120e8e1bfd3a3c6eaf055019e41a02e72ee1ae0a570cda9ead19bfbd7632e040_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb7601bb4b9b67670f07348d050f298e7dcebb729c2c3551a7f3df6791c82eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7601bb4b9b67670f07348d050f298e7dcebb729c2c3551a7f3df6791c82eb8->enter($__internal_cb7601bb4b9b67670f07348d050f298e7dcebb729c2c3551a7f3df6791c82eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8981f8d865f2a320a911ebc21fb5709b4d2d3ee0809acef0a5c985108d035598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8981f8d865f2a320a911ebc21fb5709b4d2d3ee0809acef0a5c985108d035598->enter($__internal_8981f8d865f2a320a911ebc21fb5709b4d2d3ee0809acef0a5c985108d035598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8981f8d865f2a320a911ebc21fb5709b4d2d3ee0809acef0a5c985108d035598->leave($__internal_8981f8d865f2a320a911ebc21fb5709b4d2d3ee0809acef0a5c985108d035598_prof);

        
        $__internal_cb7601bb4b9b67670f07348d050f298e7dcebb729c2c3551a7f3df6791c82eb8->leave($__internal_cb7601bb4b9b67670f07348d050f298e7dcebb729c2c3551a7f3df6791c82eb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
