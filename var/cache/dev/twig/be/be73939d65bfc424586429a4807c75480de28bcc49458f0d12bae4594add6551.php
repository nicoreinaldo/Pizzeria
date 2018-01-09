<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b19e001c1f869eb108a59fbe4576733ab876581284427a92ed847b4e1e61ea71 extends Twig_Template
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
        $__internal_c5bb20d391b7e9b85b9431cbace3888157b894648ed56a4e45638fbd90005977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bb20d391b7e9b85b9431cbace3888157b894648ed56a4e45638fbd90005977->enter($__internal_c5bb20d391b7e9b85b9431cbace3888157b894648ed56a4e45638fbd90005977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b2a46d70365618622192f9c54cc4042719c03249f8215f2586b6f71be5174a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a46d70365618622192f9c54cc4042719c03249f8215f2586b6f71be5174a64->enter($__internal_b2a46d70365618622192f9c54cc4042719c03249f8215f2586b6f71be5174a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c5bb20d391b7e9b85b9431cbace3888157b894648ed56a4e45638fbd90005977->leave($__internal_c5bb20d391b7e9b85b9431cbace3888157b894648ed56a4e45638fbd90005977_prof);

        
        $__internal_b2a46d70365618622192f9c54cc4042719c03249f8215f2586b6f71be5174a64->leave($__internal_b2a46d70365618622192f9c54cc4042719c03249f8215f2586b6f71be5174a64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
