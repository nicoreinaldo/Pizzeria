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
        $__internal_0d40f886cbb7bc26d2754a99e2e19683850a513f021e353f03e30cc386640977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d40f886cbb7bc26d2754a99e2e19683850a513f021e353f03e30cc386640977->enter($__internal_0d40f886cbb7bc26d2754a99e2e19683850a513f021e353f03e30cc386640977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_899a054b6e9c4ccd5eeeffcafc3c458d1b9672d97f4d9971a73a937f2a877ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899a054b6e9c4ccd5eeeffcafc3c458d1b9672d97f4d9971a73a937f2a877ffb->enter($__internal_899a054b6e9c4ccd5eeeffcafc3c458d1b9672d97f4d9971a73a937f2a877ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0d40f886cbb7bc26d2754a99e2e19683850a513f021e353f03e30cc386640977->leave($__internal_0d40f886cbb7bc26d2754a99e2e19683850a513f021e353f03e30cc386640977_prof);

        
        $__internal_899a054b6e9c4ccd5eeeffcafc3c458d1b9672d97f4d9971a73a937f2a877ffb->leave($__internal_899a054b6e9c4ccd5eeeffcafc3c458d1b9672d97f4d9971a73a937f2a877ffb_prof);

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
