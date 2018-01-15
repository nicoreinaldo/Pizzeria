<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_7956e569744339a499333ebd86ee807ce021b5a69ffa1a228a0e384143b06706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7956e569744339a499333ebd86ee807ce021b5a69ffa1a228a0e384143b06706->enter($__internal_7956e569744339a499333ebd86ee807ce021b5a69ffa1a228a0e384143b06706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_513fbc595b34a7a593633b9c21597052bbd95d23b3f1f91bc34a58c893707e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513fbc595b34a7a593633b9c21597052bbd95d23b3f1f91bc34a58c893707e1b->enter($__internal_513fbc595b34a7a593633b9c21597052bbd95d23b3f1f91bc34a58c893707e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7956e569744339a499333ebd86ee807ce021b5a69ffa1a228a0e384143b06706->leave($__internal_7956e569744339a499333ebd86ee807ce021b5a69ffa1a228a0e384143b06706_prof);

        
        $__internal_513fbc595b34a7a593633b9c21597052bbd95d23b3f1f91bc34a58c893707e1b->leave($__internal_513fbc595b34a7a593633b9c21597052bbd95d23b3f1f91bc34a58c893707e1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
