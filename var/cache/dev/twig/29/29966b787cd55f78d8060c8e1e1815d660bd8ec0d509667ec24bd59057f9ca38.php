<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_01ad525e533290e0a7b79fc08a920e672179374ba38738023545376017901fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ad525e533290e0a7b79fc08a920e672179374ba38738023545376017901fe7->enter($__internal_01ad525e533290e0a7b79fc08a920e672179374ba38738023545376017901fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7c9b436c5a2e8d17fcc13e32ed50528dd3d3678ba16cfdebf5b256e2f3297e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9b436c5a2e8d17fcc13e32ed50528dd3d3678ba16cfdebf5b256e2f3297e0d->enter($__internal_7c9b436c5a2e8d17fcc13e32ed50528dd3d3678ba16cfdebf5b256e2f3297e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_01ad525e533290e0a7b79fc08a920e672179374ba38738023545376017901fe7->leave($__internal_01ad525e533290e0a7b79fc08a920e672179374ba38738023545376017901fe7_prof);

        
        $__internal_7c9b436c5a2e8d17fcc13e32ed50528dd3d3678ba16cfdebf5b256e2f3297e0d->leave($__internal_7c9b436c5a2e8d17fcc13e32ed50528dd3d3678ba16cfdebf5b256e2f3297e0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
