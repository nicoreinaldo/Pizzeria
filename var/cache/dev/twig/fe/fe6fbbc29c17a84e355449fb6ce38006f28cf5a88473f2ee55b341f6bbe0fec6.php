<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_938d4ef9ff597186823a452bcf7515c8ae008d63e533c1ba6a3b3531fbdd9383 extends Twig_Template
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
        $__internal_f6cb0fd18e8fad764b879f521236ec213ac5b352bc28259f7819ed431c34de78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cb0fd18e8fad764b879f521236ec213ac5b352bc28259f7819ed431c34de78->enter($__internal_f6cb0fd18e8fad764b879f521236ec213ac5b352bc28259f7819ed431c34de78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_9a5b1ebf8bb51a1dfbc728a67e0463476d48d777e376c0ce290dab21d1d42d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5b1ebf8bb51a1dfbc728a67e0463476d48d777e376c0ce290dab21d1d42d16->enter($__internal_9a5b1ebf8bb51a1dfbc728a67e0463476d48d777e376c0ce290dab21d1d42d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f6cb0fd18e8fad764b879f521236ec213ac5b352bc28259f7819ed431c34de78->leave($__internal_f6cb0fd18e8fad764b879f521236ec213ac5b352bc28259f7819ed431c34de78_prof);

        
        $__internal_9a5b1ebf8bb51a1dfbc728a67e0463476d48d777e376c0ce290dab21d1d42d16->leave($__internal_9a5b1ebf8bb51a1dfbc728a67e0463476d48d777e376c0ce290dab21d1d42d16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
