<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bedb03c0ae372d0efef86e0ad0ad8a12aa1820a4d4cd2897f7bf1b18a7f45c6d extends Twig_Template
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
        $__internal_77b7c1ba9ba94f0d8583c15dcac912e8a3d3a9e9f5c010c3692296944f8eb1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b7c1ba9ba94f0d8583c15dcac912e8a3d3a9e9f5c010c3692296944f8eb1db->enter($__internal_77b7c1ba9ba94f0d8583c15dcac912e8a3d3a9e9f5c010c3692296944f8eb1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_603bc1639fdd5f67708fc06fa10146f80e2a45fce387e21b488acaf672eb5733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603bc1639fdd5f67708fc06fa10146f80e2a45fce387e21b488acaf672eb5733->enter($__internal_603bc1639fdd5f67708fc06fa10146f80e2a45fce387e21b488acaf672eb5733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b7c1ba9ba94f0d8583c15dcac912e8a3d3a9e9f5c010c3692296944f8eb1db->leave($__internal_77b7c1ba9ba94f0d8583c15dcac912e8a3d3a9e9f5c010c3692296944f8eb1db_prof);

        
        $__internal_603bc1639fdd5f67708fc06fa10146f80e2a45fce387e21b488acaf672eb5733->leave($__internal_603bc1639fdd5f67708fc06fa10146f80e2a45fce387e21b488acaf672eb5733_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_264c6a8107a64ec79328009020cbc6f2ee9a86aa6e04b38e3de15827d08ae949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264c6a8107a64ec79328009020cbc6f2ee9a86aa6e04b38e3de15827d08ae949->enter($__internal_264c6a8107a64ec79328009020cbc6f2ee9a86aa6e04b38e3de15827d08ae949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d36c70784f1e1b8e9afb3b6f27d177a4c2ab364b23d0d63e0813226886750399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36c70784f1e1b8e9afb3b6f27d177a4c2ab364b23d0d63e0813226886750399->enter($__internal_d36c70784f1e1b8e9afb3b6f27d177a4c2ab364b23d0d63e0813226886750399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d36c70784f1e1b8e9afb3b6f27d177a4c2ab364b23d0d63e0813226886750399->leave($__internal_d36c70784f1e1b8e9afb3b6f27d177a4c2ab364b23d0d63e0813226886750399_prof);

        
        $__internal_264c6a8107a64ec79328009020cbc6f2ee9a86aa6e04b38e3de15827d08ae949->leave($__internal_264c6a8107a64ec79328009020cbc6f2ee9a86aa6e04b38e3de15827d08ae949_prof);

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
", "FOSUserBundle:Resetting:reset.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
