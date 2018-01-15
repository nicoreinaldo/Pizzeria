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
        $__internal_70daf0a371519912980da39208d85b5e8f686354779eca26c27c6f2a227f1911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70daf0a371519912980da39208d85b5e8f686354779eca26c27c6f2a227f1911->enter($__internal_70daf0a371519912980da39208d85b5e8f686354779eca26c27c6f2a227f1911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fd7dca15f0bb873f9a7dcddba69d79838865ff15288adcc6cee5398f4819b4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7dca15f0bb873f9a7dcddba69d79838865ff15288adcc6cee5398f4819b4f9->enter($__internal_fd7dca15f0bb873f9a7dcddba69d79838865ff15288adcc6cee5398f4819b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_70daf0a371519912980da39208d85b5e8f686354779eca26c27c6f2a227f1911->leave($__internal_70daf0a371519912980da39208d85b5e8f686354779eca26c27c6f2a227f1911_prof);

        
        $__internal_fd7dca15f0bb873f9a7dcddba69d79838865ff15288adcc6cee5398f4819b4f9->leave($__internal_fd7dca15f0bb873f9a7dcddba69d79838865ff15288adcc6cee5398f4819b4f9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_72f5fa953533ad940be59fb8b00b2baf5a11d2dbcaf1970029fc2fd7cdb5be16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f5fa953533ad940be59fb8b00b2baf5a11d2dbcaf1970029fc2fd7cdb5be16->enter($__internal_72f5fa953533ad940be59fb8b00b2baf5a11d2dbcaf1970029fc2fd7cdb5be16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c0792b3000a16bfd015df4e3f3115608358ca4cab9f8d86d4923653d27c5b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0792b3000a16bfd015df4e3f3115608358ca4cab9f8d86d4923653d27c5b2e->enter($__internal_7c0792b3000a16bfd015df4e3f3115608358ca4cab9f8d86d4923653d27c5b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c0792b3000a16bfd015df4e3f3115608358ca4cab9f8d86d4923653d27c5b2e->leave($__internal_7c0792b3000a16bfd015df4e3f3115608358ca4cab9f8d86d4923653d27c5b2e_prof);

        
        $__internal_72f5fa953533ad940be59fb8b00b2baf5a11d2dbcaf1970029fc2fd7cdb5be16->leave($__internal_72f5fa953533ad940be59fb8b00b2baf5a11d2dbcaf1970029fc2fd7cdb5be16_prof);

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
