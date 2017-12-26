<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b6f233a35f9c63cbe07b00cd70fc07e26001ead1657a2ab7efdda353f49b7658 extends Twig_Template
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
        $__internal_63fef0c81f043d52f23f233cf3bd827ad612a35ba1da2b11481eedf3b3da9ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fef0c81f043d52f23f233cf3bd827ad612a35ba1da2b11481eedf3b3da9ba6->enter($__internal_63fef0c81f043d52f23f233cf3bd827ad612a35ba1da2b11481eedf3b3da9ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3baf7bf1cbe412e60e20ab511afb3ceb2be1535fd2e48bbef9c076d21beb30fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baf7bf1cbe412e60e20ab511afb3ceb2be1535fd2e48bbef9c076d21beb30fd->enter($__internal_3baf7bf1cbe412e60e20ab511afb3ceb2be1535fd2e48bbef9c076d21beb30fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_63fef0c81f043d52f23f233cf3bd827ad612a35ba1da2b11481eedf3b3da9ba6->leave($__internal_63fef0c81f043d52f23f233cf3bd827ad612a35ba1da2b11481eedf3b3da9ba6_prof);

        
        $__internal_3baf7bf1cbe412e60e20ab511afb3ceb2be1535fd2e48bbef9c076d21beb30fd->leave($__internal_3baf7bf1cbe412e60e20ab511afb3ceb2be1535fd2e48bbef9c076d21beb30fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
