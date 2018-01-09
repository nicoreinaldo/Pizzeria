<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9b10767485e69dbfc3d047ba047e49ca6b4ac6114e0100b272cd793f16247cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b981fcecc8f1d95688847903411e9c7e0bf3781f8e1dbd19025f6b01e591a778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b981fcecc8f1d95688847903411e9c7e0bf3781f8e1dbd19025f6b01e591a778->enter($__internal_b981fcecc8f1d95688847903411e9c7e0bf3781f8e1dbd19025f6b01e591a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_0096da47fadc2849de6b2d36e5e57dea14aad5da2afc4d39d936eaf5efa292d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0096da47fadc2849de6b2d36e5e57dea14aad5da2afc4d39d936eaf5efa292d7->enter($__internal_0096da47fadc2849de6b2d36e5e57dea14aad5da2afc4d39d936eaf5efa292d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b981fcecc8f1d95688847903411e9c7e0bf3781f8e1dbd19025f6b01e591a778->leave($__internal_b981fcecc8f1d95688847903411e9c7e0bf3781f8e1dbd19025f6b01e591a778_prof);

        
        $__internal_0096da47fadc2849de6b2d36e5e57dea14aad5da2afc4d39d936eaf5efa292d7->leave($__internal_0096da47fadc2849de6b2d36e5e57dea14aad5da2afc4d39d936eaf5efa292d7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1236e743641d4768aab7e8dd6146b4d6b56b7476aaf323ef7193b943632024d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1236e743641d4768aab7e8dd6146b4d6b56b7476aaf323ef7193b943632024d8->enter($__internal_1236e743641d4768aab7e8dd6146b4d6b56b7476aaf323ef7193b943632024d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f6c1b324fa9611bc47a59355a3cfe120a8ef051e6e11e0984d0e333d7fa4ea10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c1b324fa9611bc47a59355a3cfe120a8ef051e6e11e0984d0e333d7fa4ea10->enter($__internal_f6c1b324fa9611bc47a59355a3cfe120a8ef051e6e11e0984d0e333d7fa4ea10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_f6c1b324fa9611bc47a59355a3cfe120a8ef051e6e11e0984d0e333d7fa4ea10->leave($__internal_f6c1b324fa9611bc47a59355a3cfe120a8ef051e6e11e0984d0e333d7fa4ea10_prof);

        
        $__internal_1236e743641d4768aab7e8dd6146b4d6b56b7476aaf323ef7193b943632024d8->leave($__internal_1236e743641d4768aab7e8dd6146b4d6b56b7476aaf323ef7193b943632024d8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e69b37ace20fc3bc3cea8e73a127d5e9417226d656b26e9c9c48b4e0183eb041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69b37ace20fc3bc3cea8e73a127d5e9417226d656b26e9c9c48b4e0183eb041->enter($__internal_e69b37ace20fc3bc3cea8e73a127d5e9417226d656b26e9c9c48b4e0183eb041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1d05a57c8cdb9fb3a5976d393c8c182350bbdc6ca2f8637cb11d9c441d1c4ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d05a57c8cdb9fb3a5976d393c8c182350bbdc6ca2f8637cb11d9c441d1c4ce2->enter($__internal_1d05a57c8cdb9fb3a5976d393c8c182350bbdc6ca2f8637cb11d9c441d1c4ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1d05a57c8cdb9fb3a5976d393c8c182350bbdc6ca2f8637cb11d9c441d1c4ce2->leave($__internal_1d05a57c8cdb9fb3a5976d393c8c182350bbdc6ca2f8637cb11d9c441d1c4ce2_prof);

        
        $__internal_e69b37ace20fc3bc3cea8e73a127d5e9417226d656b26e9c9c48b4e0183eb041->leave($__internal_e69b37ace20fc3bc3cea8e73a127d5e9417226d656b26e9c9c48b4e0183eb041_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ce98e3055742206e457ca7194afb6e213c798f5afd4bc424b65ee9a5197d951a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce98e3055742206e457ca7194afb6e213c798f5afd4bc424b65ee9a5197d951a->enter($__internal_ce98e3055742206e457ca7194afb6e213c798f5afd4bc424b65ee9a5197d951a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_afae25c58ca2221ae70e18efddfa4d8d99dddf3971ae3ae0a9d405a46103e8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afae25c58ca2221ae70e18efddfa4d8d99dddf3971ae3ae0a9d405a46103e8ba->enter($__internal_afae25c58ca2221ae70e18efddfa4d8d99dddf3971ae3ae0a9d405a46103e8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_afae25c58ca2221ae70e18efddfa4d8d99dddf3971ae3ae0a9d405a46103e8ba->leave($__internal_afae25c58ca2221ae70e18efddfa4d8d99dddf3971ae3ae0a9d405a46103e8ba_prof);

        
        $__internal_ce98e3055742206e457ca7194afb6e213c798f5afd4bc424b65ee9a5197d951a->leave($__internal_ce98e3055742206e457ca7194afb6e213c798f5afd4bc424b65ee9a5197d951a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
