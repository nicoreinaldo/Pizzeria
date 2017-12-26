<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_9eedbfcd4fc600250d7e551d309772b00e6c22a5317693e6e4e457ed8c825c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eedbfcd4fc600250d7e551d309772b00e6c22a5317693e6e4e457ed8c825c2f->enter($__internal_9eedbfcd4fc600250d7e551d309772b00e6c22a5317693e6e4e457ed8c825c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0cf9253485a4ebc0ca108cfa7aa1faa34d7d7f2c682b66fc6a7e128694d61c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf9253485a4ebc0ca108cfa7aa1faa34d7d7f2c682b66fc6a7e128694d61c9a->enter($__internal_0cf9253485a4ebc0ca108cfa7aa1faa34d7d7f2c682b66fc6a7e128694d61c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9eedbfcd4fc600250d7e551d309772b00e6c22a5317693e6e4e457ed8c825c2f->leave($__internal_9eedbfcd4fc600250d7e551d309772b00e6c22a5317693e6e4e457ed8c825c2f_prof);

        
        $__internal_0cf9253485a4ebc0ca108cfa7aa1faa34d7d7f2c682b66fc6a7e128694d61c9a->leave($__internal_0cf9253485a4ebc0ca108cfa7aa1faa34d7d7f2c682b66fc6a7e128694d61c9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
