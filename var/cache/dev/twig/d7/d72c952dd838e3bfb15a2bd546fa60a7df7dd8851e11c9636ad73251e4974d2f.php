<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f2dfed76a2f58c2d833b87bdad593ac8073c75b3e50ba2eaadfa8933ce49ffdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseFos.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
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
        $__internal_7a7e7d6113640a3dba88528f6007644aee057c1c65d3edeea9c55aa07a0f2592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7e7d6113640a3dba88528f6007644aee057c1c65d3edeea9c55aa07a0f2592->enter($__internal_7a7e7d6113640a3dba88528f6007644aee057c1c65d3edeea9c55aa07a0f2592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_293eadcac67759581920b51c0e46ebade471151ccced67e7d8cc65df96ce7b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293eadcac67759581920b51c0e46ebade471151ccced67e7d8cc65df96ce7b29->enter($__internal_293eadcac67759581920b51c0e46ebade471151ccced67e7d8cc65df96ce7b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a7e7d6113640a3dba88528f6007644aee057c1c65d3edeea9c55aa07a0f2592->leave($__internal_7a7e7d6113640a3dba88528f6007644aee057c1c65d3edeea9c55aa07a0f2592_prof);

        
        $__internal_293eadcac67759581920b51c0e46ebade471151ccced67e7d8cc65df96ce7b29->leave($__internal_293eadcac67759581920b51c0e46ebade471151ccced67e7d8cc65df96ce7b29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9e08e58f68d1f5af09b221a74b1ec87eb3c6d2317707eec106e7386c69b64dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e08e58f68d1f5af09b221a74b1ec87eb3c6d2317707eec106e7386c69b64dd->enter($__internal_c9e08e58f68d1f5af09b221a74b1ec87eb3c6d2317707eec106e7386c69b64dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9feee423807daa61a19ca8bbb96f3ae7448efc23519207143b9e015b975f0fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feee423807daa61a19ca8bbb96f3ae7448efc23519207143b9e015b975f0fc2->enter($__internal_9feee423807daa61a19ca8bbb96f3ae7448efc23519207143b9e015b975f0fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9feee423807daa61a19ca8bbb96f3ae7448efc23519207143b9e015b975f0fc2->leave($__internal_9feee423807daa61a19ca8bbb96f3ae7448efc23519207143b9e015b975f0fc2_prof);

        
        $__internal_c9e08e58f68d1f5af09b221a74b1ec87eb3c6d2317707eec106e7386c69b64dd->leave($__internal_c9e08e58f68d1f5af09b221a74b1ec87eb3c6d2317707eec106e7386c69b64dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
