<?php

/* ::BaseFos.html.twig */
class __TwigTemplate_a3c3385409eaf283ff9cced7b2d63192d83ea89529cbc48eb771862978756894 extends Twig_Template
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
        $__internal_51be181d29adc2ce50f606fa767ebe4896110d25a0048feecbfc5d1140348e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51be181d29adc2ce50f606fa767ebe4896110d25a0048feecbfc5d1140348e23->enter($__internal_51be181d29adc2ce50f606fa767ebe4896110d25a0048feecbfc5d1140348e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::BaseFos.html.twig"));

        $__internal_17bf90f3b1f66d067567d742bdebebd10096deb764d0d6f8b493eeb446bd264c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bf90f3b1f66d067567d742bdebebd10096deb764d0d6f8b493eeb446bd264c->enter($__internal_17bf90f3b1f66d067567d742bdebebd10096deb764d0d6f8b493eeb446bd264c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::BaseFos.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
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
        font-size: 12px;
    }
</style>
";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 87
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 88
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 89
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
        // line 93
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 94
        echo "<script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "</body>
</html>";
        
        $__internal_51be181d29adc2ce50f606fa767ebe4896110d25a0048feecbfc5d1140348e23->leave($__internal_51be181d29adc2ce50f606fa767ebe4896110d25a0048feecbfc5d1140348e23_prof);

        
        $__internal_17bf90f3b1f66d067567d742bdebebd10096deb764d0d6f8b493eeb446bd264c->leave($__internal_17bf90f3b1f66d067567d742bdebebd10096deb764d0d6f8b493eeb446bd264c_prof);

    }

    // line 93
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7568a949858f8da3e8443fd93c804d3f8f6ca3c950f3b182ebaefc946051e75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7568a949858f8da3e8443fd93c804d3f8f6ca3c950f3b182ebaefc946051e75c->enter($__internal_7568a949858f8da3e8443fd93c804d3f8f6ca3c950f3b182ebaefc946051e75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35b0152f117075082ed9fe9214865aa81d1ce83cc69a21890642186484f6d7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b0152f117075082ed9fe9214865aa81d1ce83cc69a21890642186484f6d7eb->enter($__internal_35b0152f117075082ed9fe9214865aa81d1ce83cc69a21890642186484f6d7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_35b0152f117075082ed9fe9214865aa81d1ce83cc69a21890642186484f6d7eb->leave($__internal_35b0152f117075082ed9fe9214865aa81d1ce83cc69a21890642186484f6d7eb_prof);

        
        $__internal_7568a949858f8da3e8443fd93c804d3f8f6ca3c950f3b182ebaefc946051e75c->leave($__internal_7568a949858f8da3e8443fd93c804d3f8f6ca3c950f3b182ebaefc946051e75c_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a360410b1ae0804e0dcfcfc45e41dd5c4e28f2fd07d0b2227c5bc3015670c762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a360410b1ae0804e0dcfcfc45e41dd5c4e28f2fd07d0b2227c5bc3015670c762->enter($__internal_a360410b1ae0804e0dcfcfc45e41dd5c4e28f2fd07d0b2227c5bc3015670c762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e050d211f18b8dbb883f640ee582b08d9956c4a05814a337d89f53320e6c82c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e050d211f18b8dbb883f640ee582b08d9956c4a05814a337d89f53320e6c82c0->enter($__internal_e050d211f18b8dbb883f640ee582b08d9956c4a05814a337d89f53320e6c82c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e050d211f18b8dbb883f640ee582b08d9956c4a05814a337d89f53320e6c82c0->leave($__internal_e050d211f18b8dbb883f640ee582b08d9956c4a05814a337d89f53320e6c82c0_prof);

        
        $__internal_a360410b1ae0804e0dcfcfc45e41dd5c4e28f2fd07d0b2227c5bc3015670c762->leave($__internal_a360410b1ae0804e0dcfcfc45e41dd5c4e28f2fd07d0b2227c5bc3015670c762_prof);

    }

    public function getTemplateName()
    {
        return "::BaseFos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 96,  160 => 93,  149 => 97,  147 => 96,  143 => 94,  141 => 93,  128 => 89,  123 => 88,  118 => 87,  114 => 86,  27 => 1,);
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
        font-size: 12px;
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
</html>", "::BaseFos.html.twig", "/home/nico/pizzerianostra/app/Resources/views/BaseFos.html.twig");
    }
}
