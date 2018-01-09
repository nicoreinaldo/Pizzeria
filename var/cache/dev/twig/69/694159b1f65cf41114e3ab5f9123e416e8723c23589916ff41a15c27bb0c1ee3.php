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
        $__internal_c087ef0ac4f77f512cafbba2121030e61f26d0628893679b65e0fa246feb9621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c087ef0ac4f77f512cafbba2121030e61f26d0628893679b65e0fa246feb9621->enter($__internal_c087ef0ac4f77f512cafbba2121030e61f26d0628893679b65e0fa246feb9621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2aaf92e34f2e9caed2feb2c8c609b5fab757187c07ec067d5275da57796173c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaf92e34f2e9caed2feb2c8c609b5fab757187c07ec067d5275da57796173c4->enter($__internal_2aaf92e34f2e9caed2feb2c8c609b5fab757187c07ec067d5275da57796173c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c087ef0ac4f77f512cafbba2121030e61f26d0628893679b65e0fa246feb9621->leave($__internal_c087ef0ac4f77f512cafbba2121030e61f26d0628893679b65e0fa246feb9621_prof);

        
        $__internal_2aaf92e34f2e9caed2feb2c8c609b5fab757187c07ec067d5275da57796173c4->leave($__internal_2aaf92e34f2e9caed2feb2c8c609b5fab757187c07ec067d5275da57796173c4_prof);

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
