<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_0d1a54c5443615804b2a4e2b9d95c36f6e89b7990f64784f91f870d6b2ac4fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1a54c5443615804b2a4e2b9d95c36f6e89b7990f64784f91f870d6b2ac4fdc->enter($__internal_0d1a54c5443615804b2a4e2b9d95c36f6e89b7990f64784f91f870d6b2ac4fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_717c8afe6ff9651cc841714abc58be450401c44ae9e455bcb2035f6c545afd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717c8afe6ff9651cc841714abc58be450401c44ae9e455bcb2035f6c545afd56->enter($__internal_717c8afe6ff9651cc841714abc58be450401c44ae9e455bcb2035f6c545afd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0d1a54c5443615804b2a4e2b9d95c36f6e89b7990f64784f91f870d6b2ac4fdc->leave($__internal_0d1a54c5443615804b2a4e2b9d95c36f6e89b7990f64784f91f870d6b2ac4fdc_prof);

        
        $__internal_717c8afe6ff9651cc841714abc58be450401c44ae9e455bcb2035f6c545afd56->leave($__internal_717c8afe6ff9651cc841714abc58be450401c44ae9e455bcb2035f6c545afd56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
