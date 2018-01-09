<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f2dfed76a2f58c2d833b87bdad593ac8073c75b3e50ba2eaadfa8933ce49ffdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseFos.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_b1c6c1521e5a56fc947f990afb858ee54c49d97b325604b4a6d2c43b59968177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c6c1521e5a56fc947f990afb858ee54c49d97b325604b4a6d2c43b59968177->enter($__internal_b1c6c1521e5a56fc947f990afb858ee54c49d97b325604b4a6d2c43b59968177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a51656921807e98ce09269709429a16650a2f4b6a8ff87ed02bea2bc2afd70eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51656921807e98ce09269709429a16650a2f4b6a8ff87ed02bea2bc2afd70eb->enter($__internal_a51656921807e98ce09269709429a16650a2f4b6a8ff87ed02bea2bc2afd70eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c6c1521e5a56fc947f990afb858ee54c49d97b325604b4a6d2c43b59968177->leave($__internal_b1c6c1521e5a56fc947f990afb858ee54c49d97b325604b4a6d2c43b59968177_prof);

        
        $__internal_a51656921807e98ce09269709429a16650a2f4b6a8ff87ed02bea2bc2afd70eb->leave($__internal_a51656921807e98ce09269709429a16650a2f4b6a8ff87ed02bea2bc2afd70eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42f3b4a2aac43b7843d76f61217533b9d6097e48aae3bdd8ea85f235757b0c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f3b4a2aac43b7843d76f61217533b9d6097e48aae3bdd8ea85f235757b0c04->enter($__internal_42f3b4a2aac43b7843d76f61217533b9d6097e48aae3bdd8ea85f235757b0c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1652d1d7b1cb1be7118469a736c67cc3400b5fa95e690fd8cee124dbb70ca14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1652d1d7b1cb1be7118469a736c67cc3400b5fa95e690fd8cee124dbb70ca14e->enter($__internal_1652d1d7b1cb1be7118469a736c67cc3400b5fa95e690fd8cee124dbb70ca14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <div class=\"login-container\">
            <h1>Iniciar Sesion</h1><br>
            <form>
                <label for=\"username\">Usuario</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                <label for=\"password\">Contraseña</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">Recordar</label>
                <input type=\"submit\" class=\"login login-submit\" id=\"_submit\" name=\"_submit\" value=\"Entrar\" />
            </form>
            <div class=\"login-help\">
                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Registerse</a> - <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Cambiar Contraseña</a>
            </div>
        </div>
    </form>
";
        
        $__internal_1652d1d7b1cb1be7118469a736c67cc3400b5fa95e690fd8cee124dbb70ca14e->leave($__internal_1652d1d7b1cb1be7118469a736c67cc3400b5fa95e690fd8cee124dbb70ca14e_prof);

        
        $__internal_42f3b4a2aac43b7843d76f61217533b9d6097e48aae3bdd8ea85f235757b0c04->leave($__internal_42f3b4a2aac43b7843d76f61217533b9d6097e48aae3bdd8ea85f235757b0c04_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  71 => 13,  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 2,);
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
{% extends \"::baseFos.html.twig\" %}
{% block fos_user_content %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        <div class=\"login-container\">
            <h1>Iniciar Sesion</h1><br>
            <form>
                <label for=\"username\">Usuario</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                <label for=\"password\">Contraseña</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">Recordar</label>
                <input type=\"submit\" class=\"login login-submit\" id=\"_submit\" name=\"_submit\" value=\"Entrar\" />
            </form>
            <div class=\"login-help\">
                <a href=\"{{ path('fos_user_registration_register') }}\">Registerse</a> - <a href=\"{{ path('fos_user_resetting_request') }}\">Cambiar Contraseña</a>
            </div>
        </div>
    </form>
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
