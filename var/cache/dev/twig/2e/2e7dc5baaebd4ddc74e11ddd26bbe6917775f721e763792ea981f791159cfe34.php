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
        $__internal_f0b328d87b14be6a1801910df3ba97f59c1f5454ffa45c2f8d73927c3d5a99f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b328d87b14be6a1801910df3ba97f59c1f5454ffa45c2f8d73927c3d5a99f8->enter($__internal_f0b328d87b14be6a1801910df3ba97f59c1f5454ffa45c2f8d73927c3d5a99f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0168276f62d6720a6fdd603b4e48a12bd1ec3a1a521a8642639e6029eb085884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0168276f62d6720a6fdd603b4e48a12bd1ec3a1a521a8642639e6029eb085884->enter($__internal_0168276f62d6720a6fdd603b4e48a12bd1ec3a1a521a8642639e6029eb085884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f0b328d87b14be6a1801910df3ba97f59c1f5454ffa45c2f8d73927c3d5a99f8->leave($__internal_f0b328d87b14be6a1801910df3ba97f59c1f5454ffa45c2f8d73927c3d5a99f8_prof);

        
        $__internal_0168276f62d6720a6fdd603b4e48a12bd1ec3a1a521a8642639e6029eb085884->leave($__internal_0168276f62d6720a6fdd603b4e48a12bd1ec3a1a521a8642639e6029eb085884_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_345d483d03f41a4dcf94c6ecf934ec8a6a96d0bc1af36cdc8b508516b6475efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345d483d03f41a4dcf94c6ecf934ec8a6a96d0bc1af36cdc8b508516b6475efd->enter($__internal_345d483d03f41a4dcf94c6ecf934ec8a6a96d0bc1af36cdc8b508516b6475efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e585492a553df6482584bd214ad762eebc24b643f0fb387595627d653c777aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e585492a553df6482584bd214ad762eebc24b643f0fb387595627d653c777aed->enter($__internal_e585492a553df6482584bd214ad762eebc24b643f0fb387595627d653c777aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e585492a553df6482584bd214ad762eebc24b643f0fb387595627d653c777aed->leave($__internal_e585492a553df6482584bd214ad762eebc24b643f0fb387595627d653c777aed_prof);

        
        $__internal_345d483d03f41a4dcf94c6ecf934ec8a6a96d0bc1af36cdc8b508516b6475efd->leave($__internal_345d483d03f41a4dcf94c6ecf934ec8a6a96d0bc1af36cdc8b508516b6475efd_prof);

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
