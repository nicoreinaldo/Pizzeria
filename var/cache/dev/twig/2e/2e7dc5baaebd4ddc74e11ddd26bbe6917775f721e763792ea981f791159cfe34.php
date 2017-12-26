<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ca2c944e561c20c49ff63d627c1bab6190ee616c17b02b27e17519def3e5a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca2c944e561c20c49ff63d627c1bab6190ee616c17b02b27e17519def3e5a2f->enter($__internal_4ca2c944e561c20c49ff63d627c1bab6190ee616c17b02b27e17519def3e5a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b12e86107bb2b07f3fa339be32a10a0560d0c0ec06480154f96330b40478cd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12e86107bb2b07f3fa339be32a10a0560d0c0ec06480154f96330b40478cd99->enter($__internal_b12e86107bb2b07f3fa339be32a10a0560d0c0ec06480154f96330b40478cd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4ca2c944e561c20c49ff63d627c1bab6190ee616c17b02b27e17519def3e5a2f->leave($__internal_4ca2c944e561c20c49ff63d627c1bab6190ee616c17b02b27e17519def3e5a2f_prof);

        
        $__internal_b12e86107bb2b07f3fa339be32a10a0560d0c0ec06480154f96330b40478cd99->leave($__internal_b12e86107bb2b07f3fa339be32a10a0560d0c0ec06480154f96330b40478cd99_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_268cc345e3716f496e629955afed1a05e8926e6ed6d9d1fcda6fe93beb30fab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268cc345e3716f496e629955afed1a05e8926e6ed6d9d1fcda6fe93beb30fab3->enter($__internal_268cc345e3716f496e629955afed1a05e8926e6ed6d9d1fcda6fe93beb30fab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c147eb95d6764f8bb4b91e6abafe275886547c98d14d65d1ef5f6405a8a2cd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c147eb95d6764f8bb4b91e6abafe275886547c98d14d65d1ef5f6405a8a2cd15->enter($__internal_c147eb95d6764f8bb4b91e6abafe275886547c98d14d65d1ef5f6405a8a2cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c147eb95d6764f8bb4b91e6abafe275886547c98d14d65d1ef5f6405a8a2cd15->leave($__internal_c147eb95d6764f8bb4b91e6abafe275886547c98d14d65d1ef5f6405a8a2cd15_prof);

        
        $__internal_268cc345e3716f496e629955afed1a05e8926e6ed6d9d1fcda6fe93beb30fab3->leave($__internal_268cc345e3716f496e629955afed1a05e8926e6ed6d9d1fcda6fe93beb30fab3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
