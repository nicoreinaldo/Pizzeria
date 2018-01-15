<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_d627792c1dfc512d1d2fcc5b7ac610cff4eeba3159ae0855221caefe93c1c272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d627792c1dfc512d1d2fcc5b7ac610cff4eeba3159ae0855221caefe93c1c272->enter($__internal_d627792c1dfc512d1d2fcc5b7ac610cff4eeba3159ae0855221caefe93c1c272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3e91b9f0d1f83474afe8d3652e4594ee9f45a10cda3a1c7c0a74be467b23a79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e91b9f0d1f83474afe8d3652e4594ee9f45a10cda3a1c7c0a74be467b23a79f->enter($__internal_3e91b9f0d1f83474afe8d3652e4594ee9f45a10cda3a1c7c0a74be467b23a79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d627792c1dfc512d1d2fcc5b7ac610cff4eeba3159ae0855221caefe93c1c272->leave($__internal_d627792c1dfc512d1d2fcc5b7ac610cff4eeba3159ae0855221caefe93c1c272_prof);

        
        $__internal_3e91b9f0d1f83474afe8d3652e4594ee9f45a10cda3a1c7c0a74be467b23a79f->leave($__internal_3e91b9f0d1f83474afe8d3652e4594ee9f45a10cda3a1c7c0a74be467b23a79f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
