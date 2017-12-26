<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4218626ba41819b78e07e43c7cfae923de446c5b68b26fb1d29885b7bd7668d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_1030f9956f75b64e917d303899b5102d0f08fadd46aa13b501388a65c04e5a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1030f9956f75b64e917d303899b5102d0f08fadd46aa13b501388a65c04e5a12->enter($__internal_1030f9956f75b64e917d303899b5102d0f08fadd46aa13b501388a65c04e5a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_26a4feaf6cad541ed4f096e2647889317cc0fbbda3f17777cbfa4ddf926177f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a4feaf6cad541ed4f096e2647889317cc0fbbda3f17777cbfa4ddf926177f0->enter($__internal_26a4feaf6cad541ed4f096e2647889317cc0fbbda3f17777cbfa4ddf926177f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1030f9956f75b64e917d303899b5102d0f08fadd46aa13b501388a65c04e5a12->leave($__internal_1030f9956f75b64e917d303899b5102d0f08fadd46aa13b501388a65c04e5a12_prof);

        
        $__internal_26a4feaf6cad541ed4f096e2647889317cc0fbbda3f17777cbfa4ddf926177f0->leave($__internal_26a4feaf6cad541ed4f096e2647889317cc0fbbda3f17777cbfa4ddf926177f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee66dffc71f452534cdd49015dbc8d91e98546b68dd9e4693e94d2dd54e69504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee66dffc71f452534cdd49015dbc8d91e98546b68dd9e4693e94d2dd54e69504->enter($__internal_ee66dffc71f452534cdd49015dbc8d91e98546b68dd9e4693e94d2dd54e69504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ec038843e9fad73af294d10c2e306eb4b78b0b734c6462cb715af4baa764211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec038843e9fad73af294d10c2e306eb4b78b0b734c6462cb715af4baa764211->enter($__internal_0ec038843e9fad73af294d10c2e306eb4b78b0b734c6462cb715af4baa764211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0ec038843e9fad73af294d10c2e306eb4b78b0b734c6462cb715af4baa764211->leave($__internal_0ec038843e9fad73af294d10c2e306eb4b78b0b734c6462cb715af4baa764211_prof);

        
        $__internal_ee66dffc71f452534cdd49015dbc8d91e98546b68dd9e4693e94d2dd54e69504->leave($__internal_ee66dffc71f452534cdd49015dbc8d91e98546b68dd9e4693e94d2dd54e69504_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
