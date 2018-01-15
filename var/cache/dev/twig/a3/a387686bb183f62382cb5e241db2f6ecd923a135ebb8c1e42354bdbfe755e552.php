<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_03b76b6584a3d50ff3f377a4c90d73bb6df23ed2279a420e810df9dd78e64e9d extends Twig_Template
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
        $__internal_4ad5fcf46b726926d5aada0ddc6ef52c696edd6acca0cfa1a441574555da6f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad5fcf46b726926d5aada0ddc6ef52c696edd6acca0cfa1a441574555da6f03->enter($__internal_4ad5fcf46b726926d5aada0ddc6ef52c696edd6acca0cfa1a441574555da6f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0136303ce2c2ea33c2c7deb979d88449403c4b25f13d5b3ae6376fd765386c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0136303ce2c2ea33c2c7deb979d88449403c4b25f13d5b3ae6376fd765386c5c->enter($__internal_0136303ce2c2ea33c2c7deb979d88449403c4b25f13d5b3ae6376fd765386c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4ad5fcf46b726926d5aada0ddc6ef52c696edd6acca0cfa1a441574555da6f03->leave($__internal_4ad5fcf46b726926d5aada0ddc6ef52c696edd6acca0cfa1a441574555da6f03_prof);

        
        $__internal_0136303ce2c2ea33c2c7deb979d88449403c4b25f13d5b3ae6376fd765386c5c->leave($__internal_0136303ce2c2ea33c2c7deb979d88449403c4b25f13d5b3ae6376fd765386c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
