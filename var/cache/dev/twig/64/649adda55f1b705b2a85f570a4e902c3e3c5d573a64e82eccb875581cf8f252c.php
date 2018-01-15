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
        $__internal_1e765c3bceadc4b607a7637d0225171ad8c50e40ca0327b83ebd2ce6ee47b31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e765c3bceadc4b607a7637d0225171ad8c50e40ca0327b83ebd2ce6ee47b31a->enter($__internal_1e765c3bceadc4b607a7637d0225171ad8c50e40ca0327b83ebd2ce6ee47b31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_85e342d91bb98594a53dd0ce80648112cc595db55f2be4e666b6eae1e2250406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e342d91bb98594a53dd0ce80648112cc595db55f2be4e666b6eae1e2250406->enter($__internal_85e342d91bb98594a53dd0ce80648112cc595db55f2be4e666b6eae1e2250406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e765c3bceadc4b607a7637d0225171ad8c50e40ca0327b83ebd2ce6ee47b31a->leave($__internal_1e765c3bceadc4b607a7637d0225171ad8c50e40ca0327b83ebd2ce6ee47b31a_prof);

        
        $__internal_85e342d91bb98594a53dd0ce80648112cc595db55f2be4e666b6eae1e2250406->leave($__internal_85e342d91bb98594a53dd0ce80648112cc595db55f2be4e666b6eae1e2250406_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4d698e2e1986c4d8fe5a6f78c39c3da738168a0ca5efeceff9be64063c6575d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d698e2e1986c4d8fe5a6f78c39c3da738168a0ca5efeceff9be64063c6575d->enter($__internal_d4d698e2e1986c4d8fe5a6f78c39c3da738168a0ca5efeceff9be64063c6575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f0eedb4d7965d253469a23b44aa7c32f1e09cf322f0a7e47d0232065394ae178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0eedb4d7965d253469a23b44aa7c32f1e09cf322f0a7e47d0232065394ae178->enter($__internal_f0eedb4d7965d253469a23b44aa7c32f1e09cf322f0a7e47d0232065394ae178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0eedb4d7965d253469a23b44aa7c32f1e09cf322f0a7e47d0232065394ae178->leave($__internal_f0eedb4d7965d253469a23b44aa7c32f1e09cf322f0a7e47d0232065394ae178_prof);

        
        $__internal_d4d698e2e1986c4d8fe5a6f78c39c3da738168a0ca5efeceff9be64063c6575d->leave($__internal_d4d698e2e1986c4d8fe5a6f78c39c3da738168a0ca5efeceff9be64063c6575d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_928b81eb6eefd6006a91225059f519cd1159e1e7f2207b263d9131e566cfd9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928b81eb6eefd6006a91225059f519cd1159e1e7f2207b263d9131e566cfd9c7->enter($__internal_928b81eb6eefd6006a91225059f519cd1159e1e7f2207b263d9131e566cfd9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ee927fb8d9300affe930787e30b75633380409df1e654bbd6a0740cea3da327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee927fb8d9300affe930787e30b75633380409df1e654bbd6a0740cea3da327->enter($__internal_3ee927fb8d9300affe930787e30b75633380409df1e654bbd6a0740cea3da327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ee927fb8d9300affe930787e30b75633380409df1e654bbd6a0740cea3da327->leave($__internal_3ee927fb8d9300affe930787e30b75633380409df1e654bbd6a0740cea3da327_prof);

        
        $__internal_928b81eb6eefd6006a91225059f519cd1159e1e7f2207b263d9131e566cfd9c7->leave($__internal_928b81eb6eefd6006a91225059f519cd1159e1e7f2207b263d9131e566cfd9c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be8d5fefe5d6b9f8d50cb8e354d474bf720f5ac2fb8f59724763a0f7032909b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8d5fefe5d6b9f8d50cb8e354d474bf720f5ac2fb8f59724763a0f7032909b2->enter($__internal_be8d5fefe5d6b9f8d50cb8e354d474bf720f5ac2fb8f59724763a0f7032909b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c89585a006d24337dbba6cfa1d01adf97554d8c488275979e0a776af82b13e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89585a006d24337dbba6cfa1d01adf97554d8c488275979e0a776af82b13e7a->enter($__internal_c89585a006d24337dbba6cfa1d01adf97554d8c488275979e0a776af82b13e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c89585a006d24337dbba6cfa1d01adf97554d8c488275979e0a776af82b13e7a->leave($__internal_c89585a006d24337dbba6cfa1d01adf97554d8c488275979e0a776af82b13e7a_prof);

        
        $__internal_be8d5fefe5d6b9f8d50cb8e354d474bf720f5ac2fb8f59724763a0f7032909b2->leave($__internal_be8d5fefe5d6b9f8d50cb8e354d474bf720f5ac2fb8f59724763a0f7032909b2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/manuel/symfony/Pizzeria/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
