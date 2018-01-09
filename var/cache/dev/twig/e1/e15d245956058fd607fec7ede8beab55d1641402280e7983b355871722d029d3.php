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
        $__internal_a253f77090edc3d4c96b94682bce8877fe284968a0b854c81bf90a300ff658bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a253f77090edc3d4c96b94682bce8877fe284968a0b854c81bf90a300ff658bf->enter($__internal_a253f77090edc3d4c96b94682bce8877fe284968a0b854c81bf90a300ff658bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4da160381e66f364e5d2d3a593c7f15311013aca84796ccb0716c6f22793733a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da160381e66f364e5d2d3a593c7f15311013aca84796ccb0716c6f22793733a->enter($__internal_4da160381e66f364e5d2d3a593c7f15311013aca84796ccb0716c6f22793733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a253f77090edc3d4c96b94682bce8877fe284968a0b854c81bf90a300ff658bf->leave($__internal_a253f77090edc3d4c96b94682bce8877fe284968a0b854c81bf90a300ff658bf_prof);

        
        $__internal_4da160381e66f364e5d2d3a593c7f15311013aca84796ccb0716c6f22793733a->leave($__internal_4da160381e66f364e5d2d3a593c7f15311013aca84796ccb0716c6f22793733a_prof);

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
