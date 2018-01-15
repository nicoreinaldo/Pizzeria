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
        $__internal_1f8a2679451aa4afeea36065443d9d45eae396458ce01e89182dda8c8b40e900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8a2679451aa4afeea36065443d9d45eae396458ce01e89182dda8c8b40e900->enter($__internal_1f8a2679451aa4afeea36065443d9d45eae396458ce01e89182dda8c8b40e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseFos.html.twig"));

        $__internal_dddd1afcbd2552a6efa70c17f7059c10245863d08ebd2412073b42b09a980ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddd1afcbd2552a6efa70c17f7059c10245863d08ebd2412073b42b09a980ebd->enter($__internal_dddd1afcbd2552a6efa70c17f7059c10245863d08ebd2412073b42b09a980ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseFos.html.twig"));

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
        
        $__internal_1f8a2679451aa4afeea36065443d9d45eae396458ce01e89182dda8c8b40e900->leave($__internal_1f8a2679451aa4afeea36065443d9d45eae396458ce01e89182dda8c8b40e900_prof);

        
        $__internal_dddd1afcbd2552a6efa70c17f7059c10245863d08ebd2412073b42b09a980ebd->leave($__internal_dddd1afcbd2552a6efa70c17f7059c10245863d08ebd2412073b42b09a980ebd_prof);

    }

    // line 99
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dd81904f0d1dc652d9b6941a79ab734ee696b8ce3522f2807a346bbf48452be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd81904f0d1dc652d9b6941a79ab734ee696b8ce3522f2807a346bbf48452be->enter($__internal_9dd81904f0d1dc652d9b6941a79ab734ee696b8ce3522f2807a346bbf48452be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64fa901d12e9f25e6bf0c3225824455af1c1668eb6c65a07056e3296d3fbebc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fa901d12e9f25e6bf0c3225824455af1c1668eb6c65a07056e3296d3fbebc8->enter($__internal_64fa901d12e9f25e6bf0c3225824455af1c1668eb6c65a07056e3296d3fbebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_64fa901d12e9f25e6bf0c3225824455af1c1668eb6c65a07056e3296d3fbebc8->leave($__internal_64fa901d12e9f25e6bf0c3225824455af1c1668eb6c65a07056e3296d3fbebc8_prof);

        
        $__internal_9dd81904f0d1dc652d9b6941a79ab734ee696b8ce3522f2807a346bbf48452be->leave($__internal_9dd81904f0d1dc652d9b6941a79ab734ee696b8ce3522f2807a346bbf48452be_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1608d495b62e6c69c899cb3f9fd6d1b0b20b1ef7af36bebfe3b4a52281da676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1608d495b62e6c69c899cb3f9fd6d1b0b20b1ef7af36bebfe3b4a52281da676->enter($__internal_e1608d495b62e6c69c899cb3f9fd6d1b0b20b1ef7af36bebfe3b4a52281da676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_53b2cc2dfb384960a606af4eff446025e7346580bc50597c17a0298b522dec8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b2cc2dfb384960a606af4eff446025e7346580bc50597c17a0298b522dec8c->enter($__internal_53b2cc2dfb384960a606af4eff446025e7346580bc50597c17a0298b522dec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_53b2cc2dfb384960a606af4eff446025e7346580bc50597c17a0298b522dec8c->leave($__internal_53b2cc2dfb384960a606af4eff446025e7346580bc50597c17a0298b522dec8c_prof);

        
        $__internal_e1608d495b62e6c69c899cb3f9fd6d1b0b20b1ef7af36bebfe3b4a52281da676->leave($__internal_e1608d495b62e6c69c899cb3f9fd6d1b0b20b1ef7af36bebfe3b4a52281da676_prof);

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
</html>", "::baseFos.html.twig", "/home/nico/pizzerianostra/app/Resources/views/baseFos.html.twig");
    }
}
