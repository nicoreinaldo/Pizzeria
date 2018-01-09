<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_de1f83915245ea5f5a9a9fb389fd8fd9a202b2fb3c2a32963b682712def732dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1f83915245ea5f5a9a9fb389fd8fd9a202b2fb3c2a32963b682712def732dc->enter($__internal_de1f83915245ea5f5a9a9fb389fd8fd9a202b2fb3c2a32963b682712def732dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1d87b8c061858a98b30a49f1a5daa5d9d265dfb1783d84102dd32a7c2025516f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d87b8c061858a98b30a49f1a5daa5d9d265dfb1783d84102dd32a7c2025516f->enter($__internal_1d87b8c061858a98b30a49f1a5daa5d9d265dfb1783d84102dd32a7c2025516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_de1f83915245ea5f5a9a9fb389fd8fd9a202b2fb3c2a32963b682712def732dc->leave($__internal_de1f83915245ea5f5a9a9fb389fd8fd9a202b2fb3c2a32963b682712def732dc_prof);

        
        $__internal_1d87b8c061858a98b30a49f1a5daa5d9d265dfb1783d84102dd32a7c2025516f->leave($__internal_1d87b8c061858a98b30a49f1a5daa5d9d265dfb1783d84102dd32a7c2025516f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
