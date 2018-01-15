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
        $__internal_298e707df344ea3e679f217d9d236eaf9b0d336be303e776875e8d09cb01e9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298e707df344ea3e679f217d9d236eaf9b0d336be303e776875e8d09cb01e9be->enter($__internal_298e707df344ea3e679f217d9d236eaf9b0d336be303e776875e8d09cb01e9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_09a6d7cadb08a5441ae1969c7053129e04bf9399a072b1b32cc4dac5410572e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a6d7cadb08a5441ae1969c7053129e04bf9399a072b1b32cc4dac5410572e2->enter($__internal_09a6d7cadb08a5441ae1969c7053129e04bf9399a072b1b32cc4dac5410572e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_298e707df344ea3e679f217d9d236eaf9b0d336be303e776875e8d09cb01e9be->leave($__internal_298e707df344ea3e679f217d9d236eaf9b0d336be303e776875e8d09cb01e9be_prof);

        
        $__internal_09a6d7cadb08a5441ae1969c7053129e04bf9399a072b1b32cc4dac5410572e2->leave($__internal_09a6d7cadb08a5441ae1969c7053129e04bf9399a072b1b32cc4dac5410572e2_prof);

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
