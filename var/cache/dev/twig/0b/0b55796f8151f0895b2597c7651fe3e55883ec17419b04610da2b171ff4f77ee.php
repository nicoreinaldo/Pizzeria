<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_e31422ae5ddaa488a6e17e8818eff66c773738f6abff0351b75f83156d7d7efd extends Twig_Template
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
        $__internal_0d7bedc18ee0a0fe2a1dfa354d6bda22fa5336020f7d19dbfd029db5df53cfeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7bedc18ee0a0fe2a1dfa354d6bda22fa5336020f7d19dbfd029db5df53cfeb->enter($__internal_0d7bedc18ee0a0fe2a1dfa354d6bda22fa5336020f7d19dbfd029db5df53cfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_a940f523da8e5b90b3a97002e0625636a588cf2ebdebeecf8bf7fa34bb9dfc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a940f523da8e5b90b3a97002e0625636a588cf2ebdebeecf8bf7fa34bb9dfc3c->enter($__internal_a940f523da8e5b90b3a97002e0625636a588cf2ebdebeecf8bf7fa34bb9dfc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_0d7bedc18ee0a0fe2a1dfa354d6bda22fa5336020f7d19dbfd029db5df53cfeb->leave($__internal_0d7bedc18ee0a0fe2a1dfa354d6bda22fa5336020f7d19dbfd029db5df53cfeb_prof);

        
        $__internal_a940f523da8e5b90b3a97002e0625636a588cf2ebdebeecf8bf7fa34bb9dfc3c->leave($__internal_a940f523da8e5b90b3a97002e0625636a588cf2ebdebeecf8bf7fa34bb9dfc3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
