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
        $__internal_bd368c505214e15ea6e0b34126f192728655466b905328203f1610dddbc0d222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd368c505214e15ea6e0b34126f192728655466b905328203f1610dddbc0d222->enter($__internal_bd368c505214e15ea6e0b34126f192728655466b905328203f1610dddbc0d222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4a480edbc7b2b758c33fb1408fe8bc9a56a1296f5d5e25f12f84cf1155e42679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a480edbc7b2b758c33fb1408fe8bc9a56a1296f5d5e25f12f84cf1155e42679->enter($__internal_4a480edbc7b2b758c33fb1408fe8bc9a56a1296f5d5e25f12f84cf1155e42679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bd368c505214e15ea6e0b34126f192728655466b905328203f1610dddbc0d222->leave($__internal_bd368c505214e15ea6e0b34126f192728655466b905328203f1610dddbc0d222_prof);

        
        $__internal_4a480edbc7b2b758c33fb1408fe8bc9a56a1296f5d5e25f12f84cf1155e42679->leave($__internal_4a480edbc7b2b758c33fb1408fe8bc9a56a1296f5d5e25f12f84cf1155e42679_prof);

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
