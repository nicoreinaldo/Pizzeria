<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_da9c192f18010eade345fe4ced8aa627b1149865088bc1ec6856f4a319098cea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22318666b4f7c8438048f6206a974e9df8bee6bf2767128223e263763265f0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22318666b4f7c8438048f6206a974e9df8bee6bf2767128223e263763265f0b4->enter($__internal_22318666b4f7c8438048f6206a974e9df8bee6bf2767128223e263763265f0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_e9ddf83bdc23fd45e72a34f4614e124a3d2e210ab0264c1505daeb6b407f4df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ddf83bdc23fd45e72a34f4614e124a3d2e210ab0264c1505daeb6b407f4df8->enter($__internal_e9ddf83bdc23fd45e72a34f4614e124a3d2e210ab0264c1505daeb6b407f4df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_22318666b4f7c8438048f6206a974e9df8bee6bf2767128223e263763265f0b4->leave($__internal_22318666b4f7c8438048f6206a974e9df8bee6bf2767128223e263763265f0b4_prof);

        
        $__internal_e9ddf83bdc23fd45e72a34f4614e124a3d2e210ab0264c1505daeb6b407f4df8->leave($__internal_e9ddf83bdc23fd45e72a34f4614e124a3d2e210ab0264c1505daeb6b407f4df8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
