<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b5cbb50e91384bd890599fb144479580974df60c58c423de6448a48c534963fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e64fea6c54f689a42b50e1445919a787f98ccb8bf7b1ed5f1fab314a2d13b356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64fea6c54f689a42b50e1445919a787f98ccb8bf7b1ed5f1fab314a2d13b356->enter($__internal_e64fea6c54f689a42b50e1445919a787f98ccb8bf7b1ed5f1fab314a2d13b356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_9e936a3aeab54865aad5b4b478d097a0b5971a5e6b72e70923a1a778ac625b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e936a3aeab54865aad5b4b478d097a0b5971a5e6b72e70923a1a778ac625b49->enter($__internal_9e936a3aeab54865aad5b4b478d097a0b5971a5e6b72e70923a1a778ac625b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64fea6c54f689a42b50e1445919a787f98ccb8bf7b1ed5f1fab314a2d13b356->leave($__internal_e64fea6c54f689a42b50e1445919a787f98ccb8bf7b1ed5f1fab314a2d13b356_prof);

        
        $__internal_9e936a3aeab54865aad5b4b478d097a0b5971a5e6b72e70923a1a778ac625b49->leave($__internal_9e936a3aeab54865aad5b4b478d097a0b5971a5e6b72e70923a1a778ac625b49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c76aa79bceabd8e2140a561f044b4f612ffc04be4b514ccb799b9e3087acc89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76aa79bceabd8e2140a561f044b4f612ffc04be4b514ccb799b9e3087acc89a->enter($__internal_c76aa79bceabd8e2140a561f044b4f612ffc04be4b514ccb799b9e3087acc89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fbaec19ecc9cbb52fe576efbfd931b649577be3506d74d292ffb5f2fb1590022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbaec19ecc9cbb52fe576efbfd931b649577be3506d74d292ffb5f2fb1590022->enter($__internal_fbaec19ecc9cbb52fe576efbfd931b649577be3506d74d292ffb5f2fb1590022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fbaec19ecc9cbb52fe576efbfd931b649577be3506d74d292ffb5f2fb1590022->leave($__internal_fbaec19ecc9cbb52fe576efbfd931b649577be3506d74d292ffb5f2fb1590022_prof);

        
        $__internal_c76aa79bceabd8e2140a561f044b4f612ffc04be4b514ccb799b9e3087acc89a->leave($__internal_c76aa79bceabd8e2140a561f044b4f612ffc04be4b514ccb799b9e3087acc89a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
