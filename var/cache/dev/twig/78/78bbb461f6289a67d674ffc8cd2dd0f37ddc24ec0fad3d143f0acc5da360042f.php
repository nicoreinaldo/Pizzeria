<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ab5e1d0a47b638fa05a6884a541cbd01a7a9d38dac65acb5a71846b6de0045fc extends Twig_Template
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
        $__internal_d9cf38a7c01ffe1b6991217f99aaacd23e9369f4129ff78b02646b081d050029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cf38a7c01ffe1b6991217f99aaacd23e9369f4129ff78b02646b081d050029->enter($__internal_d9cf38a7c01ffe1b6991217f99aaacd23e9369f4129ff78b02646b081d050029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5187d0bff7375ba33454f20875f5695eb37743e5bcf4d025ff7519f8a6bba9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5187d0bff7375ba33454f20875f5695eb37743e5bcf4d025ff7519f8a6bba9f0->enter($__internal_5187d0bff7375ba33454f20875f5695eb37743e5bcf4d025ff7519f8a6bba9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d9cf38a7c01ffe1b6991217f99aaacd23e9369f4129ff78b02646b081d050029->leave($__internal_d9cf38a7c01ffe1b6991217f99aaacd23e9369f4129ff78b02646b081d050029_prof);

        
        $__internal_5187d0bff7375ba33454f20875f5695eb37743e5bcf4d025ff7519f8a6bba9f0->leave($__internal_5187d0bff7375ba33454f20875f5695eb37743e5bcf4d025ff7519f8a6bba9f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
