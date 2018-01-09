<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a95b692defe8fe2e428dc4d6f362207f3e9b0c425e16f79fa17f27f9baf7ba4b extends Twig_Template
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
        $__internal_20ba25e665cb27432d91757cf37cc8b574bd4f51d13747d812ac83a9f6f7e468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ba25e665cb27432d91757cf37cc8b574bd4f51d13747d812ac83a9f6f7e468->enter($__internal_20ba25e665cb27432d91757cf37cc8b574bd4f51d13747d812ac83a9f6f7e468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cf18861fa700ff4be2534f860932d3070e9a3931113891b2b8d2f5e5ec3f8163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf18861fa700ff4be2534f860932d3070e9a3931113891b2b8d2f5e5ec3f8163->enter($__internal_cf18861fa700ff4be2534f860932d3070e9a3931113891b2b8d2f5e5ec3f8163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_20ba25e665cb27432d91757cf37cc8b574bd4f51d13747d812ac83a9f6f7e468->leave($__internal_20ba25e665cb27432d91757cf37cc8b574bd4f51d13747d812ac83a9f6f7e468_prof);

        
        $__internal_cf18861fa700ff4be2534f860932d3070e9a3931113891b2b8d2f5e5ec3f8163->leave($__internal_cf18861fa700ff4be2534f860932d3070e9a3931113891b2b8d2f5e5ec3f8163_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
