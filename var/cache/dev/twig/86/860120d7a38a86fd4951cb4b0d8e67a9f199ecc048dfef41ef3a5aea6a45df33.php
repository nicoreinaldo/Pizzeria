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
        $__internal_cde1dd0b46b765051748cf84cf53ebbd6dafa7a1979248ef6f1d248de6decc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde1dd0b46b765051748cf84cf53ebbd6dafa7a1979248ef6f1d248de6decc7a->enter($__internal_cde1dd0b46b765051748cf84cf53ebbd6dafa7a1979248ef6f1d248de6decc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b31e9f0b53d164bc5d5f2c42698107412f44cb2b1b0422e7dd1ddaedf0649a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31e9f0b53d164bc5d5f2c42698107412f44cb2b1b0422e7dd1ddaedf0649a30->enter($__internal_b31e9f0b53d164bc5d5f2c42698107412f44cb2b1b0422e7dd1ddaedf0649a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cde1dd0b46b765051748cf84cf53ebbd6dafa7a1979248ef6f1d248de6decc7a->leave($__internal_cde1dd0b46b765051748cf84cf53ebbd6dafa7a1979248ef6f1d248de6decc7a_prof);

        
        $__internal_b31e9f0b53d164bc5d5f2c42698107412f44cb2b1b0422e7dd1ddaedf0649a30->leave($__internal_b31e9f0b53d164bc5d5f2c42698107412f44cb2b1b0422e7dd1ddaedf0649a30_prof);

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
