<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6d9f4ed32f776e90eeb97a6d88b839c146104c41f7c81c372b401c49d913ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d9f4ed32f776e90eeb97a6d88b839c146104c41f7c81c372b401c49d913ab3->enter($__internal_a6d9f4ed32f776e90eeb97a6d88b839c146104c41f7c81c372b401c49d913ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_24267e9d69b9d6aee60882fd7a2bb1dc4d793d873cbcd7e9c238a8606be10608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24267e9d69b9d6aee60882fd7a2bb1dc4d793d873cbcd7e9c238a8606be10608->enter($__internal_24267e9d69b9d6aee60882fd7a2bb1dc4d793d873cbcd7e9c238a8606be10608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a6d9f4ed32f776e90eeb97a6d88b839c146104c41f7c81c372b401c49d913ab3->leave($__internal_a6d9f4ed32f776e90eeb97a6d88b839c146104c41f7c81c372b401c49d913ab3_prof);

        
        $__internal_24267e9d69b9d6aee60882fd7a2bb1dc4d793d873cbcd7e9c238a8606be10608->leave($__internal_24267e9d69b9d6aee60882fd7a2bb1dc4d793d873cbcd7e9c238a8606be10608_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
