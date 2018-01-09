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
        $__internal_4e0e54ee8812d0f34979cfae39478ebc334a8fbda304a4943c32166240083071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0e54ee8812d0f34979cfae39478ebc334a8fbda304a4943c32166240083071->enter($__internal_4e0e54ee8812d0f34979cfae39478ebc334a8fbda304a4943c32166240083071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3580d824ebd362d3270b205e316995c136c9bf978a34ed5638197afd06611df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3580d824ebd362d3270b205e316995c136c9bf978a34ed5638197afd06611df6->enter($__internal_3580d824ebd362d3270b205e316995c136c9bf978a34ed5638197afd06611df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0e54ee8812d0f34979cfae39478ebc334a8fbda304a4943c32166240083071->leave($__internal_4e0e54ee8812d0f34979cfae39478ebc334a8fbda304a4943c32166240083071_prof);

        
        $__internal_3580d824ebd362d3270b205e316995c136c9bf978a34ed5638197afd06611df6->leave($__internal_3580d824ebd362d3270b205e316995c136c9bf978a34ed5638197afd06611df6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e250b86b50b7a293cae40f1122b6a48e38b7abf5bee9bec9a132ed768d10617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e250b86b50b7a293cae40f1122b6a48e38b7abf5bee9bec9a132ed768d10617->enter($__internal_6e250b86b50b7a293cae40f1122b6a48e38b7abf5bee9bec9a132ed768d10617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97d1fdf43a46b36e9d77a989046d843b08a5a323631a953615a7fd1348b1e67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d1fdf43a46b36e9d77a989046d843b08a5a323631a953615a7fd1348b1e67d->enter($__internal_97d1fdf43a46b36e9d77a989046d843b08a5a323631a953615a7fd1348b1e67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97d1fdf43a46b36e9d77a989046d843b08a5a323631a953615a7fd1348b1e67d->leave($__internal_97d1fdf43a46b36e9d77a989046d843b08a5a323631a953615a7fd1348b1e67d_prof);

        
        $__internal_6e250b86b50b7a293cae40f1122b6a48e38b7abf5bee9bec9a132ed768d10617->leave($__internal_6e250b86b50b7a293cae40f1122b6a48e38b7abf5bee9bec9a132ed768d10617_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89885112304ccfda562f68e71e472745207bc777225e82f537de7c7caf86df49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89885112304ccfda562f68e71e472745207bc777225e82f537de7c7caf86df49->enter($__internal_89885112304ccfda562f68e71e472745207bc777225e82f537de7c7caf86df49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a5558e119f3901d6de1dcf3ec8570a174a122e46a27f8f6089e0829e1ea3970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5558e119f3901d6de1dcf3ec8570a174a122e46a27f8f6089e0829e1ea3970->enter($__internal_1a5558e119f3901d6de1dcf3ec8570a174a122e46a27f8f6089e0829e1ea3970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a5558e119f3901d6de1dcf3ec8570a174a122e46a27f8f6089e0829e1ea3970->leave($__internal_1a5558e119f3901d6de1dcf3ec8570a174a122e46a27f8f6089e0829e1ea3970_prof);

        
        $__internal_89885112304ccfda562f68e71e472745207bc777225e82f537de7c7caf86df49->leave($__internal_89885112304ccfda562f68e71e472745207bc777225e82f537de7c7caf86df49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e5aed99a12934d8704609329d6918c22ab0777b368ec239154db18bc96c32b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5aed99a12934d8704609329d6918c22ab0777b368ec239154db18bc96c32b4->enter($__internal_9e5aed99a12934d8704609329d6918c22ab0777b368ec239154db18bc96c32b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e3a91358926e9e098b6c743c9247fd9ce7be57f36c265375a02c5c938438881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3a91358926e9e098b6c743c9247fd9ce7be57f36c265375a02c5c938438881->enter($__internal_5e3a91358926e9e098b6c743c9247fd9ce7be57f36c265375a02c5c938438881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e3a91358926e9e098b6c743c9247fd9ce7be57f36c265375a02c5c938438881->leave($__internal_5e3a91358926e9e098b6c743c9247fd9ce7be57f36c265375a02c5c938438881_prof);

        
        $__internal_9e5aed99a12934d8704609329d6918c22ab0777b368ec239154db18bc96c32b4->leave($__internal_9e5aed99a12934d8704609329d6918c22ab0777b368ec239154db18bc96c32b4_prof);

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
