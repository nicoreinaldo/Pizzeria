<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f532b61b6b3f350517a33eb175be6b4ea5b05805082afd137861f302fb623794 extends Twig_Template
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
        $__internal_f27f47f57b4d5940ce66aa5d50b5b1da07ec875b4867d8c1bce3e630631f861b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27f47f57b4d5940ce66aa5d50b5b1da07ec875b4867d8c1bce3e630631f861b->enter($__internal_f27f47f57b4d5940ce66aa5d50b5b1da07ec875b4867d8c1bce3e630631f861b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_811c14469506959aa490bd66e73ab56b7e0a3cebac7db7a3f5a94c1af922b0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811c14469506959aa490bd66e73ab56b7e0a3cebac7db7a3f5a94c1af922b0c9->enter($__internal_811c14469506959aa490bd66e73ab56b7e0a3cebac7db7a3f5a94c1af922b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f27f47f57b4d5940ce66aa5d50b5b1da07ec875b4867d8c1bce3e630631f861b->leave($__internal_f27f47f57b4d5940ce66aa5d50b5b1da07ec875b4867d8c1bce3e630631f861b_prof);

        
        $__internal_811c14469506959aa490bd66e73ab56b7e0a3cebac7db7a3f5a94c1af922b0c9->leave($__internal_811c14469506959aa490bd66e73ab56b7e0a3cebac7db7a3f5a94c1af922b0c9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3837d6d0de3db9001dd79576970e1d86e171dcd2592b8f1e76b98646b525329d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3837d6d0de3db9001dd79576970e1d86e171dcd2592b8f1e76b98646b525329d->enter($__internal_3837d6d0de3db9001dd79576970e1d86e171dcd2592b8f1e76b98646b525329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e6d340e547f5ee70d850777c90923dd348e1d7ff66d6ba928deea15843a51f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d340e547f5ee70d850777c90923dd348e1d7ff66d6ba928deea15843a51f61->enter($__internal_e6d340e547f5ee70d850777c90923dd348e1d7ff66d6ba928deea15843a51f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e6d340e547f5ee70d850777c90923dd348e1d7ff66d6ba928deea15843a51f61->leave($__internal_e6d340e547f5ee70d850777c90923dd348e1d7ff66d6ba928deea15843a51f61_prof);

        
        $__internal_3837d6d0de3db9001dd79576970e1d86e171dcd2592b8f1e76b98646b525329d->leave($__internal_3837d6d0de3db9001dd79576970e1d86e171dcd2592b8f1e76b98646b525329d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e8cc8d5426f748e47e2e4b4d61755b41219d4efe87a0689fad41d9c91ddf2af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cc8d5426f748e47e2e4b4d61755b41219d4efe87a0689fad41d9c91ddf2af7->enter($__internal_e8cc8d5426f748e47e2e4b4d61755b41219d4efe87a0689fad41d9c91ddf2af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a39c99b33cdac06a39b95b7d2295767fb771fe6125dba4d5172e1ebe8a713854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39c99b33cdac06a39b95b7d2295767fb771fe6125dba4d5172e1ebe8a713854->enter($__internal_a39c99b33cdac06a39b95b7d2295767fb771fe6125dba4d5172e1ebe8a713854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a39c99b33cdac06a39b95b7d2295767fb771fe6125dba4d5172e1ebe8a713854->leave($__internal_a39c99b33cdac06a39b95b7d2295767fb771fe6125dba4d5172e1ebe8a713854_prof);

        
        $__internal_e8cc8d5426f748e47e2e4b4d61755b41219d4efe87a0689fad41d9c91ddf2af7->leave($__internal_e8cc8d5426f748e47e2e4b4d61755b41219d4efe87a0689fad41d9c91ddf2af7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_090c92548479faf661c6d2b86e5b9a275c5325949c99f585b724822b4bbbf9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090c92548479faf661c6d2b86e5b9a275c5325949c99f585b724822b4bbbf9c4->enter($__internal_090c92548479faf661c6d2b86e5b9a275c5325949c99f585b724822b4bbbf9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_afbd2ec5b53b81416e1651630749f541f62193b27d019cbcce2010f511bfbdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbd2ec5b53b81416e1651630749f541f62193b27d019cbcce2010f511bfbdfc->enter($__internal_afbd2ec5b53b81416e1651630749f541f62193b27d019cbcce2010f511bfbdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_afbd2ec5b53b81416e1651630749f541f62193b27d019cbcce2010f511bfbdfc->leave($__internal_afbd2ec5b53b81416e1651630749f541f62193b27d019cbcce2010f511bfbdfc_prof);

        
        $__internal_090c92548479faf661c6d2b86e5b9a275c5325949c99f585b724822b4bbbf9c4->leave($__internal_090c92548479faf661c6d2b86e5b9a275c5325949c99f585b724822b4bbbf9c4_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
