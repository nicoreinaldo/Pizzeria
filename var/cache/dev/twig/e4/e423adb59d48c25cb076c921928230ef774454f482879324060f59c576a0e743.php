<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b2169b9c4bc7f76a56d628036f73235d20fd5f61026a2b4041dbff9e9226fb1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_58af90f6f6cfbd2c938ce17e338c2453ca37a004301db39084e1e51ac3933352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58af90f6f6cfbd2c938ce17e338c2453ca37a004301db39084e1e51ac3933352->enter($__internal_58af90f6f6cfbd2c938ce17e338c2453ca37a004301db39084e1e51ac3933352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1b48d2642f1d545d3de731ca3c454e8f4fc1c44572509f6b4b08847c7f99ad88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b48d2642f1d545d3de731ca3c454e8f4fc1c44572509f6b4b08847c7f99ad88->enter($__internal_1b48d2642f1d545d3de731ca3c454e8f4fc1c44572509f6b4b08847c7f99ad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58af90f6f6cfbd2c938ce17e338c2453ca37a004301db39084e1e51ac3933352->leave($__internal_58af90f6f6cfbd2c938ce17e338c2453ca37a004301db39084e1e51ac3933352_prof);

        
        $__internal_1b48d2642f1d545d3de731ca3c454e8f4fc1c44572509f6b4b08847c7f99ad88->leave($__internal_1b48d2642f1d545d3de731ca3c454e8f4fc1c44572509f6b4b08847c7f99ad88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34c017f2aba477a5fcfbe31d6cf54fc818a73d583931a2446fdb921821ee3970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c017f2aba477a5fcfbe31d6cf54fc818a73d583931a2446fdb921821ee3970->enter($__internal_34c017f2aba477a5fcfbe31d6cf54fc818a73d583931a2446fdb921821ee3970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff023a03fbfd0f8867292667e4e84585bf4d4770a1ec1450fd00d6e512e8db81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff023a03fbfd0f8867292667e4e84585bf4d4770a1ec1450fd00d6e512e8db81->enter($__internal_ff023a03fbfd0f8867292667e4e84585bf4d4770a1ec1450fd00d6e512e8db81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ff023a03fbfd0f8867292667e4e84585bf4d4770a1ec1450fd00d6e512e8db81->leave($__internal_ff023a03fbfd0f8867292667e4e84585bf4d4770a1ec1450fd00d6e512e8db81_prof);

        
        $__internal_34c017f2aba477a5fcfbe31d6cf54fc818a73d583931a2446fdb921821ee3970->leave($__internal_34c017f2aba477a5fcfbe31d6cf54fc818a73d583931a2446fdb921821ee3970_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
