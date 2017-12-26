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
        $__internal_fa4f08d4dc5ff895dfcd2361bb1addda2136dc27ca6ccd36446df72fd10ace8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4f08d4dc5ff895dfcd2361bb1addda2136dc27ca6ccd36446df72fd10ace8b->enter($__internal_fa4f08d4dc5ff895dfcd2361bb1addda2136dc27ca6ccd36446df72fd10ace8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_877befd815284e7efa5d59575c91e61d70d35399f711b2a4c317090328e509e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877befd815284e7efa5d59575c91e61d70d35399f711b2a4c317090328e509e4->enter($__internal_877befd815284e7efa5d59575c91e61d70d35399f711b2a4c317090328e509e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fa4f08d4dc5ff895dfcd2361bb1addda2136dc27ca6ccd36446df72fd10ace8b->leave($__internal_fa4f08d4dc5ff895dfcd2361bb1addda2136dc27ca6ccd36446df72fd10ace8b_prof);

        
        $__internal_877befd815284e7efa5d59575c91e61d70d35399f711b2a4c317090328e509e4->leave($__internal_877befd815284e7efa5d59575c91e61d70d35399f711b2a4c317090328e509e4_prof);

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
