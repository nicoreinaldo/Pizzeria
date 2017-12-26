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
        $__internal_bbeb17607954d80e3e475b524f35d032d05a636a25823f9d46e210328936bb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeb17607954d80e3e475b524f35d032d05a636a25823f9d46e210328936bb3e->enter($__internal_bbeb17607954d80e3e475b524f35d032d05a636a25823f9d46e210328936bb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_54d9200f749e7bfb759fe3d3e9aa72627db6312b5658eb04c9dac3b1e2880bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d9200f749e7bfb759fe3d3e9aa72627db6312b5658eb04c9dac3b1e2880bb4->enter($__internal_54d9200f749e7bfb759fe3d3e9aa72627db6312b5658eb04c9dac3b1e2880bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bbeb17607954d80e3e475b524f35d032d05a636a25823f9d46e210328936bb3e->leave($__internal_bbeb17607954d80e3e475b524f35d032d05a636a25823f9d46e210328936bb3e_prof);

        
        $__internal_54d9200f749e7bfb759fe3d3e9aa72627db6312b5658eb04c9dac3b1e2880bb4->leave($__internal_54d9200f749e7bfb759fe3d3e9aa72627db6312b5658eb04c9dac3b1e2880bb4_prof);

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
