<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_6dce1c0ab64067e75d64e3f301c13b4f69a5e38a87f31748dcbefbcd1a620350 extends Twig_Template
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
        $__internal_d88ffc0ec69e02f78cb4890feda9258c7047843153e7740803f0d3e809260966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88ffc0ec69e02f78cb4890feda9258c7047843153e7740803f0d3e809260966->enter($__internal_d88ffc0ec69e02f78cb4890feda9258c7047843153e7740803f0d3e809260966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4f9905fc20065b2cbce68d920aac60bd717244eff3d655977d17e0056ad2bfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9905fc20065b2cbce68d920aac60bd717244eff3d655977d17e0056ad2bfcf->enter($__internal_4f9905fc20065b2cbce68d920aac60bd717244eff3d655977d17e0056ad2bfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d88ffc0ec69e02f78cb4890feda9258c7047843153e7740803f0d3e809260966->leave($__internal_d88ffc0ec69e02f78cb4890feda9258c7047843153e7740803f0d3e809260966_prof);

        
        $__internal_4f9905fc20065b2cbce68d920aac60bd717244eff3d655977d17e0056ad2bfcf->leave($__internal_4f9905fc20065b2cbce68d920aac60bd717244eff3d655977d17e0056ad2bfcf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60e229f38d984accd1595ec76b545bf4a6dceb9e0b844dbe67ba3b1d989fbc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e229f38d984accd1595ec76b545bf4a6dceb9e0b844dbe67ba3b1d989fbc94->enter($__internal_60e229f38d984accd1595ec76b545bf4a6dceb9e0b844dbe67ba3b1d989fbc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b8df3be5b1dbbcd67cac176cd932d9d46c2d45b4ce17b9f246a5c081e4f8a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8df3be5b1dbbcd67cac176cd932d9d46c2d45b4ce17b9f246a5c081e4f8a2b->enter($__internal_9b8df3be5b1dbbcd67cac176cd932d9d46c2d45b4ce17b9f246a5c081e4f8a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9b8df3be5b1dbbcd67cac176cd932d9d46c2d45b4ce17b9f246a5c081e4f8a2b->leave($__internal_9b8df3be5b1dbbcd67cac176cd932d9d46c2d45b4ce17b9f246a5c081e4f8a2b_prof);

        
        $__internal_60e229f38d984accd1595ec76b545bf4a6dceb9e0b844dbe67ba3b1d989fbc94->leave($__internal_60e229f38d984accd1595ec76b545bf4a6dceb9e0b844dbe67ba3b1d989fbc94_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
