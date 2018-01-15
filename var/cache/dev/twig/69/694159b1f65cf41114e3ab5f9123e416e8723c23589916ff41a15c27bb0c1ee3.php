<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_768c812be1c0efea772d704123068323230fa8b5c330490b44c00949ac9a1bbf extends Twig_Template
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
        $__internal_3388f9fa2839f4dab08c6aeb19af2adc83be45d8f0e0b6fcb3d14120b57ee71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3388f9fa2839f4dab08c6aeb19af2adc83be45d8f0e0b6fcb3d14120b57ee71f->enter($__internal_3388f9fa2839f4dab08c6aeb19af2adc83be45d8f0e0b6fcb3d14120b57ee71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a53bb4b723450a019619721569304d93f4188453b48c6e9bd678e2bd320db525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53bb4b723450a019619721569304d93f4188453b48c6e9bd678e2bd320db525->enter($__internal_a53bb4b723450a019619721569304d93f4188453b48c6e9bd678e2bd320db525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3388f9fa2839f4dab08c6aeb19af2adc83be45d8f0e0b6fcb3d14120b57ee71f->leave($__internal_3388f9fa2839f4dab08c6aeb19af2adc83be45d8f0e0b6fcb3d14120b57ee71f_prof);

        
        $__internal_a53bb4b723450a019619721569304d93f4188453b48c6e9bd678e2bd320db525->leave($__internal_a53bb4b723450a019619721569304d93f4188453b48c6e9bd678e2bd320db525_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
