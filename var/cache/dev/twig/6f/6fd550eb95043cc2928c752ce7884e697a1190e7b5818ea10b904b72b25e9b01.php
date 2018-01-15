<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_31613ad01af327354fac848ba879e268d208fc6a49dbc356314147374b90936c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::baseFos.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 4);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseFos.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb9eac309dfa63955ad4adcbafa2589b296b5fff8837812c1cdde94cb60b16d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9eac309dfa63955ad4adcbafa2589b296b5fff8837812c1cdde94cb60b16d4->enter($__internal_eb9eac309dfa63955ad4adcbafa2589b296b5fff8837812c1cdde94cb60b16d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_54f455f51b34cd6e27c7aaa928aebc0b8416c1056a0d97fa59cbf6c4e6dc417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f455f51b34cd6e27c7aaa928aebc0b8416c1056a0d97fa59cbf6c4e6dc417e->enter($__internal_54f455f51b34cd6e27c7aaa928aebc0b8416c1056a0d97fa59cbf6c4e6dc417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb9eac309dfa63955ad4adcbafa2589b296b5fff8837812c1cdde94cb60b16d4->leave($__internal_eb9eac309dfa63955ad4adcbafa2589b296b5fff8837812c1cdde94cb60b16d4_prof);

        
        $__internal_54f455f51b34cd6e27c7aaa928aebc0b8416c1056a0d97fa59cbf6c4e6dc417e->leave($__internal_54f455f51b34cd6e27c7aaa928aebc0b8416c1056a0d97fa59cbf6c4e6dc417e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2ad8cc4b564cd600e92904623e89a9b9e45643fbf7570b033ae2fdec77b128c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ad8cc4b564cd600e92904623e89a9b9e45643fbf7570b033ae2fdec77b128c->enter($__internal_a2ad8cc4b564cd600e92904623e89a9b9e45643fbf7570b033ae2fdec77b128c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b08f6607eb48dbd8c4eae4ce8cdbfdb0d892577c505b3c0abbe30ec221508b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b08f6607eb48dbd8c4eae4ce8cdbfdb0d892577c505b3c0abbe30ec221508b0->enter($__internal_7b08f6607eb48dbd8c4eae4ce8cdbfdb0d892577c505b3c0abbe30ec221508b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7b08f6607eb48dbd8c4eae4ce8cdbfdb0d892577c505b3c0abbe30ec221508b0->leave($__internal_7b08f6607eb48dbd8c4eae4ce8cdbfdb0d892577c505b3c0abbe30ec221508b0_prof);

        
        $__internal_a2ad8cc4b564cd600e92904623e89a9b9e45643fbf7570b033ae2fdec77b128c->leave($__internal_a2ad8cc4b564cd600e92904623e89a9b9e45643fbf7570b033ae2fdec77b128c_prof);

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
        return array (  49 => 6,  40 => 5,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% trans_default_domain 'FOSUserBundle' %}
{% extends \"::baseFos.html.twig\" %}
{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
