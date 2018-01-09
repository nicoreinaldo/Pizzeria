<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5ae6cdd1496f1485f38725b410e187b4eb344f728df87b8dff02f34dfd754ccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb686e74e9bc8dd3b5f0c3cc9bcee8d76987f4f7e3e656e171f9b4eb9221bab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb686e74e9bc8dd3b5f0c3cc9bcee8d76987f4f7e3e656e171f9b4eb9221bab3->enter($__internal_eb686e74e9bc8dd3b5f0c3cc9bcee8d76987f4f7e3e656e171f9b4eb9221bab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_3cc4238802f1e979418f6b314596b3b86023ccce42479bf52c6b31c74f5af38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc4238802f1e979418f6b314596b3b86023ccce42479bf52c6b31c74f5af38e->enter($__internal_3cc4238802f1e979418f6b314596b3b86023ccce42479bf52c6b31c74f5af38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_eb686e74e9bc8dd3b5f0c3cc9bcee8d76987f4f7e3e656e171f9b4eb9221bab3->leave($__internal_eb686e74e9bc8dd3b5f0c3cc9bcee8d76987f4f7e3e656e171f9b4eb9221bab3_prof);

        
        $__internal_3cc4238802f1e979418f6b314596b3b86023ccce42479bf52c6b31c74f5af38e->leave($__internal_3cc4238802f1e979418f6b314596b3b86023ccce42479bf52c6b31c74f5af38e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
