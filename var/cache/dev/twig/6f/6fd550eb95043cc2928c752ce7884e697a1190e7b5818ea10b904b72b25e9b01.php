<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_31613ad01af327354fac848ba879e268d208fc6a49dbc356314147374b90936c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_8f0ca7af948d108b753474b78145da7eefb21e4f398fd17087824c599e9dbdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0ca7af948d108b753474b78145da7eefb21e4f398fd17087824c599e9dbdd9->enter($__internal_8f0ca7af948d108b753474b78145da7eefb21e4f398fd17087824c599e9dbdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_cd03c0d73db889238370dbcf4be7c41f16100af4f8fd57ae935cd184ca4fb5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd03c0d73db889238370dbcf4be7c41f16100af4f8fd57ae935cd184ca4fb5d4->enter($__internal_cd03c0d73db889238370dbcf4be7c41f16100af4f8fd57ae935cd184ca4fb5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0ca7af948d108b753474b78145da7eefb21e4f398fd17087824c599e9dbdd9->leave($__internal_8f0ca7af948d108b753474b78145da7eefb21e4f398fd17087824c599e9dbdd9_prof);

        
        $__internal_cd03c0d73db889238370dbcf4be7c41f16100af4f8fd57ae935cd184ca4fb5d4->leave($__internal_cd03c0d73db889238370dbcf4be7c41f16100af4f8fd57ae935cd184ca4fb5d4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e699a58ce1fe935dde3e4d75296daa7ea1659c4b37a9eb6fd1b013e2c7821db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e699a58ce1fe935dde3e4d75296daa7ea1659c4b37a9eb6fd1b013e2c7821db->enter($__internal_6e699a58ce1fe935dde3e4d75296daa7ea1659c4b37a9eb6fd1b013e2c7821db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7cb5624f1701bb008e45149ea746b0281922b518cd9eac6b3a3308784cc7d172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb5624f1701bb008e45149ea746b0281922b518cd9eac6b3a3308784cc7d172->enter($__internal_7cb5624f1701bb008e45149ea746b0281922b518cd9eac6b3a3308784cc7d172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7cb5624f1701bb008e45149ea746b0281922b518cd9eac6b3a3308784cc7d172->leave($__internal_7cb5624f1701bb008e45149ea746b0281922b518cd9eac6b3a3308784cc7d172_prof);

        
        $__internal_6e699a58ce1fe935dde3e4d75296daa7ea1659c4b37a9eb6fd1b013e2c7821db->leave($__internal_6e699a58ce1fe935dde3e4d75296daa7ea1659c4b37a9eb6fd1b013e2c7821db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
