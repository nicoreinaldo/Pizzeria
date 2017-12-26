<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_76ad967cd99c32be8f12ad41b9c342d0fd1d8f1b3a8e270717fcf17ce5f4aa39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ad967cd99c32be8f12ad41b9c342d0fd1d8f1b3a8e270717fcf17ce5f4aa39->enter($__internal_76ad967cd99c32be8f12ad41b9c342d0fd1d8f1b3a8e270717fcf17ce5f4aa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_55949a703053c4e0cc132bc859cc31ba79eb5c6a4d9b6f635b07e749fe4a467b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55949a703053c4e0cc132bc859cc31ba79eb5c6a4d9b6f635b07e749fe4a467b->enter($__internal_55949a703053c4e0cc132bc859cc31ba79eb5c6a4d9b6f635b07e749fe4a467b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ad967cd99c32be8f12ad41b9c342d0fd1d8f1b3a8e270717fcf17ce5f4aa39->leave($__internal_76ad967cd99c32be8f12ad41b9c342d0fd1d8f1b3a8e270717fcf17ce5f4aa39_prof);

        
        $__internal_55949a703053c4e0cc132bc859cc31ba79eb5c6a4d9b6f635b07e749fe4a467b->leave($__internal_55949a703053c4e0cc132bc859cc31ba79eb5c6a4d9b6f635b07e749fe4a467b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c095b5c8e74455180d4286d4884ff9f6eee2878a07fd333a8b7d37de71fe17bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c095b5c8e74455180d4286d4884ff9f6eee2878a07fd333a8b7d37de71fe17bc->enter($__internal_c095b5c8e74455180d4286d4884ff9f6eee2878a07fd333a8b7d37de71fe17bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55a9ced86184bd3cbf5b3c6c550973c5b38031d5d2dfe80a24adb675edd0496b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a9ced86184bd3cbf5b3c6c550973c5b38031d5d2dfe80a24adb675edd0496b->enter($__internal_55a9ced86184bd3cbf5b3c6c550973c5b38031d5d2dfe80a24adb675edd0496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55a9ced86184bd3cbf5b3c6c550973c5b38031d5d2dfe80a24adb675edd0496b->leave($__internal_55a9ced86184bd3cbf5b3c6c550973c5b38031d5d2dfe80a24adb675edd0496b_prof);

        
        $__internal_c095b5c8e74455180d4286d4884ff9f6eee2878a07fd333a8b7d37de71fe17bc->leave($__internal_c095b5c8e74455180d4286d4884ff9f6eee2878a07fd333a8b7d37de71fe17bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94d69adddd3f552ee6bc62a717e2c4043e63663395236c9abdb0e94eecd2e97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d69adddd3f552ee6bc62a717e2c4043e63663395236c9abdb0e94eecd2e97f->enter($__internal_94d69adddd3f552ee6bc62a717e2c4043e63663395236c9abdb0e94eecd2e97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7fa73f6a1bb71301fefe835d1fdaf57dfbd80d721e9d41bfe91e55078e79c577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa73f6a1bb71301fefe835d1fdaf57dfbd80d721e9d41bfe91e55078e79c577->enter($__internal_7fa73f6a1bb71301fefe835d1fdaf57dfbd80d721e9d41bfe91e55078e79c577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7fa73f6a1bb71301fefe835d1fdaf57dfbd80d721e9d41bfe91e55078e79c577->leave($__internal_7fa73f6a1bb71301fefe835d1fdaf57dfbd80d721e9d41bfe91e55078e79c577_prof);

        
        $__internal_94d69adddd3f552ee6bc62a717e2c4043e63663395236c9abdb0e94eecd2e97f->leave($__internal_94d69adddd3f552ee6bc62a717e2c4043e63663395236c9abdb0e94eecd2e97f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3a2ef4b64423a010d9c9cf4b8d2314d5ddf4ee9d591ef8e6548c0b89906ba1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a2ef4b64423a010d9c9cf4b8d2314d5ddf4ee9d591ef8e6548c0b89906ba1e->enter($__internal_f3a2ef4b64423a010d9c9cf4b8d2314d5ddf4ee9d591ef8e6548c0b89906ba1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba7982b282bf0cc20dc15e0fbba9f28e3f023f67691ecdffcae7fb8d8c7107ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7982b282bf0cc20dc15e0fbba9f28e3f023f67691ecdffcae7fb8d8c7107ea->enter($__internal_ba7982b282bf0cc20dc15e0fbba9f28e3f023f67691ecdffcae7fb8d8c7107ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ba7982b282bf0cc20dc15e0fbba9f28e3f023f67691ecdffcae7fb8d8c7107ea->leave($__internal_ba7982b282bf0cc20dc15e0fbba9f28e3f023f67691ecdffcae7fb8d8c7107ea_prof);

        
        $__internal_f3a2ef4b64423a010d9c9cf4b8d2314d5ddf4ee9d591ef8e6548c0b89906ba1e->leave($__internal_f3a2ef4b64423a010d9c9cf4b8d2314d5ddf4ee9d591ef8e6548c0b89906ba1e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
