<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_386cc72c687c4c373171fe66ee9af7f735eee19f02f6aee58b606f032e4f9d2a extends Twig_Template
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
        $__internal_32c43789ab6c5ad0c5cfdecbb301746b191ac2d106bd254306a00bdedb1dff68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c43789ab6c5ad0c5cfdecbb301746b191ac2d106bd254306a00bdedb1dff68->enter($__internal_32c43789ab6c5ad0c5cfdecbb301746b191ac2d106bd254306a00bdedb1dff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6a42eb124bb9db783abda2985a13fbd492053213019668bac910e73866c724f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a42eb124bb9db783abda2985a13fbd492053213019668bac910e73866c724f3->enter($__internal_6a42eb124bb9db783abda2985a13fbd492053213019668bac910e73866c724f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_32c43789ab6c5ad0c5cfdecbb301746b191ac2d106bd254306a00bdedb1dff68->leave($__internal_32c43789ab6c5ad0c5cfdecbb301746b191ac2d106bd254306a00bdedb1dff68_prof);

        
        $__internal_6a42eb124bb9db783abda2985a13fbd492053213019668bac910e73866c724f3->leave($__internal_6a42eb124bb9db783abda2985a13fbd492053213019668bac910e73866c724f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
