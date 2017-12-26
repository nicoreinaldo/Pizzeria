<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5a15e59f286e55fa2850b55fd3e8d0c3751ec53a01b18bc0ee9f9e99da13ec42 extends Twig_Template
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
        $__internal_2627c5d6c5eb396abcff06a2bf8921f0c721c2969f8ce968894e293de13be045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2627c5d6c5eb396abcff06a2bf8921f0c721c2969f8ce968894e293de13be045->enter($__internal_2627c5d6c5eb396abcff06a2bf8921f0c721c2969f8ce968894e293de13be045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_8bfc07672cc7961b8ecf42cfb0760451d68cdd7b2163683d0bb13738be500c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfc07672cc7961b8ecf42cfb0760451d68cdd7b2163683d0bb13738be500c9c->enter($__internal_8bfc07672cc7961b8ecf42cfb0760451d68cdd7b2163683d0bb13738be500c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_2627c5d6c5eb396abcff06a2bf8921f0c721c2969f8ce968894e293de13be045->leave($__internal_2627c5d6c5eb396abcff06a2bf8921f0c721c2969f8ce968894e293de13be045_prof);

        
        $__internal_8bfc07672cc7961b8ecf42cfb0760451d68cdd7b2163683d0bb13738be500c9c->leave($__internal_8bfc07672cc7961b8ecf42cfb0760451d68cdd7b2163683d0bb13738be500c9c_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
