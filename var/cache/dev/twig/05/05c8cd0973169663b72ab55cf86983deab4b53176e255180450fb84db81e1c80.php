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
        $__internal_77f1ac2c44b47dc3b54075e3ae97e08eb92be4fa824bd4a51161e3f57aefd985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f1ac2c44b47dc3b54075e3ae97e08eb92be4fa824bd4a51161e3f57aefd985->enter($__internal_77f1ac2c44b47dc3b54075e3ae97e08eb92be4fa824bd4a51161e3f57aefd985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_0eaa8c1501288a0a3cc54f39502fff6e982052e7a46e1f3ba61a610ee9adb48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eaa8c1501288a0a3cc54f39502fff6e982052e7a46e1f3ba61a610ee9adb48e->enter($__internal_0eaa8c1501288a0a3cc54f39502fff6e982052e7a46e1f3ba61a610ee9adb48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f1ac2c44b47dc3b54075e3ae97e08eb92be4fa824bd4a51161e3f57aefd985->leave($__internal_77f1ac2c44b47dc3b54075e3ae97e08eb92be4fa824bd4a51161e3f57aefd985_prof);

        
        $__internal_0eaa8c1501288a0a3cc54f39502fff6e982052e7a46e1f3ba61a610ee9adb48e->leave($__internal_0eaa8c1501288a0a3cc54f39502fff6e982052e7a46e1f3ba61a610ee9adb48e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0e236440c9bcb88f329641c0b83001ca77bf50a76f9eb1788965021db02a842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e236440c9bcb88f329641c0b83001ca77bf50a76f9eb1788965021db02a842->enter($__internal_b0e236440c9bcb88f329641c0b83001ca77bf50a76f9eb1788965021db02a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9de9648a618c8ff0aff8ae62519109569f43c6b8ffd87fadf3b6423a991295ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de9648a618c8ff0aff8ae62519109569f43c6b8ffd87fadf3b6423a991295ea->enter($__internal_9de9648a618c8ff0aff8ae62519109569f43c6b8ffd87fadf3b6423a991295ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9de9648a618c8ff0aff8ae62519109569f43c6b8ffd87fadf3b6423a991295ea->leave($__internal_9de9648a618c8ff0aff8ae62519109569f43c6b8ffd87fadf3b6423a991295ea_prof);

        
        $__internal_b0e236440c9bcb88f329641c0b83001ca77bf50a76f9eb1788965021db02a842->leave($__internal_b0e236440c9bcb88f329641c0b83001ca77bf50a76f9eb1788965021db02a842_prof);

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
