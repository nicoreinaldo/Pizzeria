<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_2e43785aaf1d3ea48fa22e34cf69dad6e96d2bf2d01efd5c8b5b7fd5202312c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e43785aaf1d3ea48fa22e34cf69dad6e96d2bf2d01efd5c8b5b7fd5202312c2->enter($__internal_2e43785aaf1d3ea48fa22e34cf69dad6e96d2bf2d01efd5c8b5b7fd5202312c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2915932670456f39551fad5196183138d03e404beb5d019cc4fe388208104d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2915932670456f39551fad5196183138d03e404beb5d019cc4fe388208104d99->enter($__internal_2915932670456f39551fad5196183138d03e404beb5d019cc4fe388208104d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2e43785aaf1d3ea48fa22e34cf69dad6e96d2bf2d01efd5c8b5b7fd5202312c2->leave($__internal_2e43785aaf1d3ea48fa22e34cf69dad6e96d2bf2d01efd5c8b5b7fd5202312c2_prof);

        
        $__internal_2915932670456f39551fad5196183138d03e404beb5d019cc4fe388208104d99->leave($__internal_2915932670456f39551fad5196183138d03e404beb5d019cc4fe388208104d99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
