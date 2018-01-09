<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3349cf116aee5517fec1cf77fed80f08842266a770a1ef0ba0e99a2bea15e3ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_37961132810d2cacc5b01aafad4317590b2e65b1d65c41afbd234770a9ec29c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37961132810d2cacc5b01aafad4317590b2e65b1d65c41afbd234770a9ec29c7->enter($__internal_37961132810d2cacc5b01aafad4317590b2e65b1d65c41afbd234770a9ec29c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_a839a984592e45adb8c01e48b9ff568b413439bc8010b532c650495af332266a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a839a984592e45adb8c01e48b9ff568b413439bc8010b532c650495af332266a->enter($__internal_a839a984592e45adb8c01e48b9ff568b413439bc8010b532c650495af332266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37961132810d2cacc5b01aafad4317590b2e65b1d65c41afbd234770a9ec29c7->leave($__internal_37961132810d2cacc5b01aafad4317590b2e65b1d65c41afbd234770a9ec29c7_prof);

        
        $__internal_a839a984592e45adb8c01e48b9ff568b413439bc8010b532c650495af332266a->leave($__internal_a839a984592e45adb8c01e48b9ff568b413439bc8010b532c650495af332266a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3a53eadaced49dd955e659fdf4d60c8a77f82dcbb37036c05f7a5f4942c6a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a53eadaced49dd955e659fdf4d60c8a77f82dcbb37036c05f7a5f4942c6a62->enter($__internal_c3a53eadaced49dd955e659fdf4d60c8a77f82dcbb37036c05f7a5f4942c6a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0dca4c3df141604aaf34075ff4dd457d9d54f66f1fcfee3d32fd82c1e6859e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dca4c3df141604aaf34075ff4dd457d9d54f66f1fcfee3d32fd82c1e6859e71->enter($__internal_0dca4c3df141604aaf34075ff4dd457d9d54f66f1fcfee3d32fd82c1e6859e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0dca4c3df141604aaf34075ff4dd457d9d54f66f1fcfee3d32fd82c1e6859e71->leave($__internal_0dca4c3df141604aaf34075ff4dd457d9d54f66f1fcfee3d32fd82c1e6859e71_prof);

        
        $__internal_c3a53eadaced49dd955e659fdf4d60c8a77f82dcbb37036c05f7a5f4942c6a62->leave($__internal_c3a53eadaced49dd955e659fdf4d60c8a77f82dcbb37036c05f7a5f4942c6a62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
