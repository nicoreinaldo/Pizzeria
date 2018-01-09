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
        $__internal_42c0ad2bb01b88af8a5f4fb63592ca62e2b39200f91307d7f5d3f9faf00fe9ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c0ad2bb01b88af8a5f4fb63592ca62e2b39200f91307d7f5d3f9faf00fe9ef->enter($__internal_42c0ad2bb01b88af8a5f4fb63592ca62e2b39200f91307d7f5d3f9faf00fe9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e5eaedcf656d261327ccba24afce0a96724d8d13f814a15245af5871d31498a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5eaedcf656d261327ccba24afce0a96724d8d13f814a15245af5871d31498a5->enter($__internal_e5eaedcf656d261327ccba24afce0a96724d8d13f814a15245af5871d31498a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_42c0ad2bb01b88af8a5f4fb63592ca62e2b39200f91307d7f5d3f9faf00fe9ef->leave($__internal_42c0ad2bb01b88af8a5f4fb63592ca62e2b39200f91307d7f5d3f9faf00fe9ef_prof);

        
        $__internal_e5eaedcf656d261327ccba24afce0a96724d8d13f814a15245af5871d31498a5->leave($__internal_e5eaedcf656d261327ccba24afce0a96724d8d13f814a15245af5871d31498a5_prof);

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
