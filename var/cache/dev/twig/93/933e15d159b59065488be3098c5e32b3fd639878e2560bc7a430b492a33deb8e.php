<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d3e789350eb51dd8a2d24edc1f26df5968c34310287476b2fea0183b40525815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d12e58afccedd7428cf1889d198ae408b08a32bd8c9bc4b906633d91369df238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12e58afccedd7428cf1889d198ae408b08a32bd8c9bc4b906633d91369df238->enter($__internal_d12e58afccedd7428cf1889d198ae408b08a32bd8c9bc4b906633d91369df238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c625d9b2b713009f7883da992960023cea3bd5c8ee2565aacb0c2125df62e4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c625d9b2b713009f7883da992960023cea3bd5c8ee2565aacb0c2125df62e4be->enter($__internal_c625d9b2b713009f7883da992960023cea3bd5c8ee2565aacb0c2125df62e4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12e58afccedd7428cf1889d198ae408b08a32bd8c9bc4b906633d91369df238->leave($__internal_d12e58afccedd7428cf1889d198ae408b08a32bd8c9bc4b906633d91369df238_prof);

        
        $__internal_c625d9b2b713009f7883da992960023cea3bd5c8ee2565aacb0c2125df62e4be->leave($__internal_c625d9b2b713009f7883da992960023cea3bd5c8ee2565aacb0c2125df62e4be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a10b695eeb78cc467e8e49e98d740e2b8a3d4b2f698a4fba64cbfebf4ba67da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a10b695eeb78cc467e8e49e98d740e2b8a3d4b2f698a4fba64cbfebf4ba67da->enter($__internal_1a10b695eeb78cc467e8e49e98d740e2b8a3d4b2f698a4fba64cbfebf4ba67da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_780ca753f999b4c6e22c1cb034d2440fe41bc2dde700d54083157f5f8db7f564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780ca753f999b4c6e22c1cb034d2440fe41bc2dde700d54083157f5f8db7f564->enter($__internal_780ca753f999b4c6e22c1cb034d2440fe41bc2dde700d54083157f5f8db7f564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_780ca753f999b4c6e22c1cb034d2440fe41bc2dde700d54083157f5f8db7f564->leave($__internal_780ca753f999b4c6e22c1cb034d2440fe41bc2dde700d54083157f5f8db7f564_prof);

        
        $__internal_1a10b695eeb78cc467e8e49e98d740e2b8a3d4b2f698a4fba64cbfebf4ba67da->leave($__internal_1a10b695eeb78cc467e8e49e98d740e2b8a3d4b2f698a4fba64cbfebf4ba67da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
