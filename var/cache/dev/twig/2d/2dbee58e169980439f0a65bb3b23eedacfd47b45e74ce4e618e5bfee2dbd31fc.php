<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_8ea3f0e73925a85880e8ccde0ee2b78d788398f4ee13398666f8eb8c7703e36b extends Twig_Template
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
        $__internal_8854de9a880c3d7377a6eab19217c31ef1fa3d2770694030c49caccfbca44697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8854de9a880c3d7377a6eab19217c31ef1fa3d2770694030c49caccfbca44697->enter($__internal_8854de9a880c3d7377a6eab19217c31ef1fa3d2770694030c49caccfbca44697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_2725d3b1fe8a8b7e28ee4c3c05794be4d782134d5dd321e29054eae618d334bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2725d3b1fe8a8b7e28ee4c3c05794be4d782134d5dd321e29054eae618d334bc->enter($__internal_2725d3b1fe8a8b7e28ee4c3c05794be4d782134d5dd321e29054eae618d334bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_8854de9a880c3d7377a6eab19217c31ef1fa3d2770694030c49caccfbca44697->leave($__internal_8854de9a880c3d7377a6eab19217c31ef1fa3d2770694030c49caccfbca44697_prof);

        
        $__internal_2725d3b1fe8a8b7e28ee4c3c05794be4d782134d5dd321e29054eae618d334bc->leave($__internal_2725d3b1fe8a8b7e28ee4c3c05794be4d782134d5dd321e29054eae618d334bc_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
