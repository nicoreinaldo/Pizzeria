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
        $__internal_1896ed4045203e5dbe6ca93d034eebd71c02f45b62ce660e83e88841b1153d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1896ed4045203e5dbe6ca93d034eebd71c02f45b62ce660e83e88841b1153d5a->enter($__internal_1896ed4045203e5dbe6ca93d034eebd71c02f45b62ce660e83e88841b1153d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_93c6a237081c949969d0aaf264b9c0a9a0a751fb86480309b35e33b0d347bdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c6a237081c949969d0aaf264b9c0a9a0a751fb86480309b35e33b0d347bdcd->enter($__internal_93c6a237081c949969d0aaf264b9c0a9a0a751fb86480309b35e33b0d347bdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

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
        
        $__internal_1896ed4045203e5dbe6ca93d034eebd71c02f45b62ce660e83e88841b1153d5a->leave($__internal_1896ed4045203e5dbe6ca93d034eebd71c02f45b62ce660e83e88841b1153d5a_prof);

        
        $__internal_93c6a237081c949969d0aaf264b9c0a9a0a751fb86480309b35e33b0d347bdcd->leave($__internal_93c6a237081c949969d0aaf264b9c0a9a0a751fb86480309b35e33b0d347bdcd_prof);

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
