<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5a75330f0de78d2af386f11326b759e52188374c786f3fee655a2aa4a08361fc extends Twig_Template
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
        $__internal_a17d93278dba9dd92f17d468fe15d7d70f77d5f3dc7a5dd1816247b1475ba278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17d93278dba9dd92f17d468fe15d7d70f77d5f3dc7a5dd1816247b1475ba278->enter($__internal_a17d93278dba9dd92f17d468fe15d7d70f77d5f3dc7a5dd1816247b1475ba278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_890ca6b3dde0d229f8128e3ca535930e9ab5dea1b74af7129bbd3cb777ff87c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890ca6b3dde0d229f8128e3ca535930e9ab5dea1b74af7129bbd3cb777ff87c1->enter($__internal_890ca6b3dde0d229f8128e3ca535930e9ab5dea1b74af7129bbd3cb777ff87c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a17d93278dba9dd92f17d468fe15d7d70f77d5f3dc7a5dd1816247b1475ba278->leave($__internal_a17d93278dba9dd92f17d468fe15d7d70f77d5f3dc7a5dd1816247b1475ba278_prof);

        
        $__internal_890ca6b3dde0d229f8128e3ca535930e9ab5dea1b74af7129bbd3cb777ff87c1->leave($__internal_890ca6b3dde0d229f8128e3ca535930e9ab5dea1b74af7129bbd3cb777ff87c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
