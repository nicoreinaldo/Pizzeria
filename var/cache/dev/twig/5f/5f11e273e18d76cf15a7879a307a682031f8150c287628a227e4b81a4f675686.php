<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9b10767485e69dbfc3d047ba047e49ca6b4ac6114e0100b272cd793f16247cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseFos.html.twig", "FOSUserBundle:Registration:email.txt.twig", 2);
        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseFos.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b0003aabc0eb725a46d8581f297bf500854996a7e2468319c76b7b9ea86082b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0003aabc0eb725a46d8581f297bf500854996a7e2468319c76b7b9ea86082b->enter($__internal_5b0003aabc0eb725a46d8581f297bf500854996a7e2468319c76b7b9ea86082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_7e41ba47b8b35b30fd4be700eeeb528cd544620be08ca0c23a58e09ad77087e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e41ba47b8b35b30fd4be700eeeb528cd544620be08ca0c23a58e09ad77087e2->enter($__internal_7e41ba47b8b35b30fd4be700eeeb528cd544620be08ca0c23a58e09ad77087e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b0003aabc0eb725a46d8581f297bf500854996a7e2468319c76b7b9ea86082b->leave($__internal_5b0003aabc0eb725a46d8581f297bf500854996a7e2468319c76b7b9ea86082b_prof);

        
        $__internal_7e41ba47b8b35b30fd4be700eeeb528cd544620be08ca0c23a58e09ad77087e2->leave($__internal_7e41ba47b8b35b30fd4be700eeeb528cd544620be08ca0c23a58e09ad77087e2_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1f16f9967905aaae95d90153e4ddf54ccc675ff9074c8e51fcac0075bb73535e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f16f9967905aaae95d90153e4ddf54ccc675ff9074c8e51fcac0075bb73535e->enter($__internal_1f16f9967905aaae95d90153e4ddf54ccc675ff9074c8e51fcac0075bb73535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0ece8878fda7791583daad6114a6ed9f404d89964e10878799f0f9fa106ffb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ece8878fda7791583daad6114a6ed9f404d89964e10878799f0f9fa106ffb87->enter($__internal_0ece8878fda7791583daad6114a6ed9f404d89964e10878799f0f9fa106ffb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0ece8878fda7791583daad6114a6ed9f404d89964e10878799f0f9fa106ffb87->leave($__internal_0ece8878fda7791583daad6114a6ed9f404d89964e10878799f0f9fa106ffb87_prof);

        
        $__internal_1f16f9967905aaae95d90153e4ddf54ccc675ff9074c8e51fcac0075bb73535e->leave($__internal_1f16f9967905aaae95d90153e4ddf54ccc675ff9074c8e51fcac0075bb73535e_prof);

    }

    // line 9
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b1921c80c8bc1e05a32143ac6ad9740ced6e8e6332b7748c1dc7482038176606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1921c80c8bc1e05a32143ac6ad9740ced6e8e6332b7748c1dc7482038176606->enter($__internal_b1921c80c8bc1e05a32143ac6ad9740ced6e8e6332b7748c1dc7482038176606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f62acafcafaa6f327db7ff6620610f94c1feaf38a2375bafaeb651b25bc8f8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62acafcafaa6f327db7ff6620610f94c1feaf38a2375bafaeb651b25bc8f8c9->enter($__internal_f62acafcafaa6f327db7ff6620610f94c1feaf38a2375bafaeb651b25bc8f8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f62acafcafaa6f327db7ff6620610f94c1feaf38a2375bafaeb651b25bc8f8c9->leave($__internal_f62acafcafaa6f327db7ff6620610f94c1feaf38a2375bafaeb651b25bc8f8c9_prof);

        
        $__internal_b1921c80c8bc1e05a32143ac6ad9740ced6e8e6332b7748c1dc7482038176606->leave($__internal_b1921c80c8bc1e05a32143ac6ad9740ced6e8e6332b7748c1dc7482038176606_prof);

    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84e5b803a422a925e8abf8dd7a8823835b605418c1f666effe03691c3aa028f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e5b803a422a925e8abf8dd7a8823835b605418c1f666effe03691c3aa028f9->enter($__internal_84e5b803a422a925e8abf8dd7a8823835b605418c1f666effe03691c3aa028f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_19d25a44cd9c95e011edd4d9a1177c503a346f30d19653e42f80078ecad105d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d25a44cd9c95e011edd4d9a1177c503a346f30d19653e42f80078ecad105d7->enter($__internal_19d25a44cd9c95e011edd4d9a1177c503a346f30d19653e42f80078ecad105d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_19d25a44cd9c95e011edd4d9a1177c503a346f30d19653e42f80078ecad105d7->leave($__internal_19d25a44cd9c95e011edd4d9a1177c503a346f30d19653e42f80078ecad105d7_prof);

        
        $__internal_84e5b803a422a925e8abf8dd7a8823835b605418c1f666effe03691c3aa028f9->leave($__internal_84e5b803a422a925e8abf8dd7a8823835b605418c1f666effe03691c3aa028f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  70 => 11,  61 => 9,  51 => 5,  42 => 3,  11 => 2,);
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
\t{% extends \"::baseFos.html.twig\" %}
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
