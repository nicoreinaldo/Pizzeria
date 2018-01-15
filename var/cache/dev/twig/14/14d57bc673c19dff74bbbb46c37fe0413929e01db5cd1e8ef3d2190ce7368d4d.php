<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d869e02ebe7ac1413ca1b3439af31062ac38da710dcf5e3eb1f6a50ee31ebba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::baseFos.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 3);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseFos.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_367c289222b97a7d04b4d8edef3055f519d72d8bff2522216439f2a0b6330083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367c289222b97a7d04b4d8edef3055f519d72d8bff2522216439f2a0b6330083->enter($__internal_367c289222b97a7d04b4d8edef3055f519d72d8bff2522216439f2a0b6330083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_9b2716e9b48012607da924322362ab795e445f7e64619fec3fd1313061f6befe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2716e9b48012607da924322362ab795e445f7e64619fec3fd1313061f6befe->enter($__internal_9b2716e9b48012607da924322362ab795e445f7e64619fec3fd1313061f6befe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367c289222b97a7d04b4d8edef3055f519d72d8bff2522216439f2a0b6330083->leave($__internal_367c289222b97a7d04b4d8edef3055f519d72d8bff2522216439f2a0b6330083_prof);

        
        $__internal_9b2716e9b48012607da924322362ab795e445f7e64619fec3fd1313061f6befe->leave($__internal_9b2716e9b48012607da924322362ab795e445f7e64619fec3fd1313061f6befe_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_616f820a3313ea7efdb1ab9d0c08fa9efa7f8914be0722489012725fb109a653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616f820a3313ea7efdb1ab9d0c08fa9efa7f8914be0722489012725fb109a653->enter($__internal_616f820a3313ea7efdb1ab9d0c08fa9efa7f8914be0722489012725fb109a653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f88cbdf55447e8f0ced074e005540cc4784d2ee7db1c9f98da90854d0d043814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88cbdf55447e8f0ced074e005540cc4784d2ee7db1c9f98da90854d0d043814->enter($__internal_f88cbdf55447e8f0ced074e005540cc4784d2ee7db1c9f98da90854d0d043814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 6
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 7
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 9
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizza_index");
        echo "\">Ir a la pagina</a>
";
        
        $__internal_f88cbdf55447e8f0ced074e005540cc4784d2ee7db1c9f98da90854d0d043814->leave($__internal_f88cbdf55447e8f0ced074e005540cc4784d2ee7db1c9f98da90854d0d043814_prof);

        
        $__internal_616f820a3313ea7efdb1ab9d0c08fa9efa7f8914be0722489012725fb109a653->leave($__internal_616f820a3313ea7efdb1ab9d0c08fa9efa7f8914be0722489012725fb109a653_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  56 => 7,  54 => 6,  49 => 5,  40 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}
{% extends \"::baseFos.html.twig\" %}
{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
    <a href=\"{{ path('pizza_index') }}\">Ir a la pagina</a>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
