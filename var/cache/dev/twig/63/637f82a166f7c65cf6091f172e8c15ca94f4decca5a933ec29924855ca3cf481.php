<?php

/* ::baseFos.html.twig */
class __TwigTemplate_c5e014115e3ad63441583a123aa6d69ed9fb1d22653abf3daade788c4289acec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47b77686ceedc70cbfcd83892aba2e734d377efb8b3b511f261d4e48d5b6f8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b77686ceedc70cbfcd83892aba2e734d377efb8b3b511f261d4e48d5b6f8b3->enter($__internal_47b77686ceedc70cbfcd83892aba2e734d377efb8b3b511f261d4e48d5b6f8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseFos.html.twig"));

        $__internal_2483f273c4624b7908c2b49c4fd15ccb8923922f9672a7cf5224e89efe8114fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2483f273c4624b7908c2b49c4fd15ccb8923922f9672a7cf5224e89efe8114fe->enter($__internal_2483f273c4624b7908c2b49c4fd15ccb8923922f9672a7cf5224e89efe8114fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseFos.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
</head>
<body>
<style>
    @import url(http://fonts.googleapis.com/css?family=Roboto);
    /****** LOGIN ******/


    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }
    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }
    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }
    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }
    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }
    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }
    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }
    .login-help{
        font-size: 15px;
        margin-right: 2px;
        margin-left: 2px;
        color: black;
    }
</style>
";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 93
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 94
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 100
        echo "<script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "</body>
</html>";
        
        $__internal_47b77686ceedc70cbfcd83892aba2e734d377efb8b3b511f261d4e48d5b6f8b3->leave($__internal_47b77686ceedc70cbfcd83892aba2e734d377efb8b3b511f261d4e48d5b6f8b3_prof);

        
        $__internal_2483f273c4624b7908c2b49c4fd15ccb8923922f9672a7cf5224e89efe8114fe->leave($__internal_2483f273c4624b7908c2b49c4fd15ccb8923922f9672a7cf5224e89efe8114fe_prof);

    }

    // line 99
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea458a4924244e0882f868adb3179fc0c8696a8b1be7de9a7e8b88dca869483d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea458a4924244e0882f868adb3179fc0c8696a8b1be7de9a7e8b88dca869483d->enter($__internal_ea458a4924244e0882f868adb3179fc0c8696a8b1be7de9a7e8b88dca869483d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_548379a6d7ad519b1f4007b27e01a5ccfc4c169eda86005f6816484b893bc7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548379a6d7ad519b1f4007b27e01a5ccfc4c169eda86005f6816484b893bc7a6->enter($__internal_548379a6d7ad519b1f4007b27e01a5ccfc4c169eda86005f6816484b893bc7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_548379a6d7ad519b1f4007b27e01a5ccfc4c169eda86005f6816484b893bc7a6->leave($__internal_548379a6d7ad519b1f4007b27e01a5ccfc4c169eda86005f6816484b893bc7a6_prof);

        
        $__internal_ea458a4924244e0882f868adb3179fc0c8696a8b1be7de9a7e8b88dca869483d->leave($__internal_ea458a4924244e0882f868adb3179fc0c8696a8b1be7de9a7e8b88dca869483d_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a3fb8c401240a91483710198debc25dc7bf1e976dd23a4fcd63ce6e146f03a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3fb8c401240a91483710198debc25dc7bf1e976dd23a4fcd63ce6e146f03a8->enter($__internal_6a3fb8c401240a91483710198debc25dc7bf1e976dd23a4fcd63ce6e146f03a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c92408f4235f10f9480f7cbfae560a8c0d68a5cce4c78b486d1e10927653fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c92408f4235f10f9480f7cbfae560a8c0d68a5cce4c78b486d1e10927653fcd->enter($__internal_9c92408f4235f10f9480f7cbfae560a8c0d68a5cce4c78b486d1e10927653fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9c92408f4235f10f9480f7cbfae560a8c0d68a5cce4c78b486d1e10927653fcd->leave($__internal_9c92408f4235f10f9480f7cbfae560a8c0d68a5cce4c78b486d1e10927653fcd_prof);

        
        $__internal_6a3fb8c401240a91483710198debc25dc7bf1e976dd23a4fcd63ce6e146f03a8->leave($__internal_6a3fb8c401240a91483710198debc25dc7bf1e976dd23a4fcd63ce6e146f03a8_prof);

    }

    public function getTemplateName()
    {
        return "::baseFos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 102,  166 => 99,  155 => 103,  153 => 102,  149 => 100,  147 => 99,  134 => 95,  129 => 94,  124 => 93,  120 => 92,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"shortcut icon\" href=\"asset/images/favicon.ico\">
</head>
<body>
<style>
    @import url(http://fonts.googleapis.com/css?family=Roboto);
    /****** LOGIN ******/


    .login-container {
        padding: 30px;
        max-width: 350px;
        width: 100% !important;
        background-color: #F7F7F7;
        margin: 100px auto;
        border-radius: 2px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        font-family: roboto;
    }
    .login-container h1 {
        text-align: center;
        font-size: 1.8em;
        font-family: roboto;
    }
    .login-container input[type=submit] {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        position: relative;
    }
    .login-container input[type=text], input[type=password] {
        height: 44px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 10px;
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #d9d9d9;
        border-top: 1px solid #c0c0c0;
        /* border-radius: 2px; */
        padding: 0 8px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .login-container input[type=text]:hover, input[type=password]:hover {
        border: 1px solid #b9b9b9;
        border-top: 1px solid #a0a0a0;
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }
    .login-submit {
        /* border: 1px solid #3079ed; */
        border: 0px;
        color: #fff;
        text-shadow: 0 1px rgba(0,0,0,0.1);
        background-color: #4d90fe;
        padding: 17px 0px;
        font-family: roboto;
        font-size: 14px;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
    }
    .login-submit:hover {
        /* border: 1px solid #2f5bb7; */
        border: 0px;
        text-shadow: 0 1px rgba(0,0,0,0.3);
        background-color: #357ae8;
        /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
    }
    .login-container a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
    }
    .login-help{
        font-size: 15px;
        margin-right: 2px;
        margin-left: 2px;
        color: black;
    }
</style>
{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}
{% block fos_user_content %}{% endblock %}
<script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "::baseFos.html.twig", "/home/nico/pizzeria/app/Resources/views/baseFos.html.twig");
    }
}
