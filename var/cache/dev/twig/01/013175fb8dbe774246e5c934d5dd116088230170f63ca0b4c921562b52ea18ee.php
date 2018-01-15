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
        $__internal_96733d41da998fa02967a502c3d7c82653e38546ccdeab9370708e1ac8fa12c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96733d41da998fa02967a502c3d7c82653e38546ccdeab9370708e1ac8fa12c2->enter($__internal_96733d41da998fa02967a502c3d7c82653e38546ccdeab9370708e1ac8fa12c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_f1e8203c1afe8f71b7cd643fb5f7ddac6af10ee23afef379f74c8a437ba1a0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e8203c1afe8f71b7cd643fb5f7ddac6af10ee23afef379f74c8a437ba1a0c4->enter($__internal_f1e8203c1afe8f71b7cd643fb5f7ddac6af10ee23afef379f74c8a437ba1a0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96733d41da998fa02967a502c3d7c82653e38546ccdeab9370708e1ac8fa12c2->leave($__internal_96733d41da998fa02967a502c3d7c82653e38546ccdeab9370708e1ac8fa12c2_prof);

        
        $__internal_f1e8203c1afe8f71b7cd643fb5f7ddac6af10ee23afef379f74c8a437ba1a0c4->leave($__internal_f1e8203c1afe8f71b7cd643fb5f7ddac6af10ee23afef379f74c8a437ba1a0c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7df258ada992961b96992491042035f8f330bbdb26698f14b6772e8147ce35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7df258ada992961b96992491042035f8f330bbdb26698f14b6772e8147ce35b->enter($__internal_f7df258ada992961b96992491042035f8f330bbdb26698f14b6772e8147ce35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_016e74e75b29f230b98b9e9ba7b0d8f69ccb1fd7244d9b256a865de7bb502cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016e74e75b29f230b98b9e9ba7b0d8f69ccb1fd7244d9b256a865de7bb502cdc->enter($__internal_016e74e75b29f230b98b9e9ba7b0d8f69ccb1fd7244d9b256a865de7bb502cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_016e74e75b29f230b98b9e9ba7b0d8f69ccb1fd7244d9b256a865de7bb502cdc->leave($__internal_016e74e75b29f230b98b9e9ba7b0d8f69ccb1fd7244d9b256a865de7bb502cdc_prof);

        
        $__internal_f7df258ada992961b96992491042035f8f330bbdb26698f14b6772e8147ce35b->leave($__internal_f7df258ada992961b96992491042035f8f330bbdb26698f14b6772e8147ce35b_prof);

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
