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
        $__internal_6b0ef463d00c31918765f3d40d2c85ad0160d9718e62fa1a50524c8b50fc4e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0ef463d00c31918765f3d40d2c85ad0160d9718e62fa1a50524c8b50fc4e24->enter($__internal_6b0ef463d00c31918765f3d40d2c85ad0160d9718e62fa1a50524c8b50fc4e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3885782df5e826c23adbfe6cdc7189772a32370b10d62180f4efef3d23bbbf0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3885782df5e826c23adbfe6cdc7189772a32370b10d62180f4efef3d23bbbf0a->enter($__internal_3885782df5e826c23adbfe6cdc7189772a32370b10d62180f4efef3d23bbbf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6b0ef463d00c31918765f3d40d2c85ad0160d9718e62fa1a50524c8b50fc4e24->leave($__internal_6b0ef463d00c31918765f3d40d2c85ad0160d9718e62fa1a50524c8b50fc4e24_prof);

        
        $__internal_3885782df5e826c23adbfe6cdc7189772a32370b10d62180f4efef3d23bbbf0a->leave($__internal_3885782df5e826c23adbfe6cdc7189772a32370b10d62180f4efef3d23bbbf0a_prof);

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
