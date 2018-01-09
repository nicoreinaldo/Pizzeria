<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_9b4887067d4f2fdae2cc575a16dcdf36a7b4a69b98b3f9032d15e285f0670760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4887067d4f2fdae2cc575a16dcdf36a7b4a69b98b3f9032d15e285f0670760->enter($__internal_9b4887067d4f2fdae2cc575a16dcdf36a7b4a69b98b3f9032d15e285f0670760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4fa864930fe763ee0ff63b3e8be9851fb7aa57a850c9db4d4b2aba88685c4fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa864930fe763ee0ff63b3e8be9851fb7aa57a850c9db4d4b2aba88685c4fa3->enter($__internal_4fa864930fe763ee0ff63b3e8be9851fb7aa57a850c9db4d4b2aba88685c4fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9b4887067d4f2fdae2cc575a16dcdf36a7b4a69b98b3f9032d15e285f0670760->leave($__internal_9b4887067d4f2fdae2cc575a16dcdf36a7b4a69b98b3f9032d15e285f0670760_prof);

        
        $__internal_4fa864930fe763ee0ff63b3e8be9851fb7aa57a850c9db4d4b2aba88685c4fa3->leave($__internal_4fa864930fe763ee0ff63b3e8be9851fb7aa57a850c9db4d4b2aba88685c4fa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
