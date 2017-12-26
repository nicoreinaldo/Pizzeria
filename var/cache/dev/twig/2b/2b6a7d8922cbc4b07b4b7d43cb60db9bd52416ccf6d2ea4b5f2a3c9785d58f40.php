<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_884286d8d0455d7b3b8800d15524a4f4afe100418ecb85901b2e3108e9830036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_b5879224346d8c82d0ff70f3842e5366a0649b46fcb5f26220c90e66f243d602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5879224346d8c82d0ff70f3842e5366a0649b46fcb5f26220c90e66f243d602->enter($__internal_b5879224346d8c82d0ff70f3842e5366a0649b46fcb5f26220c90e66f243d602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_76f0913b6e498ef3f0c295b28c000d7ab9c30b4172d017d5844d75251043379b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f0913b6e498ef3f0c295b28c000d7ab9c30b4172d017d5844d75251043379b->enter($__internal_76f0913b6e498ef3f0c295b28c000d7ab9c30b4172d017d5844d75251043379b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5879224346d8c82d0ff70f3842e5366a0649b46fcb5f26220c90e66f243d602->leave($__internal_b5879224346d8c82d0ff70f3842e5366a0649b46fcb5f26220c90e66f243d602_prof);

        
        $__internal_76f0913b6e498ef3f0c295b28c000d7ab9c30b4172d017d5844d75251043379b->leave($__internal_76f0913b6e498ef3f0c295b28c000d7ab9c30b4172d017d5844d75251043379b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_619110e0b33311c3e09fb477e83b371aa18ca98348d0471fa14f73067488ab98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619110e0b33311c3e09fb477e83b371aa18ca98348d0471fa14f73067488ab98->enter($__internal_619110e0b33311c3e09fb477e83b371aa18ca98348d0471fa14f73067488ab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c1263a406be98de3b3aa3abb5a882474b36867a685796c31c7212f0e750d01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1263a406be98de3b3aa3abb5a882474b36867a685796c31c7212f0e750d01e->enter($__internal_2c1263a406be98de3b3aa3abb5a882474b36867a685796c31c7212f0e750d01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2c1263a406be98de3b3aa3abb5a882474b36867a685796c31c7212f0e750d01e->leave($__internal_2c1263a406be98de3b3aa3abb5a882474b36867a685796c31c7212f0e750d01e_prof);

        
        $__internal_619110e0b33311c3e09fb477e83b371aa18ca98348d0471fa14f73067488ab98->leave($__internal_619110e0b33311c3e09fb477e83b371aa18ca98348d0471fa14f73067488ab98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
