<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_253d067c697746b17820ed08127d8b9e4710ee9e526ca9fe064aa1323e12da40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253d067c697746b17820ed08127d8b9e4710ee9e526ca9fe064aa1323e12da40->enter($__internal_253d067c697746b17820ed08127d8b9e4710ee9e526ca9fe064aa1323e12da40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fb904d3b54a3b61d75f04d4dd682076d4cb77aa9c1176214ce31ce3024d6056a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb904d3b54a3b61d75f04d4dd682076d4cb77aa9c1176214ce31ce3024d6056a->enter($__internal_fb904d3b54a3b61d75f04d4dd682076d4cb77aa9c1176214ce31ce3024d6056a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_253d067c697746b17820ed08127d8b9e4710ee9e526ca9fe064aa1323e12da40->leave($__internal_253d067c697746b17820ed08127d8b9e4710ee9e526ca9fe064aa1323e12da40_prof);

        
        $__internal_fb904d3b54a3b61d75f04d4dd682076d4cb77aa9c1176214ce31ce3024d6056a->leave($__internal_fb904d3b54a3b61d75f04d4dd682076d4cb77aa9c1176214ce31ce3024d6056a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
