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
        $__internal_cbd29664c4018a6bc07a50c9012b534d8d5b378c4b73ef11b77c747712f4fae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd29664c4018a6bc07a50c9012b534d8d5b378c4b73ef11b77c747712f4fae4->enter($__internal_cbd29664c4018a6bc07a50c9012b534d8d5b378c4b73ef11b77c747712f4fae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_c646600e040627de2d7434c4d2c12511b2c4cc8cf4e8ca02ed00d75053c274b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c646600e040627de2d7434c4d2c12511b2c4cc8cf4e8ca02ed00d75053c274b5->enter($__internal_c646600e040627de2d7434c4d2c12511b2c4cc8cf4e8ca02ed00d75053c274b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbd29664c4018a6bc07a50c9012b534d8d5b378c4b73ef11b77c747712f4fae4->leave($__internal_cbd29664c4018a6bc07a50c9012b534d8d5b378c4b73ef11b77c747712f4fae4_prof);

        
        $__internal_c646600e040627de2d7434c4d2c12511b2c4cc8cf4e8ca02ed00d75053c274b5->leave($__internal_c646600e040627de2d7434c4d2c12511b2c4cc8cf4e8ca02ed00d75053c274b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_725855c7d2d0ec2f8a3c01cd9fcf8e54e814d255a4578da2288c33cac4766805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725855c7d2d0ec2f8a3c01cd9fcf8e54e814d255a4578da2288c33cac4766805->enter($__internal_725855c7d2d0ec2f8a3c01cd9fcf8e54e814d255a4578da2288c33cac4766805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_55d0c66e825f21921c70eacc6b5378a1f13a2deeb50ca2b8f95d46998b86793d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d0c66e825f21921c70eacc6b5378a1f13a2deeb50ca2b8f95d46998b86793d->enter($__internal_55d0c66e825f21921c70eacc6b5378a1f13a2deeb50ca2b8f95d46998b86793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_55d0c66e825f21921c70eacc6b5378a1f13a2deeb50ca2b8f95d46998b86793d->leave($__internal_55d0c66e825f21921c70eacc6b5378a1f13a2deeb50ca2b8f95d46998b86793d_prof);

        
        $__internal_725855c7d2d0ec2f8a3c01cd9fcf8e54e814d255a4578da2288c33cac4766805->leave($__internal_725855c7d2d0ec2f8a3c01cd9fcf8e54e814d255a4578da2288c33cac4766805_prof);

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
