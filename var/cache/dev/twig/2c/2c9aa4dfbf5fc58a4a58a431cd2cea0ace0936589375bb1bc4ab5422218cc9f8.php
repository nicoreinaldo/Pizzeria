<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92d657529e967bb2b7f04eb8caef789c129aa3745d5322bb0850ce65cce5cb11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f2aa32ca8cb4eb25c76872bb86172d1cdf5f07af7974489b5d15c1ee73d4f437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2aa32ca8cb4eb25c76872bb86172d1cdf5f07af7974489b5d15c1ee73d4f437->enter($__internal_f2aa32ca8cb4eb25c76872bb86172d1cdf5f07af7974489b5d15c1ee73d4f437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1dd453f97b4f76d9d6378a65e6b821a423ee60318227b62ce36944ae93a5e81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd453f97b4f76d9d6378a65e6b821a423ee60318227b62ce36944ae93a5e81c->enter($__internal_1dd453f97b4f76d9d6378a65e6b821a423ee60318227b62ce36944ae93a5e81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2aa32ca8cb4eb25c76872bb86172d1cdf5f07af7974489b5d15c1ee73d4f437->leave($__internal_f2aa32ca8cb4eb25c76872bb86172d1cdf5f07af7974489b5d15c1ee73d4f437_prof);

        
        $__internal_1dd453f97b4f76d9d6378a65e6b821a423ee60318227b62ce36944ae93a5e81c->leave($__internal_1dd453f97b4f76d9d6378a65e6b821a423ee60318227b62ce36944ae93a5e81c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a400941268190fabf0ee7852fd8083fafe61befea9d4b81e08200664b4ce4c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a400941268190fabf0ee7852fd8083fafe61befea9d4b81e08200664b4ce4c08->enter($__internal_a400941268190fabf0ee7852fd8083fafe61befea9d4b81e08200664b4ce4c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_912d232ce8e24d03d8058b59eade703441e99ef646a9542ad779a753e530dcf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912d232ce8e24d03d8058b59eade703441e99ef646a9542ad779a753e530dcf7->enter($__internal_912d232ce8e24d03d8058b59eade703441e99ef646a9542ad779a753e530dcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_912d232ce8e24d03d8058b59eade703441e99ef646a9542ad779a753e530dcf7->leave($__internal_912d232ce8e24d03d8058b59eade703441e99ef646a9542ad779a753e530dcf7_prof);

        
        $__internal_a400941268190fabf0ee7852fd8083fafe61befea9d4b81e08200664b4ce4c08->leave($__internal_a400941268190fabf0ee7852fd8083fafe61befea9d4b81e08200664b4ce4c08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
