<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_55ff93058f32253a6dc92f5df51e3937b0469891ee117e355b7ada00393eb8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4eac7c0af734a28997eb3481013373e32fba767370daf514dd399e640685f3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eac7c0af734a28997eb3481013373e32fba767370daf514dd399e640685f3d6->enter($__internal_4eac7c0af734a28997eb3481013373e32fba767370daf514dd399e640685f3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_efc31b63682cbc6a1163a5765f54b5dd7972585c7736f44340dda60fde3c3f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc31b63682cbc6a1163a5765f54b5dd7972585c7736f44340dda60fde3c3f78->enter($__internal_efc31b63682cbc6a1163a5765f54b5dd7972585c7736f44340dda60fde3c3f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eac7c0af734a28997eb3481013373e32fba767370daf514dd399e640685f3d6->leave($__internal_4eac7c0af734a28997eb3481013373e32fba767370daf514dd399e640685f3d6_prof);

        
        $__internal_efc31b63682cbc6a1163a5765f54b5dd7972585c7736f44340dda60fde3c3f78->leave($__internal_efc31b63682cbc6a1163a5765f54b5dd7972585c7736f44340dda60fde3c3f78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4013ae81293a25bc5535d7b828120124f74928ab9e8324a0e949216d62187ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4013ae81293a25bc5535d7b828120124f74928ab9e8324a0e949216d62187ee9->enter($__internal_4013ae81293a25bc5535d7b828120124f74928ab9e8324a0e949216d62187ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_70a1ba5dbf563b36b5a3bff0c96760f81099d42727fe41f2ef65327bb5e64bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a1ba5dbf563b36b5a3bff0c96760f81099d42727fe41f2ef65327bb5e64bdc->enter($__internal_70a1ba5dbf563b36b5a3bff0c96760f81099d42727fe41f2ef65327bb5e64bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_70a1ba5dbf563b36b5a3bff0c96760f81099d42727fe41f2ef65327bb5e64bdc->leave($__internal_70a1ba5dbf563b36b5a3bff0c96760f81099d42727fe41f2ef65327bb5e64bdc_prof);

        
        $__internal_4013ae81293a25bc5535d7b828120124f74928ab9e8324a0e949216d62187ee9->leave($__internal_4013ae81293a25bc5535d7b828120124f74928ab9e8324a0e949216d62187ee9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
