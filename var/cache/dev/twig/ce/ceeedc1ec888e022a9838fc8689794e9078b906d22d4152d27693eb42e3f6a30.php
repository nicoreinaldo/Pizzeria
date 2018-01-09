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
        $__internal_fe34858a5b677cc90c7d276639ef51091b9c10ad371e57449919c7b4c4be6a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe34858a5b677cc90c7d276639ef51091b9c10ad371e57449919c7b4c4be6a93->enter($__internal_fe34858a5b677cc90c7d276639ef51091b9c10ad371e57449919c7b4c4be6a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6b0ce5a2489cb697b95852a45f9931388dc17085135e0e7c6038791a13a48a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0ce5a2489cb697b95852a45f9931388dc17085135e0e7c6038791a13a48a8a->enter($__internal_6b0ce5a2489cb697b95852a45f9931388dc17085135e0e7c6038791a13a48a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fe34858a5b677cc90c7d276639ef51091b9c10ad371e57449919c7b4c4be6a93->leave($__internal_fe34858a5b677cc90c7d276639ef51091b9c10ad371e57449919c7b4c4be6a93_prof);

        
        $__internal_6b0ce5a2489cb697b95852a45f9931388dc17085135e0e7c6038791a13a48a8a->leave($__internal_6b0ce5a2489cb697b95852a45f9931388dc17085135e0e7c6038791a13a48a8a_prof);

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
