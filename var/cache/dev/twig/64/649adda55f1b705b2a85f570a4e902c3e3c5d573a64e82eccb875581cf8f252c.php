<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63d8869185002dfa39368eab03c694d345374eadade5f422d9b35ca1454fec6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d8869185002dfa39368eab03c694d345374eadade5f422d9b35ca1454fec6f->enter($__internal_63d8869185002dfa39368eab03c694d345374eadade5f422d9b35ca1454fec6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a7dc749c79eb632e5ce0a0c02892accdf1c38836aff46c73c3a1ab78f35637d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dc749c79eb632e5ce0a0c02892accdf1c38836aff46c73c3a1ab78f35637d1->enter($__internal_a7dc749c79eb632e5ce0a0c02892accdf1c38836aff46c73c3a1ab78f35637d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d8869185002dfa39368eab03c694d345374eadade5f422d9b35ca1454fec6f->leave($__internal_63d8869185002dfa39368eab03c694d345374eadade5f422d9b35ca1454fec6f_prof);

        
        $__internal_a7dc749c79eb632e5ce0a0c02892accdf1c38836aff46c73c3a1ab78f35637d1->leave($__internal_a7dc749c79eb632e5ce0a0c02892accdf1c38836aff46c73c3a1ab78f35637d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68e8ad7f12a11c9f8c6441863da2aec39b9ee1ef9cf678eb866a4a17814c9798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e8ad7f12a11c9f8c6441863da2aec39b9ee1ef9cf678eb866a4a17814c9798->enter($__internal_68e8ad7f12a11c9f8c6441863da2aec39b9ee1ef9cf678eb866a4a17814c9798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1e4f54bf942be4e423cc526f671ff876b23ec082451d52701dd48f115f288387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4f54bf942be4e423cc526f671ff876b23ec082451d52701dd48f115f288387->enter($__internal_1e4f54bf942be4e423cc526f671ff876b23ec082451d52701dd48f115f288387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e4f54bf942be4e423cc526f671ff876b23ec082451d52701dd48f115f288387->leave($__internal_1e4f54bf942be4e423cc526f671ff876b23ec082451d52701dd48f115f288387_prof);

        
        $__internal_68e8ad7f12a11c9f8c6441863da2aec39b9ee1ef9cf678eb866a4a17814c9798->leave($__internal_68e8ad7f12a11c9f8c6441863da2aec39b9ee1ef9cf678eb866a4a17814c9798_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1ed829cbee8e1f996d4bcdc47accf15fca3e7ecdb90927aa050a35dfa74d295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ed829cbee8e1f996d4bcdc47accf15fca3e7ecdb90927aa050a35dfa74d295->enter($__internal_d1ed829cbee8e1f996d4bcdc47accf15fca3e7ecdb90927aa050a35dfa74d295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b1e411a7b63f9f5e6041507ff531c5ce3111fb795ca3bae45b800f446a8b9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1e411a7b63f9f5e6041507ff531c5ce3111fb795ca3bae45b800f446a8b9db->enter($__internal_7b1e411a7b63f9f5e6041507ff531c5ce3111fb795ca3bae45b800f446a8b9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7b1e411a7b63f9f5e6041507ff531c5ce3111fb795ca3bae45b800f446a8b9db->leave($__internal_7b1e411a7b63f9f5e6041507ff531c5ce3111fb795ca3bae45b800f446a8b9db_prof);

        
        $__internal_d1ed829cbee8e1f996d4bcdc47accf15fca3e7ecdb90927aa050a35dfa74d295->leave($__internal_d1ed829cbee8e1f996d4bcdc47accf15fca3e7ecdb90927aa050a35dfa74d295_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2cead2e3f2f42388b54bca2bc676c9d4e96b81ff62269a88dd97cc20134d832c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cead2e3f2f42388b54bca2bc676c9d4e96b81ff62269a88dd97cc20134d832c->enter($__internal_2cead2e3f2f42388b54bca2bc676c9d4e96b81ff62269a88dd97cc20134d832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5e7cef8d10d39f1eea08e2dc7234263ad1f65c210aac6130967df5d3b05d849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e7cef8d10d39f1eea08e2dc7234263ad1f65c210aac6130967df5d3b05d849->enter($__internal_e5e7cef8d10d39f1eea08e2dc7234263ad1f65c210aac6130967df5d3b05d849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5e7cef8d10d39f1eea08e2dc7234263ad1f65c210aac6130967df5d3b05d849->leave($__internal_e5e7cef8d10d39f1eea08e2dc7234263ad1f65c210aac6130967df5d3b05d849_prof);

        
        $__internal_2cead2e3f2f42388b54bca2bc676c9d4e96b81ff62269a88dd97cc20134d832c->leave($__internal_2cead2e3f2f42388b54bca2bc676c9d4e96b81ff62269a88dd97cc20134d832c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/nico/pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
