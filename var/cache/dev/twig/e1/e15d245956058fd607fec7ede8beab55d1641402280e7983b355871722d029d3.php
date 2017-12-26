<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_57a77df7e7c79a89a3cbd49a03940414a35e9f3f586533bd4e527bb2b3e34da4 extends Twig_Template
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
        $__internal_8bbb63bca44490d33076f3cc636c6323745ce39a4ffb97c68dbab5126fa6c525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbb63bca44490d33076f3cc636c6323745ce39a4ffb97c68dbab5126fa6c525->enter($__internal_8bbb63bca44490d33076f3cc636c6323745ce39a4ffb97c68dbab5126fa6c525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_34d8ab82b0308e0c982037cc5c26601c88e73e63face172f0f96c57414e2c053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d8ab82b0308e0c982037cc5c26601c88e73e63face172f0f96c57414e2c053->enter($__internal_34d8ab82b0308e0c982037cc5c26601c88e73e63face172f0f96c57414e2c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8bbb63bca44490d33076f3cc636c6323745ce39a4ffb97c68dbab5126fa6c525->leave($__internal_8bbb63bca44490d33076f3cc636c6323745ce39a4ffb97c68dbab5126fa6c525_prof);

        
        $__internal_34d8ab82b0308e0c982037cc5c26601c88e73e63face172f0f96c57414e2c053->leave($__internal_34d8ab82b0308e0c982037cc5c26601c88e73e63face172f0f96c57414e2c053_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
