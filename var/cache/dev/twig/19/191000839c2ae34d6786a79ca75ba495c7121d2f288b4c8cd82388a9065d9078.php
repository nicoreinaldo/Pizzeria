<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_8e9cdfba75373e39cc5645830dc030bc41d77778f092f48c91abb9a4f134ba88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9cdfba75373e39cc5645830dc030bc41d77778f092f48c91abb9a4f134ba88->enter($__internal_8e9cdfba75373e39cc5645830dc030bc41d77778f092f48c91abb9a4f134ba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6ba959cea67d9b8d77b8b82d0e3b1a535ef085324a840b3a5c897523c0b1ab28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba959cea67d9b8d77b8b82d0e3b1a535ef085324a840b3a5c897523c0b1ab28->enter($__internal_6ba959cea67d9b8d77b8b82d0e3b1a535ef085324a840b3a5c897523c0b1ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8e9cdfba75373e39cc5645830dc030bc41d77778f092f48c91abb9a4f134ba88->leave($__internal_8e9cdfba75373e39cc5645830dc030bc41d77778f092f48c91abb9a4f134ba88_prof);

        
        $__internal_6ba959cea67d9b8d77b8b82d0e3b1a535ef085324a840b3a5c897523c0b1ab28->leave($__internal_6ba959cea67d9b8d77b8b82d0e3b1a535ef085324a840b3a5c897523c0b1ab28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
