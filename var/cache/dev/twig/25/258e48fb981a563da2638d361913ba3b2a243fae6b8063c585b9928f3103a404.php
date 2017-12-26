<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0e2d76473b603a48adc89e0334b202fb451a8d323780127216242a6dcb050d4a extends Twig_Template
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
        $__internal_7c6f6cc26d9c60379dee52eadbecc98db78cce2bb8e9144d7122d3dde9ff5dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6f6cc26d9c60379dee52eadbecc98db78cce2bb8e9144d7122d3dde9ff5dc7->enter($__internal_7c6f6cc26d9c60379dee52eadbecc98db78cce2bb8e9144d7122d3dde9ff5dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_323f0b3e2dfa33cb2a79f42a53b2db708ca61c31c885c7e801c4ebdce14f9e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323f0b3e2dfa33cb2a79f42a53b2db708ca61c31c885c7e801c4ebdce14f9e65->enter($__internal_323f0b3e2dfa33cb2a79f42a53b2db708ca61c31c885c7e801c4ebdce14f9e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c6f6cc26d9c60379dee52eadbecc98db78cce2bb8e9144d7122d3dde9ff5dc7->leave($__internal_7c6f6cc26d9c60379dee52eadbecc98db78cce2bb8e9144d7122d3dde9ff5dc7_prof);

        
        $__internal_323f0b3e2dfa33cb2a79f42a53b2db708ca61c31c885c7e801c4ebdce14f9e65->leave($__internal_323f0b3e2dfa33cb2a79f42a53b2db708ca61c31c885c7e801c4ebdce14f9e65_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77754c799ff3cd70e5f14ad394cc1a7aed1e3015731449c268270459e2587d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77754c799ff3cd70e5f14ad394cc1a7aed1e3015731449c268270459e2587d03->enter($__internal_77754c799ff3cd70e5f14ad394cc1a7aed1e3015731449c268270459e2587d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_14ae7dd8db1c3a2260b79bded48088e2e78de8d91a543ecf6a1d9b33dbd22acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ae7dd8db1c3a2260b79bded48088e2e78de8d91a543ecf6a1d9b33dbd22acd->enter($__internal_14ae7dd8db1c3a2260b79bded48088e2e78de8d91a543ecf6a1d9b33dbd22acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_14ae7dd8db1c3a2260b79bded48088e2e78de8d91a543ecf6a1d9b33dbd22acd->leave($__internal_14ae7dd8db1c3a2260b79bded48088e2e78de8d91a543ecf6a1d9b33dbd22acd_prof);

        
        $__internal_77754c799ff3cd70e5f14ad394cc1a7aed1e3015731449c268270459e2587d03->leave($__internal_77754c799ff3cd70e5f14ad394cc1a7aed1e3015731449c268270459e2587d03_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/home/nico/pizzerianostra/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
