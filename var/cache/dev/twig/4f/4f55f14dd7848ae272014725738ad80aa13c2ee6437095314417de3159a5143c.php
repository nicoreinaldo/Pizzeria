<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_a47abd167a5c983158ec8c8f34df3a619b0cfd7440fbac0db98713c4e7731e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47abd167a5c983158ec8c8f34df3a619b0cfd7440fbac0db98713c4e7731e66->enter($__internal_a47abd167a5c983158ec8c8f34df3a619b0cfd7440fbac0db98713c4e7731e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a6218e1eca77196d95e91402cc03b20d9830a96e0a40147858d1b3f1c1acce23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6218e1eca77196d95e91402cc03b20d9830a96e0a40147858d1b3f1c1acce23->enter($__internal_a6218e1eca77196d95e91402cc03b20d9830a96e0a40147858d1b3f1c1acce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a47abd167a5c983158ec8c8f34df3a619b0cfd7440fbac0db98713c4e7731e66->leave($__internal_a47abd167a5c983158ec8c8f34df3a619b0cfd7440fbac0db98713c4e7731e66_prof);

        
        $__internal_a6218e1eca77196d95e91402cc03b20d9830a96e0a40147858d1b3f1c1acce23->leave($__internal_a6218e1eca77196d95e91402cc03b20d9830a96e0a40147858d1b3f1c1acce23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
