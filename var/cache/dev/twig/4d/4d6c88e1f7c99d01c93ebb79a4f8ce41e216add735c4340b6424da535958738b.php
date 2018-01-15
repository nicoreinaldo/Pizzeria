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
        $__internal_3ba0d9a2618b0f5b6b0b6a2f84bc0adf84458e931e6facacc12a7e2e9952dd97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba0d9a2618b0f5b6b0b6a2f84bc0adf84458e931e6facacc12a7e2e9952dd97->enter($__internal_3ba0d9a2618b0f5b6b0b6a2f84bc0adf84458e931e6facacc12a7e2e9952dd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_04ffdebbd90ad70ef3ccfeea01e9c229ca1f49af6acf23f97e6be6354152a662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ffdebbd90ad70ef3ccfeea01e9c229ca1f49af6acf23f97e6be6354152a662->enter($__internal_04ffdebbd90ad70ef3ccfeea01e9c229ca1f49af6acf23f97e6be6354152a662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3ba0d9a2618b0f5b6b0b6a2f84bc0adf84458e931e6facacc12a7e2e9952dd97->leave($__internal_3ba0d9a2618b0f5b6b0b6a2f84bc0adf84458e931e6facacc12a7e2e9952dd97_prof);

        
        $__internal_04ffdebbd90ad70ef3ccfeea01e9c229ca1f49af6acf23f97e6be6354152a662->leave($__internal_04ffdebbd90ad70ef3ccfeea01e9c229ca1f49af6acf23f97e6be6354152a662_prof);

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
