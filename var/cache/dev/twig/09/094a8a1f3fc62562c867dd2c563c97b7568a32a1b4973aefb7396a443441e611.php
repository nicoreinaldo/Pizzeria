<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c0a50a619372b98dc5ec5c8378e81c3aebfa8516c3277e0dc074be8aff9bc04 extends Twig_Template
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
        $__internal_c0ff16d09c2dc24c03a82c8b816a8ee70c3f32744e4f48697a12ef3f59d292bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ff16d09c2dc24c03a82c8b816a8ee70c3f32744e4f48697a12ef3f59d292bb->enter($__internal_c0ff16d09c2dc24c03a82c8b816a8ee70c3f32744e4f48697a12ef3f59d292bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a82d509287fe4cf78653edc53d8bd3f40d04cf38552d16311892beb938d078ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82d509287fe4cf78653edc53d8bd3f40d04cf38552d16311892beb938d078ca->enter($__internal_a82d509287fe4cf78653edc53d8bd3f40d04cf38552d16311892beb938d078ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c0ff16d09c2dc24c03a82c8b816a8ee70c3f32744e4f48697a12ef3f59d292bb->leave($__internal_c0ff16d09c2dc24c03a82c8b816a8ee70c3f32744e4f48697a12ef3f59d292bb_prof);

        
        $__internal_a82d509287fe4cf78653edc53d8bd3f40d04cf38552d16311892beb938d078ca->leave($__internal_a82d509287fe4cf78653edc53d8bd3f40d04cf38552d16311892beb938d078ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
