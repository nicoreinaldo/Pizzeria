<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_bbb2b13d30c5dbb109abbc5e0c1a236037b820374946f94f71fbb167baec9e79 extends Twig_Template
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
        $__internal_05aa3fac3d33474eea6068800d6fa65cb0304d1dd058e89bc625cb412f5580b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05aa3fac3d33474eea6068800d6fa65cb0304d1dd058e89bc625cb412f5580b5->enter($__internal_05aa3fac3d33474eea6068800d6fa65cb0304d1dd058e89bc625cb412f5580b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_680be3fd102c8abe05955082d1a390fe6d994dfa2d9ee3f392b856de9701ad25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680be3fd102c8abe05955082d1a390fe6d994dfa2d9ee3f392b856de9701ad25->enter($__internal_680be3fd102c8abe05955082d1a390fe6d994dfa2d9ee3f392b856de9701ad25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_05aa3fac3d33474eea6068800d6fa65cb0304d1dd058e89bc625cb412f5580b5->leave($__internal_05aa3fac3d33474eea6068800d6fa65cb0304d1dd058e89bc625cb412f5580b5_prof);

        
        $__internal_680be3fd102c8abe05955082d1a390fe6d994dfa2d9ee3f392b856de9701ad25->leave($__internal_680be3fd102c8abe05955082d1a390fe6d994dfa2d9ee3f392b856de9701ad25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  29 => 3,  25 => 2,);
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
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/home/nico/pizzeria/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
