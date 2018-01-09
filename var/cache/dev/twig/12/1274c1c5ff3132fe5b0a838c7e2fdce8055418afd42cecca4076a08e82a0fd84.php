<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_2126892895d177b323822a8a3edb4b0dd30452624588778375c8841ad805171c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2126892895d177b323822a8a3edb4b0dd30452624588778375c8841ad805171c->enter($__internal_2126892895d177b323822a8a3edb4b0dd30452624588778375c8841ad805171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_904011aa281972037c4cc7ff10cce0cc92b3a4edd23c426488d3fa716d269d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904011aa281972037c4cc7ff10cce0cc92b3a4edd23c426488d3fa716d269d7a->enter($__internal_904011aa281972037c4cc7ff10cce0cc92b3a4edd23c426488d3fa716d269d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2126892895d177b323822a8a3edb4b0dd30452624588778375c8841ad805171c->leave($__internal_2126892895d177b323822a8a3edb4b0dd30452624588778375c8841ad805171c_prof);

        
        $__internal_904011aa281972037c4cc7ff10cce0cc92b3a4edd23c426488d3fa716d269d7a->leave($__internal_904011aa281972037c4cc7ff10cce0cc92b3a4edd23c426488d3fa716d269d7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
