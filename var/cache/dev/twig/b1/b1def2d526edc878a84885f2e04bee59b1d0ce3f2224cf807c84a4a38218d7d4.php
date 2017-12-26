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
        $__internal_6fd6161cae46df6441c58d3964b0dc05b48d58f54ef2053fd268a32c7a4f3fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd6161cae46df6441c58d3964b0dc05b48d58f54ef2053fd268a32c7a4f3fcc->enter($__internal_6fd6161cae46df6441c58d3964b0dc05b48d58f54ef2053fd268a32c7a4f3fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5206342c05783ce892050f99c447c1c76b9744a418c8a09fa70a68878272a4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5206342c05783ce892050f99c447c1c76b9744a418c8a09fa70a68878272a4a6->enter($__internal_5206342c05783ce892050f99c447c1c76b9744a418c8a09fa70a68878272a4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6fd6161cae46df6441c58d3964b0dc05b48d58f54ef2053fd268a32c7a4f3fcc->leave($__internal_6fd6161cae46df6441c58d3964b0dc05b48d58f54ef2053fd268a32c7a4f3fcc_prof);

        
        $__internal_5206342c05783ce892050f99c447c1c76b9744a418c8a09fa70a68878272a4a6->leave($__internal_5206342c05783ce892050f99c447c1c76b9744a418c8a09fa70a68878272a4a6_prof);

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
