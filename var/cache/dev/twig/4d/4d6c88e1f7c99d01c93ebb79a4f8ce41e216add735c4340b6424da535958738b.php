<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9dbd3650e5810d07e7a0ab64e3ec70f30bbb18239e8009425860cf6d178bd99 extends Twig_Template
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
        $__internal_2e827f57b9d2e58f47f8d810563c9d7d28ecf21b571679c9e84d83cba2bf4f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e827f57b9d2e58f47f8d810563c9d7d28ecf21b571679c9e84d83cba2bf4f40->enter($__internal_2e827f57b9d2e58f47f8d810563c9d7d28ecf21b571679c9e84d83cba2bf4f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_dea9f11f2182850a946799204b0c586b64e67e8df75ca279417797adb9b4728c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea9f11f2182850a946799204b0c586b64e67e8df75ca279417797adb9b4728c->enter($__internal_dea9f11f2182850a946799204b0c586b64e67e8df75ca279417797adb9b4728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2e827f57b9d2e58f47f8d810563c9d7d28ecf21b571679c9e84d83cba2bf4f40->leave($__internal_2e827f57b9d2e58f47f8d810563c9d7d28ecf21b571679c9e84d83cba2bf4f40_prof);

        
        $__internal_dea9f11f2182850a946799204b0c586b64e67e8df75ca279417797adb9b4728c->leave($__internal_dea9f11f2182850a946799204b0c586b64e67e8df75ca279417797adb9b4728c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
