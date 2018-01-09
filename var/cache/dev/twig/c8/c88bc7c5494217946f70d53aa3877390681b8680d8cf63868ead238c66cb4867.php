<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c5a0b13151b956aaa048f797611585f4dc03bb569bc97d717b8748f19021073f extends Twig_Template
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
        $__internal_3817cc926a9ccb75e99ae3c70543a2ca45bd1a1c9ef3cbd48c7e7c05218aac0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3817cc926a9ccb75e99ae3c70543a2ca45bd1a1c9ef3cbd48c7e7c05218aac0f->enter($__internal_3817cc926a9ccb75e99ae3c70543a2ca45bd1a1c9ef3cbd48c7e7c05218aac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_4e753624635df1a242face6dd3aa20ba2b58f523c16e6e716c24ef1aa32f1546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e753624635df1a242face6dd3aa20ba2b58f523c16e6e716c24ef1aa32f1546->enter($__internal_4e753624635df1a242face6dd3aa20ba2b58f523c16e6e716c24ef1aa32f1546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3817cc926a9ccb75e99ae3c70543a2ca45bd1a1c9ef3cbd48c7e7c05218aac0f->leave($__internal_3817cc926a9ccb75e99ae3c70543a2ca45bd1a1c9ef3cbd48c7e7c05218aac0f_prof);

        
        $__internal_4e753624635df1a242face6dd3aa20ba2b58f523c16e6e716c24ef1aa32f1546->leave($__internal_4e753624635df1a242face6dd3aa20ba2b58f523c16e6e716c24ef1aa32f1546_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
