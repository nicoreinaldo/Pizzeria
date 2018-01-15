<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_84bc7b0f03a27f09a0fca532655157175ca0cbc57235333d18a4aa478cbae808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bc7b0f03a27f09a0fca532655157175ca0cbc57235333d18a4aa478cbae808->enter($__internal_84bc7b0f03a27f09a0fca532655157175ca0cbc57235333d18a4aa478cbae808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1e21a2e68794425e282a793a68b16a5e605ee5ceb39d24e8259b1bf4d2964af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e21a2e68794425e282a793a68b16a5e605ee5ceb39d24e8259b1bf4d2964af0->enter($__internal_1e21a2e68794425e282a793a68b16a5e605ee5ceb39d24e8259b1bf4d2964af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_84bc7b0f03a27f09a0fca532655157175ca0cbc57235333d18a4aa478cbae808->leave($__internal_84bc7b0f03a27f09a0fca532655157175ca0cbc57235333d18a4aa478cbae808_prof);

        
        $__internal_1e21a2e68794425e282a793a68b16a5e605ee5ceb39d24e8259b1bf4d2964af0->leave($__internal_1e21a2e68794425e282a793a68b16a5e605ee5ceb39d24e8259b1bf4d2964af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
