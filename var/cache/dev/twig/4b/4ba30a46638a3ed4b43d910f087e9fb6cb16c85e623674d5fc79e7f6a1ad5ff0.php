<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_630743e2773a2dbb5df0d158af150638c68e0a18779e13eb71ff9e826dabb643 extends Twig_Template
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
        $__internal_4513d7f4268647becf9e338d85c7f2948a4977b0234958163859b4dbc7a88e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4513d7f4268647becf9e338d85c7f2948a4977b0234958163859b4dbc7a88e9d->enter($__internal_4513d7f4268647becf9e338d85c7f2948a4977b0234958163859b4dbc7a88e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e6e2f4a4587ca5c2968452a3a492eb8ff12cfd422ee355106f108d930988dbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e2f4a4587ca5c2968452a3a492eb8ff12cfd422ee355106f108d930988dbaf->enter($__internal_e6e2f4a4587ca5c2968452a3a492eb8ff12cfd422ee355106f108d930988dbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4513d7f4268647becf9e338d85c7f2948a4977b0234958163859b4dbc7a88e9d->leave($__internal_4513d7f4268647becf9e338d85c7f2948a4977b0234958163859b4dbc7a88e9d_prof);

        
        $__internal_e6e2f4a4587ca5c2968452a3a492eb8ff12cfd422ee355106f108d930988dbaf->leave($__internal_e6e2f4a4587ca5c2968452a3a492eb8ff12cfd422ee355106f108d930988dbaf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f77d384a0cfea0241be42b95399b5a27622c81598cb974df79bac9a064cd3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f77d384a0cfea0241be42b95399b5a27622c81598cb974df79bac9a064cd3ae->enter($__internal_0f77d384a0cfea0241be42b95399b5a27622c81598cb974df79bac9a064cd3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_34cfb3fc5102f1ed94945dfd0d6eb665a0a361d99189e9af59ea574404a2decb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34cfb3fc5102f1ed94945dfd0d6eb665a0a361d99189e9af59ea574404a2decb->enter($__internal_34cfb3fc5102f1ed94945dfd0d6eb665a0a361d99189e9af59ea574404a2decb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_34cfb3fc5102f1ed94945dfd0d6eb665a0a361d99189e9af59ea574404a2decb->leave($__internal_34cfb3fc5102f1ed94945dfd0d6eb665a0a361d99189e9af59ea574404a2decb_prof);

        
        $__internal_0f77d384a0cfea0241be42b95399b5a27622c81598cb974df79bac9a064cd3ae->leave($__internal_0f77d384a0cfea0241be42b95399b5a27622c81598cb974df79bac9a064cd3ae_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
