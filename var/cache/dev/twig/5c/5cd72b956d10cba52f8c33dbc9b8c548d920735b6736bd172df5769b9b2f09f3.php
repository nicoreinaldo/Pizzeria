<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
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
        $__internal_84fc6daf9063d74ba79b6c933b114a79c49f00abfefb0ddd4fe3832779120622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fc6daf9063d74ba79b6c933b114a79c49f00abfefb0ddd4fe3832779120622->enter($__internal_84fc6daf9063d74ba79b6c933b114a79c49f00abfefb0ddd4fe3832779120622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1686dfa02bd8fee27a21af2548318b6af7f2828d0f83352d1f68dbb781880690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1686dfa02bd8fee27a21af2548318b6af7f2828d0f83352d1f68dbb781880690->enter($__internal_1686dfa02bd8fee27a21af2548318b6af7f2828d0f83352d1f68dbb781880690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84fc6daf9063d74ba79b6c933b114a79c49f00abfefb0ddd4fe3832779120622->leave($__internal_84fc6daf9063d74ba79b6c933b114a79c49f00abfefb0ddd4fe3832779120622_prof);

        
        $__internal_1686dfa02bd8fee27a21af2548318b6af7f2828d0f83352d1f68dbb781880690->leave($__internal_1686dfa02bd8fee27a21af2548318b6af7f2828d0f83352d1f68dbb781880690_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74010998ce4d1e99769a5e97ed04b9c218a89fa8fa86476276f7f353dfd21b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74010998ce4d1e99769a5e97ed04b9c218a89fa8fa86476276f7f353dfd21b97->enter($__internal_74010998ce4d1e99769a5e97ed04b9c218a89fa8fa86476276f7f353dfd21b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e32cb1930a433532d15389d96813afb5b301a122e96695ae8a95986cff1c3d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32cb1930a433532d15389d96813afb5b301a122e96695ae8a95986cff1c3d5e->enter($__internal_e32cb1930a433532d15389d96813afb5b301a122e96695ae8a95986cff1c3d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e32cb1930a433532d15389d96813afb5b301a122e96695ae8a95986cff1c3d5e->leave($__internal_e32cb1930a433532d15389d96813afb5b301a122e96695ae8a95986cff1c3d5e_prof);

        
        $__internal_74010998ce4d1e99769a5e97ed04b9c218a89fa8fa86476276f7f353dfd21b97->leave($__internal_74010998ce4d1e99769a5e97ed04b9c218a89fa8fa86476276f7f353dfd21b97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f006804b87e6b017bf618d4cc64191202902c196c3e3551331851da4a1b16912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f006804b87e6b017bf618d4cc64191202902c196c3e3551331851da4a1b16912->enter($__internal_f006804b87e6b017bf618d4cc64191202902c196c3e3551331851da4a1b16912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0489fd42c9a110aa97473d9d1f206d482ed93b71b4dadc2b8fb5f0e10b57e188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0489fd42c9a110aa97473d9d1f206d482ed93b71b4dadc2b8fb5f0e10b57e188->enter($__internal_0489fd42c9a110aa97473d9d1f206d482ed93b71b4dadc2b8fb5f0e10b57e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0489fd42c9a110aa97473d9d1f206d482ed93b71b4dadc2b8fb5f0e10b57e188->leave($__internal_0489fd42c9a110aa97473d9d1f206d482ed93b71b4dadc2b8fb5f0e10b57e188_prof);

        
        $__internal_f006804b87e6b017bf618d4cc64191202902c196c3e3551331851da4a1b16912->leave($__internal_f006804b87e6b017bf618d4cc64191202902c196c3e3551331851da4a1b16912_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12272f39bc9deba1dcee046128fd644b9e37ed6e92b301f7674aa904c14daa45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12272f39bc9deba1dcee046128fd644b9e37ed6e92b301f7674aa904c14daa45->enter($__internal_12272f39bc9deba1dcee046128fd644b9e37ed6e92b301f7674aa904c14daa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20bf80d0d58501547e4fc04e9879a8215fe80cfbc91e1798f6f0237639101adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bf80d0d58501547e4fc04e9879a8215fe80cfbc91e1798f6f0237639101adb->enter($__internal_20bf80d0d58501547e4fc04e9879a8215fe80cfbc91e1798f6f0237639101adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20bf80d0d58501547e4fc04e9879a8215fe80cfbc91e1798f6f0237639101adb->leave($__internal_20bf80d0d58501547e4fc04e9879a8215fe80cfbc91e1798f6f0237639101adb_prof);

        
        $__internal_12272f39bc9deba1dcee046128fd644b9e37ed6e92b301f7674aa904c14daa45->leave($__internal_12272f39bc9deba1dcee046128fd644b9e37ed6e92b301f7674aa904c14daa45_prof);

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
