<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_eddcc8c4357049ad5bff7f70d6eec558cd7af3ea744847672f934a1ca32643c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ad04a8e2d51436edd9eea5bfb684ad68eeb5290846e3fea6ea2d0c4fe04b21df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad04a8e2d51436edd9eea5bfb684ad68eeb5290846e3fea6ea2d0c4fe04b21df->enter($__internal_ad04a8e2d51436edd9eea5bfb684ad68eeb5290846e3fea6ea2d0c4fe04b21df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2698d0981a50edd9fd0a3f3d522b813da6289409084313b9fec823d19e010557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2698d0981a50edd9fd0a3f3d522b813da6289409084313b9fec823d19e010557->enter($__internal_2698d0981a50edd9fd0a3f3d522b813da6289409084313b9fec823d19e010557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad04a8e2d51436edd9eea5bfb684ad68eeb5290846e3fea6ea2d0c4fe04b21df->leave($__internal_ad04a8e2d51436edd9eea5bfb684ad68eeb5290846e3fea6ea2d0c4fe04b21df_prof);

        
        $__internal_2698d0981a50edd9fd0a3f3d522b813da6289409084313b9fec823d19e010557->leave($__internal_2698d0981a50edd9fd0a3f3d522b813da6289409084313b9fec823d19e010557_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e33e2f96da62b7b77e57565b255bb19806fc58e0a083d0f29d971400ec5aee0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33e2f96da62b7b77e57565b255bb19806fc58e0a083d0f29d971400ec5aee0f->enter($__internal_e33e2f96da62b7b77e57565b255bb19806fc58e0a083d0f29d971400ec5aee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41c561cc11e2ee0196894a6f062aa5bbd4eefac66cee956ae73aa5b20f1697f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c561cc11e2ee0196894a6f062aa5bbd4eefac66cee956ae73aa5b20f1697f1->enter($__internal_41c561cc11e2ee0196894a6f062aa5bbd4eefac66cee956ae73aa5b20f1697f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_41c561cc11e2ee0196894a6f062aa5bbd4eefac66cee956ae73aa5b20f1697f1->leave($__internal_41c561cc11e2ee0196894a6f062aa5bbd4eefac66cee956ae73aa5b20f1697f1_prof);

        
        $__internal_e33e2f96da62b7b77e57565b255bb19806fc58e0a083d0f29d971400ec5aee0f->leave($__internal_e33e2f96da62b7b77e57565b255bb19806fc58e0a083d0f29d971400ec5aee0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
