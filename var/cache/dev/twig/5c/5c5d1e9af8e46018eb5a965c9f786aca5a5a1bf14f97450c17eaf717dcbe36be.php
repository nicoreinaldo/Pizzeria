<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3dac9b7a7409bed7d30a03d5c40b31143f041c0a5ac8e16cdf1d670dacd9efff extends Twig_Template
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
        $__internal_809edc4e50db44ba6c628ba7f5dcf8cf14713f59333ef4cd5729a73a467e93d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809edc4e50db44ba6c628ba7f5dcf8cf14713f59333ef4cd5729a73a467e93d0->enter($__internal_809edc4e50db44ba6c628ba7f5dcf8cf14713f59333ef4cd5729a73a467e93d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1c4af6fa7ef3c60cc6ccbbd627f2a192942cbc3c876e1e74a8cf612cdd97a08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4af6fa7ef3c60cc6ccbbd627f2a192942cbc3c876e1e74a8cf612cdd97a08a->enter($__internal_1c4af6fa7ef3c60cc6ccbbd627f2a192942cbc3c876e1e74a8cf612cdd97a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_809edc4e50db44ba6c628ba7f5dcf8cf14713f59333ef4cd5729a73a467e93d0->leave($__internal_809edc4e50db44ba6c628ba7f5dcf8cf14713f59333ef4cd5729a73a467e93d0_prof);

        
        $__internal_1c4af6fa7ef3c60cc6ccbbd627f2a192942cbc3c876e1e74a8cf612cdd97a08a->leave($__internal_1c4af6fa7ef3c60cc6ccbbd627f2a192942cbc3c876e1e74a8cf612cdd97a08a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
