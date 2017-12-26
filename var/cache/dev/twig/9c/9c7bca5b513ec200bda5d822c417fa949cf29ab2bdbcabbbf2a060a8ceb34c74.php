<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_1f5feeb4a13e8c2c64f9aff139b5805240cbab08164b9863dc1ba47f5dff1ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5feeb4a13e8c2c64f9aff139b5805240cbab08164b9863dc1ba47f5dff1ec3->enter($__internal_1f5feeb4a13e8c2c64f9aff139b5805240cbab08164b9863dc1ba47f5dff1ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5e95b63ccbfa65975cc8e72a5d6973e37ce6166d35010ecd9f6047fd0674b87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e95b63ccbfa65975cc8e72a5d6973e37ce6166d35010ecd9f6047fd0674b87b->enter($__internal_5e95b63ccbfa65975cc8e72a5d6973e37ce6166d35010ecd9f6047fd0674b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1f5feeb4a13e8c2c64f9aff139b5805240cbab08164b9863dc1ba47f5dff1ec3->leave($__internal_1f5feeb4a13e8c2c64f9aff139b5805240cbab08164b9863dc1ba47f5dff1ec3_prof);

        
        $__internal_5e95b63ccbfa65975cc8e72a5d6973e37ce6166d35010ecd9f6047fd0674b87b->leave($__internal_5e95b63ccbfa65975cc8e72a5d6973e37ce6166d35010ecd9f6047fd0674b87b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
