<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a95b692defe8fe2e428dc4d6f362207f3e9b0c425e16f79fa17f27f9baf7ba4b extends Twig_Template
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
        $__internal_6e07df108ca2039930c87ddd602ac66381c83cbd373a628954ccf3b67828fe14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e07df108ca2039930c87ddd602ac66381c83cbd373a628954ccf3b67828fe14->enter($__internal_6e07df108ca2039930c87ddd602ac66381c83cbd373a628954ccf3b67828fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a6940f2a808e95ed375259c0caa5de2e0a885f4930adc7c9b9f5d560f6bfd1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6940f2a808e95ed375259c0caa5de2e0a885f4930adc7c9b9f5d560f6bfd1b1->enter($__internal_a6940f2a808e95ed375259c0caa5de2e0a885f4930adc7c9b9f5d560f6bfd1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6e07df108ca2039930c87ddd602ac66381c83cbd373a628954ccf3b67828fe14->leave($__internal_6e07df108ca2039930c87ddd602ac66381c83cbd373a628954ccf3b67828fe14_prof);

        
        $__internal_a6940f2a808e95ed375259c0caa5de2e0a885f4930adc7c9b9f5d560f6bfd1b1->leave($__internal_a6940f2a808e95ed375259c0caa5de2e0a885f4930adc7c9b9f5d560f6bfd1b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
