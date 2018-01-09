<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_0f2cd9b7243b13bb83e3c7e0b689f3f77a69e1d883ac7b02b9844937875dca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2cd9b7243b13bb83e3c7e0b689f3f77a69e1d883ac7b02b9844937875dca4a->enter($__internal_0f2cd9b7243b13bb83e3c7e0b689f3f77a69e1d883ac7b02b9844937875dca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e615842ce9828828d29172297a7ce72e43000ff6f803346c2d858e9b520fee95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e615842ce9828828d29172297a7ce72e43000ff6f803346c2d858e9b520fee95->enter($__internal_e615842ce9828828d29172297a7ce72e43000ff6f803346c2d858e9b520fee95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0f2cd9b7243b13bb83e3c7e0b689f3f77a69e1d883ac7b02b9844937875dca4a->leave($__internal_0f2cd9b7243b13bb83e3c7e0b689f3f77a69e1d883ac7b02b9844937875dca4a_prof);

        
        $__internal_e615842ce9828828d29172297a7ce72e43000ff6f803346c2d858e9b520fee95->leave($__internal_e615842ce9828828d29172297a7ce72e43000ff6f803346c2d858e9b520fee95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
